<?php
session_start();
if(isset($_SESSION['admin']))
{
	$admin = $_SESSION['admin'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['admin']))
{
	header("Location: ../login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Admin Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"><font color="#009900"> Logged in as <?php echo strtoupper($admin);?></font>
	<font color="#FFFFFF">|<a href="adminlogout.php"><font color="#FF0000">Logout</font></a></font></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="adminhome.php">Home</a></li>
        <li><a href="addmanagerform.php">Add Managers </a></li>
        <li><a href="viewmanagerdetails.php">Manager Details </a></li>
        <li><a href="viewstock.php">Stock Details</a></li>
		<li><a href="viewsalesreport.php">Sales Report</a></li>
		<li><a href="editstoredetails.php">Edit Store Details</a></li>
		<li><a href="#">Settings</a>
          <ul>
            <li><a href="changeusernameform.php">Change Username</a></li>
            <li><a href="changepasswordform.php">Change Password</a></li>
          </ul>
        </li>
	  </ul>    
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
 <div id="waterwheelCarousel">
    <img src="../images/SportsImages/ronaldo (4).jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/stock-footage-basketball.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/2bc4b5f881bf802947c9a1453a42330c.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/saina.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/Rafael.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/Messi.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/ronaldo.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/chicagobulls.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/Tennis-BallsRacket-Sports-HD-wallpaper-1024x576.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/0e85961780386cb64cc37f4d82e5dd73.jpg" width="550pix" height="350pix" alt="" />
    <img src="../images/SportsImages/footballground.jpg" width="550pix" height="350pix" alt="" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="featured_intro">
    <div class="fl_left">
      <h2>WELCOME <?php echo $_SESSION['admin'];?>...</h2>
    </div>
    <div id="column">
      <div class="subnav">
        <center><h2>MENU</h2></center>
        <ul>
          <li><a href="addmanagerform.php">Add Managers</a></li>
          <li><a href="viewmanagerdetails.php">Manager Details</a></li>
		  <li><a href="viewstock.php">Stock Details</a></li>
		  <li><a href="viewsalesreport.php">Sales Report</a></li>
		  <li><a href="editstoredetails.php">Edit Store Details</a></li>
		  <li><a href="#">Settings</a>
            <ul>
              <li><a href="changeusernameform.php">Change Username</a></li>
              <li><a href="changepasswordform.php">Change Password</a></li>
            </ul>
          </li>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
&nbsp;<br />
&nbsp;<br />
&nbsp;<br />
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      
        <li class="last">&nbsp;<br />&nbsp;&nbsp;</li>
      </ul>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_right"><br class="clear" />
  </p>
  </div>
</div>
</body>
</html>
