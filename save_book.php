<?
session_start();
include("inc/conn.php");
include("inc/func.php");
$username=$_POST["username"];
$content=$_POST["content"];
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
 $sql="insert into lyb(username,content,book_date) values('$username','$content','$time')";
 $query=mysqli_query($conn,$sql);
 echo "<script>alert('���������Ѿ��ɹ�'); window.location.href='book.php';</script>";
}

?>