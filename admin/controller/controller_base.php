<?php
	define('img_path','tpl/image/');
	define('plugin_path','tpl/plugin/');
	define('js_path','tpl/js/');
	define('css_path','tpl/css/');
	define('comm_header','tpl/commhead.html');
	define('comm_end','tpl/commend.html');
class controller_base extends spController{
	
	function __construct(){
		parent::__construct();
		$action = $this->spArgs('a');
		if ( !isset($_SESSION['adminUser']) && ($action != 'login' && $action != 'doLogin') ){
			header('Location:'.spUrl('main','login'));
			exit(0);
		}
	}
	
	function showTpl($tpl,$title = NULL){
		$this->IMAGES_PATH = img_path;
		$this->PLUGIN_PATH = plugin_path;
		$this->JS_PATH = js_path;
		$this->CSS_PATH = css_path;
		$this->APP_PATH = APP_PATH;
		$this->COMM_HEADER = comm_header;
		$this->COMM_END = comm_end;
		if($title != NULL)
			$this->title = $title;
		$this->display($tpl);
	}
	
	function showmessage($msg = "操作成功", $jumpUrl="",$waitSeconds="3") {
		if(empty($jumpUrl)){
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
			echo "<script type='text/javascript'>alert('$msg');history.go(-1);</script>";
			die();
		}
		$this->msg = $msg;
		$this->waitSeconds = $waitSeconds;
		$this->jumpUrl = $jumpUrl;
		$this->display("showmessage.html");
		exit;
	}
}