<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 18/2/2
 * Time: 下午6:23
 */

namespace app\bis\controller;


class Order extends Base
{
    public function index()
    {
        $bisid = $this->getlogoinuser()->bis_id;

        $sdata = [

            'bis_id'=>$bisid,

        ];
        $data = input('post.');


        if (!empty($data['code'])) {
            $sdata['code'] = ['like', '%' . $data['code'] . '%'];

        }




        $params = request()->param();//这个是获取地址栏参数。。主要作用是分页的时候带参数

        $res = model('order')->getlocalhostorderlist($sdata);
        $assign = [
            'order' => $res,
            'params' => $params,
            'code'=>empty($data['code']) ? '' : $data['code'],
        ];
        $this->assign($assign);
        return view();
    }

}