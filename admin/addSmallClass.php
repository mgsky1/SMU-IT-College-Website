<?php
 require_once("PHP_Script/News/listNews.php");
    $bigClassName = $_SESSION['bc'];
	$smallClassName = trim($_POST['smallClassName']);
	if($smallClassName == '')
	{
		echo "<script>alert('请输入小类名');history.go(-1)</script>";
		return;
	}
	$list = new NewsManage();
	$list->_construct();
	$list->addSmallClass($bigClassName,$smallClassName);
?>