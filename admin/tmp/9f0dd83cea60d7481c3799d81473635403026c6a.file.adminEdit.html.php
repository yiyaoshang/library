<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:56:34
         compiled from "./tpl/admin_manage/adminEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:232155b99d1e2d86af4-93698387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0dd83cea60d7481c3799d81473635403026c6a' => 
    array (
      0 => './tpl/admin_manage/adminEdit.html',
      1 => 1369131050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232155b99d1e2d86af4-93698387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_HEADER')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<link type="text/css" rel="stylesheet"
	href="<?php echo $_smarty_tpl->getVariable('PLUGIN_PATH')->value;?>
formValidator/style/validator.css"></link>
<script type="text/javascript"
	src="<?php echo $_smarty_tpl->getVariable('PLUGIN_PATH')->value;?>
formValidator/formValidator_min.js"></script>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({
		onError : function(msg) {
			alert(msg);
		}
	});
	
	$("#adminName").formValidator({
		onshow : "请输入管理员名称",
		onfocus : "请输入管理员名称",
	}).InputValidator({
		min : 1,
		onerror : "管理员名称不能为空"
	});
	$("#realName").formValidator({
		onshow : "请输入管理员真实姓名",
		onfocus : "请输入管理员真实姓名",
	})
	$("#password").formValidator({
		onshow : "不修改密码请留空",
		onfocus : "请输入密码",
	});
});
</script>
<div id="Info">
<div class="table-list">
<form id="addTypeForm" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin_manage','a'=>'doadminEdit','id'=>$_smarty_tpl->getVariable('adminInfo')->value['id']),$_smarty_tpl);?>
"
	method="post" name="adminEdit">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th colspan="5">添加管理员</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center">管理员用户名：</td>
			<td align="left">
				<input name="adminEdit[adminName]" id="adminName" class="inputText" type="text" value='<?php echo $_smarty_tpl->getVariable('adminInfo')->value['name'];?>
' />
				<span id="adminNameTip" class="inputTip" style="width: 250px"></span>
			</td>
		</tr>
		<tr>
			<td align="center">真实姓名：</td>
			<td align="left">
				<input name="adminEdit[realName]" id="realName" class="inputText" type="text" value='<?php echo $_smarty_tpl->getVariable('adminInfo')->value['realname'];?>
' />
				<span id="realNameTip" class="inputTip" style="width: 250px"></span>
			</td>
		</tr>
		<tr>
			<td align="center">密码：</td>
			<td align="left"><input name="adminEdit[password]" id="password"
				class="inputText" type="password" value='' /> <span id="passwordTip"
				class="inputTip" style="width: 250px"></span></td>
		</tr>
		
		<tr>
			<td colspan="5" align="center"><input type='button'
				class='admin_btn' value='修改'
				onclick="javascript:if(jQuery.formValidator.PageIsValid('1')){document.getElementById('addTypeForm').submit();}" />
			</td>
		</tr>
	</tbody>
</table>
</form>
</div>
</div>
<!--list table end-->
</td>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_END')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
