<?php
session_start();
if(isset($_SESSION['salesperson']))
{
	$salesperson = $_SESSION['salesperson'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['salesperson']))
{
	header("Location: ../login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Customer</title>
<style>
.g{color:#FF0000; font-style:italic;}
</style>
<script type="text/javascript">

function goto()
{
	window.location.href="viewcustomer.php";
}
</script>  
</head>

<body>
<!--<form id="form1" name="form1" method="post" action="">-->
  <div align="center">
  <body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"><font color="#009900"> Logged in as <?php echo strtoupper($salesperson);?></font>
	<font color="#FFFFFF">|</font><a href="salespersonlogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="salespersonhome.php">Home</a></li>
        <li><a href="addsales.php">Add Sales </a></li>
        <li><a href="viewsales.php">View Sales </a></li>
		<li  class="active"><a href="viewcustomer.php">View Customer Details </a></li>
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
    <img  src="../images/Images/images (1).jpg"  width="270pix" height="190pix"alt="" />
    <img src="../images/Images/images (2).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (3).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (5).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (6).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/download (1).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/download.jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (16).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (21).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (8).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (19).jpg" width="270pix" height="190pix" alt="" />
  </div>
</div>
<!-- ####################################################################################################### -->
<p>&nbsp;</p>
<?php
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$billno=$_GET["billno"];
$s=mysql_query("SELECT * FROM sales WHERE billno='$billno'");
?>
<form action="updatecustomer.php" method="post" onsubmit="return valid();">
<?php
$r=mysql_fetch_array($s);
?> 
<table align="center" border="0" width="328" style="width:40%" bgcolor="#562051">
<tr align="center" bgcolor="#990066"><td align="center" colspan="2" style="color:#FFFFFF"><h2>EDIT CUSTOMER DETAILS</h2></td></tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr>
	<td width="41%" height="21"><div align="right">Date</div></td>
	<td width="198"><input type="text" name="date" id="date" value="<?php echo $r['date'];?>" />(yyyy/mm/dd)*</td>
</tr>
<tr>
	<td width="41%" height="21"><div align="right">Customer Name</td>
	<td width="198"><input type="text" name="customer" id="customer" value="<?php echo $r['customer'];?>" /></td>
</tr>
<tr>
	<td width="41%" height="21"><div align="right">Address</div></td>
	<td width="198"><input type="text" name="address" id="address" value="<?php echo $r['address'];?>" /></td>
</tr>
<tr>
	<td width="41%" height="21"><div align="right">Contact No</td>
	<td width="198"><input type="text" name="contactno" id="contactno" value="<?php echo $r['contact'];?>" /></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
</table>
<table align="center" style="width:40%" bgcolor="#562051">
<tr>
	<td colspan="2" align="center"><input type="submit" value="UPDATE" />
	<input type="button" name="cancel" value="CANCEL" onclick="return goto();"/>
	<input type="hidden" name="billno" value="<?php echo $r['billno'];?>" /></td>
</tr>
</table></form>
</div>
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
