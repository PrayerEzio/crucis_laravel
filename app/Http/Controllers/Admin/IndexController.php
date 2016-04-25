<?php

namespace App\Http\Controllers\Admin;

class IndexController extends CommonController
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        return view('Admin.Index.index');
    }

    public function about_us(){
        return view('Admin.Index.aboutUs');
    }

    public function billboard(){
        return view('Admin.Index.billboard');
    }
}
