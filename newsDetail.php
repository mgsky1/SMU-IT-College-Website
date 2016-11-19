<?php require_once("PHP_Script/newsDetail_code.php")?>
<?php  require_once("DataConnect/Data.php")?>
<?php require_once("PHP_Script/listNews_code.php")?>
<?php include("header_temp.php")?>
<?php
  $BigClassName = $_GET["BigClassName"];
  $SmallClassName = ""; 
  if(isset($_GET["SmallClassName"]))
  {
	$SmallClassName = $_GET["SmallClassName"];  
  }
  $list = new ListNewsSet();
  $list->_construct($BigClassName,$Data,$SmallClassName); 
?>
<div class="sidebar inner">
    <div class="sb_nav">

			<h3 class='title myCorner' data-corner='top 5px'>分类浏览</h3>
<div class="active" id="sidebar" data-csnow="2" data-class3="0" data-jsok="2">
<?php $list->listSmallClass()?>
<div class="clear"></div></div>

			<h3 class='title line myCorner' data-corner='top 5px'>联系方式</h3>
			<div class="active editor">
            <p>福建省三明市三元区荆东路25号</p>
            <p>邮编:365004</p>
            <p>电话(传真):0598-8398221 </p>
            <div>
	</div></div>
</div>		
<div class="sb_box" style=" margin-right:20px">
	    <h3 class="title">
<div class="position">当前位置：<a href="index.php" title="网站首页">网站首页</a> &gt; <a href=<?php echo "'listNews.php?BigClassName=".urlencode($BigClassName)."'"?> ><?php echo $BigClassName?></a> >
     <?php
	    if($SmallClassName != '')
		{
			echo "<a href='listNews.php?BigClassName=".urlencode($BigClassName)."&SmallClassName=".urlencode($SmallClassName)."' >$SmallClassName</a> &gt;";
		}
	 ?> 
<a href="#" >详细信息</a></div>
			<span><?php echo $BigClassName?></span>
		</h3>
		<div class="clear"></div>

        <div class="active" id="shownews" style="text-align:justify; word-wrap:break-word; overflow:auto">
           <span>浏览：<?php click($Data)?>次</span>
           <br>
           <?php showContent($Data)?>
            </div>
           <div class="clear"></div>
            <div class="met_page"><?php hasPre($Data)?><br><?php hasNext($Data)?></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include("footer.php")?>