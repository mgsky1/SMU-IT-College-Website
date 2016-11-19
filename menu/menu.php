<?php 
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="gb2312" />
<link href="main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<header>
<div class="contain">
<div class="top-logo1">
<a href="index.php" title="网站名称" id="web_logo"><img src="images/logo.gif" alt="网站名称" title="网站名称"/></a>
<ul class="top-nav1 list-none1">
<li class="t">
<a href='#' onclick='SetHome(this,window.location,"非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='设为首页'  >设为首页</a><span>|</span>
<a href='#' onclick='addFavorite("非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='收藏本站'  >收藏本站</a><span>|</span><a class="fontswitch" id="StranLink" href="javascript:StranBody()">繁体中文</a><span>|</span>
<a href='#' title='WAP'>WAP</a><span>|</span>
<a href='#' title='English'  >English</a><span>|</span>

<div class="search">
<form name="form1" action="" method="get">
<input type="text" name="text" placeholder="搜索关键字" autofocus required />
&nbsp;&nbsp;<input type="submit" value="搜索"  class="button"/>
</form>
</div>
</ul>

</div>

<nav>
	
	<div class="navbg">
		<div class="col960">
			<ul id="navul" class="cl">
				<li class="navhome"><a href="#">网站首页</a></li>
				<li>
					<a href="#">学院概况</a>
					<ul>
					<!--	<li><a href="#">HTML</a></li>
						<li><a href="#">HTML5</a></li>-->
					</ul>
				</li>
				<li>
					<a href="#">思政工作</a>
					<!-- <ul>
					     <li><a href="#">CSS入门</a></li>
					    						<li><a href="#">CSS工具</a></li>
					    						<li><a href="#">CSS技巧</a></li>
					    						<li><a href="#">CSS实例</a></li>
					    						<li><a href="#">CSS3</a></li>
					    						<li><a href="#">CSS hack</a></li>
					    						<li><a href="#">CSS2.0 手册</a></li> 
					</ul> -->
				</li>
				<li>
					<a href="#">专业建设</a>
					<!-- <ul>
						<li><a href="#">导航菜单</a></li>
						<li><a href="#">表单按钮</a></li>
						<li><a href="#">表格图层</a></li>
						<li><a href="#">图片特效</a></li>
						<li><a href="#">滚动特效</a></li>
						<li><a href="#">文字特效</a></li>
						<li><a href="#">时间日期</a></li>
						<li><a href="#">窗口特效</a></li>
						<li><a href="#">鼠标特效</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">教研科研</a>
					<!-- <ul>
						<li><a href="#">用户体验</a></li>
						<li><a href="#">前端观察</a></li>
						<li><a href="#">职业生涯</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">教学管理</a>
					<ul>
						<li><a href="#">布局技巧</a></li>
						<li><a href="#">网页字体</a></li>
						<li><a href="#">flash</a></li>
					</ul>
				</li>
				<li>
					<a href="#">本科评建</a>
					<!-- <ul>
						<li><a href="#">帝国cms</a></li>
						<li><a href="#">电脑技巧</a></li>
						<li><a href="#">随笔杂谈</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">学生实践</a>
					<ul>
						<li><a href="#">Jquery</a></li>
						<li><a href="#">Js学习</a></li>
						<li><a href="#">Js教程</a></li>
					</ul>
				</li>
				<li>
					<a href="#">学子家园</a>
					<!-- <ul>
						<li><a href="#">SEO杂谈</a></li>
						<li><a href="#">站长工具</a></li>
						<li><a href="#">经验分享</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">ICT通讯学院</a>
					
				</li>
			</ul>
			</div>
			</div>
			</nav>

		</div>
	</div>
	</header>
<script  type="text/javascript"> 
$(document).ready(function(){
	
	$(".navbg").capacityFixed();
	
	$("#navul > li").not(".navhome").hover(function(){
		$(this).addClass("navmoon");
	},function(){
		$(this).removeClass("navmoon");
	});
	
});
</script>

</body>
</html>
