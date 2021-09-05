<?php
session_start();
require_once('database_config.php');
if(isset($_POST['submit']))
{
$user_name=$_REQUEST['uname'];
$user_email=$_REQUEST['email'];
$user_password=$_REQUEST['pwd1'];
$user_r_password=$_REQUEST['rpwd'];
$user_mobile_number=$_REQUEST['mob'];
$flag['code']=0;
$qry = "INSERT INTO user_registration (user_id,user_name, user_email_id, user_password, user_r_password, user_phone_number) VALUES (null,'$user_name','$user_email','$user_password','$user_r_password','$user_mobile_number');";
$result = @mysql_query($qry);
//Check whether the query was successful or not
	if($result) {
		$flag['code']=1;
		echo"hi";
		echo "success";
	}
	}
//Check whether the query was successful or not
	if($result) {
	$errmsg_arr[] = 'Success You can now log-in to User';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
		
		session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			
		header("location: index.php");
		exit();
	}else {
		die("Query failed");	
	?>