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

//�������Ӳ���
if($act=="add")
{
$sql="insert into needs(title,hy_id,rq,price,content,addr) values('$title','$hy_id','$rq','$price','$content','$addr')";
mysqli_query($conn,$sql);
echo "<script>alert('�Ѿ���ӳɹ���'); window.location.href='add_needs.php';</script>";
}
//�༭����
if($act=="edit")
{
	$id=$_POST["id"];
	$sql="update needs set title='$title',rq='$rq',price='$price',addr='$addr',content='$content' where needs_id='$id'";
	mysqli_query($conn,$sql);
	echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='myneeds.php';</script>";
}

//ɾ������
if($act=="del")
{
	$id=$_GET["id"];
	$url=$_SERVER["HTTP_REFERER"];
	$sql="delete from needs where needs_id='$id'";
	mysqli_query($conn,$sql);
	echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
?>