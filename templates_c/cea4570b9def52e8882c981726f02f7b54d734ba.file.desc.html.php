<?php /* Smarty version Smarty-3.1.7, created on 2018-09-13 04:05:34
         compiled from "E:\www\library\templates\desc.html" */ ?>
<?php /*%%SmartyHeaderCode:300475b99c5ee83ef57-34654543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea4570b9def52e8882c981726f02f7b54d734ba' => 
    array (
      0 => 'E:\\www\\library\\templates\\desc.html',
      1 => 1369039802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300475b99c5ee83ef57-34654543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_path' => 0,
    'content' => 0,
    'web_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b99c5eee78cc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b99c5eee78cc')) {function content_5b99c5eee78cc($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>详情::图书管理系统</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
desc.css" rel="stylesheet" type="text/css" />
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
	    		<a href="index.php">首页</a>-><?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_name'];?>

	    	</div>
	    	
	    	<div id="cont_main" class="left">
	    		<div class="cont_top left con_news">
	    		<p>书名：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_name'];?>
</p>
	    		<p>卖家：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_owner_name'];?>
</p>
	    		<p>联系电话：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_owner_phone'];?>
</p>
	    		<p>联系地址：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_owner_addr'];?>
</p>
	    		<p>价格：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_price'];?>
</p>
	    		<p>类别：<?php echo $_smarty_tpl->tpl_vars['content']->value['book_type_name'];?>
</p>
	    		<p>作者：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_autor'];?>
</p>
	    		<p>ISBN：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_ISBN'];?>
</p>
	    		<p>页数：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_page'];?>
</p>
	    		<p>出版社：<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_publish'];?>
</p>
	    		<p>
	    			详细描述：
	    			<?php if ($_smarty_tpl->tpl_vars['content']->value['info_book_detail']){?>
	    				<?php echo $_smarty_tpl->tpl_vars['content']->value['info_book_detail'];?>

	    			<?php }else{ ?>
	    				没有提供详细描述
	    			<?php }?>
	    		</p>
	    		</div>
	    	</div>
	    </div>
	</div>
	
	<div id="footer" class="left">
		<div id="footer1"></div>
		<div class="link">| <a href="index.php">关于我们</a> |<a href="<?php echo $_smarty_tpl->tpl_vars['web_root']->value;?>
admin/">管理入口</a> |</div>
	</div>



</div>
<script type="text/javascript" src="../js/kangzhan2.js"></script>
</body>
</html>
<?php }} ?>