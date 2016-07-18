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
<title>Add Purchase Item</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="">
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
        <li><a href="salesmanagerhome.html">Inventory Manager Home</a></li>
        <li><a href="items.php">Add Purchase</a></li>
        <li><a href="viewitem.php">View Purchases</a></li>
		<!--<li><a href="addsupplier.php">Add Item Category</a></li>-->
		<li><a href="viewsupplier.php">View Supplier Details</a></li>
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
$conn=mysqli_connect("localhost","root","","inventory system");
//$con = mysql_select_db("inventory system");
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

$itemid1 = $_POST["itemid1"];
$itemname1 = $_POST["itemname1"];
$category1 = $_POST["category1"];
$description1 = $_POST["description1"];
$quantity1 = $_POST["quantity1"];
$cost1 = $_POST["cost1"];
$total1 = $_POST["total1"];
$sellingprice1 = $_POST["sellingprice1"];

$itemid2 = $_POST["itemid2"];
$itemname2 = $_POST["itemname2"];
$category2 = $_POST["category2"];
$description2 = $_POST["description2"];
$quantity2 = $_POST["quantity2"];
$cost2 = $_POST["cost2"];
$total2 = $_POST["total2"];
$sellingprice2 = $_POST["sellingprice2"];

$itemid3 = $_POST["itemid3"];
$itemname3 = $_POST["itemname3"];
$category3 = $_POST["category3"];
$description3 = $_POST["description3"];
$quantity3 = $_POST["quantity3"];
$cost3 = $_POST["cost3"];
$total3 = $_POST["total3"];
$sellingprice3 = $_POST["sellingprice3"];

$itemid4 = $_POST["itemid4"];
$itemname4 = $_POST["itemname4"];
$category4 = $_POST["category4"];
$description4 = $_POST["description4"];
$quantity4 = $_POST["quantity4"];
$cost4 = $_POST["cost4"];
$total4 = $_POST["total4"];
$sellingprice4 = $_POST["sellingprice4"];

$itemid5 = $_POST["itemid5"];
$itemname5 = $_POST["itemname5"];
$category5 = $_POST["category5"];
$description5 = $_POST["description5"];
$quantity5 = $_POST["quantity5"];
$cost5 = $_POST["cost5"];
$total5 = $_POST["total5"];
$sellingprice5 = $_POST["sellingprice5"];

if($itemid1!="")
{	
$sql1 ="INSERT INTO purchase VALUES('','$itemid1','$itemname1','$category1','$description1','$date','$billno','$supplier','$address','$contact','$quantity1','$cost1','$sellingprice1','$total1','$mode')";
mysqli_query($conn,$sql1);

//$sq1 = "INSERT INTO inventory VALUES('','$itemid1','$itemname1','$category1','$description1','$date','$billno','$supplier','$address','$contact','$quantity1','$cost1','$sellingprice1','$total1','$mode')");
}
/*if($itemid2!="")
{	
$sql2 = mysql_query("INSERT INTO purchase VALUES('','$itemid2','$itemname2','$category2','$description2','$date','$billno','$supplier','$address','$contact','$quantity2','$cost2','$sellingprice2','$total2','$mode')");
$sq2 = mysql_query("INSERT INTO inventory VALUES('','$itemid2','$itemname2','$category2','$description2','$date','$billno','$supplier','$address','$contact','$quantity2','$cost2','$sellingprice2','$total2','$mode')");
}
if($itemid3!="")
{	
$sql3 = mysql_query("INSERT INTO purchase VALUES('','$itemid3','$itemname3','$category3','$description3','$date','$billno','$supplier','$address','$contact','$quantity3','$cost3','$sellingprice3','$total3','$mode')");
$sq3 = mysql_query("INSERT INTO inventory VALUES('','$itemid3','$itemname3','$category3','$description3','$date','$billno','$supplier','$address','$contact','$quantity3','$cost3','$sellingprice3','$total3','$mode')");
}
if($itemid4!="")
{	
$sql4 = mysql_query("INSERT INTO purchase VALUES('','$itemid4','$itemname4','$category4','$description4','$date','$billno','$supplier','$address','$contact','$quantity4','$cost4','$sellingprice4','$total4','$mode')");
$sq4 = mysql_query("INSERT INTO inventory VALUES('','$itemid4','$itemname4','$category4','$description4','$date','$billno','$supplier','$address','$contact','$quantity4','$cost4','$sellingprice4','$total4','$mode')");
}
if($itemid5!="")
{	
$sql5 = mysql_query("INSERT INTO purchase VALUES('','$itemid5','$itemname5','$category5','$description5','$date','$billno','$supplier','$address','$contact','$quantity5','$cost5','$sellingprice5','$total5','$mode')");
$sq5 = mysql_query("INSERT INTO inventory VALUES('','$itemid5','$itemname5','$category5','$description5','$date','$billno','$supplier','$address','$contact','$quantity5','$cost5','$sellingprice5','$total5','$mode')");
}*/
if($sql1 || $sql2 || $sql3 || $sql4 || $sql5)
{
?>
<script type="text/javascript">
alert("Purchase Item Added To Database");
window.location.href="purchaseform.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Purchase Item Not Added To Database");
window.location.href="purchaseform.php";
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
