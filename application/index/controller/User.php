<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/21
 * Time: 9:19 PM
 */

namespace app\index\controller;


use app\common\model\Order;
use think\Controller;

class User extends Controller
{
    public function index()
    {
        session('user_id', 1);
        return view();
    }

    public function maintenance()
    {
        $data=input('param.');
        if(!empty($data)){
            $res=Order::GetMainOrderByList($data);
            return json($res);
            return json('有数据');
        }
        return view();
    }


}