<?php require_once("PHP_Script/PicNews/listPicNews.php")?>
<?php 
  $id = $_GET['id'];
  $list = new PicNewsManage();
  $list->_construct();
  $list->delPicNews($id);
?>