<?php
/**
 * Created by PhpStorm.
 * User: 罟宁
 * Date: 2017/8/9
 * Time: 23:50
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadFile extends Controller{
    public function uploadImg(Request $request){
        if (!$request->hasFile('pic')) {
            $res['state'] = 'fail';
            $res['errMes'] = 'no file to upload';
        } else {
            $file = $request->file('pic');
            $checkRes = $this->checkFile($file);
            if (!$checkRes['bool']) {
                $res['state'] = 'fail';
                $res['errMes'] = $checkRes['mes'];
            } else {
                $res['state'] = 'success';
                $res['picPath'] = $this->getPath($file);
            }
        }
        return response()->json($res);
    }

    /**
     * checkFile:判断img是否合法
     * @author by 罟宁
     * @param UploadedFile $file
     * @return array
     * createTime:2017年8月20日17:14:26
     */
    private function checkFile(UploadedFile $file){

        $res = array(
            'bool' => true,
            'mes' => ''
        );
        //check size
        if ($file->getMaxFilesize() < $file->getClientSize()) {
            $res = array(
                'bool' => false,
                'mes' => 'The file is out of size'
            );
        }
        //check if post and valid
        if (! $file->isValid()) {
            $res = array(
                'bool' => false,
                'mes' => 'The file is invalid'
            );
        }
        //check the img type
        $allowExt = array('jpeg', 'jpg', 'png', 'bmp', 'gif', 'ico');
        $ext = $file->guessExtension();
        $tmp = explode('/', $file->getMimeType());
        $mimeType = $tmp ? $tmp[0] : '';

        if((! in_array($ext, $allowExt)) || $mimeType != 'image') {
            $res = array(
                'bool' => false,
                'mes' => 'The file is not a image'
            );
        }

        return $res;
    }

    private function getPath(UploadedFile $file){
        $ext = $file->guessExtension();
        $filename = md5(time().'img').".{$ext}";
        Storage::disk('public')->put($filename, file_get_contents($file->getRealPath()));
        return $filename;
    }
}