<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 05:04:00
         compiled from "./tpl/Top.html" */ ?>
<?php /*%%SmartyHeaderCode:285155b99d3a0a8ee98-53006760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098397c931531642deeceba501c65a5a938ddc86' => 
    array (
      0 => './tpl/Top.html',
      1 => 1536807527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285155b99d3a0a8ee98-53006760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<html>
<head>
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 - 管理页面</title>
<script language=JavaScript>
function logout(){
	return confirm("您确定要退出么？");
}
</script>
<script language="JavaScript">
function showsubmenu(sid) {
	var whichEl = eval("submenu" + sid);
	var menuTitle = eval("menuTitle" + sid);
	if (whichEl.style.display == "none"){
		eval("submenu" + sid + ".style.display=\"\";");
	}else{
		eval("submenu" + sid + ".style.display=\"none\";");
	}
}
</script>
<meta http-equiv=Content-Type content=text/html;charset=gbk>
<script language=JavaScript1.2>
function showsubmenu(sid) {
	var whichEl = eval("submenu" + sid);
	var menuTitle = eval("menuTitle" + sid);
	if (whichEl.style.display == "none"){
		eval("submenu" + sid + ".style.display=\"\";");
	}else{
		eval("submenu" + sid + ".style.display=\"none\";");
	}
}
</script>
<base target="main">
<link href="<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/skin.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0">
<table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg">
  <tr>
    <td width="73%" height="64"><!--<img src="<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/logo.gif" width="262" height="64">--></td>
    <td width="27%" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td  height="38" class="admin_txt">
        	你好，管理员<?php echo $_smarty_tpl->getVariable('adminInfo')->value['name'];?>
，欢迎来到图书馆管理系统
        </td>
        <td height="38" class="admin_txt">
        	<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'logout'),$_smarty_tpl);?>
" onClick="return logout()" target="_parent">
        	<img src="<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/out.gif" alt="安全退出" width="46" height="20" border="0" />
        	</a>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
