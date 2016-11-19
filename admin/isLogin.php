<?php
 if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
?>