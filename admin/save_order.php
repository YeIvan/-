<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$act=$_GET["act"];
//ɾ������
if($act=="del")
{
$id=isint($_GET["id"]);
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from shop_order where order_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
//��������
if($act=="cl")
{
$id=$_POST["id"];
$order_state=$_POST["order_state"];
$url=$_SERVER['HTTP_REFERER'];
$exec="update shop_order set order_state='$order_state' where order_id='$id'";
$result=mysql_query($exec);
echo "<script>";
echo "location.href='".$url."';";
echo "alert('�޸ĳɹ���');";
echo "</script>";
}
?>