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
		echo "<script>alert('��������ȷ���ʺ����룡');window.location.href='index.php'</script>";
		exit;
	}
	else
	{
		$rs=mysqli_fetch_assoc($sql);
		$_SESSION["userid"]=$rs["userid"];
		$_SESSION["hy_id"]=$rs["hy_id"];
		$_SESSION["hy_type"]="����";
		mysqli_free_result($sql);
		//�ж��Ƿ�Ӷ�������ҳ�淢������
		echo "<script>alert('���Ѿ��ɹ���½��');window.location.href='index.php'</script>";
		mysqli_free_result($sql);
	}

?>
