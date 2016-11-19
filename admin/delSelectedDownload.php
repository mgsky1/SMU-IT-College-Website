<?php require_once("PHP_Script/Download/listDownLoad.php"); ?>
<?php
   $list = new DownloadManage();
   $list->_construct();
   foreach($_POST['download'] as $i)
   {
	  $list->delDownload($i);
   }
?>