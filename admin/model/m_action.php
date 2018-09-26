<?php
class m_action extends spModel{
	var $pk = 'action_id';
	var $table = 'action';
	function getMenu($parent_id = 0){
		$parentAction = array('parent_id' => $parent_id);
		$menus = $this->findAll($parentAction);
		foreach($menus as $k=>$action){
			if($action['action_id']==$action['parent_id']){
				break;
			}
			$menus[$k]['childAction'] = $this->getMenu($action['action_id']);
		}
		return $menus;
	}
}