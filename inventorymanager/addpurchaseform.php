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
<!--<script type="text/javascript" src="../jquery/jquery.min.js"></script>-->
<script type="text/javascript">
function display_category()
{
	//alert("Inside");
	var itemid = document.getElementById("itemid").value;
	//alert(itemid);
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
					document.getElementById("disp_category").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcategory_ajax.php?itemid="+itemid,true);
	xmlhttp.send();
}
function display_itemname()
{
	//alert("Inside");
	var itemid = document.getElementById("itemid").value;
	//alert(itemid);
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
					document.getElementById("disp_itemname").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemname_ajax.php?itemid="+itemid,true);
	xmlhttp.send();
	display_category();
}
</script>

<script type="text/javascript">

function initialize()
{
	//alert("inside initialize()");
	document.getElementById("s1").textContent="";
	document.getElementById("s2").textContent="";
	document.getElementById("s3").textContent="";
	document.getElementById("s4").textContent="";
	document.getElementById("s5").textContent="";
	document.getElementById("s6").textContent="";
	/*document.getElementById("s7").textContent="";
	document.getElementById("s8").textContent="";
	document.getElementById("s9").textContent="";
	document.getElementById("s10").textContent="";
	document.getElementById("s11").textContent="";
	document.getElementById("s12").textContent="";
	document.getElementById("s13").textContent="";	*/
}
function errormsg(msg)
{
	//alert("inside errormsg()");
	switch(msg)
	{
		case 1:document.getElementById("s1").textContent="Enter Bill No";
				break;
		case 2:document.getElementById("s2").textContent="Enter Supplier Name";
				break;
		case 3:document.getElementById("s3").textContent="Enter Address";
				break;
		case 4:document.getElementById("s4").textContent="Enter Contact No";
				break;
		case 5:document.getElementById("s5").textContent="Enter Atleast One Item";
				break;		
		case 6:document.getElementById("s6").textContent="Select Payment Mode";
				break;
		/*case 7:document.getElementById("s7").textContent="";
				break;				
		case 8:document.getElementById("s8").textContent="Enter Supplier Contact No";
				break;
		case 9:document.getElementById("s9").textContent="Enter Quantity";
				break;				
		case 10:document.getElementById("s10").textContent="Enter Cost per Item";
				break;
		case 11:document.getElementById("s11").textContent="Enter Selling Price";
				break;				
		case 12:document.getElementById("s12").textContent="Enter Total Amount";
				break;		
		case 13:document.getElementById("s13").textContent="Select Payment Mode";
				break;	*/	
	}
}
function validate()
{
	//alert("inside validate()");
	initialize();
	var billno = document.getElementById("billno");
	var supplier = document.getElementById("supplier");
	var address = document.getElementById("address");
	var contactno = document.getElementById("contactno");
	var itemid1 = document.getElementById("itemid1");
	var mode = document.getElementById("mode");
	/*var address = document.getElementById("address");
	var contact = document.getElementById("contactno");
	var quantity = document.getElementById("quantity");
	var cost = document.getElementById("cost");
	var sp = document.getElementById("sellingprice");
	var total =document.getElementById("totalamt");
	var mode =document.getElementById("mode");*/
	
	if(billno.value=="")
	{
		
		errormsg(1);
		billno.focus();
		return false;
	}
	else if(supplier.value=="")
	{
		
		errormsg(2);
		supplier.focus();
		return false;
	}
	else if(address.value=="")
	{
		
		errormsg(3);
		address.focus();
		return false;
	}
	else if(contactno.value=="")
	{
		
		errormsg(4);
		contactno.focus();
		return false;
	}
	else if(itemid1.value=="")
	{
		
		errormsg(5);
		//itemid1.focus();
		return false;
	}
	else if(mode.value=="Select")
	{
		
		errormsg(6);
		mode.focus();
		return false;
	}
/*	else if(address.value=="")
	{
		
		errormsg(7);
		address.focus();
		return false;
	}
	else if(contact.value=="")
	{
		
		errormsg(8);
		contact.focus();
		return false;
	}
	else if(quantity.value=="")
	{
		
		errormsg(9);
		quantity.focus();
		return false;
	}
	else if(cost.value=="")
	{
		
		errormsg(10);
		cost.focus();
		return false;
	}
	else if(sp.value=="")
	{
		
		errormsg(11);
		sp.focus();
		return false;
	}
	else if(total.value=="")
	{
		
		errormsg(12);
		total.focus();
		return false;
	}
	else if(mode.value=="Select")
	{
		
		errormsg(13);
		mode.focus();
		return false;
	}*/
	else
	{
		return true;
	}
}
function findtotal()
{
	//alert("Inside");
	//return true;
	var quantity = document.getElementById("quantity").value;
	var cost = document.getElementById("cost").value;
	var total = quantity*cost;
	document.getElementById("totalamt").value=total;
}
function showtable()
{
	//alert("inside");
	var show1 = document.getElementById("table1");
	show1.style.visibility='visible';
	var show2 = document.getElementById("table3");
	show2.style.visibility='visible';
	return true;
}
function showrow2()
{
	var row2 = document.getElementById("row2");
	var add1 = document.getElementById("add1");
	add1.style.visibility='hidden';
	row2.style.visibility='visible';
	return true;
}	
function showrow3()
{
	var row3 = document.getElementById("row3");
	var add2 = document.getElementById("add2");
	add2.style.visibility='hidden';
	row3.style.visibility='visible';
	return true;
}
function showrow4()
{
	var row4 = document.getElementById("row4");
	var add3 = document.getElementById("add3");
	add3.style.visibility='hidden';
	row4.style.visibility='visible';
	return true;
}
function showrow5()
{
	var row5 = document.getElementById("row5");
	var add4 = document.getElementById("add4");
	add4.style.visibility='hidden';
	row5.style.visibility='visible';
	return true;
}
function showrowexceed()
{
	alert("Entry Limit Exceeded");
	/*var show = document.getElementById("table3");
	show.style.visibility='visible';
	return true;*/
}
function findtotal1()
{
	var quantity1 = document.getElementById("quantity1").value;
	var cost1 = document.getElementById("cost1").value;
	var total1 = quantity1*cost1;
	document.getElementById("total1").value=total1;
}	
function findtotal2()
{
	var quantity2 = document.getElementById("quantity2").value;
	var cost2 = document.getElementById("cost2").value;
	var total2 = quantity2*cost2;
	document.getElementById("total2").value=total2;
}
function findtotal3()
{
	var quantity3 = document.getElementById("quantity3").value;
	var cost3 = document.getElementById("cost3").value;
	var total3 = quantity3*cost3;
	document.getElementById("total3").value=total3;
}
function findtotal4()
{
	var quantity4 = document.getElementById("quantity4").value;
	var cost4 = document.getElementById("cost4").value;
	var total4 = quantity4*cost4;
	document.getElementById("total4").value=total4;
}
function findtotal5()
{
	var quantity5 = document.getElementById("quantity5").value;
	var cost5 = document.getElementById("cost5").value;
	var total5 = quantity5*cost5;
	document.getElementById("total5").value=total5;
}
function grandtotal()
{
	//alert("Inside");
	var total1 = parseInt(document.getElementById("total1").value);
	var total2 = parseInt(document.getElementById("total2").value);
	var total3 = parseInt(document.getElementById("total3").value);
	var total4 = parseInt(document.getElementById("total4").value);
	var total5 = parseInt(document.getElementById("total5").value);
	var totalamt = total1+total2+total3+total4+total5;
	document.getElementById("totalamt").value=totalamt;
}
function goto()
{
 window.location.href="viewitemstopurchase.php";
}														
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Purchase Form</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="updatepurchaseitem.php" onsubmit="return validate();">
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
        <li><a href="purchaseform.php">Add Purchase </a></li>
        <li><a href="viewpurchaseitem.php">View Purchase </a></li>
		<!--<li><a href="addsupplier.php">Add Supplier </a></li>-->
		<li><a href="viewsupplier.php">View Supplier Details</a></li>
		<li class="active"><a href="viewitemstopurchase.php">Items To Be Purchased</a></li>
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
			
	<!--	<table width="795" border="0" align="center">
		<tr>
        <td height="41" colspan="6"><div align="center" class="style1"><h1>ADD PURCHASE</h1> </div></td>
        </tr>
      	<tr>
        	<td width="74">ItemID</td>
        	<td width="174"><label>
         	 <input name="itemid" type="text" id="itemid" />
        	</label><span class="c" id="s1"></span></td>
        	<td width="29">Item Name</td>
        	<td width="184"><label>
          	<input name="itemname" type="text" id="itemname"/>
        	</label><span class="c" id="s2"></span></td>
			<td width="29">Item Category</td>
        	<td width="184"><label>
          	<input name="itemcategory" type="text" id="itemcategory"/>
        	</label><span class="c" id="s3"></span></td>
	  	</tr>
      	<tr>
        	<td colspan="6">&nbsp;</td>
      	</tr>
	  	<tr>
        	<td width="55">Description</td>
       		<td width="239"><label>
          	<textarea name="description" id="description"></textarea>
        	</label><span class="c" id="s4"></span></td>
        	<td>Date</td>
        	<td><label>
          	<input name="date" type="text" id="date" value="<?php $a = date("y-m-d");echo $a;?>" />
        	</label></td>
        	<td>Bill No</td>
        	<td><label>
          	<input type="text" name="billno" id="billno" />
        	</label><span class="c" id="s5"></span></td>
	  	</tr>
	  	<tr>
        	<td colspan="6">&nbsp;</td>
      	</tr>
      	<tr>
	  	<tr>
        	<td>Supplier</td>
        	<td><label>
         	 <input name="supplier" type="text" id="supplier" />
        	</label><span class="c" id="s6"></span></td>
     		<td>Address</td>
        	<td><label>
    	  	<textarea name="address" id="address"></textarea>
        	</label><span class="c" id="s7"></span></td>
        	<td>Contact No</td>
        	<td><label>
          	<input name="contactno" type="text" id="contactno" />
        	</label><span class="c" id="s8"></span></td>
		</tr>
		<tr>
        	<td colspan="6">&nbsp;</td>
      	</tr>
		<tr>
        	<td>Quantity</td>
        	<td><label>
          	<input name="quantity" type="text" id="quantity" />
        	</label><span class="c" id="s9"></span></td>
        	<td>Cost</td>
        	<td><label>
          	<input name="cost" type="text" id="cost" onkeyup="return findtotal();"/>
        	</label><span class="c" id="s10"></span></td>
        	<td>Selling Price</td>
        	<td><label>
          	<input name="sellingprice" type="text" id="sellingprice" />
        	</label><span class="c" id="s11"></span></td>
		</tr>
		<tr>
        	<td colspan="6">&nbsp;</td>
      	</tr>
		<tr>
        	<td>Total Amount</td>
        	<td><label>
         	 <input type="text" name="totalamt" id="totalamt" />
        	</label><span class="c" id="s12"></span></td>
        	<td>Payment Mode</td>
			<td><label><select name="mode" id="mode">
				<option>Select</option>
				<option>Cash</option>
				<option>Cheque</option></select><span class="c" id="s13"></span></td>
			<td>&nbsp;</td>
			<td></td>
	 	</tr>
	 	<tr>
        	<td colspan="6"><div align="center">
          	<label> <br />
          	<br />
          	<input name="submit" type="submit" id="submit" value="ADD" />
          	</label>
          	<label>
        	<input type="submit" name="Submit" value="RESET" />
          	</label>
        	</div><br /></td>
      	</tr>
    </table>-->
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("inventory system");
	$billno = 3001;
	$itemid=$_GET["id"];
	$sql = mysql_query("SELECT billno FROM purchase ORDER BY id DESC LIMIT 1");
	$sq=mysql_query("select * from purchase where itemid='$itemid'");
	$r1=mysql_fetch_array($sq);
	while($r=mysql_fetch_array($sq))
	{
	 $itemids[] = $r['itemid'];
	} 
	while($row = mysql_fetch_array($sql))
	{
		$billno = $row['billno'];
		$billno = $billno+1;
	}	
?>
	<table align="center" border="0"  bgcolor="#562051">
	<tr bgcolor="#990066">
		<td colspan="6" style="color:#FFFFFF"><div align="center" class="style1"><h1>ADD PURCHASE</h1> </div></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr align="center">
		<td align="right">Date</td>
		<td align="left"><input type="text" name="date" id="date" value="<?php $a = date("y-m-d");echo $a;?>"/></td>
		<td align="right"> Bill No</td>
		<td align="left"><input type="text" name="billno" id="billno" value="<?php echo $billno;?>"/><span class="c" id="s1"></span></td>
		<td align="right">Supplier Name</td>
		<td align="left"><input type="text" name="supplier" id="supplier"  value="<?php echo $r1['supplier'];?>" />
		<span class="c" id="s2"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">Address</td>
		<td align="left"><textarea name="address" id="address" ><?php echo $r1['address'];?></textarea><span class="c" id="s3"></span></td>
		<td align="right">Contact No</td>
		<td align="left"><input type="text" name="contactno" id="contactno"  value="<?php echo $r1['contact'];?>"/>
		<span class="c" id="s4"></span></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	</table>
	<table width="104%" border="1" align="center" id="table1">
	<tr>
		<td>No</td><td>Item Id</td><td>Item Name</td><td>Category</td><td>Description</td><td>Quantity</td><td>Cost/Unit</td><td>Total</td>
		<td>Selling Price</td><td>Mode of Payment</td>
	</tr>
	<tr>
		<td>1</td>
		
		<td><input type="text" id="itemid" value="<?php echo $r1['itemid'];?>"  name="itemid"/></td>
		<td><div id="disp_itemname"><input type="text" name="itemname1" id="itemname1"  value="<?php echo $r1['itemname'];?>"/></div></td>
		<td><div id="disp_category"><input type="text" name="category1" id="category1"  value="<?php echo $r1['itemcategory'];?>"/></div></td>
		<td><input type="text" name="description1" id="description1" /></td>
		<td><input type="text" name="quantity1" id="quantity1" onkeyup="return findtotal1();"/></td>
		<td><input type="text" name="cost1" id="cost1" onkeyup="return findtotal1();"/></td>
		<td><input type="text" name="total1" id="total1" value="0"/></td>
		<td><input type="text" name="sellingprice1" id="sellingprice1"/></td>
		<td><select id="mode" name="mode">
								<option>Select</option>
								<option>Cash</option>
								<option>Cheque</option></select><span class="c" id="s6"></span></td>
	</tr>
	<!--<tr id="row2" style="visibility:hidden">
		<td>2</td>
		<td><input type="text" name="itemid2" id="itemid2" /></td>
		<td><input type="text" name="itemname2" id="itemname2" /></td>
		<td><input type="text" name="category2" id="category2" /></td>
		<td><input type="text" name="description2" id="description2" /></td>
		<td><input type="text" name="quantity2" id="quantity2" onkeyup="return findtotal2();"/></td>
		<td><input type="text" name="cost2" id="cost2" onkeyup="return findtotal2();"/></td>
		<td><input type="text" name="total2" id="total2" value="0"/></td>
		<td><input type="text" name="sellingprice2" id="sellingprice2" /></td>
		<td><img src="../images/add_new.png" id="add2" onclick="return showrow3();"/></td>
	</tr>
	<tr id="row3" style="visibility:hidden">
		<td>3</td>
		<td><input type="text" name="itemid3" id="itemid3" /></td>
		<td><input type="text" name="itemname3" id="itemname3" /></td>
		<td><input type="text" name="category3" id="category3" /></td>
		<td><input type="text" name="description3" id="description3" /></td>
		<td><input type="text" name="quantity3" id="quantity3" onkeyup="return findtotal3();"/></td>
		<td><input type="text" name="cost3" id="cost3" onkeyup="return findtotal3();"/></td>
		<td><input type="text" name="total3" id="total3" value="0"/></td>
		<td><input type="text" name="sellingprice3" id="sellingprice3" /></td>
		<td><img src="../images/add_new.png" id="add3" onclick="return showrow4();"/></td>
	</tr>
	<tr id="row4" style="visibility:hidden">
		<td>4</td>
		<td><input type="text" name="itemid4" id="itemid4" /></td>
		<td><input type="text" name="itemname4" id="itemname4" /></td>
		<td><input type="text" name="category4" id="category4" /></td>
		<td><input type="text" name="description4" id="description4" /></td>
		<td><input type="text" name="quantity4" id="quantity4" onkeyup="return findtotal4();"/></td>
		<td><input type="text" name="cost4" id="cost4" onkeyup="return findtotal4();"/></td>
		<td><input type="text" name="total4" id="total4" value="0"/></td>
		<td><input type="text" name="sellingprice4" id="sellingprice4" /></td>
		<td><img src="../images/add_new.png" id="add4" onclick="return showrow5();"/></td>
	</tr>
	<tr id="row5" style="visibility:hidden">
		<td>5</td>
		<td><input type="text" name="itemid5" id="itemid5" /></td>
		<td><input type="text" name="itemname5" id="itemname5" /></td>
		<td><input type="text" name="category5" id="category5" /></td>
		<td><input type="text" name="description5" id="description5" /></td>
		<td><input type="text" name="quantity5" id="quantity5" onkeyup="return findtotal5();"/></td>
		<td><input type="text" name="cost5" id="cost5" onkeyup="return findtotal5();"/></td>
		<td><input type="text" name="total5" id="total5" value="0"/></td>
		<td><input type="text" name="sellingprice5" id="sellingprice5" /></td>
		<td><img src="../images/add_new.png" id="add5" onclick="return showrowexceed();"/></td>
	</tr>-->
	</table> 
	
	<table align="center">
	<tr align="center" bgcolor="#562051">
	<td><input type="submit" value="ADD" />
	<input type="button" value="CANCEL" onclick="return goto();"/></td>
	</tr>
	</table> 
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
<div class="wrapper col3"></div>
</form>
</body>
</html>
