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
<title>Change Username Form</title>
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
function checkusername()
{
	//alert("inside");
	var cur_uname = document.getElementById("cuname").value;
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
	
	xmlhttp.open("GET","check_username_ajax.php?n="+cur_uname,true);
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
		case 1 : document.getElementById("s1").textContent="Enter Username";
				 break;
		case 2 : document.getElementById("s2").textContent="Enter New Username";
				 break;
		case 3 : document.getElementById("s3").textContent="Confirm New Username";
				 break;
		case 4 : document.getElementById("s4").textContent="Username Missmatch";
				 break;
	}
}
function validate()
{
	//alert("Inside");
	initialize();
	var cuname = document.getElementById("cuname");
	var nuname = document.getElementById("nuname");
	var conuname = document.getElementById("conuname");
	if(cuname.value=="")
	{
		errormsg(1);
		cuname.focus();
		return false;
	}
	else if(nuname.value=="")
	{
		errormsg(2);
		nuname.focus();
		return false;
	}
	else if(conuname.value=="")
	{
		errormsg(3);
		conuname.focus();
		return false;
	}
	else if(conuname.value!=nuname.value)
	{
		errormsg(4);
		conuname.focus();
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
	window.location.href="changeusernameform.php";
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
<form name="changeusernameform" action="changeusername.php" method="post" onsubmit="return validate();">
<table border="0" style="width:40%" align="center" bgcolor="#562051">
<tr align="center" bgcolor="#990066"><td align="center" style="color:#FFFFFF" colspan="2"><font size="+1">CHANGE USERNAME</font></td></tr>
  <tr>
  	<td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Current Username</td>
    <td align="left"><input type="text" name="cuname" id="cuname" onblur="return checkusername();"/>
	<span class="c" id="s1"></span><div id="disp"></div></td>
   
  </tr>
  <tr>
    <td align="right">New Username</td>
    <td align="left"><input type="text" name="nuname" id="nuname" /><span class="c" id="s2"></span></td>
    
  </tr>
  <tr>
    <td align="right">Confirm Username</td>
    <td align="left"><input type="text" name="conuname" id="conuname" /><span class="c" id="s3"></span><span class="c" id="s4"></span></td>
    
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
