<?php 
  /*新闻详细信息显示方法组 基于PHP7 Design By 小远*/
   function showContent($Data)
   {
	     $id = @intval($_GET["id"]);
         $query = "select * from news where ID = $id and OK = 0";
         $Data->query("SET NAMES UTF8");
         $set = $Data->query($query); 
         $row = $set->fetch_assoc();
         $content = $row["Content"];
		 echo $content;
   }
 
   
   function hasPre($Data)
   {
	   
	   $id = intval($_GET["id"]);
	    $smallClassName = "";
		$bigClassName = $_GET["BigClassName"];
	   if(isset($_GET["SmallClassName"]))
	   {
		   $smallClassName = $_GET["SmallClassName"];
		   $query_next = "SELECT * FROM news WHERE ID > $id AND BigClassName = '$bigClassName' AND SmallClassName = '$smallClassName' AND OK = 0  ORDER BY ID  LIMIT 1";
	   }
	   else
	   {
		   $query_next = "SELECT * FROM news WHERE ID > $id AND BigClassName = '$bigClassName' AND OK = 0  ORDER BY ID  LIMIT 1";
	   }
	   $Data->query("SET NAMES UTF8");
       $set = $Data->query($query_next); 
       $row = $set->fetch_assoc();
	   if($row)
	   {
		   $title = $row['Title'];
		   $id_pre = $row["ID"];
		   if($smallClassName == "")
		   {
			   echo "上一条：<a href='newsDetail.php?id=$id_pre&BigClassName=".urlencode($bigClassName)."' >$title</a>";
		   }
		   else
		   {
			    echo "上一条：<a href='newsDetail.php?id=$id_pre&BigClassName=".urlencode($bigClassName)."&SmallClassName=".urlencode($smallClassName)."' >$title</a>";
		   }
		   
	   }
	   else
	   {
		  //echo "上一条：没有了";
	   }
   }
   
   
   function hasNext($Data)
   {
	   
	   $id = intval($_GET["id"]);
	   $smallClassName = "";
	   $bigClassName = $_GET["BigClassName"];
	   if(isset($_GET["SmallClassName"]))
	   {
		   $smallClassName = $_GET["SmallClassName"];
		   $query_pre = "SELECT * FROM news WHERE ID < $id AND BigClassName = '$bigClassName' AND SmallClassName = '$smallClassName' AND OK = 0 ORDER BY ID DESC  LIMIT 1";
	   }
	   else
	   {
		   $query_pre = "SELECT * FROM news WHERE ID < $id AND BigClassName = '$bigClassName' AND OK = 0 ORDER BY ID DESC  LIMIT 1";
	   }
	   $Data->query("SET NAMES UTF8");
       $set = $Data->query($query_pre); 
       $row = $set->fetch_assoc();
	   if($row)
	   {
		   $title = $row['Title'];
		   $id_next = $row["ID"];
		   if($smallClassName == "")
		   {
			   echo "下一条：<a href='newsDetail.php?id=$id_next&BigClassName=".urlencode($bigClassName)."' >$title</a>";
		   }
		   else
		   {
			   echo "下一条：<a href='newsDetail.php?id=$id_next&BigClassName=".urlencode($bigClassName)."&SmallClassName=".urlencode($smallClassName)."' >$title</a>";
		   }
		   
	   }
	   else
	   {
		 // echo "下一条：没有了";
	   }
   }

   function click($Data)//点击率统计
   {
   	   $id = intval($_GET["id"]);
   	   $query = "select Hits from news where ID = $id and OK = 0";
   	   $Data->query("SET NAMES UTF8");
   	   $set = $Data->query($query); 
       $row = $set->fetch_assoc();
       $hits = $row["Hits"];
       $hits = $hits+1;
       $updateHits = "update news set Hits = $hits where ID = $id and OK = 0";
       $Data->query("SET NAMES GB2312");
       $Data->query($updateHits);
       echo $hits;
   }
   
?>