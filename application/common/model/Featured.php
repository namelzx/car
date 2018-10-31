<?php

namespace app\common\model;

use think\Model;

class featured	 extends BaseModel
{

 	// 获取入驻商家列表
 	public function getfeaturedlist($data=[])
 	{
 	
 			$data['status']	=	['neq',-1];
 		$oreder	=	['id'=>'desc'];
 		$res	=	$this->where($data)->order($oreder)->paginate(10);
 		// echo $this->getlastSql();
 		return $res;

 	}
    
    
    
}
