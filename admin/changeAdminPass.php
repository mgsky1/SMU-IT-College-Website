<?php
  /*修改管理员密码 基于PHP7 Design By 小远*/
  require_once('PHP_Script/DBOperation.php');
  $id = $_SESSION["adminID"];
  $user = $_SESSION["admin"];
  $pass = $_POST["password"];
  $passNew = $_POST["passwordNew"];
  $passRepead = $_POST["passwordRepeat"];
  $db = new db();
  $db->_construct();
  $sql = "select Password from admin where ID = $id";
  $set = $db->query($sql);
  $row = $db->getRow($set);
  $pass = md5($pass);
  if($row["Password"] != $pass)
  {
	  echo "<script>alert('原始密码不对');history.go(-1)</script>";
	  return;
  }
  
  if($passNew != $passRepead)
  {
	   echo "<script>alert('两次密码不一致');history.go(-1)</script>";
	  return;
  }
  $pass = md5( $passNew);
  $sql = "Update admin set Password = '$pass' Where ID = $id";
  $set = $db->query($sql);
  if($set)
  {
	  echo "<script>alert('修改成功！');window.location.href='countAdmin.php'</script>";
  }
  else
  {
	   echo "<script>alert('修改失败！');history.go(-1)</script>";
  }
?>