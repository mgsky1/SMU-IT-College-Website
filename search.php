<?php include("header_temp.php")?>
<?php require_once("PHP_Script/search_code.php")?>
<?php
           $list = new ListSearchSet();
	   $list->_construct();
  
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
			<div class="position">当前位置：<a href="index.php" title="网站首页">网站首页</a> &gt; <a href="#">搜索结果</a></div>
			<span>搜索结果</span>
		</h3>
		<div class="clear"></div>

        <div class="active" id="newslist">
			<ul class='list-none metlist'>
             <?php $list->listItems()?>
            </ul>
			<div id="flip"><style>.digg4  { padding:3px; margin:3px; text-align:center; font-family:Tahoma, Arial, Helvetica, Sans-serif;  font-size: 12px;}.digg4  a,.digg4 span.miy{ border:1px solid #ddd; padding:2px 5px 2px 5px; margin:2px; color:#aaa; text-decoration:none;}.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  span.current {border:1px solid #e0e0e0; padding:2px 5px 2px 5px; margin:2px; color:#aaa; background-color:#f0f0f0; text-decoration:none;}.digg4  span.disabled { border:1px solid #f3f3f3; padding:2px 5px 2px 5px; margin:2px; color:#ccc;}.digg4 .disabledfy { font-family: Tahoma, Verdana;} </style><div class='digg4 metpager_8'><?php $list->devidePage()?></div></div>
		</div>
	</div>
    <div class="clear"></div>
</div>
<?php include("footer.php")?>