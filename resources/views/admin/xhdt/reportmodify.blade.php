@extends('admin.main')

@section('position', '协会动态 -> 活动报道')

@section('content')

@include('UEditor::head')

    <div>
        <form action="up" method="post">
            <table class="table">
                <tbody>
                <tr>
                    <th>报道标题</th>
                    <th>
                        <input type="text" name="title" value="{{$result['title']}}"/>
                        <input name="id" style="display: none" value="{{$result['id']}}"/>
                    </th>
                </tr>
                <tr>
                    <th>报道摘要</th>
                    <th><textarea name="abstract" rows="5">{{$result['abstract']}}</textarea></th>
                </tr>
                <tr>
                    <th>报道图片</th>
                    <th>
                        <div>
                            <button type="button" class="btn btn-default" onclick="$(this).next().click();">上传图片</button>
                            <input type="file" accept="image/*" onchange="uploadfile(this)" style="display: none"/>
                            <input style="display: none" name="imgpath" value="{{$result['imgpath']}}"/>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>报道内容(Attention!本期只支持文字)</th>
                    <th></th>
                </tr>
                </tbody>
            </table>
            <script id="containers" name="content" type="text/plain" style="height:500px;">{{$result['content']}}</script>
            <br/><br/><br/><br/>
            <div>
                <input type="submit" class="btn btn-primary btn-submit" value="提交"/>
            </div>
        </form>
    </div>

    <script type="text/javascript">

        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        var ue = UE.getEditor('containers');

    </script>
@endsection