<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$itemid4=$_GET["itemid4"];
//$itemid="FB101";
//echo $itemid;
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$sql = mysql_query("SELECT itemname FROM purchase WHERE itemid='$itemid4'");
$row = mysql_fetch_array($sql);
?>

<input type="text" name="itemname4" id="itemname4" value="<?php echo $row['itemname'];?>" />

</body>
</html>
