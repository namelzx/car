<?php

namespace app\bis\controller;


class location extends Base
{


    public function index()
    {
        // 获取一级城市
        $bisid = 25;
        $Bislocation = model('Bislocation')->getlocationlist(25);
        $this->assign('Bislocation', $Bislocation);
        return view();
    }

    public function add()
    {
        $bisid = 25;
        if (request()->isPost()) {

            $data = input('post.');


            // 门店入库操作
            // 总店相关信息入库
            if (!empty($data['se_category_id'])) {

                $data['cat'] = $data['se_category_id'];
            }
            $langlat = \Map::getLngLat($data['address']);
            $locationData = [
                'bis_id' => $bisid,
                'name' => $data['name'],
                'logo' => $data['logo'],
                'tel' => $data['tel'],
                'contact' => $data['contact'],
                'category_id' => $data['category_id'],
                'category_path' => empty($data['se_category_id']) ? '' : implode(',', $data['cat']),
                'city_id' => $data['city_id'],
                'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'] . ',' . $data['se_city_id'],
                'api_address' => $data['address'],
                'open_time' => $data['open_time'],
                'content' => empty($data['content']) ? '' : $data['content'],
                'is_main' => 0,// 代表的是总店信息
                'xpoint' => $langlat['result']['location']['lng'],
                'ypoint' => $langlat['result']['location']['lat'],

            ];
            $locationda = model('Bislocation')->add($locationData);
            if ($locationda) {

                return $this->success("门店申请成功");
            } else {
                return $this->error("门店申请失败");
            }


        } else {

            // 获取一级城市
            $citys = model('city')->getNormalCitysByParentId();
            $this->assign('citys', $citys);
            $category = model('category')->getNormalFirstCategory();
            $bislocation = model('Bislocation')->getNormallocationbyid($bisid);
            $this->assign('citys', $citys);
            $this->assign('categorys', $category);

            return view();
        }
    }


    public function status()
    {
        $data = input('get.');

        // print_r($data);

        //
        $locationdata = model('bislocation')->save(['status' => $data['status']], ['id' => $data['id']]);
        if ($locationdata) {
            // status 1 通过 status 2 不通过 －1软删除   有需要的话可以参照商户入申请一样申请结果发送邮件给用户

            $this->success('更新成功');
        } else {
            $this->error('更新失败');
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