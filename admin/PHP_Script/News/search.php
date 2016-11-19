<?php
  /*新闻管理查找 Design By 小远*/
  $_SESSION["search"] = trim($_GET["search"]);
  echo "<script>window.location.href='../../newsAdmin.php'</script>"; 
?>