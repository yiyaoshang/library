<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:29:17
         compiled from "./tpl/Left.html" */ ?>
<?php /*%%SmartyHeaderCode:70845b99cb7dad4ad5-61839727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c3281eb6bfc900cc3908635e0d8a850ef14488' => 
    array (
      0 => './tpl/Left.html',
      1 => 1369108298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70845b99cb7dad4ad5-61839727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理页面</title>

<script src="<?php echo $_smarty_tpl->getVariable('JS_PATH')->value;?>
prototype.lite.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('JS_PATH')->value;?>
moo.fx.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('JS_PATH')->value;?>
moo.fx.pack.js" type="text/javascript"></script>
<style>
body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}
#container {
	width: 182px;
}
H1 {
	font-size: 12px;
	margin: 0px;
	width: 182px;
	cursor: pointer;
	height: 30px;
	line-height: 20px;	
}
H1 a {
	display: block;
	width: 182px;
	color: #000;
	height: 30px;
	text-decoration: none;
	moz-outline-style: none;
	background-image: url(<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/menu_bgs.gif);
	background-repeat: no-repeat;
	line-height: 30px;
	text-align: center;
	margin: 0px;
	padding: 0px;
}
.content{
	width: 182px;
	height: 26px;
	
}
.MM ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	display: block;
}
.MM li {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	list-style-type: none;
	display: block;
	text-decoration: none;
	height: 26px;
	width: 182px;
	padding-left: 0px;
}
.MM {
	width: 182px;
	margin: 0px;
	padding: 0px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
}
.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/menu_bg1.gif);
	background-repeat: no-repeat;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
.MM a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #006600;
	background-image: url(<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/menu_bg2.gif);
	background-repeat: no-repeat;
	text-align: center;
	display: block;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
</style>
</head>

<body>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top">
	<div id="container">
	  <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menus')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
?>
      <h1 class="type">
		<a>
		<?php if (!empty($_smarty_tpl->tpl_vars['menu']->value['action_chinese_name'])){?>
			<?php echo $_smarty_tpl->tpl_vars['menu']->value['action_chinese_name'];?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['menu']->value['a'];?>

		<?php }?>
		</a>
	  </h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
admin/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		   <?php  $_smarty_tpl->tpl_vars['cmenu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['childAction']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cmenu']->key => $_smarty_tpl->tpl_vars['cmenu']->value){
?>
          <li><a href="?c=<?php echo $_smarty_tpl->tpl_vars['cmenu']->value['action_controller'];?>
&a=<?php echo $_smarty_tpl->tpl_vars['cmenu']->value['action_a'];?>
" target="main">
			<?php if (!empty($_smarty_tpl->tpl_vars['cmenu']->value['action_chinese_name'])){?>
				<?php echo $_smarty_tpl->tpl_vars['cmenu']->value['action_chinese_name'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['cmenu']->value['a'];?>

			<?php }?>
		  </a></li>
		  <?php }} ?>
        </ul>
      </div>  
	  <?php }} ?>
    </div>
	</td>
  </tr>
</table>
<script type="text/javascript">
var contents = document.getElementsByClassName('content');
var toggles = document.getElementsByClassName('type');

var myAccordion = new fx.Accordion(
	toggles, contents, {opacity: true, duration: 400}
);
myAccordion.showThisHideOpen(contents[0]);
</script>
</body>
</html>
