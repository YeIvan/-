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
<title>投诉</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">纠纷投诉</td>
              <td width="12%" align="left" valign="middle" class="bai14"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="middle">
		 <?
			$order_id=$_GET["order_id"];
$sql="select * from shop_order where order_id='$order_id'";
			$query=mysqli_query($conn,$sql);
			$rst=mysqli_fetch_assoc($query);
			?>
		<table width="709" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#E9E5D9" class="border">
          <form action="save_ts.php?act=add" method="post" name="form10" id="form10">
     <input type="hidden" name="order_id" value="<?=$order_id?>">
<input type="hidden" name="sh_id" value="<?=$rst["sh_id"]?>">
<input type="hidden" name="hy_id" value="<?=$rst["hy_id"]?>">
            <tr bgcolor="#FFFFFF">
              <td width="79"  height="30" align="right" bgcolor="#F0ECE0" class="text12">订单号：</td>
              <td width="613" bgcolor="#F0ECE0" class="text12"><input name="order_number" type="text" id="title" size="40" readonly="true" value="<?=$rst["order_number"]?>"></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="23" align="right" bgcolor="#F0ECE0" class="text12">卖家：</td>
			  <?
			  $r=get_hy($conn,$rst["sh_id"]);
			  ?>
              <td align="left" bgcolor="#F0ECE0" class="text12"><input name="seller" type="text" id="seller"  maxlength="35" value="<?=$r["name"]?>"></td>
            </tr>
            <tr bgcolor="#FFFFFF">
			 <?
			  $rr=get_hy($conn,$rst["hy_id"]);
			  ?>
              <td height="25" align="right" bgcolor="#F0ECE0" class="text12">买家：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><input name="buyer" type="text" id="buyer"  maxlength="35" value="<?=$rr["name"]?>"></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="78" align="right" bgcolor="#F0ECE0" class="text12">描述：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><textarea name="content" cols="65" rows="4" id="content"></textarea></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="41" align="right" bgcolor="#F0ECE0" class="text12">&nbsp;</td>
              <td height="41" align="left" bgcolor="#F0ECE0"><input name="ChangeAD" type="submit" class="input1" value="确 定" /></td>
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
