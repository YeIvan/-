<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$pwd=$_POST["pwd"];
$act=$_GET["act"];
//编辑操作
if($act=="edit")
{
$sql="update web_admin set password='$pwd' where admin_id is not null";
mysql_query($sql);
echo "<script>alert('修改成功！'); window.location.href='edit_pwd.php';</script>";
}


?>