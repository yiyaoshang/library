<?php
/**
 * 配置网站各种目录
 * 服务器引用PHP文件时使用APP_PATH
 * 客户端使用CSS,IMG等使用WEB_ROOT
 * by lancelot
 */
	define("WEB_ROOT",'http://localhost:801/library/');	//网站根目录
	define("APP_PATH",substr(__FILE__, 0,-17));				//磁盘目录
	define("CSS_PATH",WEB_ROOT."static/css/");				//CSS目录
	define("IMG_PATH",WEB_ROOT."static/img/");				//img目录
	define("CLASS_PATH",APP_PATH."static/class/");			//功能类目录
	define("SMARTY_PATH",APP_PATH."Smarty/");				//smarty目录
	
	/*smarty目录信息*/
	//------------配置服务器信息
		$dbhost 	= "localhost";	//配置主机
		$dbuser 	= "book_01";		//配置用户名
		$dbpassword = "book_01";		//配置密码
		$dbname 	= "lib";		//使用数据库
		$dbcoding 	= "utf8";		//设置字符集
	//------------配置smarty目录信息----------
		$smarty_config_dir 		= SMARTY_PATH.'Config_File.class.php';	//目录文件
		$smarty_caching 		= false;								//是否启用缓存
		$smarty_cache_dir 		= APP_PATH.'/cache/';					//缓存目录
		$smarty_cache_lifetime 	= '';									//缓存文件生存期
		$smarty_template_dir 	= APP_PATH.'templates/';				//模板目录
		$smarty_compile_dir 	= APP_PATH.'templates_c';				//编译目录
		$smarty_delimiter 		= explode('|', '{[|]}');				//左右分界符
?>