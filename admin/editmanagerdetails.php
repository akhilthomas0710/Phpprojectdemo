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

function malegender()
{
	var male=document.getElementById("male").value;
	document.getElementById("updategender").value=male;
}
function femalegender()
{
	var female=document.getElementById("female").value;
	document.getElementById("updategender").value=female;
}
function changestatus()
{
	var status=document.getElementById("status").value;
	document.getElementById("updatestatus").value=status;
}
function goto()
{
	window.location.href="viewmanagerdetails.php";
}													
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manager Form</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="updatemanagerdetails.php" onsubmit="">
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
        <li  class="active"><a href="viewmanagerdetails.php">Manager Details </a></li>
        <li><a href="viewstock.php">Stock Details</a></li>
		<li><a href="viewsalesreport.php">Sales Report</a></li>
		<li><a href="editstoredetails.php">Edit Store Details</a></li>
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
<?php
$conn=mysqli_connect("localhost","root","","inventory system");
//mysql_select_db("inventory system");
$id=$_GET["id"];
$sql = "SELECT * FROM managers WHERE id='$id'";
$result=mysqli_query($conn, $sql);

$row =  mysqli_fetch_assoc($result);

?>
<div class="wrapper col4" align="center">
			
	<table align="center" border="0" bgcolor="#562051">
	<tr bgcolor="#990066" >
		<td colspan="6" style="color:#FFFFFF"><div align="center" class="style1"><h1>MANAGER DETAILS</h1> </div></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	
	<tr align="center">
		<td align="right">Name</td>
		<td align="left"><input type="text" name="name" id="name" value="<?php echo $row['name'];?>"/></td>
		<td align="right">Address</td>
		<td align="left"><input type="text" name="address" id="address" value="<?php echo $row['address'];?>"/></td>
		<td align="right">Contact No</td>
		<td align="left"><input type="text" name="contactno" id="contactno" value="<?php echo $row['contactno'];?>"/></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">Gender</td>
		<td align="left"><input type="text" name="updategender" id="updategender" value="<?php echo $row['gender'];?>"/>
						 <input type="radio" name="gender" id="male" value="Male" onclick="return malegender();"/>Male
						 <input type="radio" name="gender" id="female" value="Female" onclick="return femalegender();"/>Female
						 </td>
		<td align="right">Date of Birth</td>
		<td align="left"><input type="text" name="dob" id="dob" value="<?php echo $row['DOB'];?>" />(yyyy/mm/dd)*</td>
		<td align="right">Email Id</td>
		<td align="left"><input type="text" name="mail" id="mail" value="<?php echo $row['email'];?>"/></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
    <tr>
		<td align="right">Qualification</td>
		<td align="left"><input type="text" name="qualification" id="qualification" value="<?php echo $row['qualification'];?>"/></td>
		<td align="right">Username</td>
		<td align="left"><input type="text" name="uname" id="uname" value="<?php echo $row['uname'];?>"/></td>
		<td align="right">Password</td>
		<td align="left"><input type="text" name="pword" id="pword" value="<?php echo $row['pword'];?>"/></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">Manager Category</td>
		<td align="left">	<input type="text" name="updatestatus" id="updatestatus" value="<?php echo $row['status'];?>" />
							<select name="status" id="status" onchange="return changestatus();">
							<option>Select Category</option>
							<option>Inventory Manager</option>
							<option>Sales Manager</option>
							<option>Sales Person</option></select></td>
	</tr>
	</table>
	<table align="center" bgcolor="#562051">
	<tr align="center">
	<td>
	<input type="hidden" value="<?php echo $id;?>" name="id"/>
	<input type="submit" value="UPDATE" />
	<input type="button" value="CANCEL" onclick="return goto();"/></td>
	</tr>
	</table> 
</div>
<!-- ####################################################################################################### -->
<br />
<br />
<br />
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
