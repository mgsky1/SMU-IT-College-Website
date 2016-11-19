<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php $content=""?>
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
            <li><a href="PhotoNewsAdmin.php" target="main">图片新闻管理</a></li>
            <li class="active">添加图片新闻</li>
                 </ol>
             </div>
             <div id="widget-header">添加图片新闻</div>
                              
                     
                            <form method="post" action="upLoadImg.php" name="form1" enctype="multipart/form-data">
                             <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
                                 选择图片： <input type="file" id="upfile" name="upfile"/>
                                 <br>
                                 <input type="submit" name="sublit" value="上传"  id="submit">
                               </form>
                               <br>
                           
             <form action="addPhotoNews.php" name="form2" method="post">
   <table class="table table-striped table-bordered">
				
<tbody>
								
							<tr>
									<td align="right">图片编号：</td>
                                    <td><input type="text" name="picid" class="input" id="unname" placeholder="图片编号不许重复" required autofocus></td>
                                   
                                  
							</tr>
                            <tr>
									
                                     <td  align="right">图片名称：</td>
                                     <td><input type="text" name="picName" class="input" placeholder="请填写图片新闻名称" required></td>
                                  
							</tr>
                       
                                  <td  align="right">图片说明：</td>
                                    <td><?php include("editor.php");?></td>
                            </tr>
                           
                               <tr>
                                <td  align="right">
                                    审核通过：
                                    </td>
                                     <td>
                                  <input type="radio" name="radio" id="radio" value="1" checked>是
                                    &#x3000; &#x3000; &#x3000;
                                  <input type="radio" name="radio" id="radio" value="0">否
                                </td>
                                </tr>
                          
                           <tr>
                              <td colspan="2" align="center">
                                  <input type="submit" name="btn" value="添加" class="btn " onClick="return check()">
                              </td>
                            </tr>
							</tbody>

</table>
                           </form>

        </body>
 
</html>