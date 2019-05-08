<?
session_start();
include("inc/conn.php");
include("inc/func.php");
$id=$_GET["id"];
$sql=mysqli_query($conn,"select * from sh where sh_id='$id'");
$rs=mysqli_fetch_assoc($sql);
$name=$rs["name"];
$tel=$rs["tel"];
$addr=$rs["addr"];
$content=$rs["content"];
$pic=$rs["logo"];
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
              <td align="left" valign="middle" class="hei14">店铺展示</td>
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
				
                   
                    <tr>
                      <td height="35" colspan="2" align="center" background="images/bt.jpg" class="bai14"><?=left($name,16)?></td>
                    </tr>
					
                    <tr>
                      <td height="27" align="right" bgcolor="#EEEEEE" class="text12"><span class="text12">卖家：</span></td>
                      <td align="left" bgcolor="#EEEEEE" class="text12"><?=$name?></td>
                    </tr>
                    <tr>
                      <td height="32" align="right" bgcolor="#EEEEEE" class="text12">联系电话:</td>
                      <td align="left" bgcolor="#EEEEEE" class="text12"><?=$tel?></td>
                    </tr>
                    <tr>
                      <td height="33" align="right" bgcolor="#EEEEEE" class="text12">地址：</td>
                      <td align="left" bgcolor="#EEEEEE" class="text12"><?=$addr?></td>
                    </tr>
                    <tr>
                      <td width="73" height="40" bgcolor="#FFFFFF" class="hei14">&nbsp;</td>
                      <td width="231" bgcolor="#FFFFFF" class="Zred">&nbsp;</td>
                    </tr>
					
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
                    <td align="left" valign="middle" class="hei14">店铺介绍</td>
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
