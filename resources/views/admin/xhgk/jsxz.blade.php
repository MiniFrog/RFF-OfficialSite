@extends('admin.main')

@section('position', '协会概况 -> 技术小组')

@section('content')
    <div>
        <form id="dataform">
            <table class="table">
                <thead>
                <tr>
                    <th>技术小组</th>
                    <th>简介</th>
                    <th>图片</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($results) != 0)
                    @foreach($results as $result)
                        <tr>
                            <th><input type="text" name="group[]" class="input-sm" value="{{$result->group}}"/></th>
                            <th><textarea rows="10" name="intro[]">{{$result->intro}}</textarea></th>
                            <th>
                                <div>
                                    <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                    <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                    <input style="display: none" name="imgpathf[]" value="{{$result->imgpathf}}"/>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                    <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                    <input style="display: none" name="imgpaths[]" value="{{$result->imgpaths}}"/>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                    <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                    <input style="display: none" name="imgpatht[]" value="{{$result->imgpatht}}"/>
                                </div>
                            </th>
                            <th>
                                <button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button>
                                <input style="display: none" name="id[]" value="{{$result->id}}"/>
                            </th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th><input type="text" name="group[]" class="input-sm" value=""/></th>
                        <th><textarea rows="10" name="intro[]"></textarea></th>
                        <th>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="imgpathf[]" value=""/>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="imgpaths[]" value=""/>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="imgpatht[]" value=""/>
                            </div>
                        </th>
                        <th>
                            <button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button>
                            <input style="display: none" name="id[]" value=""/>
                        </th>
                    </tr>

                @endif
                </tbody>
            </table>
            <br/>
            <div>
                <button type="button" class="btn btn-primary btn-submit" onclick="sendData();">提交</button>
                {{--<button type="button" class="btn btn-primary btn-review">预览</button>--}}
                <button type="button" class="btn btn-primary btn-add" onclick="add();">增加小组</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function add(){
            var nexthtml = '<tr> <th><input type="text" name="group[]" class="input-sm" value=""/></th> <th><textarea rows="10" name="intro[]"></textarea></th> <th> <div> <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button> <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/> <input style="display: none" name="imgpathf[]" value=""/> </div> <div> <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button> <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/> <input style="display: none" name="imgpaths[]" value=""/> </div> <div> <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button> <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/> <input style="display: none" name="imgpatht[]" value=""/> </div> </th> <th> <button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button> <input style="display: none" name="id[]" value=""/> </th> </tr>';
            $("tbody").append(nexthtml);
        }
    </script>
@endsection