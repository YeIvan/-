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
<SCRIPT language=javascript>
function CheckPost()
{
	if (form10.userid.value.length==0)
	{
		alert("����дѧ��");
		form10.userid.focus();
		return false;
	}	
	if (form10.password.value.length==0)
	{
		alert("����д����");
		form10.password.focus();
		return false;
	}	
	if (form10.name.value.length==0)
	{
		alert("����д����");
		form10.name.focus();
		return false;
	}
	if (form10.tel.value.length==0)
	{
		alert("����д�绰");
		form10.tel.focus();
		return false;
	}
	if (form10.addr.value.length==0)
	{
		alert("����д����");
		form10.addr.focus();
		return false;
	}				
     form10.submit();
}

</SCRIPT>
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
              <td width="85%" align="left" valign="middle" class="hei14">�����û�ע��</td>
              <td width="12%" align="left" valign="middle" class="bai14"><a href="#">MORE+</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="middle"><table width="598" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FAE2FE" class="border">
          <form action="save_hy.php?act=add" method="post" name="form10" id="form10">
            <tr bgcolor="#FFFFFF">
              <td  height="25" align="right" bgcolor="#ffe8f2" class="hei14">������</td>
              <td align="left" bgcolor="#ffe8f2"><select name="depart" id="depart">
                <?
				$q=mysqli_query($conn,"select * from depart");
				while($rst=mysqli_fetch_array($q))
				{
				?>
                  <option><?=$rst["depart"]?></option>
                  <?
				  }
				  mysqli_free_result($q);
				  ?>
				
              </select>
              </td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td width="115"  height="25" align="right" bgcolor="#ffe8f2" class="hei14">�û�����</td>
              <td width="466" align="left" bgcolor="#ffe8f2"><input name="userid" type="text" class="cpborder" id="userid" maxlength="35" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#ffe8f2" class="hei14">���룺</td>
              <td align="left" bgcolor="#ffe8f2"><input name="password" type="password" class="cpborder" id="password"  maxlength="35" />
                <span class="reg12">*</span></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#ffe8f2" class="hei14">������</td>
              <td align="left" bgcolor="#ffe8f2"><input name="name" type="text" class="cpborder" id="name" maxlength="35" />
                <span class="reg12">*</span></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#ffe8f2" class="hei14">�Ա�</td>
              <td align="left" bgcolor="#ffe8f2" class="text12"><input name="sex" type="radio" value="��" checked="checked" />
                ��
                <input type="radio" name="sex" value="Ů" />
                Ů</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#ffe8f2" class="hei14">�绰��</td>
              <td align="left" bgcolor="#ffe8f2"><input name="tel" type="text" class="cpborder" id="tel" maxlength="35" />
                <span class="reg12">*</span></td>
            </tr>

            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#ffe8f2" class="hei14">��ַ��</td>
              <td align="left" bgcolor="#ffe8f2"><input name="addr" type="text" class="cpborder" id="addr" maxlength="35" />
                <span class="reg12">*</span></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="41" align="right" bgcolor="#ffe8f2">&nbsp;</td>
              <td height="41" align="left" bgcolor="#ffe8f2"><input type="button" name="Submit" value="�� ��" onClick="CheckPost();";>
                  <input name="ChangeAD2" type="submit" class="input1" value="ȡ  ��" /></td>
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
