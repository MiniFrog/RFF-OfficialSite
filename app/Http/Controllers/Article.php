<?php
/**
 * Created by PhpStorm.
 * User: mtfl1
 * Date: 2017/3/31
 * Time: 23:11
 */
namespace App\Http\Controllers;

use App\ComRepairTrick;
use App\ComReport;
use App\RepairTrick;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Article extends Controller{


    /**
     * 管理员用标题图上传接口
     * 当前使用中间件
     *
     * @param Request $request
     * @return string
     */
    public function uploadSurfacePlot(Request $request){
        $image = $request->file('picture');
        $ext = $image->getClientOriginalExtension();
        $tempFileName = 'pending'.'-'.date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
        $response = new \stdClass();

        try{
            //如果要存到public目录下，这个public一定不能加，what the mother fucker?
            Image::make($image)->resize(300, 200)->save('img/surfacePlot/'.$tempFileName);
        }catch(\Exception $e){
            $response->status = 'failed';
            return json_encode($response);
        }

        $response->state = 'success';
        $response->surfacePlot = $tempFileName;
        return json_encode($response);
    }

    /**
     * 管理员用文章上传
     * 文件命名：
     *      type-id
     *
     * @param Request $request
     * @return string
     */
    public function uploadHtml(Request $request){
        $type = $request->input('type');
        $title = $request->input('title');
        $abstract = $request->input('abstract');
        $content = $request->input('content');
        $surfacePlot = $request->input('surfacePlot');//标题图临时文件名
        $ext = self::getExtend($surfacePlot);
        $response = new \stdClass();

        //我的锅，用了MyISAM，开不了事务了
        //DB::beginTransaction();//开启事务
        try{
            //文章索引存放至数据库
            if($type == 'repairSkill'){
                $ormObj = new RepairTrick();
            }elseif($type == 'report'){
                $ormObj = new Report();
            }/*elseif($type = 'share'){
            $DB = new Chapter();
        }*/
            $ormObj->title = $title;
            $ormObj->abstract = $abstract;
            $ormObj->save();

            $id = $ormObj->id;//获取文章索引插入数据表后的id

            Storage::disk('uploadHtml')->put($type.'-'.$id,$content);//文章内容存放至磁盘
            rename('img/surfacePlot/'.$surfacePlot,'img/surfacePlot/'.$type.'-'.$id.'.'.$ext);//标题图重命名
        }catch(\Exception $e) {
            //DB::rollBack();//回滚数据库
            $response->status = 'fail';
            return json_encode($response);
        }

        $response->state = 'success';
        return json_encode($response);
    }

    /**
     * 文章的更新
     *
     * @param Request $request
     * @return string
     */
    public function updateHtml(Request $request){
        $type = $request->input('type');
        $id = $request->input('id');
        $title = $request->input('title');
        $abstract = $request->input('abstract');
        $content = $request->input('content');

        if($request->has('surfacePlot')){
            $newSurfacePlot = true;
            $surfacePlot = $request->input('surfacePlot');//标题图临时文件名
            $ext = self::getExtend($surfacePlot);
        }else{
            $newSurfacePlot = false;
        }

        $response = new \stdClass();

        //我的锅，用了MyISAM，开不了事务了
        //DB::beginTransaction();//开启事务
        try{
            //文章索引存放至数据库
            if($type == 'repairSkill'){
                $ormObj = new RepairTrick();
            }elseif($type == 'report'){
                $ormObj = new Report();
            }/*elseif($type = 'share'){
            $DB = new Chapter();
        }*/
            $ormObj = $ormObj->find($id) ;
            $ormObj->title = $title;
            $ormObj->abstract = $abstract;
            $ormObj->save();

            Storage::disk('uploadHtml')->put($type.'-'.$id,$content);//文章内容存放至磁盘
            if($newSurfacePlot){
                rename('imgd/surfacePlot/'.$surfacePlot,'img/surfacePlot/'.$type.'-'.$id.'.'.$ext);
            }//标题图重命名
        }catch(\Exception $e) {
            //DB::rollBack();//回滚数据库
            $response->state = 'fail';
            return json_encode($response);
        }

        $response->state = 'success';
        return json_encode($response);
    }

    /**
     * 富文本请求
     * 参数过滤那个部分后期再考虑要不要加入中间件
     * 采用文件存储读取好慢啊，妈的好方
     *
     * @param Request $request
     * @return string
     */
    public function getHtml(Request $request){
        $response = new \stdClass();

        //我在犹豫这些要不要写到中间件里
        if (
            !$request->exists('type')
            ||!$request->exists('id')
        ){
            $response->state = 'fail';
            return json_encode($response);
        }
        $type = $request->input('type');
        $id = $request->input('id');

        if (!preg_match('/^((report)|(repairSkill)|(share))$/',$type)){
            $response->status = 'fail';
            return json_encode($response);
        }

        $response->state = 'success';
        $response->content = Storage::disk('uploadHtml')->get($type.'-'.$id);
        return json_encode($response);
    }

    /**
     * 文章列表预览页
     * 糟糕，好像效率有点低，我暂时不敢把参数过滤写到中间件里
     *
     * @param Request $request
     * @return string
     */
    public function preview(Request $request){
        $response = new \stdClass();

        //参数过滤
        if (
            !$request->has('type')
            ||!$request->has('num')
        ){
            $response->state = 'fail';
            return json_encode($response);
        }

        $type = $request->input('type');
        $num = $request->input('num');
        $user_id = $this->getUserId();
        if($request->has('page')){
            $page = $request->input('page');
        }else{
            $page = 1;
        }

        if(!preg_match('/^((report)|(repairSkill)|(share))$/',$type)){
            $response->state = 'fail';
            return json_encode($response);
        }

        //执行
        try{
            if($type == 'repairSkill'){
                $ormObj = new RepairTrick();
            }elseif($type == 'report'){
                $ormObj = new Report();
            }
            //分页操作
            $response->totalPage = ceil($ormObj->count('id') / $num);
            $response->report = $ormObj->skip(($page - 1) * $num )->take($num)
                ->orderBy('id','asc')
                ->select('id','title','abstract','updated_at as updateTime')->get();
        }catch(\Exception $e) {
            //DB::rollBack();//回滚数据库
            $response->state = 'fail';
            return json_encode($response);
        }
        $response->state = 'success';
        return json_encode($response);
    }

    /**
     * 评论翻页
     *
     * @param Request $request
     * @return string
     */
    public function comment(Request $request){
        $response = new \stdClass();
        //参数过滤
        if (
            !$request->has('type')
            ||!$request->has('num')
            ||!$request->has('id')
        ){
            $response->state = 'fail';
            return json_encode($response);
        }

        $type = $request->input('type');
        $id = $request->input('id');
        $num = $request->input('num');
        $userId = $request->session()->get('user_id', 0);

        if($request->has('page')){
            $page = $request->input('page');
        }else{
            $page = 1;
        }

        if(!preg_match('/^((report)|(repairSkill)|(share))$/',$type)){
            $response->state = 'fail';
            return json_encode($response);
        }

        //执行
        try{
            if($type == 'repairSkill'){
                $ormObj = new ComRepairTrick();
                $comTableName = 'com_repair_trick';
            }elseif($type == 'report'){
                $ormObj = new ComReport();
                $comTableName = 'com_report';
            }
            //分页操作
            //以下的操作使用orm自带的渴求式加载,然而嵌套渴求式加载代码太繁琐，并且执行开销过大，我打算换成用查询构建器来重新写一遍
//            $ormObj = $ormObj::where('article_id' , $id)
//                ->skip(($page - 1) * $num )->take($num)
//                ->select('id','user_id','created_at as createTime','content');
//            $response->totalPage = ceil($ormObj->count('id') / $num);
//            $response->comment = $ormObj->with(['user.qqUser' => function($query){
//                $query->select('user_info');
//            }])->get();     //奇葩的嵌套渴求式加载，然而选择的条件只能针对最后一张表。。。
//
//            foreach ($response->comment as &$value){
//                $nickName = unserialize($value->user->qquser->user_info)->nick_name;
//                unset($value->user);
//                unset($value->user_id);
//                $value->user = $nickName;
//            }

            //使用查询构建器写的版本
            $ormObj = $ormObj::where('article_id' , $id)
                ->orderBy("$comTableName.id",'asc')
                ->skip(($page - 1) * $num )->take($num);
                //->select('id','user_id','created_at as createTime','content');
            $response->totalPage = ceil($ormObj->count('id') / $num);
            $response->comment = $ormObj
                ->join('qq_user' , "$comTableName.user_id" , '=' ,'qq_user.user_id')
                ->select(
                    "$comTableName.id",
                    "$comTableName.created_at as createTime",
                    "$comTableName.content",
                    "$comTableName.thumb_up",
                    'qq_user.user_info'
                )
                ->get();

            foreach ($response->comment as &$value){
                $nickName = unserialize($value->user_info)->nick_name;
                $thumbUp = unserialize($value->thumb_up);//这里thumbUp是个被序列化的数组，可以查数据库的md文档

                $value->user = $nickName;
                $value->isThumbUp = in_array($userId , $thumbUp) ? 1 : 0;
                $value->thumbUpNum = count($thumbUp);

                unset($value->thumb_up);
                unset($value->user_info);
            }
        }catch(\Exception $e) {
            $response->state = 'fail';
            return json_encode($response);
        }
        $response->state = 'success';
        return json_encode($response) ;
    }

    /**
     * 提交评论
     *
     * @param Request $request
     * @return string
     */
    public function submitComment(Request $request){
        $response = new \stdClass();
        //参数过滤
        if (
            !$request->has('type')
            ||!$request->has('content')
            ||!$request->has('id')

        ){
            $response->state = 'fail';
            return json_encode($response);
        }

        $type = $request->input('type');
        $content = $request->input('content');
        $id = $request->input('id');
        $userId = intval($request->session()->get('user_id'));

        if(!preg_match('/^((report)|(repairSkill)|(share))$/',$type)){
            $response->state = 'fail';
            return json_encode($response);
        }

        //执行
        try{
            if($type == 'repairSkill'){
                $ormObj = new ComRepairTrick();
            }elseif($type == 'report'){
                $ormObj = new ComReport();
            }
            $ormObj->article_id = $id;
            $ormObj->user_id = $userId;
            $ormObj->content = $content;
            $ormObj->thumb_up = serialize([]);//空数组

            $ormObj->save();

        }catch(\Exception $e) {
            $response->state = 'fail';
            return json_encode($response);
        }
        $response->state = 'success';
        return json_encode($response);
    }


    /**
     * 点赞/取消点赞，切换状态
     *
     * @param Request $request
     * @return string
     */
    public function thumbUpComment(Request $request){
        $response = new \stdClass();
        //参数过滤
        if (
            !$request->has('type')
            ||!$request->has('id')
        ){
            $response->state = 'fail';
            return json_encode($response);
        }

        $type = $request->input('type');
        $id = $request->input('id');
        $userId = intval($request->session()->get('user_id'));

        if(!preg_match('/^((report)|(repairSkill)|(share))$/',$type)){
            $response->state = 'fail';
            return json_encode($response);
        }

        //执行
        try{
            if($type == 'repairSkill'){
                $ormObj = new ComRepairTrick();
            }elseif($type == 'report'){
                $ormObj = new ComReport();
            }
            $ormObj = $ormObj->find($id);//通过主键调取模型
            
            //转变点赞和不点赞的状态
            $thumbUp = unserialize($ormObj->thumb_up);
            if(in_array($userId , $thumbUp)){
                //取消赞
                unset($thumbUp[array_search($userId , $thumbUp)]);
//                $thumbUp = array_splice($thumbUp , array_search($userId , $thumbUp) , 1);//这个写法失败了，不知道为什么
            }else{
                //点赞
                $thumbUp[] = $userId;
            }
            $ormObj->thumb_up = serialize($thumbUp);
            $ormObj->save();
        }catch(\Exception $e) {
            $response->state = 'fail';
            return json_encode($response);
        }

        $response->state = 'success';
        $response->isThumbUp = in_array($userId , unserialize($ormObj->thumb_up)) ? 1 : 0;
        return dd(json_decode(json_encode($response)));
    }


    /**
     * 正则搜索文件名中的拓展名
     * @param $fileName
     * @return mixed
     */
    static private function getExtend($fileName){
        $array  = [];
        preg_match('/(?<=\.)[a-zA-Z]+$/',$fileName,$array);
        return $array[0];//蜜汁自信，匹配出来一定只有一个结果
    }
}