<?php
    /*
     *友情链接管理类 基于PHP7 Design By 小远
     */
   class FriendLinksManage
   {
	   private $DB;
	   private $totalPages;//分页用 总页数
	   private $page;//分页用 当前用户所在的页码
       private $maxNum;//分页用 每页显示的最大页数
	   private $resultSet;//分页用 结果集 列项准备
  	   public function _construct()
	   {
		  require("PHP_Script/DBOperation.php");
		   $this->DB = new db();
		   $this->DB->_construct();
	   }
	   
	   public function getTotalPages()//分页用 获得总页数
	   {
		   $this->maxNum = 10;  //每页记录条数
		   $query1 = "SELECT count(*) as totalrows FROM xxgc.friendlinks";//查询记录总数
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

		   $query2 = "SELECT * FROM friendlinks LIMIT $startnum,$this->maxNum";
		   $this->resultSet = $this->DB->query($query2);
	   }
	   
	   public function listItems()//分页用 列项
	   {
		   if($this->resultSet)
		   {
			   while($row = $this->DB->getRow($this->resultSet))
			   {
				   $ID = $row["ID"];
				   $LinkName = $row['LinkName'];
				   $LinkURL = $row['LinkUrl'];
				   echo "<tr>
									<td>$ID</td>
                                    <td>$LinkName</td>
                                    <td>$LinkURL</td>
                                    <td><a href='editLianjieAdmin.php?id=$ID' target='main'>修改</a>&#x3000;||&#x3000;<a href='delLink.php?id=$ID'>删除</a></td>
                                   
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
	   
	   public function delLinks($id)
	   {
		   $sql = "DELETE FROM friendlinks where ID = $id";
		   $set = $this->DB->query($sql);
		   if($set)
		   {
			   echo "<script>alert('删除成功');window.location.href='lianJieAdmin.php'</script>";
		   }
		   else
		   {
			   echo "<script>alert('删除失败');history.go(-1)</script>";
		   }
	   }
	   
	   public function getALink($id)
	   {
		   $sql = "SELECT * FROM friendlinks WHERE ID = $id";
		   return $this->DB->getRow($this->DB->query($sql));
	   }
	   
	   public function updateLink($link)
	   {
		   $sql = "UPDATE friendlinks SET LinkName = '$link[1]' , LinkUrl = '$link[2]' WHERE ID = $link[0]";
		   $set = $this->DB->query($sql);
		   if($set)
		   {
			   echo "<script>alert('更新成功');window.location.href='lianJieAdmin.php'</script>";
		   }
		   else
		   {
			   echo "<script>alert('更新失败');history.go(-1)</script>";
		   }
	   }
	   
	   public function addLink($link)
	   {
		   $sql = "INSERT INTO friendlinks(LinkName , LinkUrl) VALUES ('$link[0]' , '$link[1]')";
		   $set = $this->DB->query($sql);
		   if($set)
		   {
			   echo "<script>alert('添加成功');window.location.href='lianJieAdmin.php'</script>";
		   }
		   else
		   {
			    echo "<script>alert('添加失败');history.go(-1)</script>";
		   }
	   }
   }
?>
