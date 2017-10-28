@extends('admin.main')

@section('position', '协会动态 -> 活动报道 -> 文章列表')

@section('content')
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>文章id</th>
                <th>文章名称</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @if(count($results) != 0)
                @foreach($results as $result)
                    <tr>
                        <th><span class="text-primary">{{$result['id']}}</span></th>
                        <th>
                            <a href="{{ URL::asset('admin/dynamic/report/modify/' . $result['id']) }}"><p class="text-info">{{$result['title']}}</p></a>
                            <input style="display: none" value="{{$result['id']}}"/>
                        </th>
                        <th>
                            <button type="button" class="btn btn-default" onclick="rmEle(this)">删除
                            </button>
                            @if($result['status'] == 1)
                                <button type="button" class="btn btn-success" onclick="changeStatus(this)">
                                    已发布
                                </button>
                            @elseif($result['status'] ==2)
                                <button type="button" class="btn btn-danger" onclick="changeStatus(this)">
                                    已下架
                                </button>
                            @else
                                <button type="button" class="btn btn-warning" onclick="changeStatus(this)">
                                    未发布
                                </button>
                            @endif
                        </th>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <a href="{{ URL::asset('admin/dynamic/report/create') }}">
        <button type="button" class="btn btn-primary btn-add">增加活动</button>
    </a>

    <script type="text/javascript">
        function rmEle(btn) {
            var ajaxDel = function (rawData) {
                if (rawData === 'true') {
                    $(btn).parent().parent().remove();
                } else {
                    alert('request failed!');
                }
            };
            var id = $(btn).parent().prev().children('input').val();
            var formdata = new FormData();
            formdata.append('id', id);
            newAjax(1, '{{ URL::asset('admin/dynamic/report/delete') }}', formdata, ajaxDel);
        }
        function changeStatus(status) {
            var actId = $(status).parent().parent().find("input").attr("value");
            var statusNum = -1;
            var ajaxChange = function (responseText) {
                //先放着你们补，或者删改
                console.log(responseText);
            };
            if ($(status).hasClass('btn-warning')) {
                statusNum = 0;
                newAjax(1, '{{ URL::asset('admin/dynamic/report') }}/changeStatus/' +  actId + '/' + statusNum, '', ajaxChange);
                $(status).removeClass('btn-warning');
                $(status).addClass('btn-success');
                $(status).html('已发布');
                return;
            }
            if ($(status).hasClass('btn-success')) {
                statusNum = 1;
                newAjax(1, '{{ URL::asset('admin/dynamic/report') }}/changeStatus/' +  actId + '/' + statusNum, '', ajaxChange);
                $(status).removeClass('btn-success');
                $(status).addClass('btn-danger');
                $(status).html('已下架');
                return;
            }
            if ($(status).hasClass('btn-danger')) {
                statusNum = 2;
                newAjax(1, '{{ URL::asset('admin/dynamic/report') }}/changeStatus/' +  actId + '/' + statusNum, '', ajaxChange);
                $(status).removeClass('btn-danger');
                $(status).addClass('btn-warning');
                $(status).html('未发布');
                return;
            }

        }
    </script>
@endsection