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
<?php
$conn=mysqli_connect("localhost","root","","inventory system");
//mysql_select_db("inventory system");
$cpword = $_POST["cpword"];
$npword = $_POST["npword"];
$sql = "SELECT id FROM admin WHERE pword='$cpword'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row ['id'];
if(mysqli_num_rows($result)==1)
{
	$update_password ="UPDATE admin SET pword = '$npword' WHERE id='$id'";
	$result1=mysqli_query($conn,$update_password);
	
	if($update_password)
	{
?>
	<script type="text/javascript">
	alert("Password Changed Succssfully...");
	window.location.href="changepasswordform.php";
	</script>
<?php	
	}
	else
	{
?>	
	<script type="text/javascript">
	alert("Password Change Failed");
	window.location.href="changepasswordform.php";
	</script>
<?php
	}
}
else
{
?>
<script type="text/javascript">
alert("Invalid Current Password");
window.location.href="changepasswordform.php";
</script>
<?php
}
?>
</body>
</html>
