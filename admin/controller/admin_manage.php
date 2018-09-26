<?php
/**
 * @name admin_manage.php
 * @author lancelot <lancelot1215@gmail.com>
 * Date 2013-5-21 
 * Encoding UTF-8
 */
import(APP_PATH.'/controller/controller_base.php');
define('admin_manage_tpl','./tpl/admin_manage/');
class admin_manage extends controller_base{
	
	public function adminAdd(){
		$this->showTpl(admin_manage_tpl.'adminAdd.html');
	}
	
	public function doAdminAdd(){
		if ( isset($_POST['adminAdd']) ){
			$m_admin = spClass('m_admin');
			$adminAdd = $_POST['adminAdd'];
			$adminName = $this->clear($adminAdd['adminName']);
			$realName = $this->clear($adminAdd['realName']);
			$password = md5($adminAdd['password']);
			
			if ( $m_admin->find(array('name'=>$adminName)) ){
				$this->showmessage("添加管理员失败，管理员已存在。",spUrl("admin_manage","adminAdd"));
			}else{
				$adminInfo = array('name'=>$adminName,'realname'=>$realName,'password'=>$password);
				$m_admin->create($adminInfo);
				$this->showmessage("添加管理员成功",spUrl("admin_manage","adminAdd"));
			}
			
		}else{
			header('Location:'.spUrl('admin_manage','adminList'));
		}
	}
	
	private function clear($input){
		return htmlspecialchars(mysql_real_escape_string($input));
	}
	
	public function adminList(){
		$m_admin = spClass('m_admin');
		$this->adminsInfo = $m_admin->findAll();
		$this->showTpl(admin_manage_tpl.'adminList.html');
	}
	
	public function adminEdit(){
		$id = $this->spArgs('id',0);
		if ( $id == 0 || !is_numeric($id) ){
			header('Location:'.spUrl('admin_manage','adminList'));
		}
		
		$m_admin = spClass('m_admin');
		$this->adminInfo = $m_admin->find(array('id'=>$id));
		$this->showTpl(admin_manage_tpl.'adminEdit.html');
		
	}
	
	public function doAdminEdit(){
		$id = $this->spArgs('id',0);
		if ( $id == 0 || !is_numeric($id) ){
			header('Location:'.spUrl('admin_manage','adminList'));
		}
		
		if ( isset($_POST['adminEdit']) ){
			$m_admin = spClass('m_admin');
			$info = $_POST['adminEdit'];
			
			$updateInfo = array('name' => $info['adminName'],
						'realname' => $info['realName']);
			if ( !empty($info['password']) ){
				$updateInfo['password'] = md5($info['password']);
			}
			
			$m_admin->update(array('id'=>$id),$updateInfo);
			$this->showmessage('修改管理员信息成功',spUrl('admin_manage','adminList'));
		}else{
			header('Location:'.spUrl('admin_manage','adminList'));
		}
	}
	
	public function doAdminDel(){
		$id = $this->spArgs('id',0);
		$m_admin = spClass('m_admin');
		
		if ( $id == 0 || !is_numeric($id) ){
			header('Location:'.spUrl('admin_manage','adminList'));
		}
		
		$m_admin->delete(array('id'=>$id));
	}
}
?>