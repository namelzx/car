<?php

namespace app\admin\controller;

use app\common\model\category as categoryModel;
use think\Request;

class category extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    private $obj;

    // 初始化模型
    public function _initialize()
    {
        $this->obj = model("category");
    }
    public function index()
    {
        $parent_id = input('param.parent_id', 0, 'intval');
        $res = categoryModel::getFirstCategorys($parent_id);
        $this->assign('res', $res);
        return view();
    }

    public function add()
    {
        $category = categoryModel::getNormalFirstCategory();
        $this->assign('categorys', $category);
        return view();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request)
    {

        // 严格校验
        if (!request()->isPost()) {
            # code...
            $this->error('请求失败');
        }

        $data = input('post.');

        if (!empty($data['id'])) {
            return categoryModel::update($data);
            # code...
        }
        // $data['cname'] = $data['name'];
        $res = categoryModel::strict(false)->insert($data);
        if ($res) {
            $this->success('新增成功');
        } else {
            $this->error('添加失败');
        }
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
        if (intval($id) < 1) {
            $this->error('参数不合法');
        }
        // 主要是主键就可以获取
        $category = $this->obj->get($id);
        $categorys = $this->obj->getNormalFirstCategory();
        $assign = [
            'categorys' => $categorys,
            'category' => $category,

        ];
        $this->assign($assign);
        return view();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update($data)
    {
        $res = $this->obj->save($data, ['id' => intval($data['id'])]);
        if ($res) {
            $this->success('更新成功');
        } else {

            $this->error('更新失败');
        }
        //
    }


    public function listoreder($id, $listoreder)
    {
        echo $id . "<br/>";
        echo $listoreder . "<br/>";
        $res = $this->obj->save(['listoreder' => $listoreder], ['id' => $id]);
        if ($res) {
            $this->result($_SERVER['HTTP_REFERER'], 1, 'success');
        } else {
            $this->result($_SERVER['HTTP_REFERER'], 0, 'error');
        }
    }

    public function status()
    {
        $data = input('param.');
        // print_r($data);

//        $validate = validate('Category');
//        if (!$validate->scene('status')->check($data)) {
//            $this->error($validate->getError());//调用validate文件下面的验证方法
//        }
        $res = categoryModel::update(['status' => $data['status']], ['id' => $data['id']]);

        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

    public function towindex()
    {
        $data = input('param.');
        $res = db('category_tow')->where('category_id', $data['category_id'])->paginate();
        $assing=[
            'category_id'=>$data['category_id'],
            'res'=>$res
        ];
        $this->assign($assing);
        return view();
    }

    public function towadd()
    {
        $data = input('param.');
        $this->assign('category_id', $data['category_id']);
        return view();
    }
    public function towsave(){
        $data=input('param.');
        $data['create_time']=time();
        $res = db('category_tow')->strict(false)->insert($data);
        if ($res) {
            $this->success('新增成功');
        } else {
            $this->error('添加失败');
        }

    }
}
