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
            <li><a href="photoNewsAdmin.php"  target="main">友情链接管理</a></li>
            <!--<li><a href="countAdmin.php" target="main">图片类别设置</a></li>-->
            <li class="active">添加友情链接</li>
                 </ol>
             </div>
             <div id="widget-header">添加友情链接</div>
             <form action="addLink.php" name="form1" method="post">
             <table class="table table-striped table-bordered">
							
							
							<tbody>
								
							
                            <tr>
									<td align="right">网站名称：</td>
                                    <td align="left"><input type="text" name="LinkName" placeholder="请输入网站名称" required autofocus/></td>
                                   
							</tr>
                            <tr>
									<td align="right">网站地址：</td>
                                    <td align="left"><input type="text" name="URL" placeholder="请输入网址" required/></td>
                                   
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