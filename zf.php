<?
session_start();
if(empty($_SESSION["userid"]))
{
  echo "<script>alert('请先登录再进行操作！'); window.location.href='index.php';</script>";
  exit;
}
include("inc/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>支付</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">购物车提交订单</td>
              <td width="12%" align="left" valign="middle" class="bai14"><a href="#">MORE+</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
	  <?


			     $sql="select * from hy where userid='".$_SESSION["userid"]."'";
			     $q=mysqli_query($conn,$sql);
			     $rr=mysqli_fetch_assoc($q);

			  ?>
        <td height="406" align="center" valign="middle"><table width="83%" border="0" cellpadding="0" cellspacing="0" class="border">
          <form action="save_order.php?act=add" method="post">
              <input type="hidden" name="product_id" value="<?=$idarry?>">
            <input type="hidden" name="total" value="<?=$_POST["total"]?>" />
            <input type="hidden" name="name" value="<?=$_POST["name"]?>" />
            <input type="hidden" name="post_address" value="<?=$_POST["address"]?>" />
           
            <input type="hidden" name="telephone" value="<?=$_POST["telephone"]?>" />
            <input type="hidden" name="email" value="<?=$_POST["email"]?>" />
            <input type="hidden" name="content" value="<?=$_POST["content"]?>" />
            <tr>
              <td width="8%" height="30" align="center"><img src="images/gs.jpg" width="20" height="20" /></td>
              <td width="79%" align="left" class="text12">中国工商银行储蓄卡 尾号xxxx</td>
              <td width="13%" align="center"><input type="radio" name="radiobutton" value="radiobutton" /></td>
            </tr>
            <tr>
              <td height="30" align="center"><img src="images/wx.jpg" width="20" height="20" /></td>
              <td align="left" class="text12">微信支付(推荐安装微信5.0版本以上用户使用)</td>
              <td align="center"><input type="radio" name="radiobutton" value="radiobutton" /></td>
            </tr>
            <tr>
              <td height="30" align="center"><img src="images/zfb.jpg" width="20" height="20" /></td>
              <td align="left" class="text12">支付宝支付</td>
              <td align="center"><input type="radio" name="radiobutton" value="radiobutton" /></td>
            </tr>
            <tr>
              <td height="30" colspan="3" align="center" bgcolor="#FCF1DF" class="text12">金额一共是
                <span style="color:#FF0000;">
                <?=$_POST["total"]?>
                </span> 元</td>
            </tr>
            <tr>
              <td height="32" colspan="3" align="center"><input type="submit" name="Submit2" value="提交" /></td>
            </tr>
          </form>
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
