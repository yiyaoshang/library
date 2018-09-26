<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:56:23
         compiled from "./tpl/admin_manage/adminList.html" */ ?>
<?php /*%%SmartyHeaderCode:47505b99d1d7f1a7f8-89200244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbef7f1cef74d8b4a3cbaa9b44a33f917fd34d0c' => 
    array (
      0 => './tpl/admin_manage/adminList.html',
      1 => 1369122146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47505b99d1d7f1a7f8-89200244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'E:\www\library\admin\SpeedPHP\Drivers\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_HEADER')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="Info">
	<div class="table-list">
		<table width="100%" cellspacing="0">
			<thead>
				<tr>
					<th width="5%">id</th>
					<th width="8%">管理员名称</th>
					<th width="5%">管理员真实姓名</th>
					<th width="10%">上次登录时间</th>
					<th width="8%">上次登录IP</th>
					<th width="5%">管理操作</th>
				</tr>
			</thead>
			<tbody>
			<form action="?m=admin&c=content&a=sort" method="post" id="sortForm">
			<?php  $_smarty_tpl->tpl_vars['adminInfo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('adminsInfo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['adminInfo']->key => $_smarty_tpl->tpl_vars['adminInfo']->value){
?>
				<tr>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['id'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['name'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['realname'];?>
</td>
					<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['adminInfo']->value['last_login_time'],'%Y-%m-%d');?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['last_login_ip'];?>
</td>	
					<td align="center">
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin_manage','a'=>'adminEdit'),$_smarty_tpl);?>
&id=<?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['id'];?>
">修改</a> 
						| <a href="javascript:confirmurl('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin_manage','a'=>'doAdminDel'),$_smarty_tpl);?>
&id=<?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['id'];?>
]','你真的要删除管理员【<?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['name'];?>
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