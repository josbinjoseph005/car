   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
error_reporting(0);
session_start();


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="layout/styles/3_column.css" type="text/css" />
<link rel="stylesheet" href="layout/styles/quiz.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php"><p style="color:#F8F9F3;">Online Examination</p></a></h1>
     
    </div>
      </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
   <?php 
   if($_SESSION['login'] != '')
   {
   ?>
   <li><a href="index.php">Test</a></li>
    <li class="last"><a href="signout.php">Signout</a></li>
    <?php
   
   }else{
   ?>
      <li><a href="signup.php">Registration</a></li>
      
     
       <li class="last"><a href="index.php">Online Exam</a></li>
    <?php
	}
	?>   
         </ul>
    <div  class="clear"></div>
  </div>
</div>

 