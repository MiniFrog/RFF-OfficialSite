@extends('admin.main')

@section('position', '意见反馈')

@section('content')
    <div>
            <table class="table">
                <thead>
                <tr>
                    {{--<th style="width:10%;">用户</th>--}}
                    <th style="width:20%;">信息</th>
                    <th style="width:20%;">时间</th>
                    <th style="width:10%;">进行回复</th>
                    <th style="width:35%;">回复输入框</th>
                </tr>
                </thead>
                <tbody>
                @foreach($results as $result)
                <tr>
                    {{--<th><p class="text-info">{{$result['user']}}</p></th>--}}
                    <th><p class="text-info">{{$result->question}}</p></th>
                    @if($result['reply'] == NULL)
                    <th><p class="text-info">{{$result->ftime}}</p></th>
                    <th>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-{{ $result->id }}" data-toggle="modal" data-target="#myModal" onclick="showReply( {{ $result->id }} )">
                            回复
                        </button>
                    </th>
                    @else
                    <th><p class="text-info">{{$result->rtime}}</p></th>
                    <th>
                        <button type="button" class="btn btn-success" onclick="showReply( {{$result->id}} )">已回复</button>
                    </th>
                    @endif
                    <th id="{{ $result->id }}" style="display:none;">
                        <textarea name="" id="text-{{ $result->id }}" cols="30" rows="3">{{$result->reply}}</textarea>
                        <button id="btn-{{ $result->id }}">提交</button>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
            <br/>
    </div>
    <script type="text/javascript">
        function showReply(id) {
            $("#" + id).slideToggle();
            $("#btn-" + id).click(function () {
                var formdata = new FormData();
                formdata.append('id', id);
                formdata.append('reply', $('#text-' + id).val());
                new newAjax(1, 'reply', formdata, function (res) {
                    if (res.state) {
                        $('.btn-' + id).removeClass('btn-danger')
                        $('.btn-' + id).addClass('btn-success')
                        $("#" + id).slideToggle();
                    }
                })
            })
        }
    </script>
@endsection