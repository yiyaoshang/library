<?php
/**
 * ������վ����Ŀ¼
 * ����������PHP�ļ�ʱʹ��APP_PATH
 * �ͻ���ʹ��CSS,IMG��ʹ��WEB_ROOT
 * by lancelot
 */
	define("WEB_ROOT",'http://localhost:801/library/');	//��վ��Ŀ¼
	define("APP_PATH",substr(__FILE__, 0,-17));				//����Ŀ¼
	define("CSS_PATH",WEB_ROOT."static/css/");				//CSSĿ¼
	define("IMG_PATH",WEB_ROOT."static/img/");				//imgĿ¼
	define("CLASS_PATH",APP_PATH."static/class/");			//������Ŀ¼
	define("SMARTY_PATH",APP_PATH."Smarty/");				//smartyĿ¼
	
	/*smartyĿ¼��Ϣ*/
	//------------���÷�������Ϣ
		$dbhost 	= "localhost";	//��������
		$dbuser 	= "book_01";		//�����û���
		$dbpassword = "book_01";		//��������
		$dbname 	= "lib";		//ʹ�����ݿ�
		$dbcoding 	= "utf8";		//�����ַ���
	//------------����smartyĿ¼��Ϣ----------
		$smarty_config_dir 		= SMARTY_PATH.'Config_File.class.php';	//Ŀ¼�ļ�
		$smarty_caching 		= false;								//�Ƿ����û���
		$smarty_cache_dir 		= APP_PATH.'/cache/';					//����Ŀ¼
		$smarty_cache_lifetime 	= '';									//�����ļ�������
		$smarty_template_dir 	= APP_PATH.'templates/';				//ģ��Ŀ¼
		$smarty_compile_dir 	= APP_PATH.'templates_c';				//����Ŀ¼
		$smarty_delimiter 		= explode('|', '{[|]}');				//���ҷֽ��
?>