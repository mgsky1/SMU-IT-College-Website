<?php
/*添加下载专区内容*/
 require_once("PHP_Script/Download/listDownLoad.php"); 
 $title = $_POST['name'];
 $content = $_POST['content'];
 ini_set('date.timezone','Asia/Shanghai');//设置时区
 $time = date("Y-m-d H:i:s",time());
 $download = array(0 => $title , 1 => $content , 2 => $time);
 $list = new DownloadManage();
 $list->_construct();
 $list->addDownLoad($download);
?>