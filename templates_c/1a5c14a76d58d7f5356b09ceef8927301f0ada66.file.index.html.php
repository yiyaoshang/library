<?php /* Smarty version Smarty-3.1.7, created on 2018-09-13 03:43:59
         compiled from "E:\www\library\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:274935b99c0df2b88a5-41803636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5c14a76d58d7f5356b09ceef8927301f0ada66' => 
    array (
      0 => 'E:\\www\\library\\templates\\index.html',
      1 => 1369039814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274935b99c0df2b88a5-41803636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_path' => 0,
    'page' => 0,
    'web_root' => 0,
    'mid' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b99c0df43378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b99c0df43378')) {function content_5b99c0df43378($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\www\\library\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>首页::图书管理系统</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
index.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
common.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="allpage">
	<div id="header">
	</div>

	<div id="nav">
		<div id="navIn">
			<div>
			<form action="index.php" method="get">
				<input type="text"  name="searchContent" style="width:140px; height:25px;" />
				<input type="submit" name="searchSubmit" style="height:25px" value="搜索" />
			</form>
			</div>
		</div>
	</div>

	<div id="content">
		<div id="cont_location" class="left">
	    	<div id="pageLocation" class="left">
	    	<a href="index.php">首页</a>
	    	</div>
	    </div>
	    
	    <div id="con_n_1" class="left">
	        	<?php if ($_smarty_tpl->tpl_vars['page']->value['first_page']==$_smarty_tpl->tpl_vars['page']->value['current_page']){?>
	        		| 当前已是第一页
	        	<?php }else{ ?>
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value['first_page'];?>
">第一页</a> | 
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value['prev_page'];?>
">上一页</a> 
	        	<?php }?>
	        	 | 
	        	<?php  $_smarty_tpl->tpl_vars['mid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['mid_page']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mid']->key => $_smarty_tpl->tpl_vars['mid']->value){
$_smarty_tpl->tpl_vars['mid']->_loop = true;
?>
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
index.php?page=<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
】</a>
	        	<?php } ?>
	        	 | 
	        	<?php if ($_smarty_tpl->tpl_vars['page']->value['last_page']==$_smarty_tpl->tpl_vars['page']->value['current_page']){?>
	        		当前已是最后一页 | 
	        	<?php }else{ ?>
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value['next_page'];?>
">下一页</a> | 
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value['last_page'];?>
">最后一页</a> | 
	        	<?php }?>
	        </div>
	    
	    <div id="cont_main" class="left">
	    
	    	<table width="860px" cellspacing="0">
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
					</tr>
				</thead>
				<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['content']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
				<tr>
					<td align="center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
desc.php?bid=<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_id'];?>
 ">
	        				<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_name'];?>

	        			</a>
					</td>
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_owner_name'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_owner_name'];?>

					</td>
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_owner_phone'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_owner_phone'];?>

					</td>
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_owner_addr'];?>
">
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_owner_addr'],10,"...",true);?>

					</td>
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_price'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_price'];?>

					</td>
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['book_type_name'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['book_type_name'];?>

					</td>
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_autor'];?>
">
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_autor'],15,"...",true);?>

					</td>
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_publish'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_publish'];?>

					</td>
					
					<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_ISBN'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['info_book_ISBN'];?>

					</td>
				</tr>
					<?php endfor; endif; ?>
				</tbody>
			</table>
	       
	        
	    </div>
	</div>
	
	<div id="footer" class="left">
		<div id="footer1"></div>
		<div class="link">| <a href="index.php">关于我们</a> |<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
admin/">管理入口</a> |</div>
	</div>

</div>

</body>
</html>
<?php }} ?>