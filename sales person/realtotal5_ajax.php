<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>realtotal5_ajax</title>
</head>

<body>
<?php
$itemid5=$_GET["itemid5"];
//$quantity1=$_GET["quantity1"];
//$itemid1="FB101";
//$quantity1=5;
//$itemid="FB101";
//echo $itemid;
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$sql = mysql_query("SELECT cost FROM purchase WHERE itemid='$itemid5'");
$row = mysql_fetch_array($sql);
?>

<input type="hidden" name="costprice5" id="costprice5" value="<?php echo $row['cost'];?>" />
</body>
</html>
