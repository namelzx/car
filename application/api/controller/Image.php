<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\File;

class image extends Controller
{
    public function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move( 'public/uploads');
        if ($info) {
            $path = '/uploads/' . $info->getSaveName();
            // 成功上传后 返回上传信息
            return json(array('state' => 1, 'path' => $path));
        } else {
            // 上传失败返回错误信息
            return json(array('state' => 0, 'errmsg' => '上传失败'));
        }
    }
}