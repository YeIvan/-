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
.STYLE14 {color: #FFFFFF}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<p>&nbsp;</p>
<TABLE width="74%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
 <form name="form10" action="save_smallclass.php?act=add" method="post">
  <TBODY>
  <TR class=tr_southidc>
    <TD width="8%" height=27 align="center" bgColor=#336699><font color="#ffffff">���</font></TD>
    <TD width="26%" align="center" bgColor=#336699><font color="#ffffff">����</font><font class=t4>&nbsp; </font></TD>
    <TD width="23%" align="center" bgColor=#336699><font color="#ffffff">����</font></TD>
    <TD width="16%" align="center" bgColor=#336699><font color="#ffffff">�۸�</font></TD>
    <TD width="13%" height=27 align="center" bgColor=#336699><font color=#ffffff>����</font></TD>
    </TR>
	<?php
 $execc="select count(*) from product ";
$resultc=mysql_query($execc);
$rsc=mysql_fetch_array($resultc);
$num=$rsc[0];
$pagesize=20;
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
$exec="select * from product order by product_id desc limit ".($page*$pagesize).",$pagesize"; 

$result=mysql_query($exec);
if($num==0)
{
 echo "<tr><td colspan=4>��ʱû����Ϣ</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
  <TR class=tr_southidc>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["product_id"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["name"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=category($rs["c_id"])?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["price"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><a href="save_product.php?act=del&id=<?=$rs["product_id"]?>" onClick="{if(confirm('ȷ��ɾ����?')){return true;}return false;}"><font color="#000000">ɾ��</font></a>    </TD>
    </TR>
<?
}
}
?>
  </TBODY>
  </form>
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
