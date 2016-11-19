
<?php
  require_once("PHP_Script/News/listNews.php");
  $list = new NewsManage();
  $list->_construct();
  $ID = intval($_SESSION['newsID']);
  $title = trim($_POST['unname']);
  if($title == "")
  {
	  echo "<script>alert('请输入标题');history.go(-1)</script>";
	  return;
  }
  $BigClassName = trim($_POST['province']);
  if($BigClassName == "请选择大类")
  {
	  echo "<script>alert('请选择新闻大类');history.go(-1)</script>";
	  return;
  }
  $SmallClassName = trim($_POST['city']);
  $content = trim($_POST['content']);
  if($content == "")
  {
	  echo "<script>alert('请输入新闻内容');history.go(-1)</script>";
	  return;
  }
  $user = trim($_SESSION['admin']);
  ini_set('date.timezone','Asia/Shanghai');//设置时区
  $time = date("Y-m-d H:i:s",time());
  $news = array(0 => $title , 1 => $BigClassName , 2 => $SmallClassName , 3 => $content , 4 => $user , 5 => $time , 6 => $ID);
  $list->updateNews($news);
?>