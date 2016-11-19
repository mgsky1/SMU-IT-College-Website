<?php
 require_once("PHP_Script/DBOperation.php"); 
 $adminID = $_GET['adminID'];
 $sql = "DELETE FROM admin WHERE ID = $adminID";
 $db = new db();
 $db->_construct();
 $set = $db->query($sql);
 if($set)
 {
	 echo "<script>alert('删除成功！');window.location.href='countAdmin.php'</script>";
 }
 else
 {
	  echo "<script>alert('删除失败！');history.go(-1)</script>";
 }
?>