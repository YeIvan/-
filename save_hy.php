<?
include("inc/conn.php");
include("inc/func.php");
$username=$_POST["userid"];
$password=$_POST["password"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$sex=$_POST["sex"];
$addr=$_POST["addr"];
$depart=$_POST["depart"];
date_default_timezone_set("PRC");
$time=date("Y-m-d H:i:s");
$act=$_GET["act"];
//添加操作
if($act=='add')
{
  $num=exist_member($username);
     if($num==0)
     {
 $sql="insert into hy(userid,password,name,sex,tel,post_address,create_date,depart) values('$username','$password','$name','$sex','$tel','$addr','$time','$depart')";
 $query=mysqli_query($conn,$sql);
 echo "<script>alert('注册成功,请登录！'); window.location.href='index.php';</script>";
    }
    else
    {
     echo "<script>alert('该账号已经存在,请重新输入！'); window.location.href='reg.php';</script>"; 
    }
}



?>