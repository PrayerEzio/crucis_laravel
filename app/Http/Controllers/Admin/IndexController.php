<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
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
