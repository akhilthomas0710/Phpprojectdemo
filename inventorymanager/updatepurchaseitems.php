<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<style type="text/css">
.c{color:#FF0000;}
</style>
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="additem.php" onsubmit="return validate_items();">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"><a href="inventorylogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="inventorymanagerhome.html">Inventory Manager Home</a></li>
        <li><a href="purchaseform.php">Add Purchase</a></li>
        <li class="active"><a href="viewpurchaseitem.php">View Purchase</a></li>
		<!--<li><a href="categories.php">Add Supplier</a></li>-->
		<li><a href="viewsupplier.php">View Supplier Details</a></li>
		<li><a href="viewitemstopurchase.php">Items To Be Purchased</a></li>
        <!--<li><a href="#">DropDown</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="last"><a href="#">A Long Link Text</a></li>-->
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
<div class="wrapper col4" align="center">
	
<?php
$id = $_POST["id"];
mysql_connect("localhost","root","");
$con = mysql_select_db("inventory system");
/*if($con)
	echo "Connected";
else
	echo "not connected";*/
$itemid = $_POST["itemid"];
$itemname = $_POST["itemname"];
$itemcategory = $_POST["itemcategory"];
$description = $_POST["description"];
$billno = $_POST["billno"];
$quantity = $_POST["quantity"];
$cost = $_POST["cost"];
$sellingprice = $_POST["sellingprice"];
$totalamount = $_POST["totalamt"];
$mode = $_POST["mode"];

$sql = mysql_query("UPDATE purchase SET itemid='$itemid',itemname='$itemname',itemcategory='$itemcategory',description='$description',billno='$billno',quantity='$quantity',cost='$cost',sellingprice='$sellingprice',totalamount='$totalamount',mode='$mode' WHERE id='$id'");
$sq2 = mysql_query("UPDATE inventory SET itemid='$itemid',itemname='$itemname',itemcategory='$itemcategory',description='$description',billno='$billno',quantity='$quantity',cost='$cost',sellingprice='$sellingprice',totalamount='$totalamount',mode='$mode' WHERE id='$id'");
if($sql && $sq2)
{
?>
<script type="text/javascript">
alert("Purchased Item Updated");
window.location.href="viewpurchaseitem.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Purchased Item Not Updated");
window.location.href="viewpurchaseitem.php";
</script>
<?php
}
?>
</div>
  <p align="center">&nbsp;</p>
  

<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="../style-demo.html">  </a></li>
        <li><a href="../full-width.html"></a></li>
        <li><a href="#"></a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="last"><a href="#"></a></li>
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
