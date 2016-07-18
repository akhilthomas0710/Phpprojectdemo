<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$uname = $_GET["n"];
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
//$uname="admin";
$check_username = mysql_query("SELECT id FROM managers WHERE uname='$uname'");
if(mysql_num_rows($check_username)<1)
{
?>
<font color="#FF0000">Invalid Username</font>
<?php
}
?>
</body>
</html>
