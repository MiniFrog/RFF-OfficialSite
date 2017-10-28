<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>无协官网后台管理系统</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">无协官网后台</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            协会概况设置
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::asset('/admin/publicity/association') }}">关于无协</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::asset('/admin/publicity/director') }}">现任理事</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::asset('/admin/publicity/department') }}">部门介绍</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::asset('/admin/publicity/technical') }}">技术小组</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            协会动态设置
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::asset('/admin/dynamic/activity') }}">近期活动</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::asset('/admin/dynamic/report') }}">活动报道</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::asset('/admin/dynamic/work') }}">作品集锦</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            首页编辑
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::asset('admin/home/carousel') }}">轮播图</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ URL::asset('admin/home/dynamic') }}">首页协会动态</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="/admin/yjfk/list">意见反馈</a></li>
                </ul>
                <p class="navbar-text navbar-right">你好，管理员</p>
            </div>
        </div>
    </nav>
    <p class="text-muted">当前位置：@yield('position','text')</p >
</div>
<div class="container">
    @yield('content')
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('js/uploadfile.js')}}"></script>
<script src="{{asset('js/deal.js')}}"></script>
<script src="{{asset('js/newAjax.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</html>