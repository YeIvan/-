<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$depart=$_POST["depart"];
$act=$_GET["act"];

//��Ӳ��� 
if($act=="add")
{
$sql="insert into depart(depart) values('$depart')";
mysql_query($sql);
echo "<script>alert('�Ѿ���ӳɹ���'); window.location.href='add_depart.php';</script>";
}
//�༭����
if($act=="edit")
{
$id=$_POST["id"];
$url=$_POST["url"];
$sql="update depart set depart='$depart' where depart_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='departlist.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from depart where depart_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
?>