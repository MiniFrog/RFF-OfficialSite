@extends('admin.main')

@section('position', '协会概况 -> 部门介绍')

@section('content')
    <div>
        <form id="dataform">
            <table class="table">
                <thead>
                <tr>
                    <th>部门</th>
                    <th>部门介绍</th>
                    <th>图片</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < count($results); $i++)
                    <tr>
                        <th><input type="text" name="department{{$i}}[]" class="input-sm"
                                   value="{{$results[$i]->dpt}}"/></th>
                        <th><textarea rows="10" name="department{{$i}}[]">{{$results[$i]->intro}}</textarea></th>
                        <th>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片
                                </button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="department{{$i}}[]"
                                       value="{{$results[$i]->imgpathf}}"/>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片
                                </button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="department{{$i}}[]"
                                       value="{{$results[$i]->imgpaths}}"/>
                            </div>
                            <div>
                                <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片
                                </button>
                                <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                                <input style="display: none" name="department{{$i}}[]"
                                       value="{{$results[$i]->imgpatht}}"/>
                            </div>
                        </th>
                        <th>
                            <button type="button" class="btn btn-default" onclick="deleteEle(this);">删除</button>
                            <input style="display: none" name="department{{$i}}[]" value="{{$results[$i]->id}}"/>
                        </th>
                    </tr>
                @endfor
                </tbody>
            </table>
            <br/>
            <div>
                <button type="button" class="btn btn-primary btn-submit" onclick="sendData();">提交</button>
                {{--<button type="button" class="btn btn-primary btn-review">预览</button>--}}
                <button type="button" class="btn btn-primary btn-add" onclick="add();">增加部门</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        (function () {
            var i = {{count($results)}};

            function add() {
                var nexthtml = '<tr>' +
                                 '<th>' +
                                     '<input type="text" name="department' + i + '[]" class="input-sm" value=""/>' +
                                 '</th>' +
                                 '<th>' +
                                     '<textarea rows="10" name="department' + i + '[]">' +
                                     '</textarea>' +
                                 '</th>' +
                                 '<th>' +
                                     '<div>' +
                                         '<button type="button" class="btn btn-default" onclick="$(this).next().click();">' +
                                             '上传图片' +
                                         '</button>' +
                                         '<input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>' +
                                         '<input style="display: none" name="department' + i + '[]" value=""/>' +
                                     '</div>' +
                                     '<div>' +
                                         '<button type="button" class="btn btn-default" onclick="$(this).next().click();">' +
                                             '上传图片' +
                                         '</button>' +
                                         '<input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>' +
                                         '<input style="display: none" name="department' + i + '[]" value=""/>' +
                                     '</div>' +
                                     '<div>' +
                                         '<button type="button" class="btn btn-default" onclick="$(this).next().click();">' +
                                             '上传图片' +
                                         '</button>' +
                                         '<input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>' +
                                         '<input style="display: none" name="department' + i + '[]" value=""/>' +
                                     '</div>' +
                                 '</th>' +
                                 '<th>' +
                                     '<button type="button" class="btn btn-default" onclick="deleteEle(this);">' +
                                         '删除' +
                                     '</button>' +
                                     '<input style="display: none" name="department' + i + '[]" value=""/>' +
                                 '</th>' +
                                '</tr>';
                $("tbody").append(nexthtml);
                i++;
            }
            window.add = add;

        })()
    </script>
@endsection