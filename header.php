<!DOCTYPE HTML>
<html>
<head>
<title>三明学院信息工程学院欢迎您</title>
<meta charset="utf-8"/>
<link rel="shortcut icon" href="images/favicon.ico.ico" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<script src="js/jQuery1.7.2.js" type="text/javascript"></script>
<script src="js/ch.js" type="text/javascript"></script>
<script src="js/show.js" type="text/javascript"></script>
<script src="js/slidePicture.js" type="text/javascript"></script>
<script type="text/javascript" src="menu/js/jquery.min.js"></script>
<script type="text/javascript" src="menu/js/script.js"></script>

<!--<style>
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}-->
</style>
</head>
<body>
<header>
<div class="contain">
<div class="top-logo1">
<a href="index.php" title="网站名称" id="web_logo"><img src="images/index.gif" alt="网站名称" title="网站名称" style="margin-left:100px"/></a>
<ul class="top-nav1 list-none1">
<li class="t">
<a href='http://218.5.241.11:8070' target='_blank'>旧版入口</a>
<span>|</span>
<a href='#' onclick='SetHome(this,window.location,"非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='设为首页'  >设为首页</a><span>|</span>
<a href='#' onclick='addFavorite("非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='收藏本站'  >收藏本站</a></li>

<div class="search">
<form name="form1" action="search.php" method="post">
<input type="text" name="text" placeholder="搜索关键字" required />
&nbsp;&nbsp;<input type="submit" value="搜索"  class="button button-primary button-pill button-small"/>
</form>
</div>
</ul>

</div>

<nav>
	
	<div class="navbg">
		<div class="col960">
			<ul id="navul" class="cl">
				<li style="border-left:1px #abc solid;"><a href="index.php">网站首页</a></li>
				<li>
					 <?php
				     $bigClassName = urlencode('学院概况');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>学院概况</a>";
				   ?>
				</li>
				<li>
                    <?php
				       $bigClassName = urlencode('思政工作');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>思政工作</a>";
				   ?>
				</li>
				<li>
					<?php 
				       $bigClassName = urlencode('专业建设');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>专业建设</a>";
				   ?>
				</li>
				<li>
                <?php 
				       $bigClassName = urlencode('教研科研');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>教研科研</a>";
				   ?>
                   				</li>
				<li>
                <?php 
				       $bigClassName = urlencode('教学管理');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>教学管理</a>";
				   ?>
				</li>
				<li>
                <?php 
				       $bigClassName = urlencode('本科评建');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>本科评建</a>";
				   ?>
				</li>
				<li>
                <?php 
				       $bigClassName = urlencode('学生实践');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>学生实践</a>";
				   ?>
				</li>
				<li>
                   <?php 
				       $bigClassName = urlencode('学子家园');
					  echo" <a href='listNews.php?BigClassName=$bigClassName'>学子家园</a>";
				   ?>
				</li>
				<li>
					<a href="http://218.5.241.13:8028/">ICT通讯学院</a>
					
				</li>
			</ul>
			</div>
			</div>
			</nav>

		</div>
	</div>
	</header>
