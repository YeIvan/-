<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$small_class=$_POST["name"];
$act=$_GET["act"];

//��Ӳ��� 
if($act=="add")
{
$sql="insert into category(category) values('$small_class')";
mysql_query($sql);
echo "<script>alert('�Ѿ���ӳɹ���'); window.location.href='add_smallclass.php';</script>";
}
//�༭����
if($act=="edit")
{
$id=isint($_POST["id"]);
$url=$_POST["url"];
$sql="update category set category='$small_class' where c_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='smallclasslist.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from category where c_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
?>