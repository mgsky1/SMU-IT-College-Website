<?php
 /*下载专区详细信息显示方法组 基于PHP7 Design By 小远*/
   function query($Data , $pram)
   {
	    $id = intval($_GET["id"]);
	   $Data->query("SET NAMES UTF8");
	   $sql = "select $pram from download where ID = $id";
	   $resultSet = $Data->query($sql);
	   $row = $resultSet->fetch_assoc();
	   return $row[$pram];
   }
   function showContent($Data)
   {
	   $content = query($Data,'Content');
	   echo "$content";
   }
   
   
   function showTitle($Data)
   {
	   $title = query($Data,'Title');
	   echo "$title";
   }
   
   
   function hasPre($Data)
   {
	   
	   $id = intval($_GET["id"]);
	   $query_next = "SELECT * FROM download WHERE ID > $id  ORDER BY ID  LIMIT 1";
	   $Data->query("SET NAMES UTF8");
       $set = $Data->query($query_next); 
       $row = $set->fetch_assoc();
	   if($row)
	   {
		   $title = $row['Title'];
		   $id_pre = $row["ID"];
		   echo "下一条：<a href='downloadDetail.php?id=$id_pre' >$title</a>";
	   }
	   else
	   {
		  //echo "上一条：没有了";
	   }
   }
   
   
   function hasNext($Data)
   {
	   
	   $id = intval($_GET["id"]);
	   $query_pre = "SELECT * FROM download WHERE ID < $id ORDER BY ID DESC  LIMIT 1";
	   $Data->query("SET NAMES UTF8");
       $set = $Data->query($query_pre); 
       $row = $set->fetch_assoc();
	   if($row)
	   {
		   $title = $row['Title'];
		   $id_next = $row["ID"];
		   echo "上一条：<a href='downloadDetail.php?id=$id_next' >$title</a>";
	   }
	   else
	   {
		 // echo "下一条：没有了";
	   }
   }
   
?>