<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$title=$_POST["title"];
$content=$_POST["content"];
$time=date("Y-n-d");
$act=$_GET["act"];
//添加操作 
if($act=="add")
{
$sql="insert into shop_article(title,content,news_date) values('$title','$content','$time')";
mysql_query($sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_article.php';</script>";
}
//编辑操作
if($act=="edit")
{
$id=isint($_POST["id"]);
$url=$_POST["url"];
$sql="update shop_article set title='$title',content='$content',news_date='$time' where article_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='articlelist.php';</script>";
}

//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from shop_article where article_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}

?>