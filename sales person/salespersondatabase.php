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
<title>Add Sales</title>


<style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif}
.g{color:#FF0000; font-style:italic};
-->
</style> 
</head>



  <div align="center">
  <body id="top">
<form id="form1" name="form1" method="post" >
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
        <li  class="active"><a href="addsales.php">Add Sales </a></li>
        <li><a href="viewsales.php">View Sales </a></li>
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
<?php
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$date=$_POST["date"];
$billno=$_POST["billno"];
$customer=$_POST["customer"];
$address=$_POST["address"];
$contact=$_POST["contactno"];

$itemid1=$_POST["itemid1"];
$itemname1=$_POST["itemname1"];
$category1=$_POST["category1"];
$quantity1=$_POST["quantity1"];
$cost1=$_POST["cost1"];
$tot1=$quantity1*$cost1; 
$discountpercent1=$_POST["discountpercent1"];
$discountamnt1=$_POST["discountamt1"];
$total1=$_POST["total1"];
$costprice1=$_POST["costprice1"];
$costpricetotal1=$costprice1*$quantity1;
$mode=$_POST["mode"];

$itemid2=$_POST["itemid2"];
$itemname2=$_POST["itemname2"];
$category2=$_POST["category2"];
$quantity2=$_POST["quantity2"];
$cost2=$_POST["cost2"];
$tot2=$quantity2*$cost2;
$discountpercent2=$_POST["discountpercent2"];
$discountamnt2=$_POST["discountamt2"];
$total2=$_POST["total2"];
$costprice2=$_POST["costprice2"];
$costpricetotal2=$costprice2*$quantity2;
$mode=$_POST["mode"];

$itemid3=$_POST["itemid3"];
$itemname3=$_POST["itemname3"];
$category3=$_POST["category3"];
$quantity3=$_POST["quantity3"];
$cost3=$_POST["cost3"];
$tot3=$quantity3*$cost3;
$discountpercent3=$_POST["discountpercent3"];
$discountamnt3=$_POST["discountamt3"];
$total3=$_POST["total3"];
$costprice3=$_POST["costprice3"];
$costpricetotal3=$costprice3*$quantity3;
$mode=$_POST["mode"];

$itemid4=$_POST["itemid4"];
$itemname4=$_POST["itemname4"];
$category4=$_POST["category4"];
$quantity4=$_POST["quantity4"];
$cost4=$_POST["cost4"];
$tot4=$quantity4*$cost4;
$discountpercent4=$_POST["discountpercent4"];
$discountamnt4=$_POST["discountamt4"];
$total4=$_POST["total4"];
$costprice4=$_POST["costprice4"];
$costpricetotal4=$costprice4*$quantity4;
$mode=$_POST["mode"];

$itemid5=$_POST["itemid5"];
$itemname5=$_POST["itemname5"];
$category5=$_POST["category5"];
$quantity5=$_POST["quantity5"];
$cost5=$_POST["cost5"];
$tot5=$quantity5*$cost5;
$discountpercent5=$_POST["discountpercent5"];
$discountamnt5=$_POST["discountamt5"];
$total5=$_POST["total5"];
$costprice5=$_POST["costprice5"];
$costpricetotal5=$costprice5*$quantity5;
$mode=$_POST["mode"];

if($itemid1!="Select Item Id")
{
$sql1=mysql_query("INSERT INTO sales VALUES('','$billno','$date','$customer','$address','$contact','$itemid1','$itemname1','$category1','$quantity1','$cost1','$tot1','$discountpercent1','$discountamnt1','$total1','$costpricetotal1','$mode')");

$soldqty1=$quantity1;
$purchaseqty1=mysql_query("SELECT quantity FROM purchase WHERE itemid='$itemid1'");
$r1 = mysql_fetch_array($purchaseqty1);
$pqty1 = $r1['quantity'];
$updatedqty1 = $pqty1-$soldqty1;
$s1 = mysql_query("UPDATE purchase SET quantity='$updatedqty1' WHERE itemid='$itemid1'");
}

if($itemid2!="Select Item Id")
{
$sql2=mysql_query("INSERT INTO sales VALUES('','$billno','$date','$customer','$address','$contact','$itemid2','$itemname2','$category2','$quantity2','$cost2','$tot2','$discountpercent2','$discountamnt2','$total2','$costpricetotal2','$mode')");

$soldqty2=$quantity2;
$purchaseqty2=mysql_query("SELECT quantity FROM purchase WHERE itemid='$itemid2'");
$r2 = mysql_fetch_array($purchaseqty2);
$pqty2 = $r2['quantity'];
$updatedqty2 = $pqty2-$soldqty2;
$s2 = mysql_query("UPDATE purchase SET quantity='$updatedqty2' WHERE itemid='$itemid2'");
}

if($itemid3!="Select Item Id")
{
$sql3=mysql_query("INSERT INTO sales VALUES('','$billno','$date','$customer','$address','$contact','$itemid3','$itemname3','$category3','$quantity3','$cost3','$tot3','$discountpercent3','$discountamnt3','$total3','$costpricetotal3','$mode')");

$soldqty3=$quantity3;
$purchaseqty3=mysql_query("SELECT quantity FROM purchase WHERE itemid='$itemid3'");
$r3 = mysql_fetch_array($purchaseqty3);
$pqty3 = $r3['quantity'];
$updatedqty3 = $pqty3-$soldqty3;
$s3 = mysql_query("UPDATE purchase SET quantity='$updatedqty3' WHERE itemid='$itemid3'");
}

if($itemid4!="Select Item Id")
{
$sql4=mysql_query("INSERT INTO sales VALUES('','$billno','$date','$customer','$address','$contact','$itemid4','$itemname4','$category4','$quantity4','$cost4','$tot4','$discountpercent4','$discountamnt4','$total4','$costpricetotal4','$mode')");

$soldqty4=$quantity4;
$purchaseqty4=mysql_query("SELECT quantity FROM purchase WHERE itemid='$itemid4'");
$r4 = mysql_fetch_array($purchaseqty4);
$pqty4 = $r4['quantity'];
$updatedqty4 = $pqty4-$soldqty4;
$s4 = mysql_query("UPDATE purchase SET quantity='$updatedqty4' WHERE itemid='$itemid4'");
}

if($itemid5!="Select Item Id")
{
$sql5=mysql_query("INSERT INTO sales VALUES('','$billno','$date','$customer','$address','$contact','$itemid5','$itemname5','$category5','$quantity5','$cost5','$tot5','$discountpercent5','$discountamnt5','$total5','$costpricetotal5','$mode')");

$soldqty5=$quantity5;
$purchaseqty5=mysql_query("SELECT quantity FROM purchase WHERE itemid='$itemid5'");
$r5 = mysql_fetch_array($purchaseqty5);
$pqty5 = $r5['quantity'];
$updatedqty5 = $pqty5-$soldqty5;
$s5 = mysql_query("UPDATE purchase SET quantity='$updatedqty5' WHERE itemid='$itemid5'");
}

if($sql1 || $sql2 || $sql3 || $sql4 || $sql5)
{
?>
<script type="text/javascript">
alert("Sales Detail Added To Database");
window.location.href="addsales.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Sales Detail Not Added To Database");
window.location.href="addsales.php";
</script>
<?php
}
?>
    <p align="center">&nbsp;</p>
  </div>
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
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_right"><br class="clear" />
  </p>
  </div>
</div>
</form>
</body>
</html>
