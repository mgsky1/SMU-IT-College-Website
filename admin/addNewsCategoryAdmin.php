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
</head>
<body>
   <div class="bread">
                 <ol class="breadcrumb">
            <li><a href="#">新闻管理</a></li>
            <!--<li><a href="countAdmin.php" target="main">图片类别设置</a></li>-->
            <li class="active">添加新闻大类</li>
                 </ol>
             </div>
             <div id="widget-header">添加新闻大类</div>
             <form action="addBigClass.php" name="form1" method="post">
           <table class="table table-striped table-bordered">
							
							
							<tbody>
								
							<tr>
									<td align="right">大类名：</td>
                                    <td align="left"><input type="text" name="bigClassName" id="name" class="input"  placeholder="填写类别名称"></td>
                                   
							</tr>
                          
                             <tr>
							<td colspan="2" align="center">
                                  <input type="submit" name="btn" value="添加" class="btn ">
                              </td>
							</tr>
                          
                          
							</tbody>
</table>
</form>
        </body>
</html>