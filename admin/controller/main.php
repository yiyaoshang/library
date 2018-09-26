<?php
import(APP_PATH.'/controller/controller_base.php');
class main extends controller_base
{	
	function index(){
		$this->showTpl("./tpl/index.html");
	}

	function Top(){
		$this->adminInfo = $_SESSION['adminUser'];
		$this->showTpl("./tpl/Top.html");
	}

	function Left(){
		$action = spClass("m_action");
		$menus = $action->getMenu();
		//dump($menus);
		$this->menus = $menus;
		$this->showTpl("./tpl/Left.html");
	}

	function welcome(){
		$m_book = spClass("m_book");
		$m_type = spClass("m_type");
		$Info = $m_book->getBookInfo();
		$Info['typeCount'] = $m_type->typeCount();
		$this->Info = $Info;
		$this->showTpl("./tpl/welcome.html","欢迎界面");
	}
	
	function login(){
		$this->showTpl('./tpl/login.html');
	}
	
	function doLogin(){
		if ( isset($_POST['login']) ){
			$loginInfo = $_POST['login'];
			$m_admin = spClass('m_admin');
			$username = htmlspecialchars(mysql_real_escape_string($loginInfo['username']));
			$password = htmlspecialchars(mysql_real_escape_string($loginInfo['password']));
			
			$adminInfo = $m_admin->find(array('name'=>$loginInfo['username']));
			if ( !empty($adminInfo) ){
				if ( $adminInfo['password'] != md5($loginInfo['password']) ){
					$this->showmessage('登录失败，密码错误',spUrl('main','login'));
				}else {
					unset($adminInfo['password']);
					$_SESSION['adminUser'] = $adminInfo;
					$ip = isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'127.0.0.1';
					$m_admin->update(array('id'=>$adminInfo['id']),array(
								'last_login_time' => time(),
								'last_login_ip' => $ip
							));
					header('Location:'.spUrl('main','index'));
				}
			}else{
				$this->showmessage('登录失败，不存在管理员',spUrl('main','login'));
			}
		}else {
			header('Location:'.spUrl('main','login'));
			exit(0);
		}
	}
	
	function logout(){
		session_destroy();
		header('Location:'.spUrl('main','login'));
	}
}