<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php require_once("PHP_Script/FriendLinks/FriendLinks.php")?>
<?php
   $list = new FriendLinksManage();
   $list->_construct();
   $list->getTotalPages();
  $list->getListContent();
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
            <li><a href="#">链接管理</a></li>
            <!--<li><a href="countAdmin.php" target="main">图片类别设置</a></li>-->
            <li class="active">链接类别管理</li>
                 </ol>
             </div>
             <div id="widget-header">链接类别管理</div>
             <form action="#" name="form1" method="post">
             <table class="table table-striped table-bordered">
							
							<thead>
								<tr>
									<th>ID</th>
									<th>网站名称</th>
									<th>网站URL</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
						    <?php $list->listItems()?>
							</tbody>
</table>
<?php $list->devidePage()?>
</form>
        </body>
</html>