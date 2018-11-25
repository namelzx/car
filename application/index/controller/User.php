<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/21
 * Time: 9:19 PM
 */

namespace app\index\controller;


use app\common\model\Insurance;
use app\common\model\Order;
use app\common\model\Usedcar;
use app\common\model\Whosecar;
use think\Controller;

class User extends Controller
{
    public function index()
    {
        session('user_id', 1);
        return view();
    }

    /*
     * 保养订单
     */
    public function maintenance()
    {
        $data = input('param.');
        if (!empty($data)) {
            $res = Order::GetMainOrderByList($data);
            return json($res);
            return json('有数据');
        }
        return view();
    }

    /*
     * 审车订单
     */
    public function whosecar()
    {

        $data = input('param.');

        if (!empty($data)) {
//            dump($data);
            $data['user_id'] = session('user_id');
            $res = Whosecar::GetWhOrderByList($data);
            return json($res);
            return json('有数据');
        }
        return view();
    }

    public function usedcar()
    {
        $data = input('param.');

        if (!empty($data)) {
//            dump($data);
            $data['user_id'] = session('user_id');
            $res = Usedcar::GetUseOrderByList($data);
            return json($res);
        }
        return view();
    }

    public function insurance()
    {
        $data = input('param.');

        if (!empty($data)) {
//            dump($data);
            $data['user_id'] = session('user_id');
            $res = Insurance::GetInOrderByList($data);
            return json($res);
        }
        return view();
    }


}