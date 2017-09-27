@extends('admin.main')

@section('position', '协会动态 -> 近期活动 -> 活动列表')

@section('content')
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>活动名称</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @if(count($results) != 0)
                @foreach($results as $result)
                    <tr>
                        <th>
                            <a href="modify?id={{$result['id']}}"><p class="text-info">{{$result['title']}}</p></a>
                            <input style="display: none" value="{{$result['id']}}"/>
                        </th>
                        <th>
                            <button type="button" class="btn btn-default" onclick="rmEle(this)">删除
                            </button>
                            @if($result['status'] == 1)
                                <button type="button" class="btn btn-success" onclick="changeStatus(this)">
                                    进行中
                                </button>
                            @elseif($result['status'] ==2)
                                <button type="button" class="btn btn-danger" onclick="changeStatus(this)">
                                    已结束
                                </button>
                            @else
                                <button type="button" class="btn btn-warning" onclick="changeStatus(this)">
                                    未开始
                                </button>
                            @endif
                        </th>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <a href="new">
        <button type="button" class="btn btn-primary btn-add">增加活动</button>
    </a>

    <script type="text/javascript">
        function rmEle(btn) {
            var ajaxDel = function (rawData) {
                var data = JSON.parse(rawData)
                if (data.state) {
                    $(btn).parent().parent().remove();
                } else {
                    alert('request failed!');
                }
            };
            var id = $(btn).parent().prev().children('input').val();
            var formdata = new FormData();
            formdata.append('id', id);
            newAjax(1, 'del', formdata, ajaxDel);
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
                newAjax(0, 'changeStatus/' + actId + '/' + statusNum, '', ajaxChange);
                $(status).removeClass('btn-warning');
                $(status).addClass('btn-success');
                $(status).html('进行中');
                return;
            }
            if ($(status).hasClass('btn-success')) {
                statusNum = 1;
                newAjax(0, 'changeStatus/' + actId + '/' + statusNum, '', ajaxChange);
                $(status).removeClass('btn-success');
                $(status).addClass('btn-danger');
                $(status).html('已结束');
                return;
            }
            if ($(status).hasClass('btn-danger')) {
                statusNum = 2;
                newAjax(0, 'changeStatus/' + actId + '/' + statusNum, '', ajaxChange);
                $(status).removeClass('btn-danger');
                $(status).addClass('btn-warning');
                $(status).html('未开始');
                return;
            }

        }
    </script>
@endsection