
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="wzx"/>
<title>信息工程学院后台管理</title>
<script src="js/sdmenu.js" type="text/javascript"></script>
<link href="images/css.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script>
    
    // iframe自适应高度代码
    function iFrameHeight(){
        
        var ifm = document.getElementById("main");
      
        var subWeb = document.frames ? document.frames["main"].document:ifm.contentDocument;
       
        
        if(ifm != null && subWeb != null){
            
            ifm.height = subWeb.body.scrollHeight;
            
        }
 
    }
</script>
</head>
<body>
 <div id="page">
<!--     
     <div id="header">
         <h1>信息工程学院后台管理</h1>
         <div id="head-span">
             欢迎：<span>管理员</span>||
             <span><a href="">退出系统</a></span>
         </div>
     </div>
     <div id="header-left">
         <span><a href="">前台后页</a></span>
         <span><a href="">后台首页</a></span>
     </div>-->
     <?php
     include("header.php");
     ?>
     <div id="article">
         <!--<div id="left">
             <div id="my_menu" class="sdmenu">
	<div>
		<span>系统管理</span>
		<a href="Database.php" id="base">数据库备份</a>
        <a href="#">退出系统</a>
        <a href="#">切换账户</a>
	</div>
    <div>
		<span>管理员管理</span>
		<a href="#">添加管理员</a>
        <a href="#">管理员账号管理</a>
	</div>
	<div>
		<span>图片新闻管理</span>
		<a href="#">添加图片新闻</a>
		<a href="#">类别管理单</a>
	</div>
	<div>
		<span>下载中心</span>
		<a href="#">添加下载程序</a>
		<a href="#">管理下载程序</a>
		<a href="#">下载程序类别</a>
	</div>
	<div>
		<span>新闻管理</span>
		<a href="#">添加新闻大类</a>
		<a href="#">管理新闻类别</a>
		<a href="#">添加新闻内容</a>
        <a href="#">编辑新闻内容</a>
	</div>
	<div>
		<span>友情链接管理</span>
		<a href="#">友情链接管理</a>
        <a href="#">添加友情链接</a>
        <a href="#">添加文字链接</a>
	</div>
	
</div>my_menu end-->
  <?php 
        include("menu.php");
        ?>
        <p>版权为信息工程学院所有</p>
         </div>
      
         <div id="right">
	    <iframe frameborder="0" id="main" name="main" src="Database.php" scrolling="no" width="100%" height="200%"
        
        marginheight="0" marginwidth="0" onLoad="iFrameHeight()"></iframe>
		
            
             <!--<div class="bread">
                 <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">2013</a></li>
            <li class="active">十一月</li>
                 </ol>
             </div>
             <div id="widget-header"></div>
             <table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									<th>Company</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>1</td>
									<td>Michael</td>
									<td>Jordan</td>
									<td>@mjordan</td>
									<td>Chicago Bulls</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>					
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Magic</td>
									<td>Johnson</td>
									<td>@mjohnson</td>
									<td>Los Angeles Lakers</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Charles</td>
									<td>Barkley</td>
									<td>@cbarkley</td>
									<td>Phoenix Suns</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
							</tbody>
						</table>
        -->
      
         </div>
         <div class="clear"></div>
     </div>
 
 </div>
    <script type="text/javascript">
var myMenu;
window.onload = function(){
	myMenu = new SDMenu("my_menu");
	myMenu.init();
	var firstSubmenu = myMenu.submenus[0];
	myMenu.expandMenu(firstSubmenu);
};
</script>
</body>
</html>