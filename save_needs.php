<?
include("inc/conn.php");
$title=$_POST["title"];
$rq=$_POST["rq"];
$hy_id=$_POST["hy_id"];
$price=$_POST["price"];
$addr=$_POST["addr"];
$content=$_POST["content"];
date_default_timezone_set("PRC");
$time=date("Y-m-d H:i:s");
$act=$_GET["act"];

//如果是添加操作
if($act=="add")
{
$sql="insert into needs(title,hy_id,rq,price,content,addr) values('$title','$hy_id','$rq','$price','$content','$addr')";
mysqli_query($conn,$sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_needs.php';</script>";
}
//编辑操作
if($act=="edit")
{
	$id=$_POST["id"];
	$sql="update needs set title='$title',rq='$rq',price='$price',addr='$addr',content='$content' where needs_id='$id'";
	mysqli_query($conn,$sql);
	echo "<script>alert('已经修改成功！'); window.location.href='myneeds.php';</script>";
}

//删除操作
if($act=="del")
{
	$id=$_GET["id"];
	$url=$_SERVER["HTTP_REFERER"];
	$sql="delete from needs where needs_id='$id'";
	mysqli_query($conn,$sql);
	echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>