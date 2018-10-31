<?php

namespace app\bis\controller;

use think\Controller;

class deal extends Base
{
    public function index()
    {
        // dump(session('bisaccount'));
        $data = model('deal')->getdeallist();
        $this->assign('data', $data);
        return view();
    }

    public function add()
    {
        $bisid = $this->getlogoinuser()->bis_id;
        if (request()->isPost()) {
            $data = input('post.');
            // print_r($data);
            $location = model('Bislocation')->get($data['location_ids'][0]);
            $deals = [
                'bis_id' => $bisid,
                'name' => $data['name'],
                'image' => $data['image'],
                'category_id' => $data['category_id'],
                'se_category_id' => empty($data['se_category_id']) ? '' : implode(',', $data['se_category_id']),
                'city_id' => $data['city_id'],
                'location_ids' => empty($data['location_ids']) ? '' : implode(',', $data['location_ids']),
                'start_time' => strtotime($data['start_time']),
                'end_time' => strtotime($data['end_time']),
                'total_count' => $data['total_count'],
                'origin_price' => $data['origin_price'],
                'current_price' => $data['current_price'],
                'coupons_begin_time' => strtotime($data['coupons_begin_time']),
                'coupons_end_time' => strtotime($data['coupons_end_time']),
                'description' => $data['description'],
                'notes' => strtotime($data['notes']),
                'bis_account_id' => $this->getlogoinuser()->id,
                'xpoint' => $location->xpoint,
                'ypoint' => $location->ypoint,
            ];
            $id = model('deal')->add($deals);
            if ($id) {
                $this->success('添加成功', url('deal/index'));
            } else {
                $this->error('添加失败');
            }
        } else {
            $citys = model('city')->getNormalCitysByParentId();
            $this->assign('citys', $citys);
            $category = model('category')->getNormalFirstCategory();
            $bislocation = model('Bislocation')->getNormallocationbyid($bisid);
            $this->assign('categorys', $category);
            $this->assign('bislocation', $bislocation);
            return view();
        }
    }

    public function edit()
    {
        $bisid = $this->getlogoinuser()->bis_id;
        $getid = input('get.id');

        if (request()->isPost()) {
            $data = input('post.');
            // print_r($data);
            $location = model('Bislocation')->get($data['location_ids'][0]);
            $deals = [
                'bis_id' => $bisid,
                'name' => $data['name'],
                'image' => $data['image'],
                'category_id' => $data['category_id'],
                'se_category_id' => empty($data['se_category_id']) ? '' : implode(',', $data['se_category_id']),
                'city_id' => $data['city_id'],
                'location_ids' => empty($data['location_ids']) ? '' : implode(',', $data['location_ids']),
                'start_time' => strtotime($data['start_time']),
                'end_time' => strtotime($data['end_time']),
                'total_count' => $data['total_count'],
                'origin_price' => $data['origin_price'],
                'current_price' => $data['current_price'],
                'coupons_begin_time' => strtotime($data['coupons_begin_time']),
                'coupons_end_time' => strtotime($data['coupons_end_time']),
                'description' => $data['description'],
                'notes' => strtotime($data['notes']),
                'bis_account_id' => $this->getlogoinuser()->id,
                'xpoint' => $location->xpoint,
                'ypoint' => $location->ypoint,
            ];
            $id = model('deal')->save($deals, ['id' => intval($data['id'])]);
            if ($id) {
                $this->success('更新成功', url('deal/index'));
            } else {
                $this->error('更新失败');
            }
        } else {
            $deal = model('deal')->get($getid);

            $citys = model('city')->getNormalCitysByParentId();
            $this->assign('citys', $citys);
            $category = model('category')->getNormalFirstCategory();
            $bislocation = model('Bislocation')->getNormallocationbyid($bisid);
            $assign = [
                'categorys' => $category,
                'bislocation' => $bislocation,
                'deal' => $deal
            ];
            $this->assign($assign);

            return view();
        }
    }
}
