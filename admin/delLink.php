<?php require_once("PHP_Script/FriendLinks/FriendLinks.php")?>
<?php
   $ID = intval($_GET['id']);
   $list = new FriendLinksManage();
   $list->_construct();
   $list->delLinks($ID);
?>