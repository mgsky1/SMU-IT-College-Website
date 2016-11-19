<?php
/*搜索结果显示类 基于PHP7 Design By 小远*/
class ListSearchSet
{
	public $set;
    public $page;
	public $totalPages;
	public $resultSet;
	public $bigClassName;
    function _construct()
	{
		
	    /*
	     * 准备工作开始
	     */
      if(isset($_POST["text"]))
       {
			
	   $_SESSION["text"] = trim($_POST["text"]);
       }
		
      $key = trim($_SESSION["text"]);
      if($key == "")
       {
          echo "<script>alert('请输入关键词');history.go(-1)</script>";
        }
		if(count(explode("'",$key))>1)//判断是否有输入非法字符
	    {
		 echo "<script>alert('非法字符');history.go(-1);</script>";
		 return;
	    }
       $maxNum = 10;
	   require_once("./DataConnect/Data.php");
	   $key = addslashes($key);
	   $Data->query("SET NAMES UTF8");
       $queryNum = "select count(*) as num from news where Title like '%$key%'";
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
      $queryRec = "select ID , Title , AddDate , BigClassName from news where  Title like '%$key%' order by AddDate desc , ID DESC limit $startNum , $maxNum";
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
			  $this->bigClassName = $this->set["BigClassName"];
			  if($this->page == 1)
			  {
                    echo "<li class='list'><span>[$addDate]</span><a href='newsDetail.php?id=$id&BigClassName=".urlencode($this->bigClassName)."' title='$title' target='_self'>$title</a><img class='listhot' src='images/hot.gif' alt='图片关键词' /></li>";
			  }
			  else
			  {
			  	 echo "<li class='list'><span>[$addDate]</span><a href='newsDetail.php?id=$id&BigClassName=".urlencode($this->bigClassName)."' title='$title' target='_self'>$title</a></li>";
			  }
			 
		  }while($this->set = $this->resultSet->fetch_assoc());
	  }
         else
	  {
		  echo "<span>没有找到你所想要的结果</span>";
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
        if($this->page != 1) { echo "<a href='".$_SERVER['PHP_SELF']."'><<</a> ";
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$pre."'><</a> ";}
        if($maxpages>=$this->totalPages) //如果总记录不足以显示4页
        {$pgstart = 1;$pgend = $this->totalPages;}//就不所以的页面打印处理
		
        elseif(($this->page-$pagepre-1+$maxpages)>$this->totalPages)//就好像总页数是6，当前是5，则要把之前的3 4页显示出来，而不仅仅是4
        {$pgstart =$this->totalPages - $maxpages + 1;$pgend = $this->totalPages;}
        else{
        $pgstart=(($this->page<=$pagepre)?1:($this->page-$pagepre));//当前页面是1时，只会是1 2 3 4 > >>而不会是 0 1 2 3 > >>
        $pgend=(($pgstart==1)?$maxpages:($pgstart+$maxpages-1));
        }
        for($pg=$pgstart;$pg<=$pgend;$pg++){ //跳转菜单
        if($pg == $this->page) echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$pg\"><font color=\"#ff0000\">$pg</font></a> ";
        else echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$pg\">$pg</a> ";
        }
        if($this->page != $this->totalPages)
        {echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$next."'>></a> ";
        echo "<a href='".$_SERVER['PHP_SELF'].'?page='.$this->totalPages."'>>></a> ";}
	   }
	   
}
?>