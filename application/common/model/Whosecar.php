<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/24
 * Time: 8:43 PM
 */

namespace app\common\model;


class Whosecar extends BisModels
{
    public static function PostDataByAdd($data)
    {

        $data['create_time'] = time();
        $res = self::insertGetId($data);
        return $res;
    }

}