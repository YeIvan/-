<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$userid=$_POST["userid"];
$password=$_POST["password"];
$salt=substr($password, 0, 2); 
$password=crypt($password,$salt);
$email=$_POST["email"];
$grade=$_POST["grade"];
$time=date("Y-n-d")."-".date("H:i:s");
$act=$_GET["act"];

//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from hy where hy_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>