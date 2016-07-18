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
function initialize()
{
	//alert("inside initialize()");
	document.getElementById("s1").textContent="";
	document.getElementById("s2").textContent="";
	document.getElementById("s3").textContent="";
	document.getElementById("s4").textContent="";
	document.getElementById("s5").textContent="";
	document.getElementById("s6").textContent="";
	document.getElementById("s7").textContent="";
	document.getElementById("s8").textContent="";
	document.getElementById("s9").textContent="";
	document.getElementById("s10").textContent="";
	document.getElementById("s11").textContent="";
	document.getElementById("s12").textContent="";
	document.getElementById("s13").textContent="";
	document.getElementById("s14").textContent="";
}
function errormsg(msg)
{
	//alert("inside errormsg()");
	switch(msg)
	{
		case 1:document.getElementById("s1").textContent="Enter Name";
				break;
		case 2:document.getElementById("s2").textContent="Enter Address";
				break;
		case 3:document.getElementById("s3").textContent="Enter Contact No";
				break;
		case 4:document.getElementById("s4").textContent="Select Gender";
				break;
		case 5:document.getElementById("s5").textContent="Select Year";
				break;		
		case 6:document.getElementById("s6").textContent="Select Month";
				break;
		case 7:document.getElementById("s7").textContent="Select Day";
				break;				
		case 8:document.getElementById("s8").textContent="Enter Email Id";
				break;
		case 9:document.getElementById("s9").textContent="Enter Qualification";
				break;				
		case 10:document.getElementById("s10").textContent="Enter Username";
				break;
		case 11:document.getElementById("s11").textContent="Enter Password";
				break;				
		case 12:document.getElementById("s12").textContent="Select Manager Category";
				break;		
		case 13:document.getElementById("s13").textContent="Enter valid email id";
				break;	
		case 14:document.getElementById("s14").textContent="Enter valid phone no";
				break;	
	}
}
function validate()
{
	//alert("inside validate()");
	initialize();
	var name = document.getElementById("name");
	var address = document.getElementById("address");
	var contactno = document.getElementById("contactno");
	var co = /^[0-9]{10}$/
	var male = document.form1.gender[0];
	var female = document.form1.gender[1];
	var year = document.getElementById("year");
	var month = document.getElementById("month");
	var day = document.getElementById("day");
	var mail = document.getElementById("mail");
	var mailcheck=/^[0-9A-Za-z._-]+@[0-9A-Za-z._-]+\.[A-Za-z]{2,4}(\.[A-Za-z0-9]{2})?$/
	var qualification = document.getElementById("qualification");
	var uname = document.getElementById("uname");
	var pword = document.getElementById("pword");
	var status =document.getElementById("status");
	/*var mode =document.getElementById("mode");*/
	
	if(name.value=="")
	{
		
		errormsg(1);
		name.focus();
		return false;
	}
	else if(address.value=="")
	{
		
		errormsg(2);
		address.focus();
		return false;
	}
	else if(contactno.value=="")
	{
		errormsg(3);
		contactno.focus();
		return false;
	}
	else if(!co.exec(contactno.value))
	{
		errormsg(14);
		contactno.focus();
		return false;
	}
	else if(male.checked==false && female.checked==false)
	{
		
		errormsg(4);
		male.focus();
		return false;
	}
	else if(year.value=="Select")
	{
		
		errormsg(5);
		year.focus();
		return false;
	}
	else if(month.value=="Select")
	{
		
		errormsg(6);
		month.focus();
		return false;
	}
	else if(day.value=="Select")
	{
		
		errormsg(7);
		day.focus();
		return false;
	}
	else if(mail.value=="")
	{
		errormsg(8);
		mail.focus();
		return false;
	}
	else if(!mailcheck.exec(mail.value))
	{
		errormsg(13);
		mail.focus();
		return false;
	}
	else if(qualification.value=="")
	{
		
		errormsg(9);
		qualification.focus();
		return false;
	}
	else if(uname.value=="")
	{
		
		errormsg(10);
		uname.focus();
		return false;
	}
	else if(pword.value=="")
	{
		
		errormsg(11);
		pword.focus();
		return false;
	}
	else if(status.value=="Select Category")
	{
		
		errormsg(12);
		status.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function goto()
{
 window.location.href="addmanagerform.php";
}														
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Manager Form</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="addmanager.php" onsubmit="return validate();">
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
        <li class="active"><a href="addmanagerform.php">Add Managers </a></li>
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
			
	<table align="center" border="0" bgcolor="#562051">
	<tr bgcolor="#990066" >
		<td colspan="6" style="color:#FFFFFF"><div align="center" class="style1"><h1>ADD MANAGER</h1> </div></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr align="center">
		<td align="right">Name</td>
		<td align="left"><input type="text" name="name" id="name" /><span class="c" id="s1"></span></td>
		<td align="right">Address</td>
		<td align="left"><input type="text" name="address" id="address"/><span class="c" id="s2"></span></td>
		<td align="right">Contact No</td>
		<td align="left"><input type="text" name="contactno" id="contactno" /><span class="c" id="s3"></span>
		<span class="c" id="s14"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">Gender</td>
		<td align="left"><input type="radio" name="gender" id="gender" value="Male"/>Male
						 <input type="radio" name="gender" id="gender" value="Female"/>Female
						 <span class="c" id="s4"></span></td>
		<td align="right">Date of Birth</td>
		<td align="left"><select name="year" id="year"><option>Select</option>
														<?php for($i=1980;$i<=2015;$i++)
														{
														?>
														<option><?php echo $i;?></option>
														<?php
														}
														?></select> Year 
						  <select name="month" id="month"><option>Select</option>
														<?php for($i=1;$i<=12;$i++)
														{
														?>
														<option><?php echo $i;?></option>
														<?php
														}
														?></select> Month
						  <select name="day" id="day"><option>Select</option>
														<?php for($i=1;$i<=31;$i++)
														{
														?>
														<option><?php echo $i;?></option>
														<?php
														}
														?></select> Day<span class="c" id="s5"></span>
																		<span class="c" id="s6"></span>
																		<span class="c" id="s7"></span></td>
		<td align="right">Email Id</td>
		<td align="left"><input type="text" name="mail" id="mail" /><span class="c" id="s8"></span><span class="c" id="s13"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
    <tr>
		<td align="right">Qualification</td>
		<td align="left"><input type="text" name="qualification" id="qualification" /><span class="c" id="s9"></span></td>
		<td align="right">Username</td>
		<td align="left"><input type="text" name="uname" id="uname"/><span class="c" id="s10"></span></td>
		<td align="right">Password</td>
		<td align="left"><input type="text" name="pword" id="pword" /><span class="c" id="s11"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">Manager Category</td>
		<td align="left"><select name="status" id="status">
							<option>Select Category</option>
							<option>Inventory Manager</option>
							<option>Sales Manager</option>
							<option>Sales Person</option></select><span class="c" id="s12"></span></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	<tr>
	<td colspan="6">&nbsp;</td>
	</tr>
	</table>
	<table align="center">
	<tr align="center" bgcolor="#562051">
	<td><input type="submit" value="ADD" />
	<input type="button" value="RESET" onclick="return goto();"/></td>
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
