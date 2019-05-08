<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>发布商品</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">发布商品</td>
              <td width="12%" align="left" valign="middle" class="bai14"><a href="#">MORE+</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="center" valign="middle"><table width="709" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#E9E5D9" class="border">
          <form action="save_product.php?act=add" method="post" name="form10" id="form10">
            <input type="hidden" name="sh_id" value="<?=$_SESSION["hy_id"]?>">
            <tr bgcolor="#FFFFFF">
              <td width="79"  height="30" align="right" bgcolor="#F0ECE0" class="text12">名称</td>
              <td width="613" bgcolor="#F0ECE0" class="text12"><input name="name" type="text" id="name" maxlength="35" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="23" align="right" bgcolor="#F0ECE0" class="text12">原价格：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><input name="old_price" type="text" id="old_price"  maxlength="35" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="23" align="right" bgcolor="#F0ECE0" class="text12">转让价格：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><input name="price" type="text" id="price"  maxlength="35" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#F0ECE0" class="text12">使用情况：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><input name="level" type="text" id="level"  maxlength="35" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="27" align="right" bgcolor="#F0ECE0" class="text12">分类：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><select name="category" size="1" id="category">
                  <?    
$sql = "select * from category";    
$result = mysqli_query( $conn,$sql );
while($res = mysqli_fetch_array($result)){
?>
                  <option value="<? echo $res["c_id"]; ?>"><? echo $res["category"]; ?></option>
                  <? 
		}
		mysqli_free_result($result);
		?>
              </select></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#F0ECE0" class="text12">交易方式：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><input type="radio" name="buy_way" value="面交">
                面交
                  <input type="radio" name="buy_way" value="快递发货">快递发货
             </td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="25" align="right" bgcolor="#F0ECE0" class="text12">图片地址：  (上传图片大小不能大于1MB)</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><input name="pic" type="text" id="pic"  maxlength="45" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="35" align="right" bgcolor="#F0ECE0" class="text12">&nbsp;</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="78" align="right" bgcolor="#F0ECE0" class="text12">描述：</td>
              <td align="left" bgcolor="#F0ECE0" class="text12"><textarea name="content" cols="55" rows="4" id="content"></textarea></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="41" align="right" bgcolor="#F0ECE0" class="text12">&nbsp;</td>
              <td height="41" align="left" bgcolor="#F0ECE0"><input name="ChangeAD" type="submit" class="input1" value="确 定" />
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
