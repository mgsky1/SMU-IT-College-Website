 <?php
   $_SESSION["adminID"] = $_GET["adminID"]; 
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
</head>
<body>
   <div class="bread">
                 <ol class="breadcrumb">
            <li><a href="#"  target="main">管理员管理</a></li>
            <li><a href="countAdmin.php" target="main">管理员账号管理</a></li>
            <li class="active">修改密码</li>
                 </ol>
             </div>
             <div id="widget-header">修改密码</div>
             <form action="changeAdminPass.php" name="form1" method="post">
             <table class="table table-striped table-bordered">
							
							<tbody>
								
							<tr>
									<td align="right">原始密码：</td>
                                    <td><input type="password" name="password" class="input" id="unname" placeholder="输入原始密码" required autofocus></td>
                                   
                                  
							</tr>
                            <tr>
									
                                     <td  align="right">新密码：</td>
                                     <td><input type="password" name="passwordNew" class="input" id="psd" placeholder="输入新密码" required></td>
                                  
							</tr>
                            <tr>
                                  <td  align="right">确认密码：</td>
                                    <td><input type="password" name="passwordRepeat" class="input" id="psd" placeholder="确认密码" required></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="center">
                                  <input type="submit" name="btn" value="修改" class="btn default">
                              </td>
                            </tr>
							</tbody>
</table>
</form>
 <div class="clear"></div>
        </body>
</html>