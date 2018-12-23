<?php

namespace app\admin\controller;

class Index extends Base
{
    public function index()
    {
        return view();
    }

    public function welcome()
    {
        if (request()->isPost()) {

        }
        return view();
    }

    public function map()
    {
        return \Map::staticimage("北京昌平");
    }

    public function excel()
    {
        if (request()->isPost()) {
            $excel=request()->file('excel')->getInfo();
            $objPHPExcel=\PHPExcel_IOFactory::load($excel['tmp_name']);
            $arrExcel = $objPHPExcel->getSheet(0)->toArray();//获取其中的数据
            return json($arrExcel);
        }
        return view();

    }
}
