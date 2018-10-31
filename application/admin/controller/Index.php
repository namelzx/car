<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
       // return $this->fetch();
       return view();
    }
    public function welcome(){


      echo "红蜻蜓o2o商户主后台管理平台";
    
    }
    public function map(){
      return   \Map::staticimage("北京昌平");

    }
}
