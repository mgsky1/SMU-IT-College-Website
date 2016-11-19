<?php
 /*图片新闻详细信息显示方法组 基于PHP7 Design By 小远*/
   function query($Data , $pram)
   {
	    $id = intval($_GET["id"]);
	   $Data->query("SET NAMES UTF8");
	   $sql = "select $pram from product where ID = $id";
	   $resultSet = $Data->query($sql);
	   $row = $resultSet->fetch_assoc();
	   return $row[$pram];
   }
   function showContent($Data)
   {
	   $content = query($Data,'Content');
	   echo "$content";
   }
   
   function showImg($Data)
   {
	   $url = query($Data,'DefaultPicUrl');
	   echo "<img src='$url' width='60%' height='50%'/>";
   }
   
   function showTitle($Data)
   {
	   $title = query($Data,'Title');
	   echo "$title";
   }
   
   function click($Data)
   {
	   $id = intval($_GET["id"]);
   	   $query = "select Hits from product where ID = $id";
   	   $Data->query("SET NAMES UTF8");
   	   $set = $Data->query($query); 
       $row = $set->fetch_assoc();
       $hits = $row["Hits"];
       $hits = $hits+1;
       $updateHits = "update product set Hits = $hits where ID = $id";
       $Data->query("SET NAMES UTF8");
       $Data->query($updateHits);
       echo $hits;
   }
   
   function hasPre($Data)
   {
	   
	   $id = intval($_GET["id"]);
	   $query_next = "SELECT * FROM product WHERE ID > $id  ORDER BY ID  LIMIT 1";
	   $Data->query("SET NAMES UTF8");
       $set = $Data->query($query_next); 
       $row = $set->fetch_assoc();
	   if($row)
	   {
		   $title = $row['Title'];
		   $id_pre = $row["ID"];
		   echo "上一张：<a href='picNewsDetail.php?id=$id_pre' >$title</a>";
	   }
	   else
	   {
		  //echo "上一条：没有了";
	   }
   }
   
   
   function hasNext($Data)
   {
	   
	   $id = intval($_GET["id"]);
	   $query_pre = "SELECT * FROM product WHERE ID < $id ORDER BY ID DESC  LIMIT 1";
	   $Data->query("SET NAMES UTF8");
       $set = $Data->query($query_pre); 
       $row = $set->fetch_assoc();
	   if($row)
	   {
		   $title = $row['Title'];
		   $id_next = $row["ID"];
		   echo "下一张：<a href='picNewsDetail.php?id=$id_next' >$title</a>";
	   }
	   else
	   {
		 // echo "下一条：没有了";
	   }
   }
   
?>
