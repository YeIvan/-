<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>购物车</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">购物车</td>
              <td width="12%" align="left" valign="middle" class="bai14"><a href="#">MORE+</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="top"><table width="97%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="68">&nbsp;</td>
          </tr>
          <tr>
            <td height="149" align="center"><table width="98%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" class="cpborder">
              <tr>
                  <td align="center" bgcolor="#FF3300" class="bai14">商品编号</td>
                <td height="31" align="center" bgcolor="#FF3300" class="bai14">商品名称</td>
                <td align="center" bgcolor="#FF3300" class="bai14">价格</td>
                <td align="center" bgcolor="#FF3300" class="bai14">小计</td>
                <td align="center" bgcolor="#FF3300" class="bai14">操作</td>
              </tr>
              <?
		$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$maxsize=sizeof($idarry);
		for($i=0;$i<$maxsize;$i++){
		  if($idarry[$i]!=0){
			//从数据库检索
			$sql=mysqli_query($conn,"select * from product where product_id='".$idarry[$i]."'");
			$rs=mysqli_fetch_assoc($sql);
			?>
              <form action="cart.php?act=update" method="post">
                <input type="hidden" name="pos" value="<?=$i?>" />
                <tr>
                    <td width="14%" align="center" bgcolor="#F6F6F6" class="text12"><?=$rs["product_id"]?></td>
                  <td width="29%" height="31" align="center" bgcolor="#F6F6F6" class="text12"><?=left($rs["name"],16)?></td>
                  <td width="14%" align="center" bgcolor="#F6F6F6" class="text12"><?=$rs["price"]?></td>
                  </label></td>
                  <td width="20%" align="center" bgcolor="#F6F6F6" class="text12">￥
                    <?=$rs["price"]*$countarry[$i]?></td>
                  <td width="22%" align="center" bgcolor="#F6F6F6"><table width="99%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="20" align="center" valign="top"><a href="cart.php?act=del&amp;pos=<?=$i?>"><img src="images/del.gif" width="18" height="18" border="0" /></a></td>
                        </tr>
                  </table></td>
                </tr>
              </form>
              <?
			$total=$total+($rs["m_price"]*$countarry[$i]);
			mysqli_free_result($sql);
				}
			}
						?>
            </table>
              <table width="98%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="20" colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td width="37%" height="42" bgcolor="#EEEEEE">&nbsp;</td>
                  <td width="19%" align="center" bgcolor="#EEEEEE"><a href="index.php"><img src="images/basket_1.gif" width="106" height="27" border="0" /></a></td>
                  <td width="18%" align="center" bgcolor="#EEEEEE"><a href="cart.php?act=remove"><img src="images/basket_2.gif" width="106" height="27" border="0" /></a></td>
                  <td width="26%" align="left" bgcolor="#EEEEEE"><a href="payment.php"><img src="images/basket_3.gif" width="85" height="27" border="0" /></a></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td height="88" align="center">&nbsp;</td>
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
