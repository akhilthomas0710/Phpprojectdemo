<?php 
session_start();
if(isset($_SESSION['inventorymanager']))
{
	$inventorymanager = $_SESSION['inventorymanager'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['inventorymanager']))
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
<style type="text/css">
.c{color:#FF0000;}
</style>
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function msg()
{
 var bill=document.getElementById("quantity");
 alert("Billno cannot be changed");
 bill.focus();
}
function changemode()
{
	//alert("inside");
	var mode = document.getElementById("mode1").value;
	document.getElementById("mode").value=mode;
}
function goto()
{
	window.location.href="viewpurchaseitem.php";
}
</script>
<title>Edit Purchased Item</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="updatesupplier.php" onsubmit="return validate_items();">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    
<div class="fl_right" align="right"></font><font color="#009900"> Logged in as <?php echo strtoupper($inventorymanager);?></font>
	<font color="#FFFFFF">|<a href="inventorylogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="inventorymanagerhome.php">Inventory Manager Home</a></li>
        <li ><a href="purchaseform.php">Add Purchase </a></li>
        <li class="active"><a href="viewpurchaseitem.php">View Purchase </a></li>
		<!--<li><a href="addsupplier.php">Add Supplier </a></li>-->
		<li><a href="viewsupplier.php">View Supplier Details</a></li>
		<li><a href="viewitemstopurchase.php">Items To Be Purchased</a></li>
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
<div class="wrapper col4" align="center">
	
    	<!-- <table width="413" border="0">
		<tr>
        	<th colspan="2"><div align="center">
				<font color="#FFFF00" size="+2">Enter Purchase Details</font></div></th>
        </tr>
        <tr>
			<td width="594" align="right">Item Id</td>
        	<td><label><input name="itemid" type="text" id="itemid" /></label>
			<span class="c" id="s1"></span></td></td>
        </tr>
		<tr>
			<td width="594" align="right">Item Name</td>
        	<td><label><input name="itemname" type="text" id="itemname" /></label>
			<span class="c" id="s2"></span></td></td>
        </tr>
		<tr>
			<td width="594" align="right">Item Description</td>
        	<td><label><input name="description" type="text" id="description" /></label>
			<span class="c" id="s3"></span></td></td>
        </tr>
        <tr>
			<td width="594" align="right">Date</td>
        					<td><input type="text" name="date" id="date" 
							value="<?php $a = date("y-m-d");echo $a;?>"/>
							<span class="c" id="s4"></span></td>
        </tr>
        <tr>
            <td width="594" align="right">Bill No</td>
     		<td><label><input name="billno" type="text" id="billno" /></label>
			<span class="c" id="s5"></span></td>
        </tr>
        <tr>
            <td width="594" align="right">Supplier</td>
			<td><label><input name="supplier" type="text" id="supplier" /></label>
			<span class="c" id="s6"></span></td>
        </tr>
        <tr>
            <td align="right">Address</td>
            <td><label><input name="address" type="text" id="address" /></label>
			<span class="c" id="s7"></span></td></tr>
        <tr>
		<tr>
            <td align="right">Contact No</td>
            <td><label><input name="contactno" type="text" id="contactno" /></label>
			<span class="c" id="s8"></span></td></tr>
        <tr>
		<tr>
            <td align="right">Quantity</td>
            <td><label><input name="quantity" type="text" id="quantity" /></label>
			<span class="c" id="s9"></span></td></tr>
        <tr>
		<tr>
            <td align="right">Cost</td>
            <td><label><input name="cost" type="text" id="cost" /></label>
			<span class="c" id="s10"></span></td></tr>
        <tr>
		<tr>
            <td align="right">Selling Price</td>
            <td><label><input name="sellingprice" type="text" id="sellingprice" /></label>
			<span class="c" id="s11"></span></td></tr>
        <tr>
		<tr>
            <td align="right">Total Amount</td>
            <td><label><input name="totalamt" type="text" id="totalamt" /></label>
			<span class="c" id="s12"></span></td></tr>
        <tr>
		<tr>
            <td align="right">Payment Mode</td>
            <td><label><select name="mode" id="mode">
				<option>Select</option>
				<option>Cash</option>
				<option>Cheque</option></select> </label>
			<span class="c" id="s13"></span></td></tr>
        <tr>



            <td height="47" colspan="2"><div align="center">
				<label><input type="submit" name="Submit" value="Submit" /></label>
                <label><input type="button" name="cancel" value="Cancel" /></label></td>
        </tr>
		</div>
		</table>-->
<?php
mysql_connect("localhost","root","");
mysql_select_db("inventory system");

$id=$_GET["billno"];
$sql=mysql_query("SELECT * FROM inventory WHERE billno='$id'");
$row=mysql_fetch_array($sql); 
?>
		<table width="795" border="0" align="center" bgcolor="#562051" style="width:50%">
		<tr bgcolor="#990066">
        	<td height="41" colspan="2" style="color:#FFFFFF"><div align="center" class="style1"><h1>EDIT SUPPLIER</h1> </div></td>
      	</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
      	<tr align="center">
        	<td width="123" align="right">Billno</td>
        	<td width="137" align="left"><label>
          	<input name="billno" type="text" id="billno" value="<?php echo $row['billno']?>"/>
       	  </label></td></tr>
        <tr align="center">	<td align="right">Date</td>
        	<td align="left"><label>
          	<input name="date" type="text" id="date" value="<?php echo $row['date'];?>" />
        	</label></td></tr>
        	
      	<tr align="center">
        	<td align="right">Supplier</td>
        	<td align="left"><label>
          	<input name="supplier" type="text" id="supplier" value="<?php echo $row['supplier']?>"/>
       	 	</label></td></tr>
      		<tr align="center"><td align="right">Address</td>
        	<td align="left"><label>
    	  	<textarea name="address" id="address"><?php echo $row['address']?></textarea>
        	</label></td></tr>
        	<tr align="center"><td align="right">Contact No</td>
        	<td align="left"><label>
          	<input name="contactno" type="text" id="contactno" value="<?php echo $row['contact']?>"/>
        	</label></td>
		</tr>
      	<!--<tr>
        	<td>Quantity</td>
        	<td><label>
          	<input name="quantity" type="text" id="quantity" value="<?php echo $row['quantity']?>"/>
        	</label></td>
     		<td>Cost</td>
        	<td><label>
          	<input name="cost" type="text" id="cost" value="<?php echo $row['cost']?>"/>
        	</label></td>
        	<td>Selling Price</td>
        	<td><label>
          	<input name="sellingprice" type="text" id="sellingprice" value="<?php echo $row['sellingprice']?>"/>
        	</label></td>
		</tr>
      	<tr>
        	<td colspan="6">&nbsp;</td>
      	</tr>
     	<tr>
        	<td>Total Amount</td>
        	<td><label>
          	<input type="text" name="totalamt" id="totalamt" value="<?php echo $row['totalamount']?>"/>
        	</label></td>
        	<td>Payment Mode</td>
       		<!--<td><label>
          	<input name="txtdesc" type="text" id="txtdesc" />
        	</label></td>
			<td><input type="text" name="mode" id="mode" value="<?php echo $row['mode'];?>" />
				<select name="mode1" id="mode1" onchange="return changemode();">
					<option>Select</option>
					<option>Cash</option>
					<option>Cheque</option></select></td>
			<td></td>
			<td></td>
	 	</tr>-->
		</table>
		<table align="center" border="0" bgcolor="#562051" style="width:50%">
	 	<tr>
        	<td colspan="2"><div align="center">
          	<label>
		  	<input type="hidden" value="<?php echo $row['id'];?>" name="id"/>
          	<input name="submit" type="submit" id="submit" value="UPDATE" />
          	</label>
          	<label>
        	<input type="button" name="reset" value="CANCEL" onclick="return goto();"/>
          	</label>
        	</div> </td>
      </tr>
	  </table>
	 <!-- <tr>
        <td colspan="6"><div align="center">
          <label><br />
          <br />
          <br />
          <input name="submit" type="submit" id="submit" value="ADD" />
          </label>
        </div>
        <div align="center">
          <label>
          <input type="submit" name="Submit" value="RESET" />
          </label>
        </div></td>
      </tr>-->
    </table>
          </div>
		  
  <p align="center">&nbsp;</p>
  

<!-- ####################################################################################################### -->
<br/>
<br/>
<br/>
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
