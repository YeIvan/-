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
//��Ӳ���
if($act=='add')
{
  $num=exist_member($username);
     if($num==0)
     {
 $sql="insert into hy(userid,password,name,sex,tel,post_address,create_date,depart) values('$username','$password','$name','$sex','$tel','$addr','$time','$depart')";
 $query=mysqli_query($conn,$sql);
 echo "<script>alert('ע��ɹ�,���¼��'); window.location.href='index.php';</script>";
    }
    else
    {
     echo "<script>alert('���˺��Ѿ�����,���������룡'); window.location.href='reg.php';</script>"; 
    }
}



?>