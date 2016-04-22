@extends('errors.layout.main')

@section('seo')
    <title>H+ 后台主题UI框架 - 404 页面</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
@endsection

@section('body')
    <h1>404</h1>
    <h3 class="font-bold">页面未找到！</h3>
    <div class="error-desc">
        抱歉，页面好像去火星了~
        <form class="form-inline m-t" role="form">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="请输入您需要查找的内容 …">
            </div>
            <br/><a href="{{ url('Admin') }}" class="btn btn-primary m-t">主页</a>
        </form>
    </div>
@endsection