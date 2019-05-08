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
<title>提交订单</title>
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
        <td height="406" align="center" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" class="word07">
          <tr>
              <td align="center" bgcolor="#EEEEEE" class="text12">商品编号</td>
            <td height="31" align="center" bgcolor="#EEEEEE" class="text12">商品名称</td>
            <td align="center" bgcolor="#EEEEEE" class="text12">价格</td>

            <td width="30%" align="center" bgcolor="#EEEEEE" class="text12">小计</td>
          </tr>
          <?
		$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$maxsize=sizeof($idarry);

		for($i=0;$i<$maxsize;$i++)
		{
		  if($idarry[$i]!=0)
		  {
			//从数据库检索
			$sql=mysqli_query($conn,"select * from product where product_id='".$idarry[$i]."'");
			$rs=mysqli_fetch_assoc($sql);
			?>
          <tr>
              <td width="11%" align="center" bgcolor="#F6F6F6" class="text12"><?=$rs["product_id"]?></td>
            <td width="26%" height="31" align="center" bgcolor="#F6F6F6" class="text12"><?=$rs["name"]?></td>
            <td width="11%" align="center" bgcolor="#F6F6F6" class="text12"><?=$rs["price"]?></td>
            <td align="center" bgcolor="#F6F6F6" class="text12">￥
              <?=$rs["price"]*$countarry[$i]?></td>
          </tr>
          <?
			$total=$total+($rs["price"]*$countarry[$i]);
			mysqli_free_result($sql);
				}
			}

			?>
        </table>
        <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
          <form action="zf.php?act=add" method="post">
              <input type="hidden" name="product_id" value="<?=$_SESSION["cart_id"];?>"
            <tr>
              <td height="30" colspan="2" align="center">&nbsp;</td>
            </tr>
            <tr>
              <td height="27" align="right" class="text12">总价：</td>
              <td align="left"><input name="total" type="text" id="total" value="<?=$total?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="27" align="right" class="text12">收 货 人：</td>
              <td align="left"><input name="name" type="text" id="name" value="<?=$rr["name"]?>" />
                  <span class="word09">* </span></td>
            </tr>
            <tr>
              <td height="30" align="right" class="text12">地址：</td>
              <td align="left"><input name="address" type="text" id="address" value="<?=$rr["post_address"]?>" />
                  <span class="text12">*</span></td>
            </tr>

            <tr>
              <td height="30" align="right" class="text12">联系电话：</td>
              <td align="left"><input name="telephone" type="text" id="telephone"  value="<?=$rr["tel"]?>" />
                  <span class="word09">*</span></td>
            </tr>

            <tr>
              <td height="81" align="right" class="text12">留言备注：</td>
              <td align="left"><label>
                <textarea name="content" cols="50" rows="5" id="content"></textarea>
              </label></td>
            </tr>
            <tr>
              <td width="21%" height="30" align="right" class="text12">&nbsp;</td>
              <td width="79%"><label>
                <input type="submit" name="Submit" value="提  交" />
                <input type="reset" name="Submit2" value="重  置" />
              </label></td>
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
