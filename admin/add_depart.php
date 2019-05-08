<?
session_start();
include("../inc/checkadmin.php");
include("../inc/conn.php");
?>
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
<p>&nbsp;</p>
<TABLE width="74%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
 <form name="form10" action="save_depart.php?act=add" method="post">
  <TBODY>
  <TR>
    <TD colSpan=2 align=middle>&nbsp;</TD>
  </TR>
  <TR class=tr_southidc>
    <TD width="43%" height=40 align="right" bgColor=#ecf5ff>社区：<FONT class=t4> </FONT></TD>
    <TD width="57%" height=40 bgColor=#ecf5ff><input name="depart" type="text" id="depart" maxlength=35></TD></TR>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>&nbsp;</TD>
    <TD bgColor=#ecf5ff height=40><input type="submit" name="Submit" value="提交">
      <input type="reset" name="Submit2" value="重置"></TD></TR>
  </TBODY>
  </form>
</TABLE>
</BODY></HTML>
