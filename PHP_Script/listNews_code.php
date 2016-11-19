
<?php
/*新闻显示类 基于PHP7 Design By 小远*/
class ListNewsSet
{
	public $set;
    public $page;
	public $totalPages;
	public $resultSet;
	public $type;
	public $smallClass;
	public $dbc;
    function _construct($type,$Data,$smallClass)
	{
		
	    /*
	     * 准备工作开始
	     */
	   
       $maxNum = 10;
	   $this->dbc = $Data;
	   $this->type = $type;
	   $this->smallClass = $smallClass;
	   $Data->query("SET NAMES UTF8");
	   if($smallClass == "")
	   {
		   $queryNum = "select count(*) as num from news where BigClassName = '$type' and OK = 0 ";
		  
	   }
       else
	   {
		    $queryNum = "select count(*) as num from news where BigClassName = '$type' and SmallClassName = '$smallClass'and OK = 0 ";
	   }
       $resultNum = $Data->query($queryNum);
       $row1 = $resultNum->fetch_assoc();
       $recordNum = $row1["num"];
       $this->totalPages = ceil($recordNum/$maxNum);
      if(!isset($_GET["page"]) || !intval($_GET["page"]) || $_GET["page"] > $this->totalPages || $_GET["page"] <= 0)
       {
	     $this->page = 1;
       }
      else
       {
	      $this->page = $_GET["page"];
        }
       $Data->query("SET NAMES UTF8");
      $startNum = ($this->page-1)*$maxNum;
	  if($smallClass == '')
	  {
		    $queryRec = "select ID , Title , AddDate from news where BigClassName = '$type'  and OK = 0 order by AddDate desc , ID DESC limit $startNum , $maxNum";
	  }
      else
	  {

		   $queryRec = "select ID , Title , AddDate from news where BigClassName = '$type'  and SmallClassName = '$smallClass' and OK = 0 order by AddDate desc , ID DESC limit $startNum , $maxNum";
	  }
      $this->resultSet = $Data->query($queryRec);
      $this->set = $this->resultSet->fetch_assoc();
	}
	
