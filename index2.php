<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">E-LEARNING</a></h1>
      <p>Free on line tutorial</p>
    </div>
      </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php">Homepage</a></li>
      <li><a href="signup.php">Registration</a></li>
      
      <li><a href="#">Courses</a>
        <ul>
         <?php
	require("database.php");
	$sel=mysql_query("select * from mst_subject");
	while($sele=mysql_fetch_array($sel))
	{
		?>
          <li><a href="admin/<?php echo $sele['sub_file'];?>"><?php echo $sele['sub_name'];?></a></li>
          <?php } ?>
		  </ul>
      </li>
      <li><a href="about.php">About Us</a></li>
      <li class="last"><a href="index1.php">Online Exam</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <ol>
      <li>
        <h2><span>JAVA SCRIPT</span></h2>
        <div><img src="JS.JPG" alt="" /></div>
      </li>
      <li>
        <h2><span>HTML</span></h2>
        <div><img src="html.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>JQUERY</span></h2>
        <div><img src="jq.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>MYSQL</span></h2>
        <div><img src="mysql.jpg" alt="" /></div>
      </li>
      <li>
        <h2><span>PhP</span></h2>
        <div><img src="PHP.JPG" alt="" /></div>
      </li>
       <li>
        <h2><span>CSS</span></h2>
        <div><img src="CSS.JPG" alt="" /></div>
      </li>
      <li>
        <h2><span>ASP.NET</span></h2>
        <div><img src="ASP.JPG" alt="" /></div>
      </li>
    </ol>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Quick Links</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="#">Academic departments</a></li>
            <li><a href="#">Alumni</a></li>
            <li><a href="#">Business &amp; Enterprise</a></li>
            <li><a href="#">Departments A-Z</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Graduate Courses</a></li>
            <li><a href="#">International Students</a></li>
            <li><a href="#">Job opportunities</a></li>
            <li><a href="#">Lifelong Learning</a></li>
            <li><a href="#">Maps and Directions</a></li>
            <li><a href="#">Online Courses</a></li>
            <li><a href="#">Parents</a></li>
            <li><a href="#">Postgraduate research</a></li>
            <li><a href="#">Postgraduate taught</a></li>
            <li><a href="#">Prospective Students</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Teaching &amp; Learning</a></li>
            <li><a href="#">Undergraduate Courses</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Visiting the University</a></li>
            <li><a href="#">What's On</a></li>
          </ul>
        </div>
        <h2 class="title">Latest Gallery Images</h2>
        <div id="hpage_gallery">
          <ul class="clear">
            <li><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
          </ul>
        </div>
        <h2 class="title">Keep Up With What's Happening</h2>
        <div id="hpage_socialize">
          <ul>
            <li><span>Facebook:</span> <a href="#">www.facebook.com/myhandel</a></li>
            <li><span>Twitter:</span> <a href="#">www.twitter.com/myhandel</a></li>
            <li class="last"><span>LinkedIn:</span> <a href="#">www.linkedin.com/myhandel</a></li>
          </ul>
          <p><strong>Subscribe To Our Newsletter</strong></p>
          <p>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit.</p>
          <form action="#" method="post">
            <fieldset>
              <legend>Newsletter Signup:</legend>
              <input type="text" id="newsletter" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
              <input type="image" id="subscribe" src="layout/images/sign-up.gif" alt="Submit" />
            </fieldset>
          </form>
          <p class="form_hint">* Please add name@domain.com to your trusted email list</p>
        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">FREE CORSES</h2>
        <div id="hpage_latestnews">
          <ul>
            <li>
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li>
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li class="last">
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis. Maecenaset adipiscinia tellentum nullam velit et a convallis curabitae vitae laoreet niseros ligula sem sed susp en at.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
          </ul>
        </div>
        <div id="hpage_specials" class="clear">
          <ul>
            <li>
              <h2 class="title">Virtual Tour</h2>
              <div class="box">
                <div class="imgholder"><img src="images/demo/160x160.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis molesuada amet. Tricessem faucibulum sit sed eleifendisse accumsan justo in tor vel purus.</p>
                <p class="readmore"><a href="#">Take The Tour &raquo;</a></p>
              </div>
            </li>
            <li>
              <h2 class="title">Sporting Activities</h2>
              <div class="box">
                <p><strong>Jan 01:</strong> <a href="#">Rugby</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
              <div class="box">
                <p><strong>Jan 06:</strong> <a href="#">Volleyball</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
            </li>
            <li class="last">
              <h2 class="title">Upcoming Events</h2>
              <div class="box">
                <p><a href="#">Magna phasellus</a></p>
                <p>Monday 21st January</p>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis.</p>
              </div>
              <div class="box">
                <p><a href="#">Sentumquisque morbi dui congue tincidunt eu quis</a></p>
                <p>Monday 21st January</p>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<?php
include('footer.php');

?><!-- liteAccordion is Homepage Only --> 
<script type="text/javascript" src="layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script> 
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title
    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides
    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>