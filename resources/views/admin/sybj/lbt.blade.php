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
                @if(count($results) != 0)
                    @foreach($results as $result)
                        <tr>
                            <th>
                                <div>
                                    <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                    <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                    <input style="display: none" name="imgpath[]" value="{{$result->imgpath}}"/>
                                    <input style="display: none" name="id[]" value="{{$result->id}}"/>
                                </div>
                            </th>
                            <th><input type="text" name="imgmes[]" value="{{$result->imgmes}}"/></th>
                            <th><input type="text" name="imgtype[]" value="{{$result->imgtype}}"/></th>
                            <th><input type="text" name="acturl[]" value="{{$result->acturl}}"/></th>
                        </tr>
                    @endforeach
                @else
                    @for($i=0;$i<=4;$i++)
                        <tr>
                            <th>
                                <div>
                                    <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                    <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                    <input style="display: none" name="imgpath[]" value=""/>
                                    <input style="display: none" name="id[]" value=""/>
                                </div>
                            </th>
                            <th><input type="text" name="imgmes[]" value=""/></th>
                            <th><input type="text" name="imgtype[]" value=""/></th>
                            <th><input type="text" name="acturl[]" value=""/></th>
                        </tr>
                    @endfor
                @endif
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