<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$act=$_GET["act"];

//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from pj where pj_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
//
if($act=="check")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update pj set is_check=1 where pj_id='$id'";
mysql_query($sql);
echo "<script>window.location.href='".$url."';</script>";
}
?>