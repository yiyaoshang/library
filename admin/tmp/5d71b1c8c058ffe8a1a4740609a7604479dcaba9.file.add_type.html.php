<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:29:58
         compiled from "./tpl/book_type/add_type.html" */ ?>
<?php /*%%SmartyHeaderCode:165305b99cba682a658-13009187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d71b1c8c058ffe8a1a4740609a7604479dcaba9' => 
    array (
      0 => './tpl/book_type/add_type.html',
      1 => 1336296454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165305b99cba682a658-13009187',
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
	
	$("#typeName").formValidator({
		onshow : "请输入类别名称",
		onfocus : "请输入类别名称",
	}).InputValidator({
		min : 1,
		onerror : "你输入的类别名称不能为空"
	});
});
</script>
<div id="Info">
<div class="table-list">
<form id="addTypeForm" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_type','a'=>'type_add'),$_smarty_tpl);?>
"
	method="post">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th colspan="5">类别信息填写</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center" width="20%">所属父类别</td>
			<td align="left"><select name="parenttype" id="parenttype"
				class="inputText">
				<option value="0" style="font-weight: bold;">作为一级父类别</option>
				<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('types')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['book_type_id'];?>
" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['type']->value['book_type_name'];?>
</option>
				<?php }} ?>
			</select></td>
		</tr>
		<tr>
			<td align="center">类别名称：</td>
			<td align="left"><input name="typeName" id="typeName"
				class="inputText" type="text" value='' /> <span id="typeNameTip"
				class="inputTip" style="width: 250px"></span></td>
		</tr>
		<tr>
			<td colspan="5" align="center"><input type='button'
				class='admin_btn' value='提交'
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
