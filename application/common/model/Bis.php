<?php

namespace app\common\model;

use think\Model;

class Bis extends BaseModel
{

 	// 获取入驻商家列表
 	public function getbisbylist($status=0)
 	{
 	
 			$data = [
				'status' => $status,
			
			];
			// 排序
			$order = [
				'id' => 'desc',
			];
       $result	= $this->where($data)
       ->order($order)
       ->paginate(15);



       return $result;

 	}
    
    
    
}
