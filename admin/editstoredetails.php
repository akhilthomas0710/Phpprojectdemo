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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<style type="text/css">
.c{color:#FF0000;}
</style>
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>

<script type="text/javascript">

function goto()
{
 window.location.href="editstoredetails.php";
}														
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Store Details</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="updatestoredetails.php" onsubmit="">
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
        <li><a href="adminhome.php">Home</a></li>
        <li><a href="addmanagerform.php">Add Manager </a></li>
        <li><a href="viewmanagerdetails.php">Manager Details </a></li>
        <li><a href="viewstock.php">Stock Details</a></li>
		<li><a href="viewsalesreport.php">Sales Report</a></li>
		<li  class="active"><a href="editstoredetails.php">Edit Store Details</a></li>
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

<div class="wrapper col4" align="center">
			
<?php
$conn=mysqli_connect("localhost","root","","inventory system");
//mysql_select_db("inventory system");

$sql ="SELECT * FROM storedetails";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>			
	<table align="center" border="0" bgcolor="#562051">
	<tr bgcolor="#990066" >
		<td colspan="6" style="color:#FFFFFF"><div align="center" class="style1"><h1>EDIT STORE DETAILS</h1> </div></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr align="center">
		<td align="right">Store Name</td>
		<td align="left"><input type="text" name="storename" id="storename" value="<?php echo $row['storename'];?>"/>
		<span class="c" id="s1"></span></td>
		<td align="right">Address</td>
		<td align="left"><input type="text" name="address" id="address" value="<?php echo $row['address'];?>"/>
		<span class="c" id="s2"></span></td>
		<td align="right">Place</td>
		<td align="left"><input type="text" name="place" id="place" value="<?php echo $row['place'];?>"/>
		<span class="c" id="s3"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">City</td>
		<td align="left"><input type="text" name="city" id="city" value="<?php echo $row['city'];?>"/><span class="c" id="s4"></span></td>
		<td align="right">Pin</td>
		<td align="left"><input type="text" name="pin" id="pin" value="<?php echo $row['pin'];?>"/><span class="c" id="s5"></span></td>
		<td align="right">Phone No</td>
		<td align="left"><input type="text" name="phoneno" id="phoneno" value="<?php echo $row['phoneno'];?>"/><span class="c" id="s6"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
    <tr>
		<td align="right">Website</td>
		<td align="left"><input type="text" name="website" id="website" value="<?php echo $row['website'];?>"/></td>
		<td align="right">Email</td>
		<td align="left"><input type="text" name="email" id="email" value="<?php echo $row['email'];?>"/></td>
		<td align="right"></td>
		<td align="left"></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	</table>
	<table align="center" bgcolor="#562051">
	<tr align="center">
	<td><input type="submit" value="UPDATE" />
	<input type="button" value="RESET" onclick="return goto();"/></td>
	</tr>
	</table> 
</div>
<!-- ####################################################################################################### -->
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
<div class="wrapper col3"></div>
</form>
</body>
</html>
