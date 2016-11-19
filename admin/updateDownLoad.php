<?php
/*下载专区更新*/
 require_once("PHP_Script/Download/listDownLoad.php"); 
 $title = $_POST['name'];
 $content = $_POST['content'];
 $ID = $_SESSION['downID'];
 ini_set('date.timezone','Asia/Shanghai');//设置时区
 $time = date("Y-m-d H:i:s",time());
 $download = array(0 => $title , 1 => $content , 2 => $time , 3 => $ID);
 $list = new DownloadManage();
 $list->_construct();
 $list->updateDownLoad($download);;
?>