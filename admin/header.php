<?php
  if(!isset($_SESSION["admin"]))
  {
	  echo "<script>alert('请先登录！');window.location.href='login.php'</script>";
	 return;
  }
?>
<meta charset="utf-8"/>
 <div id="header">
         <h1>信息工程学院后台管理</h1>
         <div id="head-span">
             欢迎：<span>管理员<?php echo $_SESSION["admin"]?></span>||
             <span><a href="PHP_Script/logout_code.php">退出系统</a></span>
         </div>
     </div>
     <div id="header-left">
         <span><a href="../index.php">前台首页</a></span>
         <span><a href="index.php">后台首页</a></span>
     </div>