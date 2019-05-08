<?php
date_default_timezone_set("PRC");
$time=date("Y-m-d");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META content="text/html; charset=gb2312" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css href="css.css">
<STYLE type=text/css>
.STYLE1 {
	COLOR: #ffffff; FONT-WEIGHT: bold
}
</STYLE>

<STYLE>
.x:link {
	COLOR: white; TEXT-DECORATION: none
}
.x:visited {
	COLOR: white; TEXT-DECORATION: none
}
.x:active {
	COLOR: red; TEXT-DECORATION: none
}
.x:hover {
	COLOR: red
}
TR {
	FONT-SIZE: 10pt
}
TD {
	FONT-SIZE: 10pt
}
BODY {
	FONT-SIZE: 10pt
}
A:link {
	COLOR: red; TEXT-DECORATION: underline
}
A:visited {
	COLOR: red; TEXT-DECORATION: underline
}
A:active {
	COLOR: red; TEXT-DECORATION: underline
}
A:hover {
	COLOR: red; TEXT-DECORATION: underline
}
</STYLE>

<STYLE fprolloverstyle>
A:hover {
	COLOR: #ff0000; FONT-SIZE: 10pt; TEXT-DECORATION: none
}
.STYLE4 {
	color: #FF6633;
	font-size: 18pt;
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%" bgColor=#336699>
  <TBODY>
  <TR>
    <TD colSpan=2 align=middle><SPAN 
class=STYLE1>系统信息</SPAN></TD></TR>
  <TR class=tr_southidc>
    <TD width="45%" height=40 bgColor=#ecf5ff>用户名：<FONT class=t4>Admin </FONT></TD>
    <TD width="55%" height=40 bgColor=#ecf5ff>IP：<FONT class=t4> 127.0.0.1</FONT></TD></TR>
  <TR class=tr_southidc>
    <TD bgColor=#ecf5ff height=40>身份过期：<FONT class=t4>20 分钟</FONT></TD>
    <TD bgColor=#ecf5ff height=40>现在时间：<FONT class=t4> 
    <?=$time?></FONT></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=59 colSpan=2 align="center" bgColor=#ecf5ff>&nbsp;</TD>
  </TR>
  </TBODY></TABLE>
</BODY></HTML>
