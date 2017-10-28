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

                @for($i = 0; $i < count($results); $i++)
                    <tr>
                        <th>
                            <input type="text" name="people{{$i}}[]" class="input-sm"
                                   value="{{$results[$i]->position}}"/>
                        </th>
                        <th><input type="text" name="people{{$i}}[]" value="{{$results[$i]->name}}" class="input-sm"/>
                        </th>
                        <th><textarea rows="10" name="people{{$i}}[]">{{$results[$i]->wish}}</textarea></th>
                        <th>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片
                                </button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="people{{$i}}[]" value="{{$results[$i]->imgpath}}"/>
                            </div>
                        </th>
                        <th>
                            <button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button>
                            <input name="people{{$i}}[]" style="display: none" value="{{$results[$i]->id}}"/>
                        </th>
                    </tr>
                @endfor

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
        (function () {
            var i = {{count($results)}};
            function add() {
                var nexthtml = '<tr> <th><input type="text" name="director' + i + '[]" class="input-sm"/> </th> <th><input type="text" name="director' + i + '[]" value="" class="input-sm"/></th> <th><textarea rows="10" name="director' + i + '[]"></textarea></th><th><div> <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button> <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/> <input style="display: none" name="director' + i + '[]" value=""/> </div> </th> <th><button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button> <input name="director' + i + '[]" value="" style="display: none"/> </th> </tr>';
                $("tbody").append(nexthtml);
                i++;
            }

            window.add = add;

        })()

    </script>
@endsection