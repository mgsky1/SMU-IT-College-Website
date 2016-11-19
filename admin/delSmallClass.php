<?php require_once("PHP_Script/News/listNews.php")?>
<?php 
   $id = $_GET['ID'];
   $list = new NewsManage();
   $list->_construct();
   $list->delSmallClass($id);
?>