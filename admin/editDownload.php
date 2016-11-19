<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php 
 require_once("PHP_Script/Download/listDownLoad.php");
 $list = new DownloadManage();
 $list->_construct();
 $_SESSION['downID'] = intval($_GET['id']);
 $download = $list->getADownload(intval($_GET['id']));
 $content = $download['Content'];
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
            <li><a href="#">下载中心</a></li>
            <li class="active">编辑下载程序</li>
                 </ol>
             </div>
             <div id="widget-header">编辑下载程序</div>
             <form action="updateDownLoad.php" name="form1" method="post">
             <table class="table table-striped table-bordered">
							
							<tbody>
								
							<tr>
									<td align="right">下载名称：</td>
                                    <td><input type="text" name="name" class="input" id="unname" placeholder="填写下载名称" required autofocus value="<?php echo $download['Title']?>"></td>
                                   
                                  
							</tr>
                       
                             <tr>
                            <tr>
                                  <td  align="right">下载说明：</td>
                                    <td><?php include("editor.php");?></td>
                            </tr>
        
                              <td colspan="2" align="center">
                                  <input type="submit" name="btn" value="保存" class="btn">
                              </td>
                            </tr>
							</tbody>
</table>
</form>
<br>
<br>

        </body>
</html>
