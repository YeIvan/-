<?
session_start();
include("../inc/conn.php");
include("../inc/func.php");
$user=$_POST["username"];
$password=$_POST["password"];

$query=mysql_query("select * from web_admin where web_admin='$user'");
if(mysql_num_rows($query)==0)
{
echo "<script>alert('��������ȷ���ʺ����룡');window.top.location.href='login.php'</script>";
}
else
{
  $rs=mysql_fetch_assoc($query);
  if($rs["password"]==$password)
    { 
     $_SESSION["adminname"]=$user;
	 $_SESSION["power"]=$rs["power"];
	 $_SESSION["user_id"]=$rs["admin_id"];
	 echo "<script>window.location.href='index.php'</script>";
	}
	else
	{
	 echo "<script>alert('��������ȷ�����룡');window.top.location.href='login.php'</script>";
	}
}

?>