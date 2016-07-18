<?php 
session_start();
if(isset($_SESSION['inventorymanager']))
{
	$inventorymanager = $_SESSION['inventorymanager'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['inventorymanager']))
{
	header("Location: ../login.php");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Change Password Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<style type="text/css">
.c{color:#FF0000}
</style>
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>
<script type="text/javascript">
function checkpassword()
{
	//alert("inside");
	var cur_pword = document.getElementById("cpword").value;
	//alert(cur_uname);
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
					document.getElementById("disp").innerHTML=xmlhttp.responseText;
					}
	}
	
	xmlhttp.open("GET","check_password_ajax.php?p="+cur_pword,true);
	xmlhttp.send();
	//alert(cur_uname);
}
function initialize()
{
	//alert("inside");
	document.getElementById("s1").textContent="";
	document.getElementById("s2").textContent="";
	document.getElementById("s3").textContent="";
	document.getElementById("s4").textContent="";
}
function errormsg(msg)
{
	switch(msg)
	{
		case 1 : document.getElementById("s1").textContent="Enter Password";
				 break;
		case 2 : document.getElementById("s2").textContent="Enter New Password";
				 break;
		case 3 : document.getElementById("s3").textContent="Confirm New Password";
				 break;
		case 4 : document.getElementById("s4").textContent="Password Missmatch";
				 break;
	}
}
function validate()
{
	//alert("Inside");
	initialize();
	var cpword = document.getElementById("cpword");
	var npword = document.getElementById("npword");
	var conpword = document.getElementById("conpword");
	if(cpword.value=="")
	{
		errormsg(1);
		cpword.focus();
		return false;
	}
	else if(npword.value=="")
	{
		errormsg(2);
		npword.focus();
		return false;
	}
	else if(conpword.value=="")
	{
		errormsg(3);
		conpword.focus();
		return false;
	}
	else if(conpword.value!=npword.value)
	{
		errormsg(4);
		conpword.focus();
		return false;
	}
	else
	{
		//alert("Success");
		return true;
	}
}
function goto()
{
	window.location.href="changepasswordform.php";
}
</script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
	<div class="fl_right" align="right"></font><font color="#009900"> Logged in as <?php echo strtoupper($inventorymanager);?></font>
	<font color="#FFFFFF">|</font><a href="inventorylogout.php"><font color="#FF0000">Logout</font></a></div>
	<br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="inventorymanagerhome.php">Inventory Manager Home</a></li>
        <li><a href="purchaseform.php">Add Purchase </a></li>
        <li><a href="viewpurchaseitem.php">View Purchase </a></li>
		<!--<li><a href="categories.php">Add Supplier </a></li>-->
		<li><a href="viewsupplier.php">View Supplier Details</a></li>
		<li><a href="viewitemstopurchase.php">Items To Be Purchased</a></li>
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
<form name="changepasswordform" action="changepassword.php" method="post" onsubmit="return validate();">
<table border="0" style="width:40%" align="center" bgcolor="#562051">
<tr align="center" bgcolor="#990066"><td align="center" colspan="2" style="color:#FFFFFF"><font size="+1">CHANGE PASSWORD</font></td></tr>
  <tr>
  	<td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Current Password</td>
    <td align="left"><input type="password" name="cpword" id="cpword" onblur="return checkpassword();"/>
	<span class="c" id="s1"></span><div id="disp"></div></td>
   
  </tr>
  <tr>
    <td align="right">New Password</td>
    <td align="left"><input type="password" name="npword" id="npword" /><span class="c" id="s2"></span></td>
    
  </tr>
  <tr>
    <td align="right">Confirm Password</td>
    <td align="left"><input type="password"xt" name="conpword" id="conpword" /><span class="c" id="s3"></span><span class="c" id="s4"></span></td>
    
  </tr>
  <tr>
  	<td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input type="submit" value="Submit" /></td>
    <td align="left"><input type="button" value="Reset" onclick="return goto();"/></td>
  </tr>
</table>
</form>
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
