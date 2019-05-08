<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">我发布的商品</td>
              <td width="12%" align="left" valign="middle" class="bai14"><a href="#">MORE+</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="middle"><table width="96%" border="0" class="table">
          <tr>
            <td width="28%" height="25" align="center" bgcolor="#FDEAE3" class="text12">商品名称</td>
            <td width="19%" align="center" bgcolor="#FDEAE3" class="text12">分类</td>
            <td width="24%" align="center" bgcolor="#FDEAE3" class="text12">价格</td>
            <td width="17%" align="center" bgcolor="#FDEAE3" class="text12">使用情况</td>
            <td width="12%" align="center" bgcolor="#FDEAE3" class="text12">管理</td>
          </tr>
          <?php
$sh_id=$_SESSION["hy_id"];
$sql="select * from product where sh_id='$sh_id' and 1=1";
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
$exec=$sql." order by product_id desc limit ".($page*$pagesize).",$pagesize"; 
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
            <td height="36" align="center" class="text12"><?=$rs["name"]?></td>
            <td height="36" align="center" class="text12"><?
					  $q=mysqli_query($conn,"select * from category where c_id='".$rs["c_id"]."'");
					  $rst=mysqli_fetch_assoc($q);
					  echo $rst["category"];
					  mysqli_free_result($q);
					  ?>            </td>
            <td height="36" align="center" class="text12"><?=$rs["price"]?></td>
            <td height="36" align="center" class="text12"><?=$rs["level"]?></td>
            <td height="36" align="center" class="text12"><a href="modify_product.php?id=<?=$rs["product_id"]?>" class="text12">编辑</a> <a href="save_product.php?act=del&id=<?=$rs["product_id"]?>" class="text12">删除</a></td>
          </tr>
          <?
  }
}
?>
          <tr>
            <td height="36" colspan="5" align="center"><div align="center" class="text12"> 共有
              <?=$num?>
              条记录　分
              <?=ceil($num/$pagesize)?>
              页显示　当前是第
              <?=$page+1?>
              页 <a href="?page=0" class="text1">首页</a>
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
