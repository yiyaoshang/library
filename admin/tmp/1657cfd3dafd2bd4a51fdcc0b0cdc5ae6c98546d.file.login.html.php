<?php /* Smarty version Smarty-3.0.8, created on 2018-09-13 04:42:29
         compiled from "./tpl/login.html" */ ?>
<?php /*%%SmartyHeaderCode:227535b99ce95c70070-87057492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1657cfd3dafd2bd4a51fdcc0b0cdc5ae6c98546d' => 
    array (
      0 => './tpl/login.html',
      1 => 1536806544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227535b99ce95c70070-87057492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <title>管理员登录</title>
    <link href="<?php echo $_smarty_tpl->getVariable('CSS_PATH')->value;?>
login.css" rel="stylesheet" type="text/css" />

<script language="JavaScript">
<!--
function fCheck(){
	form.user.value = fTrim(form.user.value); //Trim the input value.

	if( form.user.value =="") {
		alert("\请输入你的用户名 !");
		form.user.focus();
		return false;
	}
	if( form.password.value.length =="") {
		alert("\请输入你的密码 !");
		form.password.focus();
		return false;
	}
	document.form.username.value = document.form.user.value;
	fStyle();
	if(form.RmbUser.checked){
		if(document.form.bCookie.value != document.form.user.value){
			fUpdateCookie("zUser",document.form.user.value);
		}
		form.savelogin.value = 1;
	}else{
		fUpdateCookie("zUser","");
		setCookie('ntes_mail_noremember','true',true);
	}
	
	return true;
}

function fTrim(str)
{
	str=str.replace(/(^\s*)|(\s*$)/g, ""); 
	return str;
}
function fStyle()
{	
	var sUrl = document.form.secure.checked ? "https://reg.163.com/logins.jsp?" : "http://reg.163.com/login.jsp?";
	
	sUrl += "type=1&product=mailyeah&url=http://entry.mail.yeah.net/cgi/ntesdoor?lightweight%3D1%26verifycookie%3D1%26";
	// var sUrl = "http://entry.mail.yeah.net/cgi/login?hid=10010102&verifycookie=1&language=0";
	var txtStyle = document.getElementById("txtStyle");
	if(txtStyle){
		sUrl += 'style%3D' + txtStyle.value;
	}
	document.form.username.value += "@yeah.net";
	window.document.form.action = sUrl;
	var user = document.form.user;

	// fUpdateCookie("secure",document.form.secure.checked?"1":"0");
}
function fParseCookie(varName)
{
	var srcCookie	=window.document.cookie;
	if(srcCookie=="")
	{return "";}
	var nPos=srcCookie.lastIndexOf(varName+"=");
	if(nPos>0)
	{	if(nPos>=2)
		{	nPos=srcCookie.indexOf("; "+varName+"=",nPos-2);}
		else{
			nPos=srcCookie.indexOf("; "+varName+"=");
		}
	}
	if(nPos>=0)
	{	nPos=srcCookie.indexOf('=',nPos)+1;
		var nTailPos=srcCookie.indexOf("; ",nPos);
		if(nTailPos>0){
			return srcCookie.substring(nPos,nTailPos);}
		else{
			return srcCookie.substr(nPos);
		}
	}
	return "";
}
function fSetLogType(){
	var logType = fParseCookie("logType");
	var lnkStyle = document.getElementById("lnkStyle");
	var txtStyle = document.getElementById("txtStyle");
	if(logType == "4"){
		lnkStyle.innerHTML = '逍遥3.0<b class="logTb_b">　</b>';
		txtStyle.value = "4";
	}else if(logType == "9" || logType == "0"){
		lnkStyle.innerHTML = '简约3.0<b class="logTb_b">　</b>';
		txtStyle.value = "9";
	}
	
}
function saveLoginType(){
	var txtStyle = document.getElementById("txtStyle");
	var sStyle = txtStyle.value;
	if(sStyle == ""){
		sStyle = "-1";
	}
	fUpdateCookie("logType",txtStyle.value);
}

function fUpdateCookie(sName,sValue)
{
	var sCookie = "";
	var date    = new Date(2099,12,31);
	sCookie     = sName+'='+sValue+";expires=" + date.toGMTString() + ";domain=yeah.net";
	window.document.cookie = sCookie ;
}
function setCookie(name, value, isForever) {
	document.cookie = name + "=" + escape(value) + ";domain=yeah.net"  + (isForever?";expires="+  (new Date(2099,12,31)).toGMTString():"");
}

function getCookie(name) {
   var search = name + "="
   if(document.cookie.length > 0) {
      offset = document.cookie.indexOf(search)
      if(offset != -1) {
         offset += search.length
         end = document.cookie.indexOf(";", offset)
         if(end == -1) end = document.cookie.length
         return unescape(document.cookie.substring(offset, end))
      }
      else return ""
   }
}
//*** For Login UserName.
function fInitUser(){
	var sUser = fParseCookie("zUser");
	if(sUser.indexOf("@") > -1){
		sUser = sUser.split("@")[0];
	}
	document.form.user.value = sUser;
	if (sUser == "") {
		document.form.user.focus();
		document.form.autocomplete = "off";
		//document.form.RmbUser.checked = getCookie("ntes_mail_noremember")!="true";
	}else{
		document.form.bCookie.value = sUser;
		document.form.password.focus();
		document.form.autocomplete = "on";
		//document.form.RmbUser.checked = true;
	}
	document.form.RmbUser.checked = false;
}
function fGetStyleList(event) {
	var txtStyle = document.getElementById("txtStyle"); 
	var dvStyleList = document.getElementById("dvStyleList"); 
	/*var aPos = fPosition(lnkStyle);
	var x = aPos[0];
	var y = aPos[1] + 25;
	dvStyleList.style.top = y + "px";
	dvStyleList.style.left = x + "px";*/
	dvStyleList.style.display = "";
	var ulStyle = document.getElementById("ulStyle"); 
	var liList = ulStyle.getElementsByTagName("LI");
	for(var i=0;i<liList.length;i++){
		liList[i].className = "";
	}
	var styleMap = {"-1" : 0, "4" : 1, "0" : 2, "9" : 2};

	var li = liList[styleMap[txtStyle.value]];
	li.className = "choiceOn";
	fStopPropagation(event);
}
/**
 * 对象坐标
 */
function fPosition(oElement) {
	if(!oElement){
		var oElement = this;
	}
    var valueT = 0, valueL = 0;
    do {
      valueT += oElement.offsetTop  || 0;
      valueL += oElement.offsetLeft || 0;
      oElement = oElement.offsetParent;
    } while (oElement);
    return [valueL, valueT];
};
document.onclick = function(){
	var dvStyleList = document.getElementById("dvStyleList");
	dvStyleList.style.display = "none";
};
function fStopPropagation(ev) {
	if(!ev){
		ev = this.getEvent();
	}
	if (ev.stopPropagation) {
		ev.stopPropagation();
	}else{
		ev.cancelBubble = true;
	}
}
function fSetStyle(sStyle) {
	var styleMap = {"-1" : "默认版本", "4" : "逍遥 3.0", "0" : "简约 3.0", "9" : "简约 3.0"};
	var txtStyle = document.getElementById("txtStyle"); 
	var lnkStyle = document.getElementById("lnkStyle"); 
	txtStyle.value = sStyle;
	lnkStyle.innerHTML = styleMap[sStyle] + '<b class="logTb_b">　</b>';
}
function fCheckAutoLoginCookie(){
	try{
		var sPassport = getCookie("NTES_PASSPORT");
		var sSInfo = getCookie("S_INFO");
		var sPInfo = getCookie("P_INFO");
		if(sPInfo){
			var aInfo = sPInfo.split("|");
			var sTime = aInfo[1];
			var sState = aInfo[2];
			var nTimeDiff = (new Date()).getTime()-(sTime+"000");
		}
		if(!location.hash&&(sPassport||sSInfo||(sPInfo&&sState=="1"&&nTimeDiff<14*24*60*60*1000))){
			location.href='http://entry.mail.yeah.net/cgi/ntesdoor?lightweight=1&verifycookie=1&style=-1';
		}
	}catch(exp){}
}
fCheckAutoLoginCookie();
//-->
</script>

</head>
<body>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr height="70px">
    <td></td>
  </tr>
  <tr>
    <td><div class="con">
        <div class="login">
          <div class="b_left"></div>
          <div class="input">
            <div class="logo">
            	<img src="<?php echo $_smarty_tpl->getVariable('IMAGES_PATH')->value;?>
login.jpg">
            </div>

			<form method=POST action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'doLogin'),$_smarty_tpl);?>
" name="login">

			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="logTb">
              <tr>
                <th>用户名</th>
                <td><input type="text" name="login[username]" maxlength="20" class="input-border" />                </td>
                <td></td>
              </tr>
              <tr>
                <th>密码</th>
                <td width="90">
                	<input type="password" name="login[password]" class="input-border"></td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td  colspan="2" style="line-height:22px; padding-top:0px; padding-left:6px; padding-bottom:10px;">
	                <div class="Sel_Ver">
                		<input type="submit" value="" class="login-b"  onMouseOver="this.className='login-b2'" onMouseDown="this.className='login-b3'" onMouseOut="this.className='login-b'"/>
                	</div>
                </td>
              </tr>
            </table>
			</form>
          </div>
          <div class="b_right"></div>
        </div>
      </div></td>
  </tr>
  <tr height="141px">
    <td><div style=" width:100%; height:141px;clear: both;">


      </div></td>
  </tr>
</table>
</body>
</html>

