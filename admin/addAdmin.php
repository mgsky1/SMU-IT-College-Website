<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
 <!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="wzx"/>
<title></title>
<script src="js/sdmenu.js" type="text/javascript"></script>
<link href="images/css.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css"/>
</head>
<body>
   <div class="bread">
                 <ol class="breadcrumb">
            <li><a href="#">管理员管理</a></li>
            <li class="active">添加管理员</li>
                 </ol>
             </div>
             <div id="widget-header">添加管理员</div>
             <form action="PHP_Script/admin/addAdmin.php" name="form1" method="post">
             <table class="table table-striped table-bordered">
							
							<tbody>
								
							<tr>
									<td align="right">用户名：</td>
                                    <td><input type="text" name="unname" class="input" id="unname" placeholder="输入用户名" required autofocus></td>
                                   
                                  
							</tr>
                            <tr>
									
                                     <td  align="right">密码：</td>
                                     <td><input type="password" name="psd" class="input" id="psd" placeholder="输入密码" required></td>
                                  
							</tr>
                            <tr>
                                  <td  align="right">确认密码：</td>
                                    <td><input type="password" name="psdr" class="input" id="psd" placeholder="确认密码" required></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center">
                                  <input type="submit" name="btn" value="添加" class="button button-caution button-pill button-jumbo">
                              </td>
                            </tr>
							</tbody>
</table>
</form>
 <div class="clear"></div>
        </body>
</html>