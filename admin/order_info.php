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
<TABLE width="75%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
  <?php
	 if(isset($_GET["id"])){
	    $id=isint($_GET["id"]);
	    $query=mysql_query("select * from shop_order where order_id='$id'");
		$rs=mysql_fetch_assoc($query);
		$order_no=$rs["order_number"];
	 }
	?>
  <TBODY>
  <TR>
    <TD colSpan=5 align=middle><SPAN 
class=STYLE1>订单详细</SPAN></TD>
  </TR>
  <TR class=tr_southidc>
    <TD width="28%" height=40 align="right" bgColor=#ecf5ff>收货人：<FONT class=t4> </FONT></TD>
    <TD height=40 colspan="4" bgColor=#ecf5ff><?=$rs["name"]?></TD></TR>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>宿舍：</TD>
    <TD height=40 colspan="4" bgColor=#ecf5ff><?=$rs["address"]?></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>联系电话：</TD>
    <TD height=40 colspan="4" bgColor=#ecf5ff><?=$rs["telephone"]?></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>留言：</TD>
    <TD height=40 colspan="4" bgColor=#ecf5ff><?=$rs["content"]?></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=40 colspan="5" align="center" bgColor=#ecf5ff>所订商品</TD>
    </TR>
	<?php
	  $total=0;
	  $query=mysql_query("select * from shop_orderinfo where order_id='".$rs["order_id"]."'");
	  while($rst=mysql_fetch_array($query)){
	  ?>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>商品名称：</TD>
    <TD width="20%" height=40 bgColor=#ecf5ff><?
	  $product_id=$rst["product_id"]?>
      <?
	  $cx=mysql_query("select * from shop_product where product_id='$product_id'");
	  $myrs=mysql_fetch_assoc($cx);
	  echo $myrs["name"];
	  ?></TD>
    <TD width="23%" bgColor=#ecf5ff>商品编号：
      <?=$myrs["product_no"]?></TD>
    <TD width="14%" bgColor=#ecf5ff>订购价格：
      <?=$rst["order_price"]?></TD>
    <TD width="15%" bgColor=#ecf5ff>数量：<?=$rst["order_num"]?></TD>
  </TR>
  <?php
	$total=$total+$rst["order_price"]*$rst["order_num"];
	}
	?>
	
  
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>&nbsp;</TD>
    <TD height=40 colspan="4" bgColor=#ecf5ff>总价：
      <?=$total?></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=31 align="right" bgColor=#ecf5ff>&nbsp;</TD>
    <TD height=31 colspan="4" bgColor=#ecf5ff><input type="button" name="Submit" value="返回" onClick="javascript:history.go(-1)"></TD></TR>
  </TBODY>
  </form>
  </TABLE>
</BODY></HTML>
