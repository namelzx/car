<?php

namespace app\bis\controller;

use think\Controller;

class Base extends Controller
{
    public $account;

    public function _initialize()
    {

        $islogin = $this->islogin();
        if (!$islogin) {
            return $this->redirect(url('login/index'));
        }

        // 判断用户是否登录
    }

    public function islogin()
    {
        $user = $this->getlogoinuser();
        if ($user && $user->id) {
            return true;

        }
        return false;

    }

    public function getlogoinuser()
    {

        if (!$this->account) {
            $this->account = session('bisaccount', '', 'bis');
        }
        return $this->account;
    }

    public function status()
    {
        $data = input('get.');
        dump($data);
        if (empty($data['id'])) {
            $this->error('id不合法');
        }
        if (!is_numeric($data['status'])) {

            $this->error('status不合法');
        }
        // 获取控制器
        $model = request()->controller();

        $res = model($model)->save(['status' => $data['status']], ['id' => $data['id']]);

        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }
}