    public function listItems()
    {
       if($this->set)
	   {
	   	 
		  do
		  {
			  $title = $this->set["Title"];
			  $addDate = $this->set['AddDate'];
			  $addDate = substr($addDate,0,10);
			  $id = $this->set["ID"];
			  if($this->page == 1)
			  {
				  if($this->smallClass == "")
				  {
					   echo "<li class='list'><span>[$addDate]</span><a href='newsDetail.php?id=$id&BigClassName=".urlencode($this->type)."' title='$title' target='_self'>$title</a><img class='listhot' src='images/hot.gif' alt='图片关键词' /></li>";
				  }
				  else
				  {
					   echo "<li class='list'><span>[$addDate]</span><a href='newsDetail.php?id=$id&BigClassName=".urlencode($this->type)."&SmallClassName=".urlencode($this->smallClass)."' title='$title' target='_self'>$title</a><img class='listhot' src='images/hot.gif' alt='图片关键词' /></li>";
				  }
                   
			  }
			  else
			  {
				  if($this->smallClass == "")
				  {
					  	 echo "<li class='list'><span>[$addDate]</span><a href='newsDetail.php?id=$id&BigClassName=".urlencode($this->type)."' title='$title' target='_self'>$title</a></li>";
				  }
				  else
				  {
					   echo "<li class='list'><span>[$addDate]</span><a href='newsDetail.php?id=$id&BigClassName=".urlencode($this->type)."&SmallClassName=".urlencode($this->smallClass)."' title='$title' target='_self'>$title</a></li>";
				  }
			  
			  }
			 
		  }while($this->set = $this->resultSet->fetch_assoc());
	  }
	  
	}
        public function devidePage()
	   {
		  
		  // echo "共计<font color=\"#ff0000\">$this->$recordNum</font>条记录";
        // echo "<font color=\"#ff0000\">".$page."</font>"."/".$this->totalPages."页 ";//显示比如4/83页
        //实现 << < 1 2 3 4 5> >> 样式的分页链接
        $pre = $this->page - 1;//上一页
        $next = $this->page + 1;//下一页
        $maxpages = 4;//处理分页时 << < 1 2 3 4 > >>显示4页，每一组最多4个数字
        $pagepre = 1;//如果当前页面是4，还要显示前$pagepre页，如<< < 3 /4/ 5 6 > >> 把第3页显示出来,(应该是显示maxpages的前pagepre页)
        if($this->page != 1) { 
		if($this->smallClass == "")
		{
			echo "<a href='".$_SERVER['PHP_SELF']."?BigClassName=$this->type'><<</a> ";
		}
		else
		{
			echo "<a href='".$_SERVER['PHP_SELF']."?BigClassName=$this->type&SmallClassName=$this->smallClass'><<</a> ";
		}
		  
		  if($this->smallClass == "")
		  {
			   echo "<a href='".$_SERVER['PHP_SELF'].'?BigClassName='.urlencode($this->type).'&SmallClassName=&page='.$pre."'><</a> ";
		  }
		  else
		  {
			  echo "<a href='".$_SERVER['PHP_SELF'].'?BigClassName='.urlencode($this->type).'&SmallClassName='.urlencode($this->smallClass).'&page='.$pre."'><</a> ";
		  }
		}
       
        if($maxpages>=$this->totalPages) //如果总记录不足以显示4页
        {$pgstart = 1;$pgend = $this->totalPages;}//就不所以的页面打印处理
		
        elseif(($this->page-$pagepre-1+$maxpages)>$this->totalPages)//就好像总页数是6，当前是5，则要把之前的3 4页显示出来，而不仅仅是4
        {$pgstart =$this->totalPages - $maxpages + 1;$pgend = $this->totalPages;}
        else{
        $pgstart=(($this->page<=$pagepre)?1:($this->page-$pagepre));//当前页面是1时，只会是1 2 3 4 > >>而不会是 0 1 2 3 > >>
        $pgend=(($pgstart==1)?$maxpages:($pgstart+$maxpages-1));
        }
        for($pg=$pgstart;$pg<=$pgend;$pg++){ //跳转菜单
        if($pg == $this->page) 
		    if($this->smallClass == '')
			{
				 echo "<a href=\"".$_SERVER['PHP_SELF']."?BigClassName=".urlencode($this->type)."&SmallClassName=&page=$pg\"><font color=\"#ff0000\">$pg</font></a> ";
			}
			else
			{
				 echo "<a href=\"".$_SERVER['PHP_SELF']."?BigClassName=".urlencode($this->type)."&SmallClassName=".urlencode($this->smallClass)."&page=$pg\"><font color=\"#ff0000\">$pg</font></a> ";
			}
		   
        else 
		   if($this->smallClass == '')
		   {
			   echo "<a href=\"".$_SERVER['PHP_SELF']."?BigClassName=".urlencode($this->type)."&SmallClassName=&page=$pg\">$pg</a> ";
		   }
		   else
		   {
			   echo "<a href=\"".$_SERVER['PHP_SELF']."?BigClassName=".urlencode($this->type)."&SmallClassName=".urlencode($this->smallClass)."&page=$pg\">$pg</a> ";
		   }
		   
        }
        if($this->page != $this->totalPages)
        {
			if($this->smallClass == "")
			{
				echo "<a href='".$_SERVER['PHP_SELF'].'?BigClassName='.urlencode($this->type).'&SmallClassName=&page='.$next."'>></a> ";
				echo "<a href='".$_SERVER['PHP_SELF'].'?BigClassName='.urlencode($this->type).'&SmallClassName=&page='.urlencode($this->totalPages)."'>>></a> ";
			}
			else
			{
				echo "<a href='".$_SERVER['PHP_SELF'].'?BigClassName='.urlencode($this->type).'&SmallClassName='.urlencode($this->smallClass).'&page='.$next."'>></a> ";
				echo "<a href='".$_SERVER['PHP_SELF'].'?BigClassName='.urlencode($this->type).'&SmallClassName='.urlencode($this->smallClass).'&page='.urlencode($this->totalPages)."'>>></a> ";
			}
			
        }
	   }
	   
	   public function listSmallClass()
	   {
		   	  
		   $sql = "select SmallClassName from smallclass_new where BigClassName = '$this->type'";
		   $this->dbc->query("SET NAMES UTF8");
		   $resultSet = $this->dbc->query($sql);
		   while($row = $resultSet->fetch_assoc())
		   {
			   $bcEncode = urlencode($this->type);
			   $name = $row["SmallClassName"];
			    $var = urlencode($name);
			   echo "<dl class='list-none navnow'><dt id='part2_4'><a href='listNews.php?BigClassName=$bcEncode&SmallClassName=$var'  title='$name' class='$name'><span>$name</span></a></dt></dl>";
		   }
	   }
	   public function getBigClass()
	   {
		   echo $this->type;
	   }
}
?>