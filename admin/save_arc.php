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
//��Ӳ��� 
if($act=="add")
{
$sql="insert into arc(title,content,rq) values('$title','$content','$rq')";
mysql_query($sql);
echo "<script>alert('�Ѿ���ӳɹ���'); window.location.href='add_arc.php';</script>";
}
//�༭����
if($act=="edit")
{
$id=$_POST["id"];
$url=$_POST["url"];
$sql="update arc set title='$title',content='$content',rq='$rq' where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='".$url."';</script>";
}

//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from arc where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
?>