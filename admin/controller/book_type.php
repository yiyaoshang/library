<?php
import(APP_PATH.'/controller/controller_base.php');
define('book_type_tpl','./tpl/book_type/');
class book_type extends controller_base{
	function type_index(){
		$m_type = spClass("m_type");
		$types = $m_type->getType();
		//dump($types);
		$this->types = $types;
		$this->showTpl(book_type_tpl."types_index.html","类别管理");
	}
	function add_type(){
		$m_type = spClass("m_type");
		$types = $m_type->getType();
		$this->types = $types;
		$this->showTpl(book_type_tpl."add_type.html","类别添加");
	}
	function type_add(){
		$m_type = spClass("m_type");
		$type_info = array(	'book_type_parent' => $this->spArgs('parenttype'),
							'book_type_name' => $this->spArgs('typeName'));
		$result = $m_type->addType($type_info);
		$this->showmessage($result,spUrl('book_type','type_index'));
	}
	function edit_type(){
		$m_type = spClass("m_type");
		$types = $m_type->getType();
		$this->types = $types;
		$type = $m_type->findType($this->spArgs('type_id'));
		if($type != -1){
			$this->type = $type;
			$this->showTpl(book_type_tpl."edit_type.html","类别编辑");
		}else{
			$this->showmessage("该类别不存在！");
		}
	}
	function type_edit(){
		$type_id = array('book_type_id' => $this->spArgs('type_id'));
		$type_new = array(  'book_type_parent' => $this->spArgs('parenttype'),
							'book_type_name' => $this->spArgs('typeName'));
		$m_type = spClass("m_type");
		$result = $m_type->update($type_id,$type_new);
		if($result == 1)
			$this->showmessage("修改类别成功",spUrl("book_type","type_index"));
		else
			$this->showmessage("修改类别失败");
	}
	function del_type(){
		$type = array('book_type_id' => $this->spArgs('type_id'));
		$m_type = spClass("m_type");
		$result = $m_type->delete($type);
		if($result == 1)
			$this->showmessage('类别删除成功',spUrl("book_type","type_index"));
		else
			$$this->showmessage('类别删除失败');
	}
}