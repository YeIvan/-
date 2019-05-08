<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
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
<?
  $id=$_GET["id"];
  $sql=mysql_query("select * from lyb where book_id='$id'");
  $rs=mysql_fetch_assoc($sql);
  ?>
<TABLE width="75%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
<form action="save_lyb.php?act=edit" method="post">
   <input type="hidden" name="id" value="<?=$id?>">
 
  <TBODY>
  <TR>
    <TD colSpan=4 align=middle><SPAN 
class=STYLE1>详细</SPAN></TD>
  </TR>
  <TR class=tr_southidc>
    <TD width="19%" height=40 align="right" bgColor=#ecf5ff>会员：<FONT class=t4> </FONT></TD>
    <TD width="81%" height=40 colspan="3" bgColor=#ecf5ff><?=$rs["username"]?></TD></TR>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>留言内容：</TD>
    <TD height=40 colspan="3" bgColor=#ecf5ff><?=$rs["content"]?></TD>
  </TR>
  <?
	  if(empty($rs["remark"]))
	  {
	  ?>
  <TR class=tr_southidc>
    <TD height=87 align="right" bgColor=#ecf5ff>回复：</TD>
    <TD height=87 colspan="3" bgColor=#ecf5ff><textarea name="remark" cols="60" rows="6" id="remark"></textarea></TD>
  </TR> 
  <TR class=tr_southidc>
    <TD height=35 align="right" bgColor=#ecf5ff>&nbsp;</TD>
    <TD height=35 colspan="3" bgColor=#ecf5ff><input type="submit" name="Submit" value="提交"></TD>
  </TR>
  <?
	 }
	 else
	 {
	 ?>
	 <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>回复：</TD>
    <TD height=40 colspan="3" bgColor=#ecf5ff><?=$rs["remark"]?></TD>
  </TR> 
  <TR class=tr_southidc>
        <TD height=35 align="right" bgColor=#ecf5ff>&nbsp;</TD>
        <TD height=35 colspan="3" bgColor=#ecf5ff><input type="button" name="Submit2" value="返回" onClick="javascript:history.go(-1);"></TD>
      </TR>
	  <?
	 }
	 ?>
     
     
  </TBODY></form>
  <td height="10">
  </TABLE>
</BODY></HTML>
