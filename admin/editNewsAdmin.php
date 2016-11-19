<?php  
if(!isset($_SESSION["admin"]))
 {
	 echo "<script>alert('请先登录');window.location.href='login.php'</script>";
	 return;
 }
 ?>
<?php require_once("PHP_Script/News/listNews.php")?>
<?php
   $list = new NewsManage();
   $list->_construct();
   $ID = intval($_GET["id"]);
   $_SESSION['newsID'] = $ID;
   $row = $list->getANews($ID);
   $content = $row["Content"];
   $_COOKIE['BigClassName'] = $row['BigClassName'];
   $small = $row['SmallClassName'];
   setcookie("SmallClassName",$small);

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
            <li class="active">修改新闻</li>
                 </ol>
             </div>
             <div id="widget-header">修改新闻</div>
             <form action="updateNews.php" name="form1" method="post" id="from1">
             <table class="table table-striped table-bordered" style="word-break:keep-all">		
							<tbody>
								
							<tr>
									<td align="right">新闻标题：</td>
                                    <td><input type="text" name="unname" class="input" id="unname" placeholder="填写新闻名称" required autofocus value="<?php echo $row['Title']?>"></td>
                                   
                                  
							</tr>
                       
                             <tr>
									
                                     <td  align="right">新闻类别：</td>
                                     <td><select name="province" id="province"  onChange="selprovince(this)">
                                       <option value="">请选择大类</option>
                                       <?php $list->listAllBigClass()?>
                                     </select>
                                     &#x3000;&#x3000;
                                     <select name="city" id="city"> </select>
                                     </td>
                                  
							</tr>
                            <tr>
                                  <td  align="right">新闻内容：</td>
                                    <td><?php include("editor.php");?></td>
                            </tr>
                          <tr>
                            <!--  <td align="right">首页图片：</td>
                              <td>
                                  <input type=date" name="" id="" class="input">
                                </td>-->
                               
                          </tr>
                          <tr>
                              <td align="right">发布人：</td>
                              <td>
                                 <input type="text" value="<?php echo $row['User']?>" />
                                </td>
                               
                          </tr>
                          <tr>
                          
                               
                          </tr>
                          <tr>
                              <td align="right">
                                  录入时间：
                                  </td>
                                 <td><input type=text name="" id="" class="input" value="<?php echo $row['AddDate']?>"></td>
                               </tr>
                           <tr>
                              <td colspan="2" align="center">
                                  <input type="submit" name="btn" value="保存" class="btn">
                              </td>
                            </tr>
							</tbody>
      </table>
</form>
<br>
<br>
<script>
  var temp = document.getElementById("province");
  window.onload = selprovince(temp);
</script>
        </body>
</html>