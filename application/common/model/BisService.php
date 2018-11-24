<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/20
 * Time: 1:38 PM
 */

namespace app\common\model;


class BisService extends BaseModel
{
    public function serviceinfo()
    {
        return $this->hasOne('category', 'id', 'category_id');
    }

    public static function GetServiceinfoBy($models_id,$todos)
    {
        $res = self::with('serviceinfo')->where('models_id',$models_id)
            ->whereIn('category_id',$todos)
            ->select();
        return $res;
    }

}