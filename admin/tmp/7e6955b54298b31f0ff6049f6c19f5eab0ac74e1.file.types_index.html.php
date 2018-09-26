<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:54:56
         compiled from "./tpl/book_type/types_index.html" */ ?>
<?php /*%%SmartyHeaderCode:126685b99d180b78da4-76617725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e6955b54298b31f0ff6049f6c19f5eab0ac74e1' => 
    array (
      0 => './tpl/book_type/types_index.html',
      1 => 1336298270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126685b99d180b78da4-76617725',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_HEADER')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="Info">
	<div class="table-list">
		<table width="100%" cellspacing="0" id="tree">
			<thead>
				<tr>
					<th width="10%">id</th>
					<th width="40%">书籍类别名</th>
					<th width="40%">书籍父类别名</th>
					<th width="10%">管理操作</th>
				</tr>
			</thead>
			<tbody>
			<form action="?m=admin&c=type&a=sort" method="post" id="sortForm">
			<?php  $_smarty_tpl->tpl_vars['typeItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('types')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['typeItem']->key => $_smarty_tpl->tpl_vars['typeItem']->value){
?>
				<tr id="type_<?php echo $_smarty_tpl->tpl_vars['typeItem']->value['book_type_id'];?>
">
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['typeItem']->value['book_type_id'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['typeItem']->value['book_type_name'];?>
</td>
					<td></td>
					<td align="center">
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_type','a'=>'edit_type'),$_smarty_tpl);?>
&type_id=<?php echo $_smarty_tpl->tpl_vars['typeItem']->value['book_type_id'];?>
">修改</a> 
						| <a href="javascript:confirmurl('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_type','a'=>'del_type'),$_smarty_tpl);?>
&type_id=<?php echo $_smarty_tpl->tpl_vars['typeItem']->value['book_type_id'];?>
','你真的要删除【<?php echo $_smarty_tpl->tpl_vars['typeItem']->value['book_type_name'];?>
】类别么')">删除</a>
					</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['ctypeItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['typeItem']->value['ctype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ctypeItem']->key => $_smarty_tpl->tpl_vars['ctypeItem']->value){
?>
				<tr id="type_<?php echo $_smarty_tpl->tpl_vars['ctypeItem']->value['type_id'];?>
" class="child-of-type_<?php echo $_smarty_tpl->tpl_vars['typeItem']->value['type_id'];?>
">
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['ctypeItem']->value['book_type_id'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['ctypeItem']->value['book_type_name'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['typeItem']->value['book_type_name'];?>
</td>
					<td align="center">
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_type','a'=>'edit_type'),$_smarty_tpl);?>
&type_id=<?php echo $_smarty_tpl->tpl_vars['ctypeItem']->value['book_type_id'];?>
">修改</a> 
						| <a href="javascript:confirmurl('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_type','a'=>'del_type'),$_smarty_tpl);?>
&type_id=<?php echo $_smarty_tpl->tpl_vars['ctypeItem']->value['book_type_id'];?>
','你真的要删除【<?php echo $_smarty_tpl->tpl_vars['ctypeItem']->value['book_type_name'];?>
】类别么')">删除</a>
					</td>
				</tr>
				<?php }} ?>
			<?php }} ?>
			<tr><td colspan=6" style="text-align:center;"><?php echo $_smarty_tpl->getVariable('pageHTML')->value;?>
</td></tr>
			</form>
			</tbody>
		</table>
	</div>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_END')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>