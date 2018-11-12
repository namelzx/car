<?php

namespace app\bis\controller;

use think\Controller;

class register extends Controller
{


    public function index()
    {
        // 获取一级城市
        $citys = model('city')->getNormalCitysByParentId();
        $this->assign('citys', $citys);
        $category = model('category')->getNormalFirstCategory();

        $this->assign('category', $category);
        return view();
    }
    public function add()
    {
        $data = input('post.');
        if (!request()->isPost()) {
            $this->error('请求错误');
        }
        // 获取表单值
        $data = input('post.');
//        $validate = validate('bis');
//        if (!$validate->scene('add')->check($data)) {
//            $this->error($validate->getError());
//        }
        // 获取经纬度
        // $langlat =	\Map::getLangLat($data['address']);
        $langlat = \Map::getLngLat($data['address']);
//        return json($langlat);
        $accountname = Model('BisAccount')->get(['username' => $data['username']]);
        if ($accountname) {
            $this->error('该用户存在，请重新分配');
        }


        // 商户基本信息入库
        $bisData = [
            'name' => $data['name'],
            'city_id' => $data['city_id'],
            'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'] . ',' . $data['se_city_id'],
            'logo' => $data['logo'],
            'licenece_logo' => $data['licenece_logo'],
            'description' => empty($data['description']) ? '' : $data['description'],
            'bank_info' => $data['bank_info'],
            'bank_user' => $data['bank_user'],
            'bank_name' => $data['bank_name'],
            'faren' => $data['faren'],
            'faren_tel' => $data['faren_tel'],
            'email' => $data['email'],
            'status' => 0, //申请状态中
        ];
        $bisid = model('Bis')->add($bisData);

        // 总店信息

//        if (!empty($data['se_category_id'])) {
//
//            $data['cat'] = $data['se_category_id'];
//        }
// 商户总店基本信息
        $locationData = [
            'bis_id' => $bisid,
            'name' => $data['name'],
             'logo' => $data['logo'],
            'tel' => $data['tel'],
            'contact' => $data['contact'],
//            'category_id' => $data['category_id'],
//            'category_path' => empty($data['se_category_id']) ? '' : implode(',', $data['cat']),
            'city_id' => $data['city_id'],
            'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'] . ',' . $data['se_city_id'],
            'api_address' => $data['address'],
//            'open_time' => $data['open_time'],
            'content' => empty($data['content']) ? '' : $data['content'],
            'is_main' => 1,// 代表的是总店信息
            'xpoint' => $langlat['result']['location']['lng'],
            'ypoint' => $langlat['result']['location']['lat'],

        ];
        $locationid = model('Bis_location')->add($locationData);

        // 账户相关检验
        // 自动生成 密码的加盐字符串
        $data['code'] = mt_rand(100, 1000000);
        $accounData = [

            'bis_id' => $bisid,
            'username' => $data['username'],
            'code' => $data['code'],
            'password' => md5($data['password'] . $data['code']),
            'is_main' => 1,//代表总管理员

        ];

        $accountID = model('bisaccount')->add($accounData);
        if (!$accountID) {
            $this->error('申请失败');
        }

    }

    public function waiting($id)
    {
        if (empty($id)) {
            $this->error('错误链接');
        }
        $detail = model('bis')->get($id);
        $this->assign('detail', $detail);
        return view();


    }


}