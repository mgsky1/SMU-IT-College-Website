<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php
  require_once("PHP_Script/DbManage.php");
  $Database = new DBManage();
  $Database->_construct();
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
            <li><a href="#">系统管理</a></li>
            <li class="active">数库备份</li>
                 </ol>
             </div>
             <div id="widget-header">数据库备份</div>
             <form method="post" action="PHP_Script/dbBackup.php">
             <input type="submit" value="备份数据库"/>
             </form>
             <table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>备份时间</th>
									<th>备份文件名</th>
									<th>操作</th>
								</tr>
							</thead>
							
							<tbody>
							 <?php $Database->listDb()?>
							</tbody>
</table>
 <div class="clear"></div>
        </body>
</html>