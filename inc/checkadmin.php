<?
session_start();
if(empty($_SESSION["adminname"]))
{
echo "<script>alert('ÇëÏÈµÇÂ¼£¡');window.top.location.href='login.php'</script>";
}
?> 
