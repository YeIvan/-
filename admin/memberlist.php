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
.STYLE14 {color: #FFFFFF}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<table width="49%" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="memberlist.php">
    <tr>
      <td height="28" colspan="3" align="center" bgcolor="#336699" class="STYLE1">����</td>
    </tr>
    <tr>
      <td width="40%" height="28" align="right">������ </td>
      <td width="21%"><input name="key" type="text" id="key" size="15"></td>
      <td width="39%"><input type="submit" name="Submit" value="�� ��"></td>
    </tr>
  </form>
</table>
&nbsp;
<TABLE width="70%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>

  <TBODY>
  <TR class=tr_southidc>
    <TD width="13%" height=27 align="center" bgColor=#336699><font color="#ffffff">���</font><FONT class=t4> </FONT></TD>
    <TD width="16%" align="center" bgColor=#336699><font color="#ffffff">��Ա��</font></TD>
    <TD width="16%" align="center" bgColor=#336699><font color="#ffffff">����</font></TD>
    <TD width="23%" align="center" bgColor=#336699><font color="#ffffff">����</font></TD>
    <TD width="15%" align="center" bgColor=#336699><span class="STYLE14">ע������</span></TD>
    <TD width="17%" height=27 align="center" bgColor=#336699><font color=#ffffff>����</font></TD>
    </TR>
         <?php
 $key=$_GET["key"];
$sql="select * from hy where 1=1";
if(!empty($key))
{
   $sql=$sql." and name like '%".$key."%'";
}
$sql=$sql." order by hy_id desc";
$q_tj=mysql_query($sql);
while($rst=mysql_fetch_array($q_tj))
{
   $sum=$rst["sf"]+$sum;
}
mysql_free_result($q_tj);
//
$num=mysql_num_rows(mysql_query($sql));
$pagesize=15;
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
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["hy_id"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["userid"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["depart"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["name"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff><?=$rs["create_date"]?></TD>
    <TD height=28 align="center" bgColor=#ecf5ff> <a href="save_member.php?act=del&id=<?=$rs["hy_id"]?>" onClick="{if(confirm('ȷ��ɾ����?')){return true;}return false;}"><font color="#000000">ɾ��</font></a>    </TD>
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
