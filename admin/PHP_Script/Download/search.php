<?php
  /*下载管理查找 Design By 小远*/
  $_SESSION["search"] = trim($_GET["search"]);
  echo "<script>window.location.href='../../downloadAdmin.php'</script>"; 
?>