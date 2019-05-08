<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$depart=$_POST["depart"];
$act=$_GET["act"];

//添加操作 
if($act=="add")
{
$sql="insert into depart(depart) values('$depart')";
mysql_query($sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_depart.php';</script>";
}
//编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$url=$_POST["url"];
$sql="update depart set depart='$depart' where depart_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='departlist.php';</script>";
}
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from depart where depart_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>