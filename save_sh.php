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
//添加操作
if($act=='add')
{
  $num=exist_sh($zhe);
     if($num==0)
     {
		 $sql="insert into sh(zh,mima,name,tel,addr) values('$zh','$mima','$name','$tel','$addr')";
		 $query=mysqli_query($conn,$sql);
		 echo "<script>alert('注册成功,请登录！'); window.location.href='index.php';</script>";
    }
    else
    {
     echo "<script>alert('该账号已经存在,请重新输入！'); window.location.href='sh_reg.php';</script>"; 
    }
}

//
if($act=='edit')
{
  $id=$_POST["id"];
  $pic=$_POST["pic"];
  $content=$_POST["content"];
  $q=mysqli_query($conn,"update sh set mima='$mima',name='$name',tel='$tel',addr='$addr',content='$content',logo='$pic' where sh_id='$id'");
  echo "<script>alert('修改成功！'); window.location.href='edit_shop.php';</script>"; 
}
//

?>