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

        echo "车之界主后台";

    }

    public function map()
    {
        return \Map::staticimage("北京昌平");
    }
}
