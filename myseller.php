<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
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
        <td height="35" background="images/lm1.jpg">��������Ϣ</td>
      </tr>
      <tr>
        <td height="448" align="center" valign="middle"><table width="97%" border="0">
          <tr>
            <td width="15%" height="25" align="center" bgcolor="#E3F6FC">���</td>
            <td width="15%" align="center" bgcolor="#E3F6FC">�ʺ�</td>
            <td width="9%" align="center" bgcolor="#E3F6FC">�Ա�</td>
            <td width="27%" align="center" bgcolor="#E3F6FC">����</td>
            <td width="12%" align="center" bgcolor="#E3F6FC">�۸�</td>
            <td align="center" bgcolor="#E3F6FC">״̬</td>
            <td align="center" bgcolor="#E3F6FC">&nbsp;</td>
          </tr>
          <?
		  $hy_id=$_SESSION["hy_id"];
		  $q=mysqli_query($conn,"select * from orders where sh_id='$hy_id'");
		  while($rs=mysqli_fetch_array($q))
		  {
		  ?>
          <tr>
            <td height="31" align="center"><?=$rs["name"]?></td>
            <td height="31" align="center"><?=$rs["userid"]?></td>
            <td height="31" align="center"><?=$rs["sex"]?></td>
            <td height="31" align="center"><?=left($rs["title"],16)?>            </td>
            <td height="31" align="center"><?=$rs["price"]?>Ԫ</td>
            <td width="10%" height="31" align="center"><?=$rs["state"]?></td>
            <td width="12%" height="31" align="center"><a href="saveorder.php?act=cl&id=<?=$rs["order_id"]?>&rent_id=<?=$rs["rent_id"]?>&value=ȷ��" onClick="{if(confirm('ȷ�϶�����?')){return true;}return false;}">ȷ��</a> <a href="saveorder.php?act=cl&id=<?=$rs["order_id"]?>&rent_id=<?=$rs["rent_id"]?>&value=ȡ��" onClick="{if(confirm('ȷ�϶�����?')){return true;}return false;}">ȡ��</a></td>
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
