<meta charset="utf-8" />
<?php
  /*数据库管理类 Design By 小远*/
 class DBManage
 {
    public $dir;
    public $DbId;
     
     function _construct()
     {
         $this->dir = './mysqlDBK';
     }
     
	 function listDb()
	 {
		   if(is_dir($this->dir))
          {
              if($dh = opendir($this->dir))//opendir返回文件列表流
          {
             $counter = 1;
            while(($file = readdir($dh)) != false)//readdir返回一个文件名
           {
                if($file != "." && $file != "..")
               {
				    ini_set('date.timezone','Asia/Shanghai');//设置时区
                   $time =  filemtime("./mysqlDBK/$file");//文件修改时间
                   $time1 = date("Y-m-d H:i:s",$time);
				   $name = $file;
				   $name = iconv('gb2312','utf-8',$name);
                    echo "<tr>
									<td>$counter</td>
									<td>$time1</td>
									<td>$name</td>
									<td class='action-td'>
										<!--<a href='javascript:;' class='btn btn-small btn-warning'>
											<i class='icon-ok'></i>								
										</a>					
										<a href=javascript:;' class='btn btn-small'>
											<i class='icon-remove'></i>						
										</a>-->
                                        <a href='PHP_Script\DBRecover.php'>恢复</a>
									</td>
								</tr>";
                  $counter = $counter+1;
                 }
             
             }  
            closedir($dh);  
          }
     }
      else 
	  {
         echo "<script>alert('No such Directory')</script>";
       }
	   
	 }
	 
	 function bkDb()
	 {
		  ini_set('max_execution_time','120');
		  ini_set('date.timezone','Asia/Shanghai');//设置时区
          //$fileName = date('ymdhis',time());
		  $fileName = "xxgc";
          exec("mysqldump -u root -proot xxgc>../mysqlDBK/$fileName.sql",$t,$status);
		  if($status == 0 )
		  {
			   echo "<script>alert('备份成功！');self.location=document.referrer;</script>";
		  }
		 else
		 {
			 echo "<script>alert('备份失败！');history.go(-1)</script>";
		 }
	 }
	 
	 function recoverDb()
	 {
		 ini_set('max_execution_time','120');
		  $fileName = "xxgc";
          exec("mysql -u root -proot xxgc<../mysqlDBK/$fileName.sql",$t,$status);
		   if($status == 0 )
		  {
			   echo "<script>alert('恢复成功！');self.location=document.referrer;</script>";
		  }
		 else
		 {
			 echo "<script>alert('恢复失败！');history.go(-1)</script>";
		 }
	 }
 } 
?>
