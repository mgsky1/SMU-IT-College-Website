<?php require_once("PHP_Script/News/listNews.php")?>
<?php
  $list = new NewsManage();
  $list->_construct();
   $id = intval($_GET["id"]);
  $list->delNews($id); 
?>