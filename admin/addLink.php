<?php require_once("PHP_Script/FriendLinks/FriendLinks.php")?>
<?php
   $LinkName = trim($_POST['LinkName']);
   if($LinkName == "")
   {
	   echo "<script>alert('请输入友情链接名称');history.go(-1)</script>";
	   return;
   }
   $LinkUrl = "http://".trim($_POST['URL']);
   if($LinkUrl == "http://")
   {
	    echo "<script>alert('请输入友情链接URL');history.go(-1)</script>";
	   return;
   }
   $link = array(0 => $LinkName , 1 => $LinkUrl);
   $list = new FriendLinksManage();
   $list->_construct();
   $list->addLink($link); 
?>