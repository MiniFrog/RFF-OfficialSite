@extends('admin.main')

@section('position', '首页编辑 -> 轮播图')

@section('content')
    <div>
        <form id="dataform">
            <table class="table">
                <thead>
                <tr>
                    <th>图片</th>
                    <th>图片信息</th>
                    <th>图片所属类别</th>
                    <th>跳转链接</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < count($results); $i++)
                    <tr>
                        <th>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片
                                </button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="picture{{$i}}[]" value="{{$results[$i]->imgpath}}"/>
                                <input style="display: none" name="picture{{$i}}[]" value="{{$results[$i]->id}}"/>
                            </div>
                        </th>
                        <th><input type="text" name="picture{{$i}}[]" value="{{$results[$i]->imgmes}}"/></th>
                        <th><input type="text" name="picture{{$i}}[]" value="{{$results[$i]->imgtype}}"/></th>
                        <th><input type="text" name="picture{{$i}}[]" value="{{$results[$i]->acturl}}"/></th>
                    </tr>
                @endfor
                </tbody>
            </table>
            <br/>
        </form>
        <div>
            <button type="button" class="btn btn-primary btn-submit" onclick="sendData()">提交</button>
            {{--<button type="button" class="btn btn-primary btn-review">预览</button>--}}
        </div>
    </div>
@endsection