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
<title>留言板</title>
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
              <td width="85%" align="left" valign="middle" class="hei14">网站留言</td>
              <td width="12%" align="left" valign="middle" class="bai14"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="406" align="left" valign="top"><table width="100%" height="450" border="0" cellpadding="0" cellspacing="0" class="border">
          <tr>
            <td align="left" valign="top" class="text12"><?php
$execc="select count(*) from lyb";
$resultc=mysqli_query($conn,$execc);
$rsc=mysqli_fetch_array($resultc);
$num=$rsc[0];
$pagesize=12;
$pagecount=ceil($num/$pagesize)-1;

if(empty($_GET["page"]))
{
$page=0;
}
else
{
$page=$_GET["page"];
}
if($page<0)
{
$page=0;
}
if($page>$pagecount)
{
$page=ceil($num/$pagesize)-1;
}
$nextpage=$page+1;

 $exec="select * from lyb  order by book_id desc limit ".($page*$pagesize)."$pagesize";
$result=mysqli_query($conn,$exec);
if($num==0)
{
 echo "暂无信息";
 }
 else
 {
 while($rs=mysqli_fetch_array($result))
{
?>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="28" bgcolor="#EFEFEF" class="text12"><?=$rs["username"]?>
                      ：
                      <?=$rs["content"]?></td>
                  </tr>
                  <tr>
                    <td height="30" bgcolor="#F9E1E1" class="text12">网站回复：
                      <?=$rs["remark"]?></td>
                  </tr>
                </table>
              <?
}
}
?>
                <table width="100%" border="0" align="center">
                  <tr>
                    <td class="text12">共有
                      <?=$num?>
                      条记录　分
                      <?=ceil($num/$pagesize)?>
                      页显示　当前是第
                      <?=$page+1?>
                      页 <a href="?page=0" class="text12">首页</a>
                      <?
if ($page==0) echo "<span class='text12'>上一页</span>";
else echo "<a href='?page=$page' class='text12'>上一页</a>";
?>
                      <?
if($page==$pagecount) echo "<span class='text12'>下一页</span>";
else echo "<a href='?page=$nextpage' class='text12'>下一页</a>"; 
?>
                      <?
if($page==$pagecount) echo "<span class='text12'>尾页</span>";
else echo "<a href='?page=$pagecount' class='text1'>尾页</a>";
?></td>
                  </tr>
                </table>
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="32">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="32"><?
			if(!$_SESSION["userid"])
			{
			?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="39" colspan="2" align="center" class="text12">请登录后再进行留言</td>
                          </tr>
                          </form>
                          
                        </table>
                      <?
		  }
		  else
		  {
		  ?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <form action="save_book.php?act=add" method="post">
                            <tr>
                              <td height="28" colspan="2" background="images/kx_bg.jpg">　<span class="bai14">发表留言</span></td>
                            </tr>
                            <tr>
                              <td width="13%" height="37" align="right" class="text12">您的昵称：</td>
                              <td width="87%" align="left"><input name="username" type="text" class="inpits" id="name" style="font-size: 14px" size="24" maxlength="30" value="<?=$_SESSION["userid"]?>"></td>
                            </tr>
                            <tr>
                              <td height="96" align="right" class="text12">发表的内容：</td>
                              <td align="left"><textarea rows="6" name="content" cols="50" style="font-size: 14px" class="inpits"></textarea></td>
                            </tr>
                            <tr>
                              <td height="27">&nbsp;</td>
                              <td><input type="submit" value="提  交"
name="cmdOk" />
                                  <input type="submit" value="重  设"
name="cmdOk2" /></td>
                            </tr>
                          </form>
                        </table>
                      <?
		}
		?>
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
