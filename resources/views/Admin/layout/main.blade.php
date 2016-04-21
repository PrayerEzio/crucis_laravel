<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>H+ 后台主题UI框架 - 主页</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('assets/Admin') }}/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="{{ asset('assets/Admin') }}/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="{{ asset('assets/Admin') }}/css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Admin') }}/css/style.min.css?v=4.0.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        @include('Admin.common.leftNav')
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('Admin.common.rightTop')
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="{{ url('Admin/Index/about_us') }}" frameborder="0" data-id="{{ url('Admin/Index/about_us') }}" seamless></iframe>
            </div>
            @include('Admin.common.footer')
        </div>
        <!--右侧部分结束-->
        @include('Admin.common.rightSidebar')
        @include('Admin.common.miniChat')
    </div>
    <script src="{{ asset('assets/Admin') }}/js/jquery.min.js?v=2.1.4"></script>
    <script src="{{ asset('assets/Admin') }}/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="{{ asset('assets/Admin') }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{ asset('assets/Admin') }}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('assets/Admin') }}/js/plugins/layer/layer.min.js"></script>
    <script src="{{ asset('assets/Admin') }}/js/hplus.min.js?v=4.0.0"></script>
    <script src="{{ asset('assets/Admin') }}/js/contabs.min.js"></script>
    <script src="{{ asset('assets/Admin') }}/js/plugins/pace/pace.min.js"></script>
</body>

</html>