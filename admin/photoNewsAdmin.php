<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php require_once("PHP_Script/PicNews/listPicNews.php")?>
<?php
  $list = new PicNewsManage();
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
            <li><a href="#">图片新闻管理</a></li>
            <li class="active">所有图片</li>
                 </ol>
             </div>
           
             <div id="widget-header">图片管理</div>
              <form action="delSelectedPic.php" method="post">
             <table class="table table-striped table-bordered" style="text-align:center;">
							<thead>
								<tr align="center">
									<th>选中</th>
									<th>ID</th>
									<th>图片编号</th>
									<th>图片名称</th>
									<th>加入时间</th>
									<th>审核情况</th>
                                    <th>操作</th>
								</tr>
							</thead>
							
							<tbody>
							
								 <?php $list->listItems()?>
							</tbody>
</table>
<?php $list->devidePage()?>
<section>
     
   
 <input type="checkbox" name="all" id="all" onClick="selectAll(this)">选中本页显示的所有图片 &#x3000;&#x3000;&#x3000;
<input type="submit" name="" value="删除选中的图片" class="btn">
</form>
   <div class="search">
                <form action="PHP_Script/PicNews/search.php" method="get">
                <input type="text" name="search" id="search" class="input" placeholder="请输入图片名称" required autofocus>
            &nbsp;<input type="submit" value="查找" class="btn">
            <span>请输入图片名称查找，如果为空则查找所有图片</span>
            </form>
            </div> 
</section>
       <script type="text/javascript">
	     function selectAll(form) {
            var obj = document.getElementsByName('all');
            var cks = document.getElementsByTagName("input");
            var ckslen = cks.length;
           for(var i=0;i<ckslen-1;i++) {
             if(cks[i].type == 'checkbox') {
             cks[i].checked = obj[0].checked;
            }
          }
         }
       </script>
        </body>
</html>
