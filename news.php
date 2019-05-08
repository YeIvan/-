<?
session_start();
include("inc/conn.php");
include("inc/func.php");
date_default_timezone_set("PRC");
$time=date("Y-m-d");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>资助公示</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<? include("top.php");?>
<table width="980" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height=""></td>
  </tr>
</table>
<table width="980" height="215" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.jpg" width="980" height="215" /></td>
  </tr>
</table>
<table width="980" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height=""></td>
  </tr>
</table>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="230" height="445" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><? include("inc_login.php");?></td>
      </tr>
      <tr>
        <td height="5"></td>
      </tr>
      <tr>
        <td><? include("inc_fl.php");?></td>
      </tr>
    </table></td>
    <td width="10"></td>
    <td align="left" valign="top"><table width="100%" height="440" border="0" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td height="35" background="images/lm1.jpg"><table width="97%" height="24" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3%" align="center" valign="middle">&nbsp;</td>
              <td width="85%" align="left" valign="middle" class="hei14">资助公示</td>
              <td width="12%" align="left" valign="middle" class="bai14"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="left" valign="top"><table width="99%" border="0" cellpadding="0" cellspacing="0">
          <?php
 $c_id=$_GET["c_id"];
$sql="select * from arc where 1=1";
if(!empty($c_id))
{
   $sql=$sql." and c_id='$c_id'";
}
$sql=$sql." order by arc_id desc";
$q_tj=mysqli_query($conn,$sql);
while($rst=mysqli_fetch_array($q_tj))
{
   $sum=$rst["sf"]+$sum;
}
mysqli_free_result($q_tj);
//
$num=mysqli_num_rows(mysqli_query($conn,$sql));
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
$result=mysqli_query($conn,$exec);
if($num==0)
{
 echo "<tr><td colspan=7>暂时没有信息</td></tr>";
}
else
{
while($rs=mysqli_fetch_array($result))
{
?>
          <tr>
            <td width="5%" height="33" align="center" valign="middle" class="hui12"><img src="images/oic_02.gif" width="7" height="7"></td>
            <td width="81%" height="26" align="left" valign="middle"class="text12"><a href="show_arc.php?id=<?=$rs["arc_id"]?>" class="text12">
              <?=$rs["title"]?>
            </a></td>
            <td width="14%" align="center" valign="middle"class="text12"><?=$rs["rq"]?></td>
          </tr>
          <tr align="right">
            <td height="1" colspan="3" background="images/dot.gif"></td>
          </tr>
          <?
}
}
?>
          <tr>
            <td height="33" colspan="3" align="center" valign="middle" class="hui12"><div align="center" class="text12"> 共有
              <?=$num?>
              条记录　分
              <?=ceil($num/$pagesize)?>
              页显示　当前是第
              <?=$page+1?>
              页 <a href="?page=0" class="text12">首页</a>
              <?
if ($page==0) echo "<span class='text12'>上一页</span>";
else echo "<a href='?page=$prepage' class='text12'>上一页</a>";
?>
              <?
if($page==$pagecount) echo "<span class='text12'>下一页</span>";
else echo "<a href='?page=$nextpage' class='text12'>下一页</a>"; 
?>
              <?
if($page==$pagecount) echo "<span class='text12'>尾页</span>";
else echo "<a href='?page=$pagecount' class='text12'>尾页</a>";
?>
            </div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="980" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height=""></td>
  </tr>
</table>
<? include("copy.php");?>
</body>
</html>
