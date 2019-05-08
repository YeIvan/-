<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$small_class=$_POST["name"];
$act=$_GET["act"];

//添加操作 
if($act=="add")
{
$sql="insert into category(category) values('$small_class')";
mysql_query($sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_smallclass.php';</script>";
}
//编辑操作
if($act=="edit")
{
$id=isint($_POST["id"]);
$url=$_POST["url"];
$sql="update category set category='$small_class' where c_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='smallclasslist.php';</script>";
}
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from category where c_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>