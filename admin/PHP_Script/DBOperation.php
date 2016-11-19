<?php
/*数据库操作类 基于PHP7 Design By 小远*/
   class db
   {
	   private $Data;
	   
	   public function _construct()
	   {
		   require_once("../DataConnect/Data.php");
		   $this->Data = $Data;
	   }
	   
	   public function query($sql)
	   {
		   $this->Data->query("set names UTF8");
		   return $this->Data->query($sql);
	   }
	   
	   public function getRow($resultSet)
	   {
		   return $resultSet->fetch_assoc();
	   }
   }
?>