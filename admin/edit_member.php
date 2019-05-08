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
<?
  
  $id=$_GET["id"];
  $query=mysql_query("select * from shop_member where member_id='$id'");
  $myrs=mysql_fetch_assoc($query);
 
  ?>
<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<p>&nbsp;</p>
<TABLE width="80%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
 <form name="form10" action="save_member.php?act=edit" method="post">
  <TBODY>
  <TR>
    <TD colSpan=2 align=middle><SPAN 
class=STYLE1>修改商品</SPAN></TD>
  </TR>
  <TR class=tr_southidc>
    <TD width="23%" height=28 align="right" bgColor=#ecf5ff>帐号：<FONT class=t4> </FONT></TD>
    <TD width="77%" height=28 bgColor=#ecf5ff><INPUT name=userid type="text" id="userid" maxlength=35 value="<?=$myrs["userid"]?>" ></TD></TR>
  <TR class=tr_southidc>
    <TD height=26 align="right" bgColor=#ecf5ff>密码：</TD>
    <TD bgColor=#ecf5ff height=26><INPUT name=password type="text" id="password" value="<?=$myrs["password"]?>" maxlength=35 ></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=29 align="right" bgColor=#ecf5ff>邮箱：</TD>
    <TD bgColor=#ecf5ff height=29><INPUT name=email type="text" id="email" value="<?=$myrs["email"]?>" maxlength=35 ></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=29 align="right" bgColor=#ecf5ff>姓名：</TD>
    <TD bgColor=#ecf5ff height=29><INPUT name=yhname type="text" id="yhname" maxlength=35 value="<?=$myrs["name"]?>"></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=30 align="right" bgColor=#ecf5ff>性别：</TD>
    <TD bgColor=#ecf5ff height=30><input name="sex" type="radio" value="男" <? if($myrs['sex']=="男") echo "checked"?>>
        男
          <input type="radio" name="sex" value="女" <? if($myrs['sex']=="女") echo "checked"?>>
          女
        </TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=30 align="right" bgColor=#ecf5ff>电话：</TD>
    <TD bgColor=#ecf5ff height=30><INPUT name="tel" type="text" id="tel" maxlength=35  value="<?=$myrs["tel"]?>"></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>地址：</TD>
    <TD bgColor=#ecf5ff height=40><INPUT name="address" type="text" id="address" maxlength=35  value="<?=$myrs["post_address"]?>"></TD>
  </TR>
  <input type="hidden" name="id" value="<?=$id?>">
	<input type="hidden" name="url" value="<?=$_SERVER["HTTP_REFERER"]?>">
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>&nbsp;</TD>
    <TD bgColor=#ecf5ff height=40><input type="submit" name="Submit" value="提交">
      <input type="reset" name="Submit2" value="重置"></TD></TR>
  </TBODY>
  </form>
</TABLE>
</BODY></HTML>
