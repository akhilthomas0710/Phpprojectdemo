<?php
session_start();
if(isset($_SESSION['salesperson']))
{
	$salesperson = $_SESSION['salesperson'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['salesperson']))
{
	header("Location: ../login.php");
}
?>
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
<title>Edit Items</title>
<style>
.g{color:#FF0000; font-style:italic;}
</style>
<script type="text/javascript">
function calctotal()
{
	var quantity = document.getElementById("quantity").value;
	var price = document.getElementById("price").value;
	var discpercent = document.getElementById("discpercent").value;
	//alert(price);
	var total = quantity*price;
	document.getElementById("total").value=total;
	//alert(discpercent);
	var total = total-((quantity*price)*discpercent/100);
	//alert(total);
	document.getElementById("grandtotal").value=total;
}
function calcdisc()
{
	var discpercent = document.getElementById("discpercent").value;
	var quantity = document.getElementById("quantity").value;
	var price = document.getElementById("price").value;
	//alert(price);
	var total = quantity*price;
	var nettotal = total - ((total*discpercent)/100);
	document.getElementById("grandtotal").value=nettotal;
	
}
function alertmsg()
{
	var disc = document.getElementById("discpercent");
	alert("Price is Fixed... You Can't Edit It");
	disc.focus();
}
function goto()
{
	//alert("inside");
	window.location.href="viewsales.php";
}
</script>  
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
    <div class="fl_right" align="right"><font color="#009900"> Logged in as <?php echo strtoupper($salesperson);?></font>
	<font color="#FFFFFF">|</font><a href="salespersonlogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="salespersonhome.php">Home</a></li>
        <li><a href="addsales.php">Add Sales </a></li>
        <li  class="active"><a href="viewsales.php">View Sales </a></li>
		<li><a href="viewcustomer.php">View Customer Details </a></li>
        <li><a href="#">Settings</a>
          <ul>
            <li><a href="changeusernameform.php">Change Username</a></li>
            <li><a href="changepasswordform.php">Change Password</a></li>
          </ul>
        </li>
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
$billno=$_GET["q"];
$itemid=$_GET["id"];
$s=mysql_query("select * from sales where billno='$billno' AND itemid='$itemid'");
?>
<form action="updateitem.php" method="post">
<?php
$r=mysql_fetch_array($s);
?> 
<table align="center" border="1" width="328" style="width:65%">
<tr align="center" bgcolor="#990066"><td align="center" style="color:#FFFFFF" colspan="8"><h2>EDIT FORM</h2></td></tr>
<tr bgcolor="#562051">
	<td colspan="8" style="color:#FFFFFF">Bill No : <?php echo $r['billno'];?><br /><br />
	Date : <?php echo $r['date'];?></td>
	
</tr>
<tr align="center">
	<td>Item Id</td><td>Item Name</td><td>Category</td><td>Quantity</td><td>Price</td><td>Total</td><td>Discount %</td><td>Net Total</td>
</tr>
<tr align="center">
	<td><?php echo $r['itemid']?></td>
	<td><?php echo $r['itemname']?></td>
	<td><?php echo $r['category']?></td>
	<td><input type="text" name="quantity" id="quantity" value="<?php echo $r['quantity']?>" onkeyup="return calctotal();"/></td>
	<td><input type="text" name="price" id="price" value="<?php echo $r['price'];?>" onfocus="return alertmsg();"/></td>
	<td><input type="text" name="total" id="total"  /></td>
	<td><input type="text" name="discpercent" id="discpercent" value="<?php echo $r['discountpercent']?>" onkeyup="return calcdisc();"/></td>
	<td><input type="text" name="grandtotal" id="grandtotal" value="<?php echo $r['grandtotal']?>" /></td>
</tr>
</table>
<table align="center" style="width:65%" bgcolor="#562051">
<tr >
	<td align="center"><input type="submit" value="UPDATE" />
	<input type="button" value="CANCEL" onclick="return goto();" />
	<input type="hidden" name="billno" value="<?php echo $r['billno']?>" />
	<input type="hidden" name="itemid" value="<?php echo $r['itemid']?>" /></td>
</tr>
</table></form>
</div>
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
