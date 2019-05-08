<?
session_start();
include("inc/conn.php");
include("inc/func.php");
$username=$_POST["username"];
$content=$_POST["content"];
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$act=$_GET["act"];
//添加操作
if($act=='add')
{
 $sql="insert into lyb(username,content,book_date) values('$username','$content','$time')";
 $query=mysqli_query($conn,$sql);
 echo "<script>alert('您的留言已经成功'); window.location.href='book.php';</script>";
}

?>