<?php
error_reporting(0);
include("database.php");

$test=$_GET['testid'];
$sub=$_GET['subid'];

/*$hun=mysql_query("select * from mst_question where test_id=$test",$cn) or die(mysql_error());
$hu=mysql_num_rows($hun);
if($hu == 100)
{*/
?>
<?php
session_start();
error_reporting(1);



extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<div style="background-color:#FFFFFF;">
<?php
include("header.php");


$query="select * from mst_question";
$ns=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
$l=mysql_query("select * from mst_log_det where log_ses='".$_SESSION[login]."' ",$cn) or die(mysql_error());
$lo=mysql_fetch_array($l);
$log_no= $lo['log_no'];
$rsa=mysql_query("select * from mst_question where test_id=$tid ",$cn) or die(mysql_error());
$aa=mysql_num_rows($rsa);

if($log_no == 1 or $log_no == 11 or $log_no == 21 or $log_no == 31 or $log_no == 41 or $log_no == 51 or $log_no == 61 or $log_no == 71 or $log_no == 81 or $log_no == 91)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by que_desc asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 2 or $log_no == 12 or $log_no == 22 or $log_no == 32 or $log_no == 42 or $log_no == 52 or $log_no == 62 or $log_no == 72 or $log_no == 82 or $log_no == 92)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by true_ans desc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 3 or $log_no == 13 or $log_no == 23 or $log_no == 33 or $log_no == 43 or $log_no == 53 or $log_no == 63 or $log_no == 73 or $log_no == 83 or $log_no == 93)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans1 asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 4 or $log_no == 14 or $log_no == 24 or $log_no == 34 or $log_no == 44 or $log_no == 54 or $log_no == 64 or $log_no == 74 or $log_no == 84 or $log_no == 94)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans2 desc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 5 or $log_no == 15 or $log_no == 25 or $log_no == 35 or $log_no == 45 or $log_no == 55 or $log_no == 65 or $log_no == 75 or $log_no == 85 or $log_no == 95)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans3 asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 6 or $log_no == 16 or $log_no == 26 or $log_no == 36 or $log_no == 46 or $log_no == 56 or $log_no == 66 or $log_no == 76 or $log_no == 86 or $log_no == 96)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans2 asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 7 or $log_no == 17 or $log_no == 27 or $log_no == 37 or $log_no == 47 or $log_no == 57 or $log_no == 67 or $log_no == 77 or $log_no == 87 or $log_no == 97)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans1 desc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 8 or $log_no == 18 or $log_no == 28 or $log_no == 38 or $log_no == 48 or $log_no == 58 or $log_no == 68 or $log_no == 78 or $log_no == 88 or $log_no == 98)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by true_ans asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 9 or $log_no == 19 or $log_no == 29 or $log_no == 39 or $log_no == 49 or $log_no == 59 or $log_no == 69 or $log_no == 79 or $log_no == 89 or $log_no == 99)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by que_desc desc LIMIT 20",$cn) or die(mysql_error());
}else{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans3 desc LIMIT 20",$cn) or die(mysql_error());
}
$n=mysql_num_rows($rs);
?>

<p style="margin:10px 170px 0 0; font-size:14px; color:red; float:right;">No Of Question:  <?php echo $n;?></p>
<?php
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{		
				
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				?>
				<h1 style="color:#00FF00;"> Result</h1>
                <?php
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center ><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysql_query("insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$l=mysql_query("select * from mst_log_det where log_ses='".$_SESSION[login]."' ",$cn) or die(mysql_error());
$lo=mysql_fetch_array($l);
$log_no= $lo['log_no'];
$rsa=mysql_query("select * from mst_question where test_id=$tid ",$cn) or die(mysql_error());
$aa=mysql_num_rows($rsa);

if($log_no == 1 or $log_no == 11 or $log_no == 21 or $log_no == 31 or $log_no == 41 or $log_no == 51 or $log_no == 61 or $log_no == 71 or $log_no == 81 or $log_no == 91)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by que_desc asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 2 or $log_no == 12 or $log_no == 22 or $log_no == 32 or $log_no == 42 or $log_no == 52 or $log_no == 62 or $log_no == 72 or $log_no == 82 or $log_no == 92)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by true_ans desc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 3 or $log_no == 13 or $log_no == 23 or $log_no == 33 or $log_no == 43 or $log_no == 53 or $log_no == 63 or $log_no == 73 or $log_no == 83 or $log_no == 93)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans1 asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 4 or $log_no == 14 or $log_no == 24 or $log_no == 34 or $log_no == 44 or $log_no == 54 or $log_no == 64 or $log_no == 74 or $log_no == 84 or $log_no == 94)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans2 desc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 5 or $log_no == 15 or $log_no == 25 or $log_no == 35 or $log_no == 45 or $log_no == 55 or $log_no == 65 or $log_no == 75 or $log_no == 85 or $log_no == 95)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans3 asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 6 or $log_no == 16 or $log_no == 26 or $log_no == 36 or $log_no == 46 or $log_no == 56 or $log_no == 66 or $log_no == 76 or $log_no == 86 or $log_no == 96)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans2 asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 7 or $log_no == 17 or $log_no == 27 or $log_no == 37 or $log_no == 47 or $log_no == 57 or $log_no == 67 or $log_no == 77 or $log_no == 87 or $log_no == 97)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans1 desc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 8 or $log_no == 18 or $log_no == 28 or $log_no == 38 or $log_no == 48 or $log_no == 58 or $log_no == 68 or $log_no == 78 or $log_no == 88 or $log_no == 98)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by true_ans asc LIMIT 20",$cn) or die(mysql_error());
}elseif($log_no == 9 or $log_no == 19 or $log_no == 29 or $log_no == 39 or $log_no == 49 or $log_no == 59 or $log_no == 69 or $log_no == 79 or $log_no == 89 or $log_no == 99)
{
$rs=mysql_query("select * from mst_question where test_id=$tid order by que_desc desc LIMIT 20",$cn) or die(mysql_error());
}else{
$rs=mysql_query("select * from mst_question where test_id=$tid order by ans3 desc LIMIT 20",$cn) or die(mysql_error());
}
if($_SESSION[qn]>mysql_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}

mysql_data_seek($rs,$_SESSION[qn]);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

if($_SESSION[qn]<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</div>
<?php
include("footer.php");
?>
</body>
</html>
<style>
.style8{
color:#6633cc; font-weight:bold;
}
.style2{
color:#990000;
font-weight:bold;

}
.head1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FF0000;
	text-align: center;
	font-weight: bold;
}

</style>
<?php /*?><?php
}else{
echo '<script>alert("this exam question not in 100 question.so ur redirect.not ttend this exam")</script>';
echo '<script>window.location="showtest.php?subid=1";</script>';
}
?><?php */?>