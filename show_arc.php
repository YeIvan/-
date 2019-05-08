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
<title>资助公示详情</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">资助公示</td>
              <td width="12%" align="left" valign="middle" class="bai14"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="left" valign="top">
		<?
		$id=$_GET["id"];
		$q=mysqli_query($conn,"select * from arc where arc_id='$id'");
		$rs=mysqli_fetch_assoc($q);
		?>
		<table width="98%" border="0" align="center">
          <tr>
            <td height="29" align="center" class="Zred"><?=$rs["title"]?></td>
          </tr>
          <tr>
            <td height="28" align="left" class="text12"><div  class="text12" style='line-height:23px;'>&nbsp;&nbsp;
                    <?=$rs["content"]?>
            </div></td>
          </tr>
          <tr>
            <td height="28" align="center" class="Zred"></td>
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
