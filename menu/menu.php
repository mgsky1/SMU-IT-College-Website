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
<a href="index.php" title="��վ����" id="web_logo"><img src="images/logo.gif" alt="��վ����" title="��վ����"/></a>
<ul class="top-nav1 list-none1">
<li class="t">
<a href='#' onclick='SetHome(this,window.location,"��IE�������֧�ִ˹��ܣ����ֶ����ã�");' style='cursor:pointer;' title='��Ϊ��ҳ'  >��Ϊ��ҳ</a><span>|</span>
<a href='#' onclick='addFavorite("��IE�������֧�ִ˹��ܣ����ֶ����ã�");' style='cursor:pointer;' title='�ղر�վ'  >�ղر�վ</a><span>|</span><a class="fontswitch" id="StranLink" href="javascript:StranBody()">��������</a><span>|</span>
<a href='#' title='WAP'>WAP</a><span>|</span>
<a href='#' title='English'  >English</a><span>|</span>

<div class="search">
<form name="form1" action="" method="get">
<input type="text" name="text" placeholder="�����ؼ���" autofocus required />
&nbsp;&nbsp;<input type="submit" value="����"  class="button"/>
</form>
</div>
</ul>

</div>

<nav>
	
	<div class="navbg">
		<div class="col960">
			<ul id="navul" class="cl">
				<li class="navhome"><a href="#">��վ��ҳ</a></li>
				<li>
					<a href="#">ѧԺ�ſ�</a>
					<ul>
					<!--	<li><a href="#">HTML</a></li>
						<li><a href="#">HTML5</a></li>-->
					</ul>
				</li>
				<li>
					<a href="#">˼������</a>
					<!-- <ul>
					     <li><a href="#">CSS����</a></li>
					    						<li><a href="#">CSS����</a></li>
					    						<li><a href="#">CSS����</a></li>
					    						<li><a href="#">CSSʵ��</a></li>
					    						<li><a href="#">CSS3</a></li>
					    						<li><a href="#">CSS hack</a></li>
					    						<li><a href="#">CSS2.0 �ֲ�</a></li> 
					</ul> -->
				</li>
				<li>
					<a href="#">רҵ����</a>
					<!-- <ul>
						<li><a href="#">�����˵�</a></li>
						<li><a href="#">����ť</a></li>
						<li><a href="#">���ͼ��</a></li>
						<li><a href="#">ͼƬ��Ч</a></li>
						<li><a href="#">������Ч</a></li>
						<li><a href="#">������Ч</a></li>
						<li><a href="#">ʱ������</a></li>
						<li><a href="#">������Ч</a></li>
						<li><a href="#">�����Ч</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">���п���</a>
					<!-- <ul>
						<li><a href="#">�û�����</a></li>
						<li><a href="#">ǰ�˹۲�</a></li>
						<li><a href="#">ְҵ����</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">��ѧ����</a>
					<ul>
						<li><a href="#">���ּ���</a></li>
						<li><a href="#">��ҳ����</a></li>
						<li><a href="#">flash</a></li>
					</ul>
				</li>
				<li>
					<a href="#">��������</a>
					<!-- <ul>
						<li><a href="#">�۹�cms</a></li>
						<li><a href="#">���Լ���</a></li>
						<li><a href="#">�����̸</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">ѧ��ʵ��</a>
					<ul>
						<li><a href="#">Jquery</a></li>
						<li><a href="#">Jsѧϰ</a></li>
						<li><a href="#">Js�̳�</a></li>
					</ul>
				</li>
				<li>
					<a href="#">ѧ�Ӽ�԰</a>
					<!-- <ul>
						<li><a href="#">SEO��̸</a></li>
						<li><a href="#">վ������</a></li>
						<li><a href="#">�������</a></li>
					</ul> -->
				</li>
				<li>
					<a href="#">ICTͨѶѧԺ</a>
					
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
