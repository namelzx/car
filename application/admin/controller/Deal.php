<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class  deal extends Controller
{
    private $obj;

    // 初始化模型
    public function _initialize()
    {
        $this->obj = model("deal");
    }

    public function index()
    {
        $sdata = [];
        $data = input('post.');

        if (!empty($data['start_time']) && !empty($data['end_time']) && strtotime($data['end_time']) > strtotime($data['start_time'])) {
            $sdata['create_time'] = [
                ['gt', strtotime($data['start_time'])],

                ['lt', strtotime($data['end_time'])],

            ];
        }
        if (!empty($data['category_id'])) {
            $sdata['category_id'] = $data['category_id'];
        }
        if (!empty($data['city_id'])) {
            $sdata['city_id'] = $data['city_id'];
        }

        if (!empty($data['name'])) {
            $sdata['name'] = ['like', '%' . $data['name'] . '%'];
        }
        // if(!empty($data))
        // {
        // 	$gl 		= 	[
        // 	'city_id' =>$data['city_id'],
        // 	'category_id' =>$data['category_id'],
        // 	'start_time' =>$data['start_time'],
        // 	'end_time' =>$data['end_time'],
        // 	'name' =>$data['name'],
        // ];
        // }

        $gl = [
            'city_id' => empty($data['city_id']) ? '' : $data['city_id'],
            'category_id' => empty($data['category_id']) ? '' : $data['category_id'],
            'start_time' => empty($data['start_time']) ? '' : $data['start_time'],
            'end_time' => empty($data['end_time']) ? '' : $data['end_time'],
            'name' => empty($data['name']) ? '' : $data['name'],

        ];
        $this->assign('gl', $gl);

        $params = request()->param();//这个是获取地址栏参数。。主要作用是分页的时候带参数


        $deallist = $this->obj->getNormaldeall($sdata, 1);
        $this->assign('deallist', $deallist);

        $categorysArrs = [];

        $categorys = model('category')->getNormalFirstCategory();//获取城市一级分类
        foreach ($categorys as $category) {
            $categorysArrs[$category->id] = $category->name;
            # code...
        }
        $this->assign('categorys', $categorys);
        $cityArrs = [];
        $citys = model('city')->getNormalCitys();
        foreach ($citys as $city) {
            $cityArrs[$city->id] = $city->name;
            # code...
        }


        $arrslist = [
            'categorysArrs' => $categorysArrs,
            'cityArrs' => $cityArrs,

        ];
        $this->assign($arrslist);

        $this->assign('citys', $citys);
        return view();
    }

    public function auditlist()
    {

        $sdata = [];
        $data = input('post.');

        if (!empty($data['start_time']) && !empty($data['end_time']) && strtotime($data['end_time']) > strtotime($data['start_time'])) {
            $sdata['create_time'] = [
                ['gt', strtotime($data['start_time'])],

                ['lt', strtotime($data['end_time'])],

            ];
        }
        if (!empty($data['category_id'])) {
            $sdata['category_id'] = $data['category_id'];
        }
        if (!empty($data['city_id'])) {
            $sdata['city_id'] = $data['city_id'];
        }

        if (!empty($data['name'])) {
            $sdata['name'] = ['like', '%' . $data['name'] . '%'];
        }

        $gl = [
            'city_id' => empty($data['city_id']) ? '' : $data['city_id'],
            'category_id' => empty($data['category_id']) ? '' : $data['category_id'],
            'start_time' => empty($data['start_time']) ? '' : $data['start_time'],
            'end_time' => empty($data['end_time']) ? '' : $data['end_time'],
            'name' => empty($data['name']) ? '' : $data['name'],

        ];
        $this->assign('gl', $gl);
        $deallist = $this->obj->getNormaldeall($sdata);

        $this->assign('deallist', $deallist);
        $categorysArrs = [];

        $categorys = model('category')->getNormalFirstCategory();//获取城市一级分类
        foreach ($categorys as $category) {
            $categorysArrs[$category->id] = $category->name;
            # code...
        }
        $this->assign('categorys', $categorys);
        $cityArrs = [];
        $citys = model('city')->getNormalCitys();
        foreach ($citys as $city) {
            $cityArrs[$city->id] = $city->name;
            # code...
        }


        $arrslist = [
            'categorysArrs' => $categorysArrs,
            'cityArrs' => $cityArrs,

        ];
        $this->assign($arrslist);

        $this->assign('citys', $citys);
        return view();
    }

    // 审核状态修改
    public function status()
    {
        $data = input('get.');
        // print_r($data);


        $res = $this->obj->save(['status' => $data['status']], ['id' => $data['id']]);

        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

}