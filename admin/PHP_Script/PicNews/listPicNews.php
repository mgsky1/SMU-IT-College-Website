<?php
    /*
     *图片新闻管理类 基于PHP7 Design By 小远
     */
   class PicNewsManage
   {
	   private $DB;
	   private $searchKey = "";//搜索用
	   private $totalPages;//分页用 总页数
	   private $page;//分页用 当前用户所在的页码
       private $maxNum;//分页用 每页显示的最大页数
	   private $resultSet;//分页用 结果集 列项准备
  	   public function _construct()
	   {
		   require("PHP_Script/DBOperation.php");
		   $this->DB = new db();
		   $this->DB->_construct();
		  
		   if(isset($_SESSION["search"]))
		   {
			  $this->searchKey = $_SESSION["search"]; 
		   }
		   
		   if(isset($_GET['k']))
		   {
			   unset($_SESSION["search"]);
			   $this->searchKey = "";
		   }
	   }
	   
	   public function getTotalPages()//分页用 获得总页数
	   {
		   $this->maxNum = 10;  //每页记录条数
		   if($this->searchKey == "")
		   {
			    $query1 = "SELECT COUNT(*) AS totalrows FROM product ";//查询记录总数
		   }
		   else
		   {
			    $query1 = "SELECT COUNT(*) AS totalrows FROM product where Title like '%$this->searchKey%'";//查询记录总数
		   }
		   $result1 = $this->DB->query($query1);
		   $row = $this->DB->getRow($result1);
		   $num = $row['totalrows'];
		   $this->totalPages = ceil($num/$this->maxNum);//分页总数,ceil取整
	   }
	   
	   public function getListContent()//分页用 获取项
	   {
		   if(!isset($_GET['page']) || !intval($_GET['page']) || $_GET['page'] > $this->totalPages)//如果page没有存在，或者page不是                  整数,或者page大于总页数
           $this->page = 1;  //对3种出错进行处理 ,都使page为1
                    //在url参数page不存在时，page不为10进制数时，page大于可分页数时，默认为1 
           else $this->page = $_GET['page']; 
		   $startnum = ($this->page - 1)*$this->maxNum; //从数据集第$startnum条开始读取记录，这里的数据集是从0开始的 
		   if($this->searchKey == "")
		   {
			   $query2 = "SELECT * FROM product ORDER BY UpdateTime DESC LIMIT $startnum,$this->maxNum";
		   }
		   else
		   {
			   $query2 = "SELECT * FROM product where Title like '%$this->searchKey%' ORDER BY UpdateTime DESC LIMIT $startnum,$this->maxNum";
		   }
		   $this->resultSet = $this->DB->query($query2);
	   }
	   
	   public function listItems()//分页用 列项
	   {
		   if($this->resultSet)
		   {
			   while($row = $this->DB->getRow($this->resultSet))
			   {
				   $ID = $row["ID"];
				   $picID = $row["Product_Id"];
				   $title = $row["Title"];
				   $isPass = $row["Passed"];
				   $inTime = $row["UpdateTime"];
				   $var = "未审核";
				   if($isPass == 1)
				   {
					   $var = "已审核";
				   }
				   echo "<tr>
									<td><input type='checkbox' name='pic[]' id='checkbox' value='$ID'></td>
									<td>$ID</td>
									<td>$picID</td>
									<td>$title</td>
									<td>$inTime</td>
									<td>
										$var
									</td>
                                    <td>
                                        <a href='editorPicNews.php?id=$ID' target='main'>修改</a>
                                        &#x3000;&#x3000;&#x3000;
                                          <a href='delPicNews.php?id=$ID' target='main'>删除</a>
                                    </td>
								</tr>";
			   }
		   }
	   }
	   
	   public function devidePage()
	   {
		 echo "<font color=\"#ff0000\">".$this->page."</font>"."/".$this->totalPages."页 ";//显示比如4/83页
        //实现 << < 1 2 3 4 5> >> 样式的分页链接
        $pre = $this->page - 1;//上一页
        $next = $this->page + 1;//下一页
        $maxpages = 4;//处理分页时 << < 1 2 3 4 > >>显示4页，每一组最多4个数字
        $pagepre = 1;//如果当前页面是4，还要显示前$pagepre页，如<< < 3 /4/ 5 6 > >> 把第3页显示出来,(应该是显示maxpages的前pagepre页)
        if($this->page != 1) { echo "<a href='".$_SERVER['PHP_SELF']."'>&nbsp;&nbsp;&nbsp;<<&nbsp;&nbsp;&nbsp;</a> ";
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$pre."'>&nbsp;&nbsp;&nbsp;<&nbsp;&nbsp;&nbsp;</a> ";}
        if($maxpages>=$this->totalPages) //如果总记录不足以显示4页
        {$pgstart = 1;$pgend = $this->totalPages;}//就不所以的页面打印处理
		
        elseif(($this->page-$pagepre-1+$maxpages)>$this->totalPages)//就好像总页数是6，当前是5，则要把之前的3 4页显示出来，而不仅仅是4
        {$pgstart = $this->totalPages - $maxpages + 1;$pgend = $this->totalPages;}
        else{
        $pgstart=(($this->page<=$pagepre)?1:($this->page-$pagepre));//当前页面是1时，只会是1 2 3 4 > >>而不会是 0 1 2 3 > >>
        $pgend=(($pgstart==1)?$maxpages:($pgstart+$maxpages-1));
        }
        for($pg=$pgstart;$pg<=$pgend;$pg++){ //跳转菜单
        if($pg == $this->page) echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$pg\"><font color=\"#ff0000\">&nbsp;&nbsp;&nbsp;$pg&nbsp;&nbsp;&nbsp;</font></a> ";
        else echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$pg\">&nbsp;&nbsp;&nbsp;$pg&nbsp;&nbsp;&nbsp;</a> ";
        }
        if($this->page != $this->totalPages)
        {echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$next."'>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;</a> ";
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$this->totalPages."'>&nbsp;&nbsp;&nbsp;>>&nbsp;&nbsp;&nbsp;</a> ";}
	   }
	   
	   public function delPicNews($id)
	   {
		   $sql = "DELETE FROM product where ID = $id";
		   $set = $this->DB->query($sql);
		   if($set)
		   {
			   echo "<script>alert('删除成功');window.location.href='photoNewsAdmin.php'</script>";
		   }
		   else
		   {
			   echo "<script>alert('删除失败');history.go(-1)</script>";
		   }
	   }
	   
	   public function addPicNews($picNews)
	   {
		   $sql = "INSERT INTO product(Product_Id , BigClassName , Title , Hits , UpdateTime , Passed , Content , DefaultPicUrl) VALUES ('$picNews[0]' , '数计系' , '$picNews[1]' , 0 , '$picNews[5]' , $picNews[4] , '$picNews[2]' , '$picNews[3]')";
		    $this->DB->query("set names UTF8");
            $set = $this->DB->query($sql);
		    if($set)
		   {
			   echo "<script>alert('添加成功');window.location.href='photoNewsAdmin.php'</script>";
			   unset ($_SESSION["DefaultPicUrl"]);
		   }
		   else
		   {
			   echo "<script>alert('添加失败');history.go(-1)</script>";
		   }
	   }
	   
	   public function updatePicNews($picNews)
	   {
		   $sql = "UPDATE product SET Product_Id = '$picNews[0]' , Title = '$picNews[1]' , UpdateTime = '$picNews[4]' , Content = '$picNews[2]' , DefaultPicUrl = '$picNews[3]' WHERE ID = $picNews[5]";
		    $this->DB->query("set names UTF8");
            $set = $this->DB->query($sql);
		    if($set)
		   {
			   echo "<script>alert('修改成功');window.location.href='photoNewsAdmin.php'</script>";
		   }
		   else
		   {
			   echo "<script>alert('修改失败');history.go(-1)</script>";
		   }
	   }
   }
?>
