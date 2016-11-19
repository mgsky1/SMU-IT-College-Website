<?php require_once("PHP_Script/FriendLinks/FriendLinks.php")?>
<?php
   $ID = intval($_SESSION['LinkID']);
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
   $link = array(0 => $ID , 1 => $LinkName , 2 => $LinkUrl);
   $list = new FriendLinksManage();
   $list->_construct();
   $list->updateLink($link);
?>