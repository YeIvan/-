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
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<p>&nbsp;</p>
<TABLE width="45%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
 
  <TBODY>
  <TR class=tr_southidc>
    <TD width="64%" height=27 align="center" bgColor=#336699><span class="STYLE1">社区</span><FONT class=t4> </FONT></TD>
    <TD width="36%" height=27 align="center" bgColor=#336699><font color=#ffffff>操作</font></TD>
    </TR>
	 <?
   $query=mysql_query("select * from depart");
   while($rs=mysql_fetch_array($query))
   {
   ?>
  <TR class=tr_southidc>
    <TD height=32 align="center" bgColor=#ecf5ff><?=$rs["depart"]?></TD>
    <TD height=32 align="center" bgColor=#ecf5ff><a href="edit_depart.php?id=<?=$rs["depart_id"]?>" ><font color="#000000">修改</font></a> <a href="save_depart.php?act=del&id=<?=$rs["depart_id"]?>" onClick="{if(confirm('删除该类将删除所有该类下属的商品，确定吗?')){return true;}return false;}"><font color="#000000">删除</font></a>    </TD>
    </TR>
	<?
  }
  ?>
  </TBODY>
</TABLE>
</BODY></HTML>
