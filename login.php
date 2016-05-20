<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<style type="text/css">
.c{color:#FF0000}
</style>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function initialize()
{
	//alert("inside initialize()");
	document.getElementById("s1").textContent="";
	document.getElementById("s2").textContent="";

}
function errormsg(msg)
{
	//alert("inside errormsg()");
	switch(msg)
	{
		case 1:document.getElementById("s1").textContent="Enter Username";
				break;
		case 2:document.getElementById("s2").textContent="Enter Password";
				break;	
	}
}
function validate()
{
	//alert("inside validate()");
	initialize();
	var uname = document.getElementById("uname");
	var pword = document.getElementById("pword");

	
	if(uname.value=="")
	{
		
		errormsg(1);
		uname.focus();
		return false;
	}
	else if(pword.value=="")
	{
		
		errormsg(2);
		pword.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
</head>

<body bgcolor="#000000">
<br />
<br />
<form name="form1" action="validatelogin.php" method="post" onsubmit="return validate();">
<table width="100%" height="35" bgcolor="#562051">
<tr>
<td width="1087">&nbsp;</td>
</tr>
</table>
<br />
<br />
<br />
<br />
<center><font color="#E60498" size="+3">ROYAL SPORTS INVENTORY</font></center>
<br />
<br />
<br />
<div  align="center" style="vertical-align:middle">
<table align="center" border="0" bgcolor="#562051">
<tr align="center">
	<td align="center" colspan="2" ><font color="#FFFF99" size="+2"> Log In...</font></td>
</tr>
<tr align="center">
	<td width="200"><font color="#FFFFFF">Username</font></td>
	<td width="200"><input type="text" name="uname" id="uname" /></td><td><span class="c" id="s1"></span></td>
</tr>
<tr align="center">
	<td height="50" width="200"><font color="#FFFFFF">Password</font></td>
	<td><input type="password" name="pword" id="pword" /></td><td><span class="c" id="s2"></span></td>
</tr>
<tr align="center">
	<td align="center" colspan="2"><input type="submit" value="Log In" /><input type="reset" value="Reset" /></td>
</tr>
</table>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<table width="100%" height="35" bgcolor="#562051">
<tr>
<td width="1087">&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>
