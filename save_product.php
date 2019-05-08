<?
include("inc/conn.php");
$name=$_POST["name"];
$category=$_POST["category"];
$pic=$_POST["pic"];
$sh_id=$_POST["sh_id"];
$old_price=$_POST["old_price"];
$price=$_POST["price"];
$buy_way=$_POST["buy_way"];
$content=$_POST["content"];
$level=$_POST["level"];
date_default_timezone_set("PRC");
$time=date("Y-m-d H:i:s");
$act=$_GET["act"];

//如果是添加操作
if($act=="add")
{
$sql="insert into product(name,c_id,pic,price,old_price,content,sh_id,level,buy_way) values('$name','$category','$pic','$price','$old_price','$content','$sh_id','$level','$buy_way')";
mysqli_query($conn,$sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_product.php';</script>";
}
//编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$url=$_POST["url"];
$sql="update product set name='$name',c_id='$category',pic='$pic',old_price='$old_price',price='$price',level='$level',buy_way='$buy_way',content='$content' where product_id='$id'";
mysqli_query($conn,$sql);
echo "<script>alert('已经修改成功！'); window.location.href='myproduct.php';</script>";
}

//删除操作
if($act=="del")
{
	$id=$_GET["id"];
	$url=$_SERVER["HTTP_REFERER"];
	$sql="delete from product where product_id='$id'";
	mysqli_query($conn,$sql);
	echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>