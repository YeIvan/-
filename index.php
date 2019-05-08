<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>首页</title>
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
    <td width="230" height="445"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
    <td align="left" valign="top"><table width="100%" height="259" border="0" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td height="35" background="images/lm1.jpg">　二手信息</td>
      </tr>
      <tr>
        <td height="200" align="left" valign="top">
		<!--开始-->
		<table width="98%" border="0" cellpadding="0" cellspacing="0">
<tr>
<?
$q=mysqli_query($conn,"select * from product where status='在售' order by  product_id desc limit 3 ");
while($rs=mysqli_fetch_array($q))
{
?>
    <td height="185" align="center" valign="middle"><table width="89%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="172" align="center" valign="middle"><a href="product_info.php?id=<?=$rs["product_id"]?>"><img src="<?=$rs["pic"]?>" width="193" height="153" border="0" /></a></td>
                  </tr>
                  <tr>
                    <td height="23" align="center" valign="middle" class="ju">
					<?
					$r=turn_sh($conn,$rs["sh_id"]);
					echo $r["name"];
					?>
					</td>
                  </tr>
                  <tr>
                    <td height="23" align="center" valign="bottom" class="hui14"><a href="product_info.php?id=<?=$rs["product_id"]?>" class="text12"><?=left($rs["name"],10)?></a></td>
                  </tr>
              </table></td>
            <?
			}
			mysqli_free_result($q);
			?>
              </tr>
		  
        </table>
		<!--结束-->
		</td>
      </tr>
    </table>
	<br>
      <table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" class="border">
        <tr>
          <td height="35" background="images/lm1.jpg">　资助公示</td>
        </tr>
        <tr>
          <td height="163" align="left" valign="top"><table width="100%" border="0">
            <?
			$q=mysqli_query($conn,"select * from arc order by arc_id desc limit 4");
			while($rs=mysqli_fetch_array($q))
			{
			?>
			<tr>
              <td width="6%" height="35" align="center"><span class="hui12"><img src="images/oic_02.gif" width="7" height="7" /></span></td>
              <td width="75%"><a href="show_arc.php?id=<?=$rs["arc_id"]?>" class="text12"><?=left($rs["title"],16)?></a></td>
  <td width="19%" align="center" class="text12"><?=$rs["rq"]?></td>
            </tr>
            <?
			}
			mysqli_free_result($q);
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
