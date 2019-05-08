<?
include("inc/conn.php");
$id=$_POST["id"];
$order_state=$_POST["order_state"];
$sql="update shop_order set order_state='$order_state' where order_id='$id'";
mysqli_query($conn,$sql);
echo "<script>window.location.href='mytrade.php';</script>";
?>
