<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/1
 * Time: 9:44 PM
 */

namespace app\index\controller;

use app\common\model\Carbrand;
use app\common\model\Carinfo;
use app\common\model\Carmodels;
use app\common\model\Category;
use think\Controller;

/**
 * 汽配保养
 * @package app\index\controller
 */
class Maintenance extends Controller
{
    public function index()
    {
        return view();
    }

    public function indexdata()
    {
        $data = Category::all();
        return json($data);
    }

    public function choose()
    {
        return view();
    }

    public function choosedata()
    {
        $res = Carbrand::GetDataBylist();
        return json($res);
    }
    //获取车型
    public function carmodels()
    {
        $data=input('param.');
        $res = Carmodels::where('mid',$data['id'])->select();
        return json($res);
    }
    //获取年份
    public function carinfo(){
        $data=input('param.');
        $res=Carinfo::where('ModelsID',$data['id'])->select();
        return json($res);
    }

    /*
     * 下单
     */
}