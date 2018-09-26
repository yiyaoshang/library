<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:55:13
         compiled from "./tpl/book_manage//books_info.html" */ ?>
<?php /*%%SmartyHeaderCode:25655b99d1916f46d0-41947556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '947b1e5a60a8e93b46d405cc5316d759af75e18f' => 
    array (
      0 => './tpl/book_manage//books_info.html',
      1 => 1369033656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25655b99d1916f46d0-41947556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'E:\www\library\admin\SpeedPHP\Drivers\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_HEADER')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="Info">
	<div>
		<span>书籍类别</span>
		<select name="category_id"  id="category_id" onchange='javascript:location.href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_manage','a'=>'books_info'),$_smarty_tpl);?>
&type_id="+this.value'>
				<option value="0">--请选择类别--</option>
				<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('types')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['book_type_id'];?>
" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['type']->value['book_type_name'];?>
</option>
						<?php  $_smarty_tpl->tpl_vars['ctype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value['ctype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ctype']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['ctype']->iteration=0;
if ($_smarty_tpl->tpl_vars['ctype']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ctype']->key => $_smarty_tpl->tpl_vars['ctype']->value){
 $_smarty_tpl->tpl_vars['ctype']->iteration++;
 $_smarty_tpl->tpl_vars['ctype']->last = $_smarty_tpl->tpl_vars['ctype']->iteration === $_smarty_tpl->tpl_vars['ctype']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ctype']['last'] = $_smarty_tpl->tpl_vars['ctype']->last;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['ctype']->value['book_type_id'];?>
"><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ctype']['last']){?> └─ <?php }else{ ?> ├─ <?php }?>
						<?php echo $_smarty_tpl->tpl_vars['ctype']->value['book_type_name'];?>
</option>
						<?php }} ?>
				<?php }} ?>
		</select>
	</div>
	<div class="table-list">
		<table width="100%" cellspacing="0">
			<thead>
				<tr>
					<th width="5%">书名</th>
					<th width="8%">卖家</th>
					<th width="5%">联系手机</th>
					<th width="10%">联系地址</th>
					<th width="8%">价格(元)</th>
					<th width="8%">类别</th>			
					<th width="10%">作者</th>
					<th width="10%">出版社</th>
					<th width="10%">ISBN</th>
					<th width="5%">页数</th>
					<th width="10%">添加时间</th>
					<th width="5%">管理操作</th>
				</tr>
			</thead>
			<tbody>
			<form action="?m=admin&c=content&a=sort" method="post" id="sortForm">
			<?php  $_smarty_tpl->tpl_vars['book'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('books')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['book']->key => $_smarty_tpl->tpl_vars['book']->value){
?>
				<tr>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_name'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_owner_name'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_owner_phone'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_owner_addr'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_price'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['book_type_name'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_autor'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_publish'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_ISBN'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_page'];?>
</td>
					<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value['info_book_add_time'],'%Y-%m-%d');?>
</td>				
					<td align="center">
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_manage','a'=>'edit_book_info'),$_smarty_tpl);?>
&book_id=<?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_id'];?>
">修改</a> 
						| <a href="javascript:confirmurl('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_manage','a'=>'del_book'),$_smarty_tpl);?>
&book_id=<?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_id'];?>
]','你真的要删除【<?php echo $_smarty_tpl->tpl_vars['book']->value['info_book_name'];?>
】么＄1?7')">删除</a>
					</td>
				</tr>
			<?php }} ?>
			<tr><td colspan="12" style="text-align:center;"><?php echo $_smarty_tpl->getVariable('pageHTML')->value;?>
</td></tr>
			</form>
			</tbody>
		</table>
	</div>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_END')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
