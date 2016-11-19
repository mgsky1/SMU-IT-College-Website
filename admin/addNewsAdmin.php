<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php require_once("PHP_Script/News/listNews.php")?>
<?php
  $content = ''; 
  $list = new NewsManage();
  $list->_construct();
?>
 <!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="wzx"/>
<title></title>
<script src="js/sdmenu.js" type="text/javascript"></script>
<script type="text/javascript" src="js/ActiveXObject.js"></script>
<script type="text/javascript" src="js/AjaxAction.js"></script>
<link href="images/css.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <div class="bread">
                 <ol class="breadcrumb">
            <li><a href="#">新闻管理</a></li>
            <li class="active">添加新闻</li>
                 </ol>
             </div>
             <div id="widget-header">添加新闻</div>
             <form action="addNews.php" name="form1" method="post">
             <table class="table table-striped table-bordered" style="word-break:keep-all">
							
							<tbody>
								
							<tr>
									<td align="right">新闻标题：</td>
                                    <td><input type="text" name="unname" class="input" id="unname" placeholder="填写新闻名称" required autofocus></td>
                                   
                                  
							</tr>
                       
                             <tr>
									
                                     <td  align="right">新闻类别：</td>
                                     <td> <select name="province" id="province" onchange="selprovince(this)">
                                       <option value="">请选择大类</option>
                                       <?php $list->listAllBigClass()?>
                                     </select>
                                     &#x3000;&#x3000;
                                     <select name="city" id="city"></select>
                                     </td>
                                  
							</tr>
                            <tr>
                                  <td  align="right">新闻内容：</td>
                                    <td><?php include("editor.php");?></td>
                            </tr>
                          
                          <tr>
                              <td align="right">发布人：</td>
                              <td>
                                  <?php
								    $admin = $_SESSION['admin'];
									echo $admin; 
								  ?>
                                </td>
                               
                          </tr>
                              <tr>
                                <td  align="right">
                                    审核通过：
                                    </td>
                                     <td>
                                  <input type="radio" name="radio" id="radio" value="0" checked>是
                                    &#x3000; &#x3000; &#x3000;
                                  <input type="radio" name="radio" id="radio" value="1">否
                                </td>
                                </tr>
                  
                           <tr>
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