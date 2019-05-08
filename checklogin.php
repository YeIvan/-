<?php
session_start();
include("inc/conn.php");
include("inc/func.php");
$userid=$_POST["userid"];
$password=$_POST["password"];

	$sql=mysqli_query($conn,"select * from hy where userid='$userid' and password='$password'");
	$num=mysqli_num_rows($sql);
	if($num==0)
	{
		echo "<script>alert('请输入正确的帐号密码！');window.location.href='index.php'</script>";
		exit;
	}
	else
	{
		$rs=mysqli_fetch_assoc($sql);
		$_SESSION["userid"]=$rs["userid"];
		$_SESSION["hy_id"]=$rs["hy_id"];
		$_SESSION["hy_type"]="个人";
		mysqli_free_result($sql);
		//判断是否从订单结算页面发出请求
		echo "<script>alert('您已经成功登陆！');window.location.href='index.php'</script>";
		mysqli_free_result($sql);
	}

?>
