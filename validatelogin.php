<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Start</title>

</head>

<body bgcolor="">
<br />
<br />
<form name="form1" action="" method="post">
<table width="100%" height="" bgcolor="">
<tr>
<td width="1087">&nbsp;</td>
</tr>
</table>
<br />
<br />
<center><font color="#E60498" size="+3">ROYAL SPORTS INVENTORY</font></center>
<br />
<div  align="center" style="vertical-align:middle">
<?php
$conn=mysqli_connect("localhost","root","","inventory system");
$uname=$_POST["uname"];
$pword=$_POST["pword"];
//echo $uname,$pword;
//$con=mysqli_connect("localhost","root","");
//mysqli_select_db($con,"inventory system");


$sql_admin = "SELECT id FROM admin WHERE uname='$uname' AND pword='$pword' ";
//$result = $conn->query($sql_admin);
$result = mysqli_query($conn,$sql_admin);

$sql_inventory_manager = "SELECT id FROM managers WHERE uname='$uname' AND pword='$pword' AND status='Inventory Manager'";
$result2 = mysqli_query($conn,$sql_inventory_manager );

$sql_sales_manager = "SELECT id FROM managers WHERE uname='$uname' AND pword='$pword' AND status='sales manager'";
$result3 = mysqli_query($conn,$sql_sales_manager);

$sql_sales_person = "SELECT id FROM managers WHERE uname='$uname' AND pword='$pword' AND status='sales person'";
$result4 = mysqli_query($conn,$sql_sales_person);

if(mysqli_num_rows($result)===1)
{
	session_start();
	$_SESSION['admin']=$uname;
	header("Location: admin/adminhome.php");
}
else if(mysqli_num_rows($result2)==1)
{
	session_start();
	$_SESSION['inventorymanager']=$uname;
	header("Location: inventorymanager/inventorymanagerhome.php");
}
else if(mysqli_num_rows($result3)==1)
{
	session_start();
	$_SESSION['salesmanager']=$uname;
	header("Location: salesmanager/salesmanagerhome.php");
}
else if(mysqli_num_rows($result4)==1)
{
	session_start();
	$_SESSION['salesperson']=$uname;
	header("Location: sales person/salespersonhome.php");
}
else
{
?>
<script type="text/javascript">	
	alert("not valid uname or passwrd");
</script>
<?php
}
?>
</div>
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
