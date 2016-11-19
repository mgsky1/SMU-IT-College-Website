<meta charset="utf-8" />
<?php  require_once("../../DataConnect/Data.php")?>
<?php
  /*登陆方法 基于PHP7 Design By小远*/
   $user = trim($_POST["admin"]);
   $password = trim($_POST["password"]);
   $password = md5($password);
   $validate_right = $_SESSION["verification"];
   $validate_user = trim($_POST["validate_user"]);
   $validate_user = md5($validate_user);
    if($validate_right != $validate_user)
   {
	   echo "<script>alert('验证码错误！');window.location='../login.php';</script>";
	   return;
   }
   if($user == "")
   {
	    echo "<script>alert('用户名不能为空');history.go(-1)</script>";
	   return;
   }
   if($password == "")
   {
	   echo "<script>alert('密码不能为空');history.go(-1)</script>";
	   return;
   }
     if(count(explode("'",$user))>1)//判断是否有输入非法字符
	 {
		 echo "<script>alert('非法字符');history.go(-1);</script>";
		 return;
	 }
	  if(count(explode("'",$password))>1)//判断是否有输入非法字符
	 {
		 echo "<script>alert('非法字符');history.go(-1);</script>";
		 return;
	 }
   $Data->query("SET NAMES UTF8");
   $sql = "select  ID from admin where UserName = '$user' and Password = '$password'";
   $resultSet =  $Data->query($sql);
   $row = $resultSet->fetch_assoc();
   $num = $resultSet->num_rows;
   $ID = $row["ID"];
    if($num == 0)
   {
	   echo "<script>alert('登陆失败!请检查用户名或密码');history.go(-1)</script>";
	   return;
   }
   $ipaddr = $_SERVER["REMOTE_ADDR"];//获取用户ip地址
   ini_set('date.timezone','Asia/Shanghai');//设置时区
   $time = date("Y-m-d H:i:s",time());//获取时间
   $sql1 = "update admin set LastLoginIP = '$ipaddr' , LastLoginTime = '$time' where ID = $ID";
   $Data->query("SET NAMES UTF8");
   $Data->query($sql1);
   $_SESSION["admin"] = $user;
   echo "<script>window.location.href='../index.php'</script>";
?>