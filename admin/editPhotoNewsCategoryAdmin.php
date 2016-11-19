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
            <li><a href="photoNewsAdmin.php"  target="main">图片新闻管理</a></li>
            <li><a href="photoNewsCategoryAdmin.php" target="main">图片类别设置</a></li>
            <li class="active">修改图片新闻大类</li>
                 </ol>
             </div>
             <div id="widget-header">修改图片新闻大类</div>
             <form action="#" name="form1" method="post">
             <table class="table table-striped table-bordered">
							
							
							<tbody>
								<td  align="right">类别ID：</td>
                                <td>1</td>
							<tr>
									<td align="right">类别名：</td>
                                    <td  align="left"><input type="text" name="name" id="name" class="input"></td>
                                   
							</tr>
                          
                             <tr>
							<td colspan="2" align="center">
                                  <input type="submit" name="btn" value="修改" class="btn ">
                              </td>
							</tr>
                          
                          
							</tbody>
</table>
</form>
        </body>
</html>