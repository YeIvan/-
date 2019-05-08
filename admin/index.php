<?php
include("../inc/checkadmin.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>管理系统</TITLE>
<META content="text/html; charset=gb2312" http-equiv=Content-Type>
<STYLE type=text/css>.navPoint {
	FONT-FAMILY: Webdings; COLOR: white; FONT-SIZE: 9pt; CURSOR: hand
}
.a2 {
	BACKGROUND-COLOR: #a4b6d7
}
.STYLE2 {
	FONT-SIZE: 14px
}
</STYLE>

<STYLE>.x:link {
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

<STYLE fprolloverstyle>A:hover {
	COLOR: #ff0000; FONT-SIZE: 10pt; TEXT-DECORATION: none
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY style="MARGIN: 0px" onresize=javascript:parent.carnoc.location.reload() 
scroll=no>
<SCRIPT>
if(self!=top){top.location=self.location;}
function switchSysBar(){
if (switchPoint.innerText==3){
switchPoint.innerText=4
document.all("frmTitle").style.display="none"
}else{
switchPoint.innerText=3
document.all("frmTitle").style.display=""
}}
</SCRIPT>

<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" height="100%">
  <TBODY>
  <TR>
    <TD id=frmTitle vAlign=center noWrap align=middle><IFRAME 
      style="Z-INDEX: 2; WIDTH: 170px; HEIGHT: 100%; VISIBILITY: inherit" 
      id=carnoc src="menu.php" frameBorder=0 
      name=carnoc scrolling=no>
    </IFRAME></TD>
    <TD style="WIDTH: 9pt" bgColor=#a4b6d7>
      <TABLE border=0 cellSpacing=0 cellPadding=0 height="100%">
        <TBODY>
        <TR>
          <TD style="HEIGHT: 100%" onclick=switchSysBar()><FONT 
            style="COLOR: #ffffff; FONT-SIZE: 9pt; CURSOR: default"><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><SPAN 
            id=switchPoint class=navPoint 
            title=关闭/打开左栏>3</SPAN><BR><BR><BR><BR><BR><BR><BR><BR>屏幕切换 
        </FONT></TD></TR></TBODY></TABLE></TD>
    <TD style="WIDTH: 100%"><IFRAME 
      style="Z-INDEX: 1; WIDTH: 100%; HEIGHT: 4%; VISIBILITY: inherit" id=main 
      src="top.php" frameBorder=0 name=top 
      scrolling=no>
		</IFRAME><IFRAME 
      style="Z-INDEX: 1; WIDTH: 100%; HEIGHT: 96%; VISIBILITY: inherit" id=main 
      src="admin.php" frameBorder=0 name=main 
      scrolling=yes></IFRAME></TD></TR></TBODY></TABLE>
<SCRIPT>
  if(window.screen.width<'1024'){switchSysBar()}
</SCRIPT>
</BODY></HTML>
