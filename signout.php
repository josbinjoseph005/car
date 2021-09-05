<?php
session_start();
include("database.php");
mysql_query("delete from mst_log_det where log_ses='".$_SESSION['login']."'");
//echo "delete from mst_log_det where log_ses='".$_SESSION['login']."'";
session_destroy();
//header("Location: index.php");
echo '<script>window.location="index.php";</script>';
?>
