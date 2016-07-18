<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$pword = $_GET["p"];
$conn=mysqli_connect("localhost","root","","inventory system");
///mysql_select_db("inventory system");
//$uname="admin";
$result= "SELECT id FROM admin WHERE pword='$pword'";
$check_password=mysqli_query($conn,$result);
if(mysqli_num_rows($check_password)!=1)
{
?>
<font color="#FF0000">Invalid Password</font>
<?php
}
?>
</body>
</html>
