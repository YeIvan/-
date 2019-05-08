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
    <td align="left" valign="top"><table width="100%" height="485" border="0" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td height="35" background="images/lm1.jpg">　租赁信息</td>
      </tr>
      <tr>
        <td height="448" align="left" valign="top">
		<?
		$id=$_GET["id"];
$sql=mysqli_query($conn,"select * from rent where rent_id='$id'");
$rs=mysqli_fetch_assoc($sql);
		?>
		<table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="132" align="center"><table width="98%" height="281" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="45%" height="281" align="center"><img src="<?=$rs["pic"]?>" width="283" height="253" /></td>
                  <td width="55%" align="center" valign="middle"><table width="378" border="0" cellspacing="0" cellpadding="0">
                     
                        <tr>
                          <td height="35" colspan="2" align="left" background="images/bt.jpg"><?=left($rs["title"],16)?></td>
                        </tr>
                        <tr>
                          <td height="33" align="right" bgcolor="#FEFEED" class="text12">价格：</td>
                          <td align="left" bgcolor="#FEFEED" class="hei14"><span class="text12">
                            <?=$rs["price"]?>
                          </span></td>
                        </tr>

                        <?
						$sh_id=$rs["sh_id"];
						$qq=mysqli_query($conn,"select * from hy where hy_id='$sh_id'");
						$r=mysqli_fetch_assoc($qq);
					?>

                        <tr>
                          <td height="33" align="right" bgcolor="#EEEEEE" class="text12">日期：</td>
                          <td align="left" bgcolor="#EEEEEE" class="text12"><?=$rs["rq"]?></td>
                        </tr>
                        <tr>
                          <td height="33" align="right" bgcolor="#EEEEEE" class="text12">卖家：</td>
                          <td align="left" bgcolor="#EEEEEE" class="text12"><?=$r["name"]?></td>
                        </tr>
                        <tr>
                          <td width="73" height="40" bgcolor="#FFFFFF" class="hei14">&nbsp;</td>
                          <td width="231" align="left" bgcolor="#FFFFFF" ><a href="order.php?id=<?=$id?>" class="Zred">我要租赁</a></td>
                        </tr>
                   
                  </table></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="153" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
                <tr>
                  <td height="35" background="images/lm1.jpg" bgcolor="#FEFEED"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="left" valign="middle" background="images/s_lanmu.jpg" class="text12"> 　详情</td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="15" align="left" valign="top" class="text12">&nbsp;</td>
                </tr>
                <tr>
                  <td height="206" align="center" valign="top"><table width="100%" height="23" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="left" class="text12"><?=$rs["content"]?></td>
                      </tr>
                  </table></td>
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
