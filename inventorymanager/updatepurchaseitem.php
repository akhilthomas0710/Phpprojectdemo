<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
$con = mysql_select_db("inventory system");
/*if($con)
	echo "Connected";
else
	echo "not connected";*/
$date = $_POST["date"];
$billno = $_POST["billno"];
$supplier = $_POST["supplier"];
$address = $_POST["address"];
$contact = $_POST["contactno"];
$mode = $_POST["mode"];

$itemid1 = $_POST["itemid"];
$itemname1 = $_POST["itemname1"];
$category1 = $_POST["category1"];
$description1 = $_POST["description1"];
$quantity1 = $_POST["quantity1"];
$cost1 = $_POST["cost1"];
$total1 = $_POST["total1"];
$sellingprice1 = $_POST["sellingprice1"];
$qu=mysql_query("select quantity from purchase where itemid='$itemid1'");
$qu1=mysql_fetch_array($qu);
$quantity2=$quantity1+$qu1[0];
$sq=mysql_query("update purchase set
itemid='$itemid1',itemname='$itemname1',itemcategory='$category1',description='$description1',date='$date',billno='$billno',supplier='$supplier',address='$address',contact='$contact',quantity='$quantity2',sellingprice='$sellingprice1',cost='$cost1',totalamount='$total1',mode='$mode' where itemid='$itemid1'");
mysql_query("insert into inventory values('','$itemid1','$itemname1','$category1','$description1','$date','$billno','$supplier','$address','$contact','$quantity2','$cost1','$sellingprice1','$total1','$mode')");
if($sq)
{
?>
<script type="text/javascript">
//alert("Items Updated");
window.location.href="viewitemstopurchase.php";
</script>
<?php
mysql_query("delete from items_to_purchase where itemid='$itemid1'");
}
else
{
?>
<script type="text/javascript">
//alert("Items Not  Updated");
window.location.href="addpurchaseform.php";
</script>
<?php
}
?>
</body>
</html>
