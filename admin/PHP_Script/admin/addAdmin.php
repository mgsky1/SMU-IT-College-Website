<?php
 /*添加管理员 基于PHP7 Design By 小远*/
  require_once("../../../DataConnect/Data.php"); 
  $userName = trim($_POST["unname"]);
  $password = trim($_POST["psd"]);
  $passwordR = trim($_POST["psdr"]);
  
  if($userName == "")
  {
	  echo "<script>alert('用户名不能为空');history.go(-1)</script>";
	  return;
  }
  
  if($password == "")
  {
	  echo "<script>alert('密码不能为空');history.go(-1)</script>";
	  return;
  }
  
  if($passwordR == "")
  {
	  echo "<script>alert('确认密码不能为空');history.go(-1)</script>";
	  return;
  }
  
  if($password != $passwordR)
  {
	  echo "<script>alert('两次数入密码不一致');history.go(-1)</script>";
	  return;
  }
  
  $password = md5($password);
  $sql = "INSERT INTO admin(UserName , Password) VALUES('$userName' , '$password')";
  $set = $Data->query($sql);
  if($set)
  {
	  echo "<script>alert('添加管理员成功！');self.location=document.referrer;</script>";
  }
  else
  {
	  echo "<script>alert('添加管理员失败！');history.go(-1)</script>";
  }
?>