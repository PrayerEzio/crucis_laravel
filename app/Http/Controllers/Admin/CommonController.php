<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class CommonController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //基类构造函数
    public function __construct(){

    }

    //获取请求的方法
    protected function requestMethod(){
        $request = new Request();
        return strtoupper($request->method());
    }

}
