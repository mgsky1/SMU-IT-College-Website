 <?php
 $bigClassName = $_GET['BigClassName'];
 $_SESSION['bc'] = $bigClassName; 
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
            <li class="active">添加新闻小类</li>
                 </ol>
             </div>
             <div id="widget-header">为大类<strong><font color="#FF0000"><?php echo $bigClassName ?></font></strong>添加小类</div>
             <form action="addSmallClass.php" name="form1" method="post">
           <table class="table table-striped table-bordered">
							
							
							<tbody>
								
							<tr>
									<td align="right">小类名：</td>
                                    <td align="left"><input type="text" name="smallClassName" id="name" class="input"  placeholder="填写类别名称"></td>
                                   
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