<?php
session_start();
if(isset($_SESSION['salesmanager']))
{
	$salesmanager = $_SESSION['salesmanager'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['salesmanager']))
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
	<div class="fl_right" align="right"><font color="#009900"> Logged in as <?php echo strtoupper($salesmanager);?></font>
   <font color="#FFFFFF">|</font><a href="salesmanagerlogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="salesmanagerhome.php">Sales Manager Home</a></li>
        <!--<li><a href="items.php">Add Item</a></li>-->
        <li><a href="viewitem.php">View Stock Details</a></li>
		<!--<li><a href="categories.php">Add Item Category</a></li>-->
		<li><a href="itemtopurchase.php">Add Items to Purchase</a></li>
		<li><a href="viewsalesreport.php">View Sales Report</a></li>
        <li class="active"><a href="#">Settings</a>
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
<?php
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$cuname = $_POST["cuname"];
$nuname = $_POST["nuname"];
$select_username = mysql_query("SELECT pword FROM managers WHERE uname='$cuname'");
$row = mysql_fetch_array($select_username);
$pword = $row['pword'];
if(mysql_num_rows($select_username)==1)
{
	$update_username = mysql_query("UPDATE managers SET uname='$nuname' WHERE status='Sales Manager' AND pword='$pword'");
	if($update_username)
	{
	$_SESSION['salesmanager']=$nuname;
?>
	<script type="text/javascript">
	alert("Username Changed Succssfully");
	window.location.href="changeusernameform.php";
	</script>
<?php	
	}
	else
	{
?>	
	<script type="text/javascript">
	alert("Username Change Failed");
	window.location.href="changeusernameform.php";
	</script>
<?php
	}
}
else
{
?>
<script type="text/javascript">
alert("Invalid Current Username");
window.location.href="changeusernameform.php";
</script>
<?php
}
?>
</body>
</html>
