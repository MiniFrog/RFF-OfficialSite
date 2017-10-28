@extends('admin.main')

@section('position', '首页编辑 -> 首页协会动态')

@section('content')
    <div>
        <form id="dataform">
            <table class="table">
                <thead>
                <tr>
                    <th>图片</th>
                    <th>标题</th>
                    <th>摘要</th>
                    <th>跳转链接</th>
                    <th></th>
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
                                <input style="display: none" name="dynamic{{$i}}[]" value="{{$results[$i]->imgpath}}"/>
                            </div>
                        </th>
                        <th><input type="text" name="dynamic{{$i}}[]" value="{{$results[$i]->title}}"/></th>
                        <th><input type="text" name="dynamic{{$i}}[]" value="{{$results[$i]->summary}}"/></th>
                        <th><input type="text" name="dynamic{{$i}}[]" value="{{$results[$i]->acturl}}"/></th>
                        <th>
                            <button type="button" class="btn btn-default" onclick="deleteEle(this)">删除</button>
                            <input style="display: none" name="dynamic{{$i}}[]" value="{{$results[$i]->id}}"/></th>
                    </tr>
                @endfor

                </tbody>
            </table>
            <br/>
            <div>
                <button type="button" class="btn btn-primary btn-submit" onclick="sendData();">提交</button>
                <button type="button" class="btn btn-primary btn-add" onclick="add();">增加动态</button>
                {{--<button type="button" class="btn btn-primary btn-review">预览</button>--}}
            </div>
        </form>
    </div>
    <script type="text/javascript">
        (function () {
            var i = {{count($results)}};

            function add() {
                var html = '<tr><th><div><button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button><input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/><input style="display: none" name="dynamic' + i +'[]" value=""/></div></th><th><input type="text" name="dynamic' + i + '[]" value=""/></th><th><input type="text" name="dynamic' + i + '[]" value=""/></th><th><input type="text" name="dynamic' + i + '[]" value=""/></th><th><button type="button" class="btn btn-default" onclick="deleteEle(this)">删除</button><input style="display: none" name="dynamic' + i + '[]" value=""/></th></tr>';
                $("tbody").append(html);
                i++;
            }
            window.add = add;

        })()

    </script>
@endsection