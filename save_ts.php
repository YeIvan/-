<?
session_start();
include("inc/conn.php");
include("inc/func.php");
$order_number=$_POST["order_number"];
$order_id=$_POST["order_id"];
$sh_id=$_POST["sh_id"];
$hy_id=$_POST["hy_id"];
$buyer=$_POST["buyer"];
$seller=$_POST["seller"];
$content=$_POST["content"];
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
 $sql="insert into ts(order_number,order_id,sh_id,hy_id,content,seller,buyer) values('$order_number','$order_id','$sh_id','$hy_id','$content','$seller','$buyer')";
 $query=mysqli_query($conn,$sql);
 echo "<script>alert('����Ͷ���Ѿ��ύ'); window.location.href='myorder.php';</script>";
}

?>