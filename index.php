<?php
/**
 *��վ��ҳ
 *by lancelot
 */
require_once('global.php');
require_once(CLASS_PATH.'pager.php');

	$nowPage = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
	$pager = new pager(21,$mysql);
	$page = $pager->createPager($nowPage,'book_info');
	if ( isset($_GET['searchSubmit']) ){
		$searchContent = empty($_GET['searchContent']) ? NULL : $_GET['searchContent'];
		$sql = "SELECT * FROM `book_info` WHERE `info_book_name` LIKE '%$searchContent%' limit 20" ;
	}else{
		$sql = $pager->getSql();//��ȡ�����sql��䣬�Ա��ѯ���
	}
	
	$rs = $mysql->query($sql);
	while ( $re[] = $mysql->fetch_array($rs)){}
	
	$assgin['page'] = $page;
	$assgin['content'] = $re;
	
	$smarty->assign($assgin);//ע��ģ�����
	$smarty->display('index.html');//��ʾģ��
?>