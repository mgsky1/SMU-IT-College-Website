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
            <li><a href="#">管理员管理</a></li>
            <li class="active">管理员账号管理</li>
                 </ol>
             </div>
             <div id="widget-header">管理员账号管理</div>
             <table class="table table-striped table-bordered" style="text-align:center;">
							<thead>
								<tr>
									<th>管理员账号</th>
									<th>管理员密码</th>
									<th>修改密码</th>
									<th>删除</th>
									
								</tr>
							</thead>
							
							<tbody>
							
								<?php require_once("PHP_Script/admin/listAdmin.php")?>
							</tbody>
</table>
        </body>
</html>