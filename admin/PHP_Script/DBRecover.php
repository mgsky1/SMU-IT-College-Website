<?php
   require_once("DbManage.php");
  $Database = new DBManage();
  $Database->_construct();
  $Database->recoverDb();
?>