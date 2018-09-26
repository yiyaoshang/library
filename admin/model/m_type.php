<?php
class m_type extends spModel{
	var $table = 'book_type';
	var $pk = 'book_type_id';
	function typeCount(){
		$typeCount = 0;
		$allType = $this->findAll();
		foreach ($allType as $type){
			if($type['book_type_parent'] != 0)
				$typeCount++;
		}
		return $typeCount;
	}
	
	function getType($parent_id = 0){
		$parentType = array('book_type_parent' => $parent_id);
		$types = $this->findAll($parentType);
		foreach($types as $k=>$type){
			if($type['book_type_id']==$type['parent_id']){
				break;
			}
			$types[$k]['ctype'] = $this->getType($type['book_type_id']);
		}
		return $types;
	}
	function addType($type_info){
		$type = $this->find($type_info);
		if(!empty($type)){
			return "该类别已存在";
		}else{
			$this->create($type_info);
			return "类别添加成功";
		}
	}
	function findType($type_id){
		$type = array('book_type_id' => $type_id);
		$type = $this->find($type);
		if(!empty($type)){
			return $type;
		}else{
			return -1;
		}
	}
}