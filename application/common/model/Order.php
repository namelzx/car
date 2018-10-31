<?php

namespace app\common\model;

use think\Db;
use think\Model;

class order extends basemodel
{
    public function member()
    {
        return $this->belongsTo('Deal');
    }

    public function add($data)
    {
        $data['status'] = 1;
        $this->allowfield(true)->save($data);
        return $this->id;
    }


    public function getorderlist($user_id)
    {
        $res = Db::table('o2o_order')->alias('a')
            ->join('o2o_deal d', 'd.id=a.deal_id')
            ->where('a.user_id=' . $user_id)->paginate();

        return $res;
    }

    public function getlocalhostorderlist($data = [])
    {

        $res = Db::table('o2o_order')->alias('a')
            ->join('o2o_deal d', 'd.id=a.deal_id')
            ->where($data)->field('a.id,d.name,d.image,d.current_price,a.create_time,a.out_trade_no,a.deal_count,a.code,a.status')->paginate();

        return $res;
    }
}