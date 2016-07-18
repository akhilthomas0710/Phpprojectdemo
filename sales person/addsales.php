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
<style type="text/css">
.c{color:#FF0000;}
</style>
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>
<!--<script type="text/javascript" src="../jquery/jquery.min.js"></script>-->
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
/*	document.getElementById("s7").textContent="";
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
		case 1:document.getElementById("s1").textContent="Enter Customer Name";
				break;
		case 2:document.getElementById("s2").textContent="Enter Address";
				break;
		case 3:document.getElementById("s3").textContent="Enter Contact No";
				break;
		case 4:document.getElementById("s4").textContent="Enter Atleast One Item Detail";
				break;
		case 5:document.getElementById("s5").textContent="Select Payment Mode";
				break;		
		case 6:document.getElementById("s6").textContent="Invalid Contact No";
				break;
/*		case 7:document.getElementById("s7").textContent="";
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
	var customer = document.getElementById("customer");
	var address = document.getElementById("address");
	var contactno = document.getElementById("contactno");
	var numformat = /^[0-9]{10}$/
	var itemid1 = document.getElementById("itemid1");
	var mode = document.getElementById("mode");
	/*var address = document.getElementById("address");
	var contact = document.getElementById("contactno");
	var quantity = document.getElementById("quantity");
	var cost = document.getElementById("cost");
	var sp = document.getElementById("sellingprice");
	var total =document.getElementById("totalamt");
	var mode =document.getElementById("mode");*/
	
	if(customer.value=="")
	{
		
		errormsg(1);
		customer.focus();
		return false;
	}
	else if(address.value=="")
	{
		
		errormsg(2);
		address.focus();
		return false;
	}
	else if(contactno.value=="")
	{
		
		errormsg(3);
		contactno.focus();
		return false;
	}
	else if(!numformat.exec(contactno.value))
	{
		
		errormsg(6);
		contactno.focus();
		return false;
	}
	else if(itemid1.value=="Select Item Id")
	{
		
		errormsg(4);
		//itemid1.focus();
		return false;
	}
	else if(mode.value=="Select")
	{
		
		errormsg(5);
		mode.focus();
		return false;
	}
/*	else if(mode.value=="Select")
	{
		
		errormsg(6);
		mode.focus();
		return false;
	}
	else if(address.value=="")
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
function realtotal1(quantity1)
{
	//alert("Inside");
	var itemid1 = document.getElementById("itemid1").value;
	//alert(itemid1);
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
					document.getElementById("hiddentotal1").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","realtotal1_ajax.php?itemid1="+itemid1,true);
	xmlhttp.send();
}
function realtotal2(quantity2)
{
	//alert("Inside");
	var itemid2 = document.getElementById("itemid2").value;
	//alert(itemid2);
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
					document.getElementById("hiddentotal2").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","realtotal2_ajax.php?itemid2="+itemid2,true);
	xmlhttp.send();
}
function realtotal3(quantity3)
{
	//alert("Inside");
	var itemid3 = document.getElementById("itemid3").value;
	//alert(itemid3);
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
					document.getElementById("hiddentotal3").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","realtotal3_ajax.php?itemid3="+itemid3,true);
	xmlhttp.send();
}
function realtotal4(quantity4)
{
	//alert("Inside");
	var itemid4 = document.getElementById("itemid4").value;
	//alert(itemid4);
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
					document.getElementById("hiddentotal4").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","realtotal4_ajax.php?itemid4="+itemid4,true);
	xmlhttp.send();
}
function realtotal5(quantity5)
{
	//alert("Inside");
	var itemid5 = document.getElementById("itemid5").value;
	//alert(itemid5);
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
					document.getElementById("hiddentotal5").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","realtotal5_ajax.php?itemid5="+itemid5,true);
	xmlhttp.send();
}
function findtotal1()
{
	var quantity1 = document.getElementById("quantity1").value;
	var cost1 = document.getElementById("cost1").value;
	var total1 = quantity1*cost1;
	document.getElementById("total1").value=total1;
	realtotal1(quantity1);
}	
function findtotal2()
{
	var quantity2 = document.getElementById("quantity2").value;
	var cost2 = document.getElementById("cost2").value;
	var total2 = quantity2*cost2;
	document.getElementById("total2").value=total2;
	realtotal2(quantity2);
}
function findtotal3()
{
	var quantity3 = document.getElementById("quantity3").value;
	var cost3 = document.getElementById("cost3").value;
	var total3 = quantity3*cost3;
	document.getElementById("total3").value=total3;
	realtotal3(quantity3);
}
function findtotal4()
{
	var quantity4 = document.getElementById("quantity4").value;
	var cost4 = document.getElementById("cost4").value;
	var total4 = quantity4*cost4;
	document.getElementById("total4").value=total4;
	realtotal4(quantity4);
}
function findtotal5()
{
	var quantity5 = document.getElementById("quantity5").value;
	var cost5 = document.getElementById("cost5").value;
	var total5 = quantity5*cost5;
	document.getElementById("total5").value=total5;
	realtotal5(quantity5);
}
function calcdiscount1()
{
	var quantity = document.getElementById("quantity1").value;
	var cost = document.getElementById("cost1").value;
	var total = quantity*cost;
	var discpercent = document.getElementById("discountpercent1").value;
	var discamt = total*(discpercent/100);
	var gtotal = total-discamt;
	document.getElementById("discountamt1").value=discamt;
	document.getElementById("total1").value=gtotal;

}
function calcdiscount2()
{
	var quantity = document.getElementById("quantity2").value;
	var cost = document.getElementById("cost2").value;
	var total = quantity*cost;
	var discpercent = document.getElementById("discountpercent2").value;
	var discamt = total*(discpercent/100);
	var gtotal = total-discamt;
	document.getElementById("discountamt2").value=discamt;
	document.getElementById("total2").value=gtotal;

}
function calcdiscount3()
{
	var quantity = document.getElementById("quantity3").value;
	var cost = document.getElementById("cost3").value;
	var total = quantity*cost;
	var discpercent = document.getElementById("discountpercent3").value;
	var discamt = total*(discpercent/100);
	var gtotal = total-discamt;
	document.getElementById("discountamt3").value=discamt;
	document.getElementById("total3").value=gtotal;

}
function calcdiscount4()
{
	var quantity = document.getElementById("quantity4").value;
	var cost = document.getElementById("cost4").value;
	var total = quantity*cost;
	var discpercent = document.getElementById("discountpercent4").value;
	var discamt = total*(discpercent/100);
	var gtotal = total-discamt;
	document.getElementById("discountamt4").value=discamt;
	document.getElementById("total4").value=gtotal;

}
function calcdiscount5()
{
	var quantity = document.getElementById("quantity5").value;
	var cost = document.getElementById("cost5").value;
	var total = quantity*cost;
	var discpercent = document.getElementById("discountpercent5").value;
	var discamt = total*(discpercent/100);
	var gtotal = total-discamt;
	document.getElementById("discountamt5").value=discamt;
	document.getElementById("total5").value=gtotal;

}
function grandtotal()
{
	//alert("Inside");
	var total1 = parseFloat(document.getElementById("total1").value);
	var total2 = parseFloat(document.getElementById("total2").value);
	var total3 = parseFloat(document.getElementById("total3").value);
	var total4 = parseFloat(document.getElementById("total4").value);
	var total5 = parseFloat(document.getElementById("total5").value);
	var totalamt = total1+total2+total3+total4+total5;
	document.getElementById("totalamt").value=totalamt;
}
//##################################################AJAX1 for item table row 1######################################################################//

function display_costperunit1()
{
	//alert("Inside");
	var itemid1 = document.getElementById("itemid1").value;
	//alert(itemid1);
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
					document.getElementById("disp_cost1").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcostperunit1_ajax.php?itemid1="+itemid1,true);
	xmlhttp.send();
}
function display_category1()
{
	//alert("Inside");
	var itemid1 = document.getElementById("itemid1").value;
	//alert(itemid1);
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
					document.getElementById("disp_category1").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcategory1_ajax.php?itemid1="+itemid1,true);
	xmlhttp.send();
	display_costperunit1();
}
function display_itemname1()
{
	//alert("Inside");
	var itemid1 = document.getElementById("itemid1").value;
	//alert(itemid1);
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
					document.getElementById("disp_itemname1").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemname1_ajax.php?itemid1="+itemid1,true);
	xmlhttp.send();
	display_category1();
}
//##################################################AJAX2 for item table row 2######################################################################//
function display_costperunit2()
{
	//alert("Inside");
	var itemid2 = document.getElementById("itemid2").value;
	//alert(itemid2);
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
					document.getElementById("disp_cost2").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcostperunit2_ajax.php?itemid2="+itemid2,true);
	xmlhttp.send();
}
function display_category2()
{
	//alert("Inside");
	var itemid2 = document.getElementById("itemid2").value;
	//alert(itemid2);
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
					document.getElementById("disp_category2").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcategory2_ajax.php?itemid2="+itemid2,true);
	xmlhttp.send();
	display_costperunit2();
}
function display_itemname2()
{
	//alert("Inside");
	var itemid2 = document.getElementById("itemid2").value;
	//alert(itemid2);
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
					document.getElementById("disp_itemname2").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemname2_ajax.php?itemid2="+itemid2,true);
	xmlhttp.send();
	display_category2();
}
//##################################################AJAX3 for item table row 3######################################################################//
function display_costperunit3()
{
	//alert("Inside");
	var itemid3 = document.getElementById("itemid3").value;
	//alert(itemid3);
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
					document.getElementById("disp_cost3").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcostperunit3_ajax.php?itemid3="+itemid3,true);
	xmlhttp.send();
}
function display_category3()
{
	//alert("Inside");
	var itemid3 = document.getElementById("itemid3").value;
	//alert(itemid3);
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
					document.getElementById("disp_category3").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcategory3_ajax.php?itemid3="+itemid3,true);
	xmlhttp.send();
	display_costperunit3();
}
function display_itemname3()
{
	//alert("Inside");
	var itemid3 = document.getElementById("itemid3").value;
	//alert(itemid3);
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
					document.getElementById("disp_itemname3").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemname3_ajax.php?itemid3="+itemid3,true);
	xmlhttp.send();
	display_category3();
}
//##################################################AJAX4 for item table row 3######################################################################//
function display_costperunit4()
{
	//alert("Inside");
	var itemid4 = document.getElementById("itemid4").value;
	//alert(itemid4);
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
					document.getElementById("disp_cost4").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcostperunit4_ajax.php?itemid4="+itemid4,true);
	xmlhttp.send();
}
function display_category4()
{
	//alert("Inside");
	var itemid4 = document.getElementById("itemid4").value;
	//alert(itemid4);
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
					document.getElementById("disp_category4").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcategory4_ajax.php?itemid4="+itemid4,true);
	xmlhttp.send();
	display_costperunit4();
}
function display_itemname4()
{
	//alert("Inside");
	var itemid4 = document.getElementById("itemid4").value;
	//alert(itemid4);
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
					document.getElementById("disp_itemname4").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemname4_ajax.php?itemid4="+itemid4,true);
	xmlhttp.send();
	display_category4();
}
//##################################################AJAX5 for item table row 5######################################################################//
function display_costperunit5()
{
	//alert("Inside");
	var itemid5 = document.getElementById("itemid5").value;
	//alert(itemid5);
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
					document.getElementById("disp_cost5").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcostperunit5_ajax.php?itemid5="+itemid5,true);
	xmlhttp.send();
}
function display_category5()
{
	//alert("Inside");
	var itemid5 = document.getElementById("itemid5").value;
	//alert(itemid5);
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
					document.getElementById("disp_category5").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemcategory5_ajax.php?itemid5="+itemid5,true);
	xmlhttp.send();
	display_costperunit5();
}
function display_itemname5()
{
	//alert("Inside");
	var itemid5 = document.getElementById("itemid5").value;
	//alert(itemid5);
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
					document.getElementById("disp_itemname5").innerHTML=xmlhttp.responseText;
					}
	}
	xmlhttp.open("GET","itemname5_ajax.php?itemid5="+itemid5,true);
	xmlhttp.send();
	display_category5();
}
//##################################################AJAX4 for item table row 3######################################################################//
function goto()
{
 window.location.href="addsales.php";
}														
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Sales</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="salespersondatabase.php" onsubmit="return validate();">
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
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="salespersonhome.php">Home</a></li>
        <li class="active"><a href="addsales.php">Add Sales </a></li>
        <li><a href="viewsales.php">View Sales </a></li>
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
<div class="wrapper col4" align="center">
<?php 

	mysql_connect("localhost","root","");
	mysql_select_db("inventory system");
	$itemid = array();
	$itemname = array();
	$billno=101;
	
	$sql1 = mysql_query("SELECT billno FROM sales ORDER BY id DESC LIMIT 1");
	while($row1 = mysql_fetch_array($sql1))
	{
	$billno = $row1['billno'];
	$billno=$billno+1;
	}
	
	$sq2 = mysql_query("SELECT itemid FROM purchase WHERE quantity>0");
	while($row2 = mysql_fetch_array($sq2))
	{
		$itemid[] = $row2['itemid'];
	}
	
	$sql3 = mysql_query("SELECT itemname FROM purchase");
	while($row3 = mysql_fetch_array($sql3))
	{
		$itemname[] = $row3['itemname'];
	}
	
	$sql4 = mysql_query("SELECT itemcategory FROM purchase");
	while($row4 = mysql_fetch_array($sql4))
	{
		$category[] = $row4['itemcategory'];
	}

?>
			
	
	<table align="center" border="0" bgcolor=" #562051">
	<tr bgcolor="#990066">
		<td colspan="6" style="color:#FFFFFF"><div align="center"><h1>ADD SALES</h1> </div></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr align="center">
		<td align="right">Date</td>
		<td align="left"><input type="text" name="date" id="date" value="<?php $a = date("y-m-d");echo $a;?>"/></td>
		<td align="right"> Bill No</td>
		<td align="left"><input type="text" name="billno" id="billno" value="<?php echo $billno;?>"/></td>
		<td align="right">Customer Name</td>
		<td align="left"><input type="text" name="customer" id="customer" /><span class="c" id="s1"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align="right">Address</td>
		<td align="left"><textarea name="address" id="address"></textarea><span class="c" id="s2"></span></td>
		<td align="right">Contact No</td>
		<td align="left"><input type="text" name="contactno" id="contactno" /><span class="c" id="s3"></span><span class="c" id="s6"></span></td>
		<td></td>
		<td align="left"><input type="button" value="Add Items" id="additems" onclick="return showtable();"/><span class="c" id="s4"></span></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	</table>
	<table align="center" border="1" id="table1" style="visibility:hidden" 
	bgcolor="#562051">
	<tr>
		<td>No</td><td>Item Id</td><td>Item Name</td><td>Category</td><td>Quantity</td><td>Cost/Unit</td><td>Discount %</td><td>Discount Amount</td> 		<td>Total</td><td></td>
	</tr>
	<tr id="row1">
		<td>1</td>
		<td><select name="itemid1" id="itemid1" value="" onchange="display_itemname1();"><option>Select Item Id</option>
																<?php foreach($itemid as $id)
																{?>
																<option><?php echo $id;?></option>
																<?php } ?></select></td>
		<td><div id="disp_itemname1"><select name="itemname1" id="itemname1" value=""><option>Select Item Name</option>
																<?php foreach($itemname as $name)
																{?>
																<option><?php echo $name;?></option>
																<?php } ?></select></div></td>
		<td><div id="disp_category1"><select name="category1" id="category1" value=""><option>Select Category</option>
																<?php foreach($category as $cat)
																{?>
																<option><?php echo $cat;?></option>
																<?php } ?></select></div></td>
		<td><input type="text" name="quantity1" id="quantity1" onkeyup="return findtotal1();"/></td>
		<td><div id="disp_cost1"><input type="text" name="cost1" id="cost1" onkeyup="return findtotal1();"/></div></td>
		<td><input type="text" name="discountpercent1" id="discountpercent1" onkeyup="return calcdiscount1();"/></td>
		<td><input type="text" name="discountamt1" id="discountamt1" value="0"/></td>
		<td><input type="text" name="total1" id="total1" value="0"/><div id="hiddentotal1"><input type="hidden" name="costprice1" /></div></td>
		<td><img src="../images/add_new.png" id="add1" onclick="return showrow2();"/></td>
	</tr>
	<tr id="row2" style="visibility:hidden">
		<td>2</td>
		<td><select name="itemid2" id="itemid2" value="" onchange="display_itemname2();"><option>Select Item Id</option>
																<?php foreach($itemid as $id)
																{?>
																<option><?php echo $id;?></option>
																<?php } ?></select></td>
		<td><div id="disp_itemname2"><select name="itemname2" id="itemname2" value=""><option>Select Item Name</option>
																<?php foreach($itemname as $name)
																{?>
																<option><?php echo $name;?></option>
																<?php } ?></select></div></td>
		<td><div id="disp_category2"><select name="category2" id="category2" value=""><option>Select Category</option>
																<?php foreach($category as $cat)
																{?>
																<option><?php echo $cat;?></option>
																<?php } ?></select></div></td>
		<td><input type="text" name="quantity2" id="quantity2" onkeyup="return findtotal2();"/></td>
		<td><div id="disp_cost2"><input type="text" name="cost2" id="cost2" onkeyup="return findtotal2();"/></div></td>
		<td><input type="text" name="discountpercent2" id="discountpercent2" onkeyup="return calcdiscount2();"/></td>
		<td><input type="text" name="discountamt2" id="discountamt2" value="0"/></td>
		<td><input type="text" name="total2" id="total2" value="0"/><div id="hiddentotal2"><input type="hidden" name="costprice2" /></div></td>
		<td><img src="../images/add_new.png" id="add2" onclick="return showrow3();"/></td>
	</tr>
	<tr id="row3" style="visibility:hidden">
		<td>3</td>
		<td><select name="itemid3" id="itemid3" value="" onchange="display_itemname3();"><option>Select Item Id</option>
																<?php foreach($itemid as $id)
																{?>
																<option><?php echo $id;?></option>
																<?php } ?></select></td>
		<td><div id="disp_itemname3"><select name="itemname3" id="itemname3" value=""><option>Select Item Name</option>
																<?php foreach($itemname as $name)
																{?>
																<option><?php echo $name;?></option>
																<?php } ?></select></div></td>
		<td><div id="disp_category3"><select name="category3" id="category3" value=""><option>Select Category</option>
																<?php foreach($category as $cat)
																{?>
																<option><?php echo $cat;?></option>
																<?php } ?></select></div></td>
		<td><input type="text" name="quantity3" id="quantity3" onkeyup="return findtotal3();"/></td>
		<td><div id="disp_cost3"><input type="text" name="cost3" id="cost3" onkeyup="return findtotal3();"/></div></td>
		<td><input type="text" name="discountpercent3" id="discountpercent3" onkeyup="return calcdiscount3();"/></td>
		<td><input type="text" name="discountamt3" id="discountamt3" value="0"/></td>
		<td><input type="text" name="total3" id="total3" value="0"/><div id="hiddentotal3"><input type="hidden" name="costprice3" /></div></td>
		<td><img src="../images/add_new.png" id="add3" onclick="return showrow4();"/></td>
	</tr>
	<tr id="row4" style="visibility:hidden">
		<td>4</td>
		<td><select name="itemid4" id="itemid4" value="" onchange="display_itemname4();"><option>Select Item Id</option>
																<?php foreach($itemid as $id)
																{?>
																<option><?php echo $id;?></option>
																<?php } ?></select></td>
		<td><div id="disp_itemname4"><select name="itemname4" id="itemname4" value=""><option>Select Item Name</option>
																<?php foreach($itemname as $name)
																{?>
																<option><?php echo $name;?></option>
																<?php } ?></select></div></td>
		<td><div id="disp_category4"><select name="category4" id="category4" value=""><option>Select Category</option>
																<?php foreach($category as $cat)
																{?>
																<option><?php echo $cat;?></option>
																<?php } ?></select></div></td>
		<td><input type="text" name="quantity4" id="quantity4" onkeyup="return findtotal4();"/></td>
		<td><div id="disp_cost4"><input type="text" name="cost4" id="cost4" onkeyup="return findtotal4();"/></div></td>
		<td><input type="text" name="discountpercent4" id="discountpercent4" onkeyup="return calcdiscount4();"/></td>
		<td><input type="text" name="discountamt4" id="discountamt4" value="0"/></td>
		<td><input type="text" name="total4" id="total4" value="0"/><div id="hiddentotal4"><input type="hidden" name="costprice4" /></div></td>
		<td><img src="../images/add_new.png" id="add4" onclick="return showrow5();"/></td>
	</tr>
	<tr id="row5" style="visibility:hidden">
		<td>5</td>
		<td><select name="itemid5" id="itemid5" value="" onchange="display_itemname5();"><option>Select Item Id</option>
																<?php foreach($itemid as $id)
																{?>
																<option><?php echo $id;?></option>
																<?php } ?></select></td>
		<td><div id="disp_itemname5"><select name="itemname5" id="itemname5" value=""><option>Select Item Name</option>
																<?php foreach($itemname as $name)
																{?>
																<option><?php echo $name;?></option>
																<?php } ?></select></div></td>
		<td><div id="disp_category5"><select name="category5" id="category5" value=""><option>Select Category</option>
																<?php foreach($category as $cat)
																{?>
																<option><?php echo $cat;?></option>
																<?php } ?></select></div></td>
		<td><input type="text" name="quantity5" id="quantity5" onkeyup="return findtotal5();"/></td>
		<td><div id="disp_cost5"><input type="text" name="cost5" id="cost5" onkeyup="return findtotal5();"/></div></td>
		<td><input type="text" name="discountpercent5" id="discountpercent5" onkeyup="return calcdiscount5();"/></td>
		<td><input type="text" name="discountamt5" id="discountamt5" value="0"/></td>
		<td><input type="text" name="total5" id="total5" value="0"/><div id="hiddentotal5"><input type="hidden" name="costprice5" /></div></td>
		<td><img src="../images/add_new.png" id="add5" onclick="return showrowexceed();"/></td>
	</tr>
	</table> 
	<table align="center" border="0" style="visibility:hidden" id="table3" bgcolor="#562051">
	<tr align="right">
		<td align="right" width="80%"><input type="button" value="Total Amount" onclick="return grandtotal();"/></td>
		<td align="right"><input type="text" name="totalamt" id="totalamt" /></td>
		<td>Mode of Payment</td><td><select id="mode" name="mode">
								<option>Select</option>
								<option>Cash</option>
								<option>Cheque</option></select><span class="c" id="s5"></span></td>
	</tr>
	</table>
	<table align="center" bgcolor="#562051">
	<tr align="center">
	<td><input type="submit" value="ADD" />
	<input type="button" value="RESET" onclick="return goto();"/></td>
	</tr>
	</table> 
</div>
<!-- ####################################################################################################### -->
&nbsp;</br>
&nbsp;</br>
&nbsp;</br>
&nbsp;
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
<div class="wrapper col3"></div>
</form>
</body>
</html>
