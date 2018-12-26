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
            $excel = request()->file('excel')->getInfo();
            $objPHPExcel = \PHPExcel_IOFactory::load($excel['tmp_name']);
            $arrExcel = $objPHPExcel->getSheet(0)->toArray();//获取其中的数据
            for ($i = 1; $i < count($arrExcel); $i++) {

                //第一步查询品牌是否存在
                $carbrand = db('carbrand')->where('brand', $arrExcel[$i][1])->find();
                if ($carbrand) { //品牌存在
                    //第二步查询厂商是否存在
                    $manufactor = db('manufactor')
                        ->where('manufactor', $arrExcel[$i][2])
                        ->find();//查看厂商是否存在
                    if ($manufactor) { //厂商存在
                        //查询车系是否存在
                        $carmodels = db('carmodels')
                            ->where('model', $arrExcel[$i][3])
                            ->find(); // 查看车型是否存在
                        if ($carmodels) { //车系存在
                            $carinfodata = [
                                'year' => $arrExcel[$i][4],
                                'name' => $arrExcel[$i][5],
                                'ModelsID' => $carmodels['id']
                            ];
                            db('carinfo')->insertGetId($carinfodata);

                        } else {//车系不存在

                            $carmodelsdata = [
                                'model' => $arrExcel[$i][3],
                                'mid' => $manufactor['id']
                            ];
                            db('carmodels')->insertGetId($carmodelsdata);
                        }
                    } else { //查看厂商不存在
                        $carbranddata = [
                            'manufactor' => $arrExcel[$i][2],
                            'brindid' => $carbrand['id'] //品牌id
                        ];
                        db('manufactor')->insertGetId($carbranddata);

                    }
                } else { //品牌不存在

                    $carbranddata = [
                        'brand' => $arrExcel[$i][1]
                    ];
                    //当品牌不存在那么添加品牌
                    db('carbrand')->insertGetId($carbranddata);

                }

            }
            return json('添加成功');
        }
        return view();

    }
}
