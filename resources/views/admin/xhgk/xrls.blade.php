@extends('admin.main')

@section('position', '协会概况 -> 现任理事')

@section('content')
    <div>
        <form id="dataform">
            <table class="table">
                <thead>
                    <tr>
                        <th>职位</th>
                        <th>姓名</th>
                        <th>协会寄语</th>
                        <th>图片</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @if(count($results) != 0)
                    @foreach($results as $result)
                        <tr>
                            <th>
                                <input type="text" name="position[]" class="input-sm" value="{{$result->position}}"/>
                            </th>
                            <th><input type="text" name="name[]" value="{{$result->name}}" class="input-sm"/></th>
                            <th><textarea rows="10" name="wish[]">{{$result->wish}}</textarea></th>
                            <th>
                                <div>
                                    <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                    <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                    <input style="display: none" name="imgpath[]" value="{{$result->imgpath}}"/>
                                </div>
                            </th>
                            <th>
                                <button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button>
                                <input name="id[]" style="display: none" value="{{$result->id}}"/>
                            </th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>
                            <input type="text" name="position[]" class="input-sm" value=""/>
                        </th>
                        <th><input type="text" name="name[]" value="" class="input-sm"/></th>
                        <th><textarea rows="10" name="wish[]"></textarea></th>
                        <th>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="imgpath[]" value=""/>
                            </div>
                        </th>
                        <th>
                            <button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button>
                            <input name="id[]" value="" style="display: none"/>
                        </th>
                    </tr>
                @endif
                </tbody>
            </table>
            <br/>
            <div>
                <button type="button" class="btn btn-primary btn-submit" onclick="sendData();">提交</button>
                {{--<button type="button" class="btn btn-primary btn-review">预览</button>--}}
                <button type="button" class="btn btn-primary btn-add" onclick="add();">增加职位</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function add(){
            var nexthtml = '<tr> <th><input type="text" name="position[]" class="input-sm"/> </th> <th><input type="text" name="name[]" value="" class="input-sm"/></th> <th><textarea rows="10" name="wish[]"></textarea></th><th><div> <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button> <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/> <input style="display: none" name="imgpath[]" value=""/> </div> </th> <th><button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button> <input name="id[]" value="" style="display: none"/> </th> </tr>';
            $("tbody").append(nexthtml);
        }
    </script>
@endsection