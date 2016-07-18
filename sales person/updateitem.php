<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Sales</title>
 
</head>

<body>
<!--<form id="form1" name="form1" method="post" action="">-->
  <div align="center">
  <body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"><a href="salespersonlogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="salespersonhome.html">Home</a></li>
        <li><a href="addsales.php">Add Sales </a></li>
        <li  class="active"><a href="viewsales.php">View Sales </a></li>
		<li><a href="viewcustomer.php">View Customer Details </a></li>
        <!--<li><a href="categories.php"></a>-->
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
<p>&nbsp;</p>
<?php
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$billno=$_POST["billno"];
$itemid=$_POST["itemid"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$tot=$_POST["total"];
$discpercent = $_POST["discpercent"];
$discamt = ($quantity*$price)*$discpercent/100;
$total = $_POST["grandtotal"];
$s=mysql_query("select cost from purchase where itemid='$itemid'");
$r=mysql_fetch_array($s);
$cost=$r['cost'];
$tot1=$cost*$quantity;
$select_qty = mysql_query("SELECT quantity FROM purchase WHERE itemid='$itemid'");
$r = mysql_fetch_array($select_qty);
$qty = $r['quantity'];
$newqty = $qty-$quantity;
$sql = mysql_query("UPDATE sales SET quantity='$quantity',total='$tot',discountpercent='$discpercent',discountamt='$discamt',grandtotal='$total',costpricetotal='$tot1' WHERE billno='$billno' AND itemid='$itemid'");
$sq = mysql_query("UPDATE purchase SET quantity='$newqty' WHERE itemid='$itemid'");
if($sql && $sq)
{
?>
<script>
alert("Sales Details Updated");
window.location.href="viewsales.php";
</script>
<?php
}
else
{
?>
<script>
alert("Sales Details Not Updated");
window.location.href="viewsales.php";
</script>
<?php
}
?>
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
