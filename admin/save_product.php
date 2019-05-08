<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$name=$_POST["name"];
$prono=$_POST["prono"];
$mat=$_POST["mat"];
$category=$_POST["category"];
$pic=$_POST["pic"];
$price=$_POST["price"];
$m_price=$_POST["m_price"];
$flower_object=$_POST["flower_object"];
$content=$_POST["content"];
$act=$_GET["act"];
//如果是添加操作


//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from product where product_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
//推荐操作
if($act=="tj")
{
$id=isint($_GET["id"]);
$value=$_GET["value"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update shop_product set tj='$value' where product_id='$id'";
mysql_query($sql);
echo "<script>window.location.href='".$url."';</script>";
}
//特价操作
if($act=="spec")
{
$id=isint($_GET["id"]);
$value=$_GET["value"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update shop_product set is_spec='$value' where product_id='$id'";
mysql_query($sql);
echo "<script>window.location.href='".$url."';</script>";
}
?>