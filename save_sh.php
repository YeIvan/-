<?
include("inc/conn.php");
include("inc/func.php");
$zh=$_POST["zh"];
$mima=$_POST["mima"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$addr=$_POST["addr"];
date_default_timezone_set("PRC");
$time=date("Y-m-d H:i:s");
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
  $num=exist_sh($zhe);
     if($num==0)
     {
		 $sql="insert into sh(zh,mima,name,tel,addr) values('$zh','$mima','$name','$tel','$addr')";
		 $query=mysqli_query($conn,$sql);
		 echo "<script>alert('ע��ɹ�,���¼��'); window.location.href='index.php';</script>";
    }
    else
    {
     echo "<script>alert('���˺��Ѿ�����,���������룡'); window.location.href='sh_reg.php';</script>"; 
    }
}

//
if($act=='edit')
{
  $id=$_POST["id"];
  $pic=$_POST["pic"];
  $content=$_POST["content"];
  $q=mysqli_query($conn,"update sh set mima='$mima',name='$name',tel='$tel',addr='$addr',content='$content',logo='$pic' where sh_id='$id'");
  echo "<script>alert('�޸ĳɹ���'); window.location.href='edit_shop.php';</script>"; 
}
//

?>