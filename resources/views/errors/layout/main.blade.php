<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    <link rel="shortcut icon" href="favicon.ico"> <link href="{{ asset('assets/Admin') }}/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="{{ asset('assets/Admin') }}/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="{{ asset('assets/Admin') }}/css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Admin') }}/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">
</head>
<body class="gray-bg">
<div class="middle-box text-center animated fadeInDown">
    @yield('body')
</div>
<script src="{{ asset('assets/Admin') }}/js/jquery.min.js?v=2.1.4"></script>
<script src="{{ asset('assets/Admin') }}/js/bootstrap.min.js?v=3.3.5"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
</html>