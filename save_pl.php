<?
session_start();
include("inc/conn.php");
$userid=$_POST["userid"];
$content=$_POST["content"];
$id=$_POST["id"];
$url=$_SERVER["HTTP_REFERER"];
$query=mysqli_query($conn,"insert into pl(userid,content,product_id) values('$userid','$content','$id')");
echo "<script>alert('ÆÀÂÛ³É¹¦£¡');window.top.location.href='".$url."'</script>";
?>
