<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:19:36
         compiled from "E:\www\library\admin/tpl\showmessage.html" */ ?>
<?php /*%%SmartyHeaderCode:158155b99c9387bac37-21365688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '986f42d72b21633b2a6bc6420f107bd9f5e01b3b' => 
    array (
      0 => 'E:\\www\\library\\admin/tpl\\showmessage.html',
      1 => 1336043960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158155b99c9387bac37-21365688',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->getVariable('waitSeconds')->value;?>
;url=<?php echo $_smarty_tpl->getVariable('jumpUrl')->value;?>
" />
<script type="text/javascript">
</script>
<title>消息提示</title>
</head>
<body>
<div
	style="text-align: center; border: #B5ECE8 2px dashed; width: 30%; height: 150px; margin: 100px auto;">
<table width="100%" cellpadding="3" cellspacing="0" align="center">
	<tr bgcolor="#cceeff">
		<td style="text-align: center">消息提示</td>
	</tr>
	<tr>
		<td>
		<p style="padding-top: 10px;">
		<div style="text-align: center"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</div>
		<div style="text-align: center">页面将在 <?php echo $_smarty_tpl->getVariable('waitSeconds')->value;?>
 后进行跳转</div>
		<div style="text-align: center">如果您的浏览器没有反应，请点击<a
			href="<?php echo $_smarty_tpl->getVariable('jumpUrl')->value;?>
">这里</a></div>
		</p>
		</td>
	</tr>
</table>
</div>
</body>
</html>
