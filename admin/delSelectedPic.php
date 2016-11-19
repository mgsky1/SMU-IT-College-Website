<?php require_once("PHP_Script/PicNews/listPicNews.php")?>
<?php
  $list = new PicNewsManage();
  $list->_construct();
  foreach($_POST['pic'] as $i)
  {
	 $list->delPicNews($i);
  }
?>