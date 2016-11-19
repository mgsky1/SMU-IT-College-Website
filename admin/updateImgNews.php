<?php require_once("PHP_Script/PicNews/listPicNews.php")?>
<?php
   $ID = $_SESSION["picID"];
   $dir = $_POST["psd"];
    if(isset($_SESSION["DefaultPicUrl"]))
   {
	   $dir = $_SESSION["DefaultPicUrl"];
   }
   $picName = trim($_POST["picName"]);
    if($picName == "" )
   {
	    echo "<script>alert('请输入图片新闻标题');history.go(-1)</script>";
	   return;
   }
   $picID = trim($_POST["picid"]);
   if($picID == "" )
   {
	    echo "<script>alert('请输入图片新闻编号');history.go(-1)</script>";
	   return;
   }
   $content;
   if(!isset($_POST['content']))
   {
	   $content = "";
   }
   ini_set('date.timezone','Asia/Shanghai');//设置时区
   $time = date("Y-m-d H:i:s",time());
   $picNews = array(0 => $picID , 1 => $picName , 2 => $content , 3 => $dir ,  4 => $time , 5 => $ID); 
   $list = new PicNewsManage();
   $list->_construct();
   $list->updatePicNews($picNews);
?>