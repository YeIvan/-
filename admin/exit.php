<?
session_start();
session_destroy();
echo "<script>alert('安全退出后台管理系统！');window.top.location.href='../index.php'</script>";
?>