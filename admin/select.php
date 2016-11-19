<?php require_once("../DataConnect/Data.php")?>
<?php
/*AJAX JSON 二级动态下拉框核心代码 基于PHP7*/
  if($_GET['pro'] == '')
  {
	  echo "[{'code':'1','title':''}]";
	  return;
  }
  $BigClassSet = "select BigClassName from bigclass_new";
   $Data->query("SET NAMES UTF8");
  $resultSet = $Data->query($BigClassSet);
  $Arr = array();
  $row = $resultSet->fetch_assoc();
  while($row)
  {
	  $BigClassName =  $row["BigClassName"];
	  $Arr[] = $BigClassName;
	   $Data->query("SET NAMES UTF8");
	  $SmallClassSet = "select SmallClassName from smallclass_new where BigClassName = '$BigClassName'";
	  $resultSet_1 = $Data->query($SmallClassSet);
	 /* if($resultSet_1->num_rows == 0)
	  {
		   echo "[{'code':'1','title':''}]";
		  return;
	  }*/
	  $row_1 = $resultSet_1->fetch_assoc();
	   $Arr[$BigClassName][] = array();
	  
	  while($row_1)
	  {
		  $SmallClassName = $row_1["SmallClassName"];
		  $Arr[$BigClassName][] = $SmallClassName;
		  $row_1 = $resultSet_1->fetch_assoc();
	  }
	  
	  $row = $resultSet->fetch_assoc();
  }
  
  header('Content-Type:text/html;charset=UTF-8');
  $act = $_GET['act'];
  if($act == "getcity")
  {
	  $pro = $_GET['pro'];
	
	  $json = $Arr[$pro];
	  $js = "[";
	  if(sizeof($json) == 1)
	  {
		  $js .= "{'code':'0','title':'不指定小类'},";
	  }
	  else
	  {
		  $js .= "{'code':'1','title':'不指定小类'},";
		   foreach($json as $k => $v)
	      {
		  if($k != "Array")
		     {
			   $js .= "{'code':'$k','title':'$v'},";
		    }
		 
	     }
	  }
	 
	  $jss = substr($js,0,strlen($js)-1);
	  $jss .= ']';
	  echo $jss;
  }
?>