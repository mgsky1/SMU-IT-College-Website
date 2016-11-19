<?php 
   function getTotalPages($Data , $tableName , $maxnum , $sql)
   {
	    $maxnum = $maxnum;  //每页记录条数
		$result1 = mysql_query($sql, $Data) or die(mysql_error());
		$row1 = mysql_fetch_assoc($result1);//读取一行
		$totalRows1 = $row1['num'];  //数据集总条数
		$totalpages = ceil($totalRows1/$maxnum);//分页总数,ceil取整
		return $totalpages;
   }
  
   
?>