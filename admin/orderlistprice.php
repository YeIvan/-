<?
session_start();
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
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<table width="49%" border="0" align="center" cellpadding="0" cellspacing="0">
<form action="orderlist.php">
  <tr>
    <td height="28" colspan="3" align="center" bgcolor="#336699" class="STYLE1">��������</td>
  </tr>
  <tr>
    <td width="40%" height="28" align="right">��Ʒ��    </td>
    <td width="21%"><input name="key" type="text" id="key" size="15"></td>
    <td width="39%"><input type="submit" name="Submit" value="�� ��"></td>
  </tr>
 </form>
</table>
<br>
<TABLE width="82%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
 
  <TBODY>
  <TR class=tr_southidc>
    <TD width="14%" height=27 align="center" bgColor=#336699><font color="#ffffff">������</font><font class=t4>&nbsp; </font></TD>
    <TD width="18%" align="center" bgColor=#336699 class="STYLE1">��Ʒ</TD>
    <TD width="9%" align="center" bgColor=#336699 class="STYLE1">�ܼ�</TD>
    <TD width="9%" align="center" bgColor=#336699 class="STYLE1">����</TD>
    <TD width="9%" align="center" bgColor=#336699 class="STYLE1">���</TD>
    <TD width="15%" align="center" bgColor=#336699><font color="#ffffff">�µ�����</font></TD>
    <TD width="12%" align="center" bgColor=#336699><font color="#ffffff">����״̬</font></TD>
    <TD width="14%" height=27 align="center" bgColor=#336699><font color=#ffffff>����</font></TD>
    </TR>
         <?php
$totalprice=0;		 
$key=$_GET["key"];
$sql="select * from shop_order where 1=1";
if(!empty($key))
{
   $sql=$sql." and pro_name like '%".$key."%'";
}
$sql=$sql." order by order_id desc";
$q_tj=mysql_query($sql);
while($rst=mysql_fetch_array($q_tj))
{
   $sum=$rst["sf"]+$sum;
}
mysql_free_result($q_tj);
//
$num=mysql_num_rows(mysql_query($sql));
$pagesize=1500;
$pagecount=ceil($num/$pagesize)-1;

if(empty($_GET["page"]))
{
$page=0;
}
else
{
$page=$_GET["page"];
}
if($page<0)
{
$page=0;
}
if($page>$pagecount)
{
$page=ceil($num/$pagesize)-1;
}
$nextpage=$page+1;
$prepage=$page-1;
$exec=$sql." limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);
if($num==0)
{
 echo "<tr><td colspan=7>��ʱû����Ϣ</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
  <TR class=tr_southidc>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["order_number"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["pro_name"]?></TD>
    <TD align="center" bgColor=#ecf5ff><?=$rs["order_price"]?></TD>
	 <?
	$r=get_hy($rs["sh_id"]);
	?>
    <TD height=28 align="center" bgColor=#ecf5ff>
	<?=$r["name"]?></TD>
	<?
	$rr=get_hy($rs["hy_id"]);
	 ?>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rr["name"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["ordertime"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["order_state"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff> <a href="save_order.php?act=del&id=<?=$rs["order_id"]?>" onClick="{if(confirm('ȷ��ɾ����?')){return true;}return false;}"><font color="#000000">ɾ��</font></a></TD>
    </TR>
<?
$totalprice = $totalprice + $rs["order_price"];
}
}
?>


  <TR class=tr_southidc>
    <TD width="14%" height=27 align="center" bgColor=#239F4F><font color="#ffffff"><strong>�ܽ��</strong></font></TD>
    <TD height="27" colspan="7" align="center" bgColor=#239F4F class="STYLE1"><?=$totalprice?></TD>
    </TR>

  </TBODY>
</TABLE>
 <table width="57%" height="17" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="5"></td>
      </tr>
      <tr>
        <td><div align="center" class="text1">
����<?=$num?>����¼����<?=ceil($num/$pagesize)?>ҳ��ʾ����ǰ�ǵ�<?=$page+1?>ҳ
<a href="?page=0" class="text1">��ҳ</a>
<?
if ($page==0) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$prepage' class='text1'>��һҳ</a>";
?>
<?
if($page==$pagecount) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$nextpage' class='text1'>��һҳ</a>"; 
?>

<?
if($page==$pagecount) echo "<span class='text1'>βҳ</span>";
else echo "<a href='?page=$pagecount' class='text1'>βҳ</a>";
?>

</div></td>
      </tr>
</table>
</BODY></HTML>
