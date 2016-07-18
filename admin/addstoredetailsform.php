<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<style type="text/css">
.c{color:#FF0000;}
</style>

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
/*	document.getElementById("s9").textContent="";
	document.getElementById("s10").textContent="";
	document.getElementById("s11").textContent="";
	document.getElementById("s12").textContent="";
	/*document.getElementById("s13").textContent="";	*/
}
function errormsg(msg)
{
	//alert("inside errormsg()");
	switch(msg)
	{
		case 1:document.getElementById("s1").textContent="Enter Store Name";
				break;
		case 2:document.getElementById("s2").textContent="Enter Address";
				break;
		case 3:document.getElementById("s3").textContent="Enter Place";
				break;
		case 4:document.getElementById("s4").textContent="Enter City";
				break;
		case 5:document.getElementById("s5").textContent="Enter Pin";
				break;		
		case 6:document.getElementById("s6").textContent="Enter Phone No ";
				break;
		case 7:document.getElementById("s7").textContent="Enter Username";
				break;				
		case 8:document.getElementById("s8").textContent="Enter Password";
				break;
/*		case 9:document.getElementById("s9").textContent="Enter Qualification";
				break;				
		case 10:document.getElementById("s10").textContent="Enter Username";
				break;
		case 11:document.getElementById("s11").textContent="Enter Password";
				break;				
		case 12:document.getElementById("s12").textContent="Select Manager Category";
				break;		
		case 13:document.getElementById("s13").textContent="Select Payment Mode";
				break;	*/	
	}
}
function validate()
{
	//alert("inside validate()");
	initialize();
	var storename = document.getElementById("storename");
	var address = document.getElementById("address");
	var place = document.getElementById("place");
	var city = document.getElementById("city");
	var pin = document.getElementById("pin");
	var phoneno = document.getElementById("phoneno");
	var uname = document.getElementById("uname");
	var pword = document.getElementById("pword");
/*	var mail = document.getElementById("mail");
	var qualification = document.getElementById("qualification");
	var uname = document.getElementById("uname");
	var pword = document.getElementById("pword");
	var status =document.getElementById("status");
	var mode =document.getElementById("mode");*/
	
	if(storename.value=="")
	{
		
		errormsg(1);
		storename.focus();
		return false;
	}
	else if(address.value=="")
	{
		
		errormsg(2);
		address.focus();
		return false;
	}
	else if(place.value=="")
	{
		
		errormsg(3);
		place.focus();
		return false;
	}
	else if(city.value=="")
	{
		
		errormsg(4);
		city.focus();
		return false;
	}
	else if(pin.value=="")
	{
		
		errormsg(5);
		pin.focus();
		return false;
	}
	else if(phoneno.value=="")
	{
		
		errormsg(6);
		phoneno.focus();
		return false;
	}
	else if(uname.value=="")
	{
		
		errormsg(7);
		uname.focus();
		return false;
	}
	else if(pword.value=="")
	{
		errormsg(8);
		pword.focus();
		return false;
	}
/*	else if(qualification.value=="")
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
	else if(total.value=="")
	{
		
		errormsg(13);
		total.focus();
		return false;
	}
	else if(mode.value=="Select")
	{
		
		errormsg(14);
		mode.focus();
		return false;
	}*/
	else
	{
		return true;
	}
}

function goto()
{
 window.location.href="addstoredetailsform.php";
}														
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Store Details Form</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="addstoredetails.php" onsubmit="return validate();">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" style="vertical-align:bottom"></div>
    <br class="clear" />
  </div>
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

<!-- ####################################################################################################### -->
<br />
<br />
<br />
<br />
<div class="wrapper col4" align="center">
			
	<table align="center" border="0" bgcolor="#562051">
	<tr bgcolor="#990066" >
		<td colspan="6" style="color:#FFFFFF"><div align="center" class="style1"><h1>ADD SHOP DETAILS</h1> </div></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr align="center">
		<td align="right">Shop Name</td>
		<td align="left"><input type="text" name="storename" id="storename" /><span class="c" id="s1"></span></td>
		<td align="right">Address</td>
		<td align="left"><input type="text" name="address" id="address"/><span class="c" id="s2"></span></td>
		<td align="right">Place</td>
		<td align="left"><input type="text" name="place" id="place" /><span class="c" id="s3"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">City</td>
		<td align="left"><input type="text" name="city" id="city" /><span class="c" id="s4"></span></td>
		<td align="right">Pin</td>
		<td align="left"><input type="text" name="pin" id="pin" /><span class="c" id="s5"></span></td>
		<td align="right">Phone No</td>
		<td align="left"><input type="text" name="phoneno" id="phoneno" /><span class="c" id="s6"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
    <tr>
		<td align="right">Website</td>
		<td align="left"><input type="text" name="website" id="website" /></td>
		<td align="right">Email</td>
		<td align="left"><input type="text" name="email" id="email"/></td>
		<td align="right">Username</td>
		<td align="left"><input type="text" name="uname" id="uname" /><span class="c" id="s7"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">Password</td>
		<td align="left"><input type="password" name="pword" id="pword" /><span class="c" id="s8"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	</table>
	<table align="center" bgcolor="#562051">
	<tr align="center">
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
