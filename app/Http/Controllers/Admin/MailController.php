<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;

class MailController extends CommonController
{
    public function __construct(){
        parent::__construct();
    }
    //收件箱
    public function inbox(){
        return view('Admin.Mail.inbox');
    }
    //邮件详情
    public function mail_detail(){
        return view('Admin.Mail.mail_detail');
    }
    //写信
    public function mail_compose(){
        return view('Admin.Mail.mail_compose');
    }
}
