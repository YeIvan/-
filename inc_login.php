<?
	if(empty($_SESSION["userid"]))
	{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">

            <tr>
              <td height="35" background="images/lm1.jpg" bgcolor="#FFFFC4"><table width="70%" height="24" border="0" cellpadding="0" cellspacing="0">
			  
                  <tr>
                    <td width="9%" align="center" valign="middle">&nbsp;</td>
                    <td width="91%" align="left" valign="middle" class="hei14">会员登陆</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="169" align="center" valign="middle" bgcolor="#FFE8F2"><table width="216" border="0" cellpadding="0" cellspacing="0" class="threeebk">
			  <form action="checklogin.php" method="post">
                  <tr>
                    <td width="39%" height="32" align="right" valign="middle" class="text12">帐号：</td>
                    <td width="61%"><input name="userid" type="text" class="shuru" id="username" size="15" /></td>
                  </tr>
                  <tr>
                    <td height="33" align="right" valign="middle" class="text12">密码：</td>
                    <td><input name="password" type="password" class="shuru" id="password" size="15" /></td>
                  </tr>
                  
                  <tr>
                    <td height="37" colspan="2" align="center" class="text12"><input type="submit" name="Submit" value="登 陆" />
                      &nbsp;&nbsp;<a href="reg.php"class="reg12">会员注册</a> <a href="sh_reg.php"class="reg12"></a></td>
                  </tr>
				  </form>
              </table></td>
            </tr>
        </table>
<?
	}
	else
	{
?>
<?
  if($_SESSION["hy_type"]=='个人')
  {
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
            <tr>
              <td height="35" background="images/lm1.jpg" bgcolor="#FFFFC4"><table width="70%" height="24" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="9%" align="center" valign="middle">&nbsp;</td>
                    <td width="91%" align="left" valign="middle" class="hei14">个人中心</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="169" align="center" valign="middle" bgcolor="#FFE8F2"><table width="221" border="0" cellpadding="0" cellspacing="0" class="iborder">
                <tr>
                  <td height="28" align="center" class="text12">欢迎您,<?=$_SESSION["userid"]?></td>
                </tr>
                <tr>
                  <td height="23" align="center" class="text12"><a href="edit_pwd.php" class="text12">修改密码</a></td>
                </tr>
			
			 <tr>
            <td height="22" align="center" valign="middle"><a href="add_product.php" class="text12">发布商品</a></td>
            </tr>
			<tr>
            <td height="22" align="center" valign="middle"><a href="myproduct.php" class="text12">商品管理</a></td>
            </tr>
			 
			  
              <td height="24" align="center" valign="middle"><a href="mytrade.php" class="text12">我卖出的</a></td>
            </tr>
               <tr>
                  <td height="25" align="center" class="text12"><a href="myorder.php" class="text12">我的购物记录</a></td>
                </tr>
				
                <tr>
                  <td height="28" align="center"><a href="exit.php" class="text12">退出</a></td>
                </tr>
              </table></td>
            </tr>
        </table>
<?
}
?>

<?
}
?>