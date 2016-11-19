<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php $content = ''?>
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
            <li><a href="#">下载中心</a></li>
            <li class="active">添加下载程序</li>
                 </ol>
             </div>
             <div id="widget-header">添加下载程序</div>
             <form action="addDownload.php" name="form1" method="post">
             <table class="table table-striped table-bordered">
							
							<tbody>
								
							<tr>
									<td align="right">下载名称：</td>
                                    <td><input type="text" name="name" class="input" id="unname" placeholder="填写下载名称" required autofocus></td>
                                   
                                  
							</tr>
                       
                             <tr>
                            <tr>
                                  <td  align="right">下载说明：</td>
                                    <td><?php include("editor.php");?></td>
                            </tr>
        
                              <td colspan="2" align="center">
                                  <input type="submit" name="btn" value="添加" class="btn">
                                    &#x3000; &#x3000; &#x3000;
                            <input type="reset" name="btn" value="重置" class="btn">
                              </td>
                            </tr>
							</tbody>
</table>
</form>
<br>
<br>

        </body>
</html>