<?php
require_once 'global.php';
if ( isset($_GET['bid']) && is_numeric($_GET['bid'])){
	$id = $_GET['bid'];
	$sql = "SELECT * FROM `book_info` WHERE `info_book_id` = $id";
	$rs = $mysql->query($sql);
	$content = $mysql->fetch_array($rs);
	$assgin['content'] = $content;
	
	$smarty->assign($assgin);//ע��ģ�����
	$smarty->display('desc.html');
}else{
	echo "<script type='text/javascript'>window.location.href='index.php'</script>";
	echo 'ACESS DENIED!';
	die;
}
?>