<?
session_start();
include("inc/conn.php");
$oldpass=$_POST["oldpass"];
$password=$_POST["newpass"];
$username=$_SESSION["userid"];
$cx=mysqli_query($conn,"select * from hy where userid='$username' and password='$oldpass'");
$num=mysqli_num_rows($cx);
if($num)
{
$query=mysqli_query($conn,"update hy set password='$password' where userid='$username'");
echo "<script>alert('�����޸ĳɹ���');window.top.location.href='edit_pwd.php'</script>";
}
else
{
echo "<script>alert('�������������,���������룡');window.top.location.href='edit_pwd.php'</script>";
}

?>
