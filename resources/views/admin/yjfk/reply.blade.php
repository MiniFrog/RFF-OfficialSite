@extends('admin.main')

@section('position', '意见反馈 -> 回复界面')

@section('content')
    <h5>历史回复信息</h5>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>发送人</th>
                <th>信息</th>
                <th>时间</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><p class="text-info">111</p></th>
                <th><p class="text-info">111</p></th>
                <th><p class="text-info">111</p></th>
            </tr>
            </tbody>
        </table>
    </div>

    <h5>回复</h5>

    <div>
        <form action="">
            <textarea name="" id="" rows="10"></textarea>
            <br/>
            <div>
                <button type="button" class="btn btn-primary btn-submit">提交</button>
                <button type="button" class="btn btn-primary btn-review">返回</button>
            </div>
        </form>
    </div>
@endsection