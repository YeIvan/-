<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
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
              <td width="85%" align="left" valign="middle" class="hei14">&nbsp;</td>
              <td width="12%" align="left" valign="middle" class="bai14"><a href="#">MORE+</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="middle">
		<?
			$id=$_GET["id"];
			$sql="select * from shop_order where order_id='$id'";
			$query=mysqli_query($conn,$sql);
			$rst=mysqli_fetch_assoc($query);
		 ?>
		<table width="598" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#E9E5D9" class="border">
          <form action="save_dingdan.php?act=edit" method="post" name="form10" id="form10">
            <input type="hidden" name="id" value="<?=$id?>">
            <tr bgcolor="#FFFFFF">
              <td  height="30" align="right" bgcolor="#FFFFFF" class="text12">��Ʒ���ƣ�</td>
              <td align="left" bgcolor="#FFFFFF" class="text12"><?=$rst["pro_name"]?></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td width="90"  height="30" align="right" bgcolor="#FFFFFF" class="text12">������</td>
              <td width="491" align="left" bgcolor="#FFFFFF" class="text12"><?=$rst["order_num"]?></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="32" align="right" bgcolor="#FFFFFF" class="text12">�µ����ڣ�</td>
              <td align="left" bgcolor="#FFFFFF" class="text12"><?=$rst["ordertime"]?></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="31" align="right" bgcolor="#FFFFFF" class="text12">�ͻ�������</td>
              <td align="left" bgcolor="#FFFFFF" class="text12"><?=$rst["name"]?></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="26" align="right" bgcolor="#FFFFFF" class="text12">�绰��</td>
              <td align="left" bgcolor="#FFFFFF" class="text12"><?=$rst["telephone"]?></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="24" align="right" bgcolor="#FFFFFF" class="text12">��ַ��</td>
              <td align="left" bgcolor="#FFFFFF" class="text12"><?=$rst["post_address"]?></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="26" align="right" bgcolor="#FFFFFF">��ע��</td>
              <td height="26" align="left" bgcolor="#FFFFFF"><?=$rst["content"]?></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="27" align="right" bgcolor="#FFFFFF">����״̬��</td>
              <td height="27" align="left" bgcolor="#FFFFFF"><input type="radio" name="order_state" value="����">
               ����
                <input type="radio" name="order_state" value="�ݲ�����">
                �ݲ�����</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="27" align="right" bgcolor="#FFFFFF">&nbsp;</td>
              <td height="27" align="left" bgcolor="#FFFFFF"><input name="ChangeAD" type="submit" class="input1" value="ȷ ��" /></td>
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
