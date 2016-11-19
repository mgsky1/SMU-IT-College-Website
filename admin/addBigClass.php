<?php   require_once("PHP_Script/News/listNews.php")?>
<?php
  $bigClass = trim($_POST['bigClassName']);
   if($bigClass == "")
   {
	   echo "<script>alert('请输入大类名');history.go(-1)</script>";
	   return;
   }
   $list = new NewsManage();
   $list->_construct();
   $list->addBigClass($bigClass);
?>