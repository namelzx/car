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


      echo "车之界主后台";
    
    }
    public function map(){
      return   \Map::staticimage("北京昌平");

    }
}
