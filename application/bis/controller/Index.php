<?php

namespace app\bis\controller;

use think\Controller;

class Index extends Base
{
    public function index()
    {
        dump(session('bisaccount'));
        return view();
    }

    public function welcome()
    {
        return '欢迎来到红蜻蜓商城后台';
    }
}
