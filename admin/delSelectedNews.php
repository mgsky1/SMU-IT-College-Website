<?php require_once("PHP_Script/News/listNews.php")?>
<?php
   $list = new NewsManage();
   $list->_construct();
   foreach($_POST['news'] as $i)
   {
	  $list->delNews($i);
   }
?>