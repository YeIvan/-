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
        <td height="448" align="center" valign="middle"><table width="622" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" class="border">
          <?php
 $hy_id=$_SESSION["hy_id"];
 $query=mysqli_query($conn,"select * from hy where hy_id='$hy_id'");
  $rs=mysqli_fetch_assoc($query);
  //调用信息
  $id=$_GET["id"];
  $qq=mysqli_query("select * from rent where rent_id='$id'");
  $rst=mysqli_fetch_assoc($qq);
  //
?>
          <form action="saveorder.php?act=add" method="post" name="form10" id="form10">
            <input type="hidden" name="hy_id" value="<?php echo $hy_id?>" />
            <input type="hidden" name="rent_id" value="<?=$rst["rent_id"]?>" />
			 <input type="hidden" name="sh_id" value="<?=$rst["sh_id"]?>" />
            <tr bgcolor="#FFFFFF">
              <td  height="30" align="right" bgcolor="#E3F6FC" class="text12">标题：</td>
              <td align="left" valign="middle" bgcolor="#E3F6FC" class="text12"><?=$rst["title"]?></td>
              <input type="hidden" name="title" value="<?=$rst["title"]?>" />
            </tr>
            <tr bgcolor="#FFFFFF">
              <td  height="30" align="right" bgcolor="#E3F6FC" class="text12">价格：</td>
              <td align="left" valign="middle" bgcolor="#E3F6FC" class="text12"><?=$rst["price"]?></td>
            </tr>
            <input type="hidden" name="price" value="<?=$rst["price"]?>" />

            <tr bgcolor="#FFFFFF">
              <td width="83"  height="30" align="right" bgcolor="#E3F6FC" class="text12">帐号：</td>
              <td width="585" align="left" valign="middle" bgcolor="#E3F6FC" class="text12"><input name="userid" type="text" id="userid" maxlength="35"  value="<?php echo $rs["userid"]?>" readonly="true"/></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="36" align="right" bgcolor="#E3F6FC" class="text12">姓名：</td>
              <td align="left" bgcolor="#E3F6FC" class="text12"><input name="name" type="text" id="name" maxlength="35" value="<?php echo $rs["name"]?>"/></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#E3F6FC" class="text12">性别：</td>
              <td align="left" bgcolor="#E3F6FC" class="text12"><input name="sex" type="radio" value="男" <? if($rs['sex']=='男') echo "checked"?> />
                男
                <input type="radio" name="sex" value="女" <? if($rs['sex']=='女') echo "checked"?> />
                女</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="35" align="right" bgcolor="#E3F6FC" class="text12">电话：</td>
              <td align="left" bgcolor="#E3F6FC" class="text12"><input name="tel" type="text" id="tel" maxlength="35" value="<?php echo $rs["tel"]?>"/></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="41" align="right" bgcolor="#E3F6FC">&nbsp;</td>
              <td height="41" align="left" bgcolor="#E3F6FC"><input name="ChangeAD" type="submit" class="input1" value="确 定" />
                  <input name="ChangeAD2" type="submit" class="input1" value="取  消" /></td>
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
