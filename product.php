<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <td height="8"></td>
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
              <td width="85%" align="left" valign="middle" class="hei14">商品展示</td>
              <td width="12%" align="left" valign="middle" class="bai14"><a href="#">MORE+</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="top"><table width="98%" border="0" cellpadding="0" cellspacing="0">
<?php
$c_id=$_GET["c_id"];
$key=$_GET["key"];
$sql="select * from product where 1=1";
if(!empty($c_id))
{
  $sql=$sql." and c_id='$c_id'";
}
if(!empty($key))
{
  $sql=$sql." and name like '%".$key."%'";
}
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
if ($num==0)
{
echo "<tr><td align='center' class='text12'>该栏目暂时没有内容，抱歉</td></tr>";
}
else
{
while($row=mysqli_fetch_array($result))
{
$m=$m+1;
$arry[$m]=$row["name"];//将结果集的数据倒入数组进行操作
$arryimg[$m]=$row["pic"];
$arryid[$m]=$row["product_id"];
$arryprice[$m]=$row["price"];
$arrysh[$m]=$row["sh_id"];
}
$arry_count=count($arry);//得到数组上标
}
?>
           <? for($i=1;$i<=(ceil($arry_count/3));$i++)
					{
					?> 
            <tr>
			  <?
		  for($j=1;$j<=3;$j++)
			{
			  $t++;
		?>
              <td height="185" align="center" valign="middle"><table width="89%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="162" align="center" valign="middle"><a href="product_info.php?id=<?=$arryid[$t]?>"><img src="<?=$arryimg[$t]?>" width="193" height="153" border="0" /></a></td>
                  </tr>
                  <tr>
                    <td height="23" align="center" valign="middle" class="ju"><?
					$r=turn_sh($conn,$arrysh[$t]);
					echo $r["name"];
					?></td>
                  </tr>
                  <tr>
                    <td height="23" align="center" valign="middle" class="hui14"><a href="product_info.php?id=<?=$arryid[$t]?>" class="text12"><?=left($arry[$t],10)?></a><span class="reg12"><?=$arryprice[$t]?></span></a></td>
                  </tr>
              </table></td>
                <?
				if($t==sizeof($arry)) break;
				}
			?>
              </tr>
			 <?
							if($t==sizeof($arry)) break;
												  
								}
								unset($t);
								unset($i);
								unset($j);
								unset($arry);
								unset($arryimg);
								unset($arryprice);
						        unset($arryid);
								unset($m);
				?>  
        </table>
		<table width="98%" height="32" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center"><div align="center" class="text12">
共有<?=$num?>条记录　分<?=ceil($num/$pagesize)?>页显示　当前是第<?=$page+1?>页
<a href="?page=0" class="text12">首页</a>
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
      </table>
		</td>
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
