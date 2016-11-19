<?php require_once("PHP_Script/Download/listDownLoad.php"); ?>
<?php
  $list = new DownloadManage();
  $list->_construct();
   $id = intval($_GET["id"]);
  $list->delDownload($id); 
?>