<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$fl=$_POST["fl"];
$title=$_POST["title"];
$rq=$_POST["rq"];
$content=$_POST["content"];
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$act=$_GET['act'];
//添加操作 
if($act=="add")
{
$sql="insert into arc(title,content,rq) values('$title','$content','$rq')";
mysql_query($sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_arc.php';</script>";
}
//编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$url=$_POST["url"];
$sql="update arc set title='$title',content='$content',rq='$rq' where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='".$url."';</script>";
}

//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from arc where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>