<?
session_start();
require_once('inc/conn.php'); 
require_once('inc/func.php');
require('inc/inc_cart.php');
$name=$_POST["name"];
$telephone=$_POST["telephone"];
$post_address=$_POST["post_address"];
$content=$_POST["content"];
//
$userid=$_SESSION["userid"];
$sql="select * from hy where userid='$userid'";
$query=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($query);
$hy_id=$rs["hy_id"];
mysqli_free_result($query);
//
//
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$order_number=get_dingdan();
$act=$_GET["act"];
//��Աע��
if($act=='add')
{
    $productarry=$_SESSION["cart_id"];
    $maxsize=sizeof($productarry);
for($i=0;$i<$maxsize;$i++) {
    if ($productarry[$i] != 0) {
//�����ݿ����
        $sql = mysqli_query($conn, "update product set status='���۳�' where product_id='" . $productarry[$i] . "'");
    }
}
//ƴ�Ӷ�������
$insert_id=mysqli_insert_id($conn);
$total=0;
		$idarry=$_SESSION["cart_id"];
        $countarry=$_SESSION["cart_count"];
		$pricearry=$_SESSION["price_count"];
		$partarry=$_SESSION["part_count"];
		$showarry=$_SESSION["show_count"];
		$maxsize=sizeof($idarry);
		for($i=0;$i<$maxsize;$i++)
		{
		  if($idarry[$i]!=0)
		  {
		    $order_number=get_dingdan();
			$sql=mysqli_query($conn,"select * from product where product_id='".$idarry[$i]."'");
			$rs=mysqli_fetch_assoc($sql);
			//��shop_orderinfo���в�������
	$query="insert into shop_order(name,telephone,post_address,content,ordertime,hy_id,order_number,order_num,order_price,pro_name,product_id,sh_id) values('$name','$telephone','$post_address','$content','$time','$hy_id','$order_number','".$countarry[$i]."','".$rs["price"]."','".$rs['name']."','".$rs["product_id"]."','".$rs["sh_id"]."')";
	mysqli_query($conn,$query);
	mysqli_free_result($sql);
			//
		  }
		}
		
	remove_arry();
		mysqli_query($conn,"update");
	echo "<script>alert('�����Ѿ��ύ,�ȴ�����'); window.location.href='index.php';</script>";

}
?>