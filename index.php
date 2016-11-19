<?php require_once("PHP_Script/index_code.php")?>
<?php  require_once("DataConnect/Data.php")?>

<?php include("header.php"); ?>

<br/>
	<div class="inner">
	<div class="inner met_flash">
<link href='images/css.css' rel='stylesheet' type='text/css' />
<!--[if lt IE7]>
<link rel="stylesheet" type="text/css" media="all" href="images/IE7.css" />
<![endif]-->
<!--[if lt IE6]>
<link rel="stylesheet" type="text/css" media="all" href="images/IE7.css" />
<![endif]-->
<script src='images/jquery.bxSlider.min.js'></script>
<div class='flash flash6' style='width:980px; height:245px;'>
<ul id='slider6' class='list-none'>
<li><a href='#' target='_blank' ><img src='images/index4.png'width='980' height='245'></a></li>
<li><a href='#' target='_blank' ><img src='images/index2.png'  width='980' height='245'></a></li>
<li><a href='#' target='_blank' ><img src='images/index3.png'  width='980' height='245'></a></li>
<li><a href='#' target='_blank' ><img src='images/index1.png'  width='980' height='245'></a></li>
</ul>
</div>


</div>


	<div class="index inner aboutus style-1">
		<div class="index-news style-1">
<h3 class="title"><span class='myCorner' data-corner='top 5px'>数信快讯</span><a href="listNews.php?BigClassName=数信快讯" class="more" title="更多">更多>></a></h3>
<div class="active clear listel contour-2"><ol style="list-style: none;font-size: 12px; padding: 0px; line-height: 30px; color: #fff;text-decoration: none;">
<?php listNews($Data,"数信快讯")?>
</ol></div>
	</div>
</div>
	<div class="aboutus style-1">
		<div class="index-news style-1">
		<h3 class="title">
			<span class='myCorner' data-corner='top 5px'>学生实践</span>
			<a href="listNews.php?BigClassName=学生实践" class="more" title="链接关键词">更多>></a>
		</h3>
		<div class="active clear listel contour-2"><ol style="list-style: none;font-size: 12px; padding: 0px; line-height: 30px; color: #fff;text-decoration: none;">
<?php listNews($Data,"学生实践")?>
</ol></div>
	</div>
		</div>
	<div class="case style-2">
		<h3 class='title myCorner' data-corner='top 5px'><a href="listNews.php?BigClassName=通知公告" title="链接关键词" class="more">更多>></a>公告</h3>
	  <div class="active dl-jqrun contour-1">
        <marquee onmouseover=this.stop() 
                                onmouseout=this.start() scrollAmount=1 
                   scrollDelay=100 direction=up height="174" loop="marquee">
<ol style="list-style: none;font-size: 12px; padding: 0px;">
<?php listNews($Data,"通知公告")?>
</ol>
</marquee>
<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
    
	<div class="index-news style-1">
		<h3 class="title">
			<span class='myCorner' data-corner='top 5px'>招生就业</span>
			<a href="listNews.php?BigClassName=招生就业" class="more" title="更多">更多>></a>
		</h3>
		<div class="active clear listel contour-2"><ol style="list-style: none;font-size: 12px; padding: 0px; line-height: 30px;">
<?php listNews($Data,"招生就业")?></div>
	</div>
    
<div class="index-news style-1">
<h3 class="title"><span class='myCorner' data-corner='top 5px'>学生活动</span><a href="listNews.php?BigClassName=学生活动" class="more" title="链接关键词">更多>></a></h3>
<div class="active clear listel contour-2"><ol style="list-style: none;font-size: 12px; padding: 0px; line-height: 30px;">
<?php listNews($Data,"学生活动")?></div>
	</div>
	<div class="index-conts style-2">
		<h3 class='title myCorner' data-corner='top 5px'>
			
			<!--<a href="" title="更多" class="more">更多>></a>-->专题网站
		</h3>
<div class="active clear listel contour-2"><ol class='list-none metlist'>
 <li class='list top'><a href='http://218.5.241.3:8030/index.aspx' >信息工程学院党建网</a></li>
 <li class='list '><a href='http://218.5.241.13:8007/' >毕业论文与设计管理系统</a></li>
 <li class='list '><a href='http://218.5.241.13:8060/oj/' >三明学院程序设计OJ平台</a></li>
 <li class='list '><a href='http://218.5.241.19/cgi-bin/smxyjd/indexbbs.cgi' >福建中小学数学带头人培养基地</a></li>
 <!--<li class='list '><a href='http://acmsmu.cn'>程序错误评测系统</a></li>--></ol></div>
</div>
	<div class="index-news style-1">
<h3 class="title"><span class='myCorner' data-corner='top 5px'>学习交流</span><a href="listNews.php?BigClassName=教研科研" class="more" title="更多">更多>></a></h3>
<div class="active clear listel contour-2"><ol style="list-style: none;font-size: 12px; padding: 0px; line-height: 30px;">
<?php listNews($Data,"教研科研")?>
</ol></div>
	</div>
	
<div class="index-news style-1">
<h3 class="title"> 
<span class='myCorner' data-corner='top 5px' id="font1" onMouseOver="setTab03Syn(1);">学习资源推荐</span><a href="learningPool.php" class="more" title="更多" style="display:block" id="tab_a1">更多>></a>
<span class='myCorner' data-corner='top 5px' style="margin-left:5px;background:#fff;color:rgb(0, 214, 250);" id="font2" onMouseOver="setTab03Syn(2);">下载专区</span><a href="download.php" class="more" title="更多" style="display:none"  id="tab_a2">>更多>></a>
</h3>
<div  id="lanrenzhijia1" style="display:block;"><div class="active clear listel contour-2"><ol style="list-style: none;font-size: 12px; padding: 0px; line-height: 30px;">
<ol class='list-none metlist'>
<li class='list top'><a href='http://www.mcm.edu.cn/' >中国大学生数学建模竞赛(CUMCM)</a></li>
<li class='list '><a href='http://poj.org/' >ACM程序设计(北京大学)</a></li>
<li class='list '><a href='http://218.5.241.24:8018/Root/CourseList.asp' >三明学院精品课程网</a></li>
<li class='list '><a href='http://218.193.98.33:88/sync/courseware/search.aspx?s=1' >中国高校教学资源库（数学）</a></li>
<li class='list '><a href='http://218.193.98.33:88/sync/courseware/search.aspx?s=29' >中国高校教学资源库（信息工程）</a></li>
</ol></div></div>
<div id="lanrenzhijia2"  style="display:none;"><div class="active clear listel contour-2"><ol style="list-style: none;font-size: 12px; padding: 0px; line-height: 30px;" >
<ol class='list-none metlist'>
<li class='list top'><a href='ftp://218.5.241.13/bkjx/' >福建省本科教学工程项目结项材料</a></li>
<li class='list '><a href='http://218.5.241.11:8070/zy/2015_lcb_0712.pdf' >2015网络工程综合改革项目结项材料</a></li>
<li class='list '><a href='ftp://218.5.241.13/sxzl/' >数学学习资料下载</a></li>
<li class='list '><a href='ftp://218.5.241.13/jsjzl/' >信息工程学习资料下载</a></li>
<li class='list '><a href='ftp://218.5.241.13/bgxz/' >学籍管理表格下载</a></li>
</ol></div>
	</div></div>
	<div class="index-conts style-2">
		<h3 class='title myCorner' data-corner='top 5px'>
			
			<!--<a href="" title="链接关键词" class="more">更多>></a>-->信箱
		</h3>
<div class="active clear listel contour-2"><ol class='list-none metlist'>
 <li class='list '><a href="mailto:644095976@qq.com" >邱院长信箱</a></li>
 <li class='list top'><a href="mailto:smuyjj@163.com" >颜书记信箱</a></li>
 </ol></div>
</div>
	<div class="clear p-line"></div>
    
	<div class="index-product style-2">
		<h3 class='title myCorner' data-corner='top 5px'>
			<span></span>
 <div class="flip"><p id="trigger"></p> <a class="prev" id="car_prev" href="javascript:void(0);"></a> <a class="next" id="car_next" href="javascript:void(0);"></a></div>
           <span style="margin-left: 30%;"><strong>图片新闻</strong></span>
			<a href="listPicNews.php"  class="more">更多>></a>
		</h3>
		<div class="active clear">
			<div class="profld" id="indexcar" data-listnum="5">
			<ol class='list-none metlist'>
   <?php listPicNews($Data);?>
 </ol>
			</div>
		</div>
	</div>

	<div class="clear"></div>
	<div class="index-links">
		<h3 class="title">
			<span style="padding: 2px 2px;background:url(images/dt-5.gif) repeat-x; height:32px; 
            line-height:32px; padding:0px 25px; color:#fff; font-weight:normal; font-size:14px;border-radius:12px;">常用网站链接</span>
			<a href="friendLinks.php" title="链接关键词" class="more">更多>></a>
		</h3>
		<div class="active clear">
	<div class="txt"><ul class='list-none'>
<li>>><a href='http://www.cs.xmu.edu.cn/cs/' target='_blank' title='厦门大学计算机科学系'>厦门大学计算机科学系</a></li>
<li>>><a href='http://cmcs.fzu.edu.cn/' target='_blank' title='福州大学数学与计算机科学学院'>福州大学数学与计算机科学学院</a></li>
<li>>><a href='http://math.fjnu.edu.cn/' target='_blank' title='福建师大数学与计算机科学学院'>福建师大数学与计算机科学学院</a></li>
</ul>
</div>
		</div>
		<div class="clear"></div>
	</div>

</div>
</div>

<?php include("footer_temp.php")?>
<script src="js/fun.inc.js" type="text/javascript"></script>
<div style="text-align:center;">
</div>
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
