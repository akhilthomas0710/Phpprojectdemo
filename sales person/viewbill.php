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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Sales Report</title>
</head>
<body id="top">
<!--<form id="form1" name="form1" method="post" action="additem.php" onsubmit="return validate_items();">-->
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
        <li><a href="addsales.php">Add Sales </a></li>
        <li class="active"><a href="viewsales.php">View Sales </a></li>
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

<form name="reportform" id="reportform" method="post" action="viewsalesreport.php">
<?php
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$billno = $_GET["billno"];
$tcolor=0;
$no = 1;
$sq = mysql_query("SELECT * FROM sales WHERE billno='$billno'");
$ro = mysql_fetch_array($sq);
$date = $ro['date'];
if(mysql_num_rows($sq)<=0)
{
?>
<script type="text/javascript">
	alert("No Bills Available for this Billno");
	window.location.href="viewsalesreport.php";
</script>
<?php
}
//$date="2014-04-16";
$sql = mysql_query("SELECT SUM(grandtotal) AS total FROM sales WHERE billno='$billno'"); 
//$count = mysql_query("SELECT count(*) AS no FROM sales WHERE date>='$fromdate' AND date<='$todate'");
$items = mysql_query("SELECT * FROM sales WHERE billno='$billno'");
$details = mysql_query("SELECT * FROM sales WHERE billno='$billno'");
$customer = mysql_fetch_array($details);
$items2 = mysql_query("SELECT SUM(quantity) AS tquantity FROM sales WHERE billno='$billno'"); 
$costpricetotal= mysql_query("SELECT SUM(costpricetotal) AS costtotal FROM sales WHERE billno='$billno'"); 
//echo $sql;

//echo $sql;
$store_details = mysql_query("SELECT * FROM storedetails");
$store_rows = mysql_fetch_array($store_details);
?>

<table align="center" border="1" width="250">
<tr bgcolor="#990066"><td style="color:#FFFFFF" colspan="11" align="center"><h1>SALES BILL</h1></td></tr>
<tr bgcolor="#562051">
    <td height="41" colspan="11" align="center" style="color:#FFFFFF"><font size="+2"><?php echo $store_rows['storename'];?></font><br />
	<?php echo $store_rows['address'].", ".$store_rows['place'].", ".$store_rows['city'].", Pin - ".$store_rows['pin']."<br>".
	"Phone - ".$store_rows['phone'].", "."E-Mail - ".$store_rows['email'].", "."Website - ".$store_rows['website'];?></td>
</tr>
<tr bgcolor="#562051">
	<td colspan="5" style="color:#FFFFFF">Date :<?php echo $date;?><br />
	<br />Billno :<?php echo $billno;?></td>
	<td colspan="6" align="right" style="color:#FFFFFF" >Customer Name : <?php echo $customer['customer'];?><br />Address : <?php echo $customer['address'];?><br />
	Contact No : <?php echo $customer['contact'];?></td>
	
</tr>
<tr bgcolor="#562051">
	<td colspan="11" align="center"><h5>Items Sold</h5></td>
</tr>
<tr>
	<td colspan="11">&nbsp;</td>
</tr>
<tr align="center"><th width="14%">No</th>
<th width="10%">Item Id</th>
<th width="14%">Item Name</th>
<th width="15%">Category</th>
<th width="15%">Quantity</th>
<th width="15%">Price</th>
<th width="15%">Total</th>
<th width="19%">Discount</th>
<th colspan="3">Net Total</th>
</tr>
<?php while($row3 = mysql_fetch_array($items))
{
?>
<tr align="center" class="<?php if($tcolor==0)
									{
										echo "dark";
										$tcolor=1;
									}
								else
									{
										echo "light";
										$tcolor=0;
									}?>">
	<td><?php echo $no;$no++;?></td>
	<td><?php echo $row3['itemid'];?></td>
	<td><?php echo $row3['itemname'];?></td>
	<td><?php echo $row3['category'];?></td>
	<td><?php echo $row3['quantity'];?></td>
	<td><?php echo $row3['price'];?></td>
	<td><?php echo $row3['total'];?></td>
	<td><?php echo $row3['discountamt'];?></td>
	<td colspan="2"><?php echo $row3['grandtotal'];?></td>
	<td><a href="edititem.php?q=<?php echo $billno;?>&id=<?php echo $row3['itemid'];?>"><font color="#9900CC">Edit</font></a></td>
</tr>
<?php
}
?>
<tr>
	<td colspan="12">&nbsp;</td>
</tr>
<tr align="center" bgcolor="#562051">
	<td colspan="2">&nbsp;</td>
	<td align="right" colspan="3"><font size="+1">Total No of Items :</font></td>
	<!--<td align="left"><?php $c = mysql_fetch_array($count);echo $c["no"];?></td>-->
	<td><?php if(mysql_num_rows($items2)>0)
			{
				while($row4=mysql_fetch_array($items2))
				{
				?>
				<label id="totalitems"><font size="+2"><?php echo $row4["tquantity"];?></font></label>
				<?php
				}
			}?></td>
	<td>&nbsp;</td>
	<td align="right"><font size="+1">Total Amount :</font></td>
	<td align="center" colspan="3"><?php if(mysql_num_rows($sql)>0)
			{
				while($row2=mysql_fetch_array($sql))
				{
				?>
				<label id="totalamount"><font size="+2"><?php echo $row2["total"];?></font></label>
				<?php
				}
			}?></td>
<!--<td align="right"><font size="+1">Actual Cost Price Total  :</font></td>
	<td align="left"><?php if(mysql_num_rows($costpricetotal)>0)
			{
				while($costpricerow=mysql_fetch_array($costpricetotal))
				{
				?>
				<label id="costpricetotal"><font size="+2"><?php echo $costpricerow["costtotal"];?></font></label>
				<?php
				}
			}?></td>
	<td width="8%" align="right"><label id="profit"><font size="+1">Total Profit :</font></label></td>
	<td width="5%" align="left"><font size="+2">
	<?php $profit = mysql_query("SELECT SUM(grandtotal) - SUM(costpricetotal) as profit FROM sales WHERE billno='$billno'");
		  while($profitrow = mysql_fetch_array($profit))
		  {
		  	echo $profitrow["profit"];
		  }
	?></font></td>-->
</tr>	
</table>
</form>


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
<!--</form>-->
</body>
</html>
