<?php
  /*首页显示新闻方法组 基于PHP7 Design By 小远*/
  function listNews($Data,$type)
  {
	  $query = "SELECT Title ,ID, AddDate FROM news WHERE BigClassName = '$type' and OK = 0 ORDER BY AddDate DESC LIMIT 5  ";
	   $Data->query("SET NAMES UTF8");
	   $set =  $Data->query($query);
	   if($set)
	   {
		   while($row = $set->fetch_assoc())
		   {
			   $title = $row['Title'];
			   $id = $row['ID'];
			   $id = intval("$id");
			   $len = strlen($title);
			 /* echo "<script>alert('$len')</script>";*/
			   if(strlen($title)>35)
			   {
				   $title = mb_substr($title,0,15,"utf8");
			   }
			   $date = $row['AddDate'];
			   $date = substr($date,0,10);
			   echo  "<li ><span>&nbsp;&nbsp;</span><a href='newsDetail.php?id=$id&BigClassName=".urlencode($type)."'>$title...</a><span  style='color:#000;margin-left:20px;'>$date</span></li>";
		   }
	   }
  }
  
  function listPicNews($Data)
  {
	   $query = "SELECT Title ,ID, DefaultPicUrl FROM product ORDER BY UpdateTime DESC LIMIT 8  ";
	    $Data->query("SET NAMES UTF8");
	   $set =  $Data->query($query);
	   if($set)
	   {
		   while($row =  $set->fetch_assoc())
		   {
			   $title = $row['Title'];
			   $id = intval($row["ID"]);
			   $url = $row["DefaultPicUrl"];
			   echo " <li class='list'><a href='picNewsDetail.php?id=$id'  class='img'><img src='$url'  width='160' height='130' /></a> <h3 style='width:160px;'><a href='#' >$title</a></h3></li>";
		   }
	   }
  }
  
?>
