<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/24
 * Time: 7:19 PM
 */

namespace app\common\model;


class Insurance extends BisModels
{
    /*
     * 添加保险订单表主表信息
     */
    public static function PostDataByAdd($data)
    {
        $data['create_time']=time();
        $res = self::insertGetId($data);
        return $res;

    }

}