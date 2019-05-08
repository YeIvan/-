<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>我卖出的订单</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">&nbsp;</td>
              <td width="12%" align="left" valign="middle" class="bai14"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="middle"><table width="98%" height="53" border="0" class="border">
          <tr>
            <td width="25%" height="23" align="center" class="text12">订单号</td>
            <td width="21%" align="center" class="text12">下单时间</td>
            <td width="25%" align="center" class="text12">购买商品</td>
            <td width="11%" align="center" class="text12">处理状态</td>
            <td width="9%" align="center" class="text12">订单详情</td>
          </tr>
          <?
			$hy_id=$_SESSION["hy_id"];
			$sql="select * from shop_order where sh_id='$hy_id'";
			$query=mysqli_query($conn,$sql);
			while($rst=mysqli_fetch_array($query))
			{
			?>
          <tr>
            <td height="24" align="center" class="text12"><?=$rst["order_number"]?></td>
            <td align="center" class="text12"><?=$rst["ordertime"]?></td>
            <td align="center" class="text12"><?=$rst["pro_name"]?></td>
            <td align="center" class="text12"><?=$rst["order_state"]?></td>
            <td align="center" class="text12"><a href="order_info.php?id=<?=$rst["order_id"]?>" class="text12">订单详情</a></td>
          </tr>
          <?
			}
			
			?>
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
