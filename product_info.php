<?
session_start();
include("inc/conn.php");
include("inc/func.php");
$id=$_GET["id"];
$sql=mysqli_query($conn,"select * from product where product_id='$id'");
$rs=mysqli_fetch_assoc($sql);
$name=$rs["name"];
$old_price=$rs["old_price"];
$price=$rs["price"];
$level=$rs["level"];
$buy_way=$rs["buy_way"];
$content=$rs["content"];
$pic=$rs["pic"];
$sh_id=$rs["sh_id"];
mysqli_free_result($sql);
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
    <td align="left" valign="top"><table width="100%" height="485" border="0" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td height="35" background="images/lm1.jpg"><table width="97%" height="24" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3%" align="center" valign="middle">&nbsp;</td>
              <td align="left" valign="middle" class="hei14">二手商品展示</td>
              </tr>
        </table></td>
      </tr>
      <tr>
        <td height="448" align="center" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="35">&nbsp;</td>
          </tr>
          <tr>
            <td height="132" align="center"><table width="98%" height="304" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="47%" height="304"><img src="<?=$pic?>" width="313" height="283" /></td>
                <td width="53%" align="center" valign="middle"><table width="304" border="0" cellspacing="0" cellpadding="0">
				  <form action="cart.php">
			  <input type="hidden" name="id" value="<?=$id?>">
                   
                    <tr>
                      <td height="35" colspan="2" align="center" background="images/bt.jpg" class="bai14"><?=left($name,16)?></td>
                    </tr>
                    <tr>
                      <td height="33" align="right" bgcolor="#FEFEED" class="text12">原价：</td>
                      <td align="left" bgcolor="#FEFEED" class="hei14"><?=$old_price?></td>
                    </tr>
                    <tr>
                      <td height="33" align="right" bgcolor="#FEFEED" class="text12">转让价格：</td>
                      <td align="left" bgcolor="#FEFEED" class="hei14"><span class="text12">
                        <?=$price?>
                      </span></td>
                    </tr>
                    <tr>
                      <td height="30" align="right" bgcolor="#FFFFFF" class="text12">使用情况：</td>
                      <td align="left" bgcolor="#FFFFFF" class="hei14"><span class="text12">
                        <?=$level?>
                      </span></td>
                    </tr>
                    <tr>
                      <td height="30" align="right" bgcolor="#FFFFFF" class="text12">交易方式：</td>
                      <td align="left" bgcolor="#FFFFFF" class="hei14"><?=$buy_way?></td>
                    </tr>
					 <?
						$qq=mysqli_query($conn,"select * from hy where hy_id='$sh_id'");
						$r=mysqli_fetch_assoc($qq);
					?>
                    <tr>
                      <td height="27" align="right" bgcolor="#EEEEEE" class="text12"><span class="text12">卖家：</span></td>
                      <td align="left" bgcolor="#EEEEEE" class="text12"><?=$r["name"]?></td>
                    </tr>
                    <tr>
                      <td height="32" align="right" bgcolor="#EEEEEE" class="text12">联系电话:</td>
                      <td align="left" bgcolor="#EEEEEE" class="text12"><?=$r["tel"]?></td>
                    </tr>
                   
                    <tr>
                      <td width="73" height="40" bgcolor="#FFFFFF" class="hei14">&nbsp;</td>
                      <td width="231" bgcolor="#FFFFFF" class="Zred"><input type="image" name="imageField2" src="images/shop_button.jpg" /></td>
                    </tr>
					</form>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="153" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
              <tr>
                <td height="35" background="images/lm1.jpg" bgcolor="#FEFEED"><table width="95%" height="24" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%" align="center" valign="middle">&nbsp;</td>
                    <td align="left" valign="middle" class="hei14">商品详情</td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="15" align="left" valign="top" class="text12">&nbsp;</td>
              </tr>
              <tr>
                <td height="206" align="center" valign="top"><table width="100%" height="23" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="left" class="text12"><?=$content?></td>
                  </tr>
                </table>
                <table width="100%" border="0">
                    <tr>
                      <td height="35" colspan="2" align="left" background="images/lm1.jpg" class="text12">　咨询评论</td>
                    </tr>
					<?
		$q=mysqli_query($conn,"select * from pl where product_id='$id'");
					while($rst=mysqli_fetch_array($q))
					{
					?>
                    <tr>
                      <td width="11%" height="33" align="center" class="text12"><?=$rst["userid"]?> <span class="reg12">说</span></td>
                      <td width="89%" align="left" class="text12"><?=$rst["content"]?></td>
                    </tr>
					<?
					}
					mysqli_free_result($q);
					?>
                  </table>
				  <?
					if(!empty($_SESSION["userid"]))
					{
                ?>
                  <table width="100%" border="0">
				  <form action="save_pl.php" method="post">
	<input type="hidden" name="id" value="<?=$id?>">
                    <tr>
                      <td height="26" colspan="2" background="images/lm1.jpg">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="11%" height="26" align="right" class="text12">账号：</td>
                      <td width="89%" align="left"><input name="userid" type="text" size="15" value="<?=$_SESSION["userid"]?>" readonly="true"></td>
                    </tr>
                    <tr>
                      <td height="26" align="right" class="text12">内容：</td>
                      <td align="left"><textarea name="content" cols="60" id="content"></textarea></td>
                    </tr>
                    <tr>
                      <td height="26" align="right">&nbsp;</td>
                      <td align="left"><input type="submit" name="Submit" value="提  交" /></td>
                    </tr>
					</form>
                  </table>
				  <?
				  }
				  ?>
				  </td>
              </tr>
            </table></td>
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
