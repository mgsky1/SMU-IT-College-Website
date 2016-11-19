<?php include("header_temp.php")?>
<?php require_once("DataConnect/Data.php")?>
<?php require_once("PHP_Script/listDownload_code.php")?>
<?php
 $list = new ListDownload();
 $list->_construct($Data); 
?>
<div class="sidebar inner">
    <div class="sb_nav">

			<h3 class='title myCorner' data-corner='top 5px'>新闻资讯</h3>
<div class="active" id="sidebar" data-csnow="2" data-class3="0" data-jsok="2">
<dl class="list-none navnow"><dt id='part2_4'><a href='listNews.php?BigClassName=数信快讯'  title='学院快讯' class="zm"><span>学院快讯</span></a></dt></dl>
<dl class="list-none navnow"><dt id='part2_4'><a href='listNews.php?BigClassName=招生就业'  title='招生就业' class="zm"><span>招生就业</span></a></dt></dl>
<dl class="list-none navnow"><dt id='part2_4'><a href='listNews.php?BigClassName=学生活动'  title='学生活动' class="zm"><span>学生活动</span></a></dt></dl>
<dl class="list-none navnow"><dt id='part2_5'><a href='listNews.php.php?BigClassName=学生实践'  title='学生实践' class="zm"><span>学生实践</span></a></dt></dl>
<dl class="list-none navnow"><dt id='part2_5'><a href='listNews.php?BigClassName=学习交流'  title='学习交流' class="zm"><span>学习交流</span></a></dt></dl>
<dl class="list-none navnow"><dt id='part2_5'><a href='listNews.php?BigClassName=通知公告'  title='通知公告' class="zm"><span>通知公告</span></a></dt></dl>
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
			<div class="position">当前位置：<a href="index.php" title="网站首页">网站首页</a> &gt; <a href="#">下载专区</a>
            </div>
			<span>下载专区</span>
		</h3>
		<div class="clear"></div>
           <?php include("content.php")?>
        
		</div>
	</div>
    <div class="clear"></div>
</div>
<?php include("footer.php")?>