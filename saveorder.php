<?
include("inc/conn.php");
include("inc/func.php");
$hy_id=$_POST["hy_id"];
$rent_id=$_POST["rent_id"];
$sh_id=$_POST["sh_id"];
$userid=$_POST["userid"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$sex=$_POST["sex"];
$title=$_POST["title"];
$price=$_POST["price"];
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
	   $sql="insert into orders(hy_id,userid,name,sex,tel,title,rent_id,sh_id,price) values('$hy_id','$userid','$name','$sex','$tel','$title','$rent_id','$sh_id','$price')";
mysqli_query($sql);
    echo "<script>alert('���޳ɹ���'); window.location.href='index.php';</script>";


}
if($act=='cl')
{
   $id=$_GET["id"];
   $rent_id=$_GET["rent_id"];
   $value=$_GET["value"];
   mysqli_query($conn,"update orders set state='$value' where order_id='$id'");
   if($value=="ȷ��")
   {
     mysqli_query($conn,"update rent set state='����' where rent_id='$rent_id'");
   }
    echo "<script>alert('����ɹ���'); window.location.href='myseller.php';</script>";
}
?>