<?php
/**
 * 包含配置及mysql类，smarty
 * 实例化类
 * by lancelot
 */
	include_once('config/config.php');
	include_once(CLASS_PATH.'mysql.php');
	include_once(SMARTY_PATH.'Smarty.class.php');
	
	//---------------割一下-------------------------
	$mysql = new mysql($dbhost, $dbuser, $dbpassword, $dbname, $dbcoding);
	
	//---------------smarty-------------------------
	$smarty = new Smarty();
	$assgin = array();//注册模板变量数组
	
	$smarty->config_dir 	 = $smarty_config_dir;
	$smarty->caching 		 = $smarty_caching;
	$smarty->cache_dir 		 = $smarty_cache_dir;
	$smarty->cache_lifetime  = $smarty_cache_lifetime;
	$smarty->template_dir 	 = $smarty_template_dir;
	$smarty->compile_dir 	 = $smarty_compile_dir;
	$smarty->left_delimiter  = $smarty_delimiter[0];
	$smarty->right_delimiter = $smarty_delimiter[1];
	
	/*公用模板变量*/
	$assgin['css_path'] = CSS_PATH;
	$assgin['img_path'] = IMG_PATH;
	$assgin['web_root'] = WEB_ROOT;
?>