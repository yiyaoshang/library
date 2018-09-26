<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:29:19
         compiled from "./tpl/welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:123465b99cb7f6e5419-13624206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc483d84938942583b5ff3f6e5e4795d30bd95c9' => 
    array (
      0 => './tpl/welcome.html',
      1 => 1336287746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123465b99cb7f6e5419-13624206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_HEADER')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="Info">
	<div id="systemInfo" class="box" style="width:95%; margin-top:10px;">
	<h6>书籍查找</h6>
	<div class="boxContent">
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'book_manage','a'=>'search_book'),$_smarty_tpl);?>
" method="post">
	<p><input type="text" name="condition">
	查找方式：
	<select name="search_type">
		<option value="1">按书名</option>
		<option value="2">按作者</option>
		<option value="3">按ISBN</option>
	</select>
	<input type='submit' class='admin_btn' value="查找">
	</p>
	</form>
	</div>
	</div>
	<div id="systemInfo"  class="box" style="width:95%; margin-top:10px;">
		<h6>总信息</h6>
		<div class="boxContent">
		<p>总库存书种数量&nbsp;:&nbsp;<?php echo $_smarty_tpl->getVariable('Info')->value['booksum'];?>
种</p>
		<p>已借出书种&nbsp;:&nbsp;<?php echo $_smarty_tpl->getVariable('Info')->value['borrowed'];?>
种</p>
		<p>总库存书籍册数&nbsp;:&nbsp;<?php echo $_smarty_tpl->getVariable('Info')->value['booksSum'];?>
册</p>
		<p>已借出书籍册数&nbsp;:&nbsp;<?php echo $_smarty_tpl->getVariable('Info')->value['booksBorrowed'];?>
册</p>
		<p>书籍类别数量&nbsp;:&nbsp;<?php echo $_smarty_tpl->getVariable('Info')->value['typeCount'];?>
种</p>
		</div>
	</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('COMM_END')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>