
<?php
error_reporting(0);
session_start();
ob_start();
include("database.php");
$se=extract($_SESSION);
 $nalo=$_SESSION[login];
$gi=$_GET['cid'];
$sel=mysql_query("select * from mst_test where test_id=$gi");
$sele=mysql_fetch_array($sel);

$us=mysql_query("select * from `mst_user` where `login`='".$nalo."' ");
$usna=mysql_fetch_array($us);
$na=$usna['login'];
$gna=mysql_query("SELECT * FROM `mst_result` WHERE `login` = '".$nalo."' AND `test_id` = '".$gi."'");

//echo "SELECT * FROM `mst_result` WHERE `login` = '".$nalo."' AND `test_id` = '".$gi."'";
//echo "select * from mst_result where login=$nalo and test_id=$gi";
$fnam=mysql_fetch_array($gna);
$score=$fnam['score'];
?>
<div id="printsection">

<div align="center" style="width:800px; height:400px; padding:20px; text-align:center;  margin: 0 0 0 67px; border: 10px solid #787878">
<div style="width:750px; height:345px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Exam Completion Certificate</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that  </i></span>
       <br><br>
       
       <span style="font-size:30px"><b><?php echo $usna['username'];?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
        <span style="font-size:30px"><i><?php echo  $sele['test_name'];?></i></span>
       <br><br>
       <span style="font-size:20px">with score of <b><?php echo $score;?> Out Of <?php echo $sele['total_que'];?> </b></span> <br/><br/><br/><br/>
     
</div>
</div>
<div>
<script language="javascript">
function printPage(printContent) {
var display_setting="toolbar=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";


var printpage=window.open("","",display_setting);
printpage.document.open();
printpage.document.write('<html><head><title>Print Page</title></head>');
printpage.document.write('<body onLoad="self.print()" align="center">'+ printContent +'</body></html>');
printpage.document.close();
printpage.focus();
}
</script>
</head>


</div>
<a href="javascript:window.print()">Click to Print This Page</a> 
<a href="javascript:void(0);" onClick="printPage(printsection.innerHTML)">Print Preview</a>
</body>
</html> 
</div>