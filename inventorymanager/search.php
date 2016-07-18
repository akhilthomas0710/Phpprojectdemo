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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Inventory Manager Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"></font><font color="#009900"> Logged in as <?php echo strtoupper($inventorymanager);?></font>
	<font color="#FFFFFF">|</font><a href="inventorylogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="inventorymanagerhome.php">Inventory Manager Home</a></li>
        <li><a href="purchaseform.php">Add Purchase </a></li>
        <li><a href="viewpurchaseitem.php">View Purchase </a></li>
		<!--<li><a href="categories.php">Add Supplier </a></li>-->
		<li><a href="viewsupplier.php">View Supplier Details</a></li>
		<li><a href="viewitemstopurchase.php">Items To Be Purchased</a></li>
        <li><a href="#">Settings</a>
          <ul>
            <li><a href="changeusernameform.php">Change Username</a></li>
            <li><a href="changepasswordform.php">Change Password</a></li>
          </ul>
        </li>
      </ul>
	  <div id="search" align="right" style="position:fixed;right:0%">
      <form action="search.php" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Item"  onfocus="this.value=(this.value=='Search Item')? '' : this.value ;"  name="search"/>
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
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
$search = $_POST["search"];
$tcolor=0;
$sq = mysql_query("SELECT * FROM purchase WHERE itemcategory='$search'");
$row3=mysql_fetch_array($sq);
if(mysql_num_rows($sq)<=0)
{
?>
<script type="text/javascript">
	alert("No Items Available");
	window.location.href="inventorymanagerhome.php";
</script>
<?php
}
//$date="2014-04-16";


$quantity = mysql_query("SELECT SUM(quantity) AS tquantity FROM purchase WHERE itemcategory='$search'"); 
$q=mysql_fetch_array($quantity);
$squantity= mysql_query("SELECT SUM(quantity) AS squantity FROM sales WHERE category='$search'"); 
$q1=mysql_fetch_array($squantity);
//echo $sql;

//echo $sql;
?>

<table align="center" border="0" width="250" style="width:50%" bgcolor="#562051" cellpadding="10">
<tr bgcolor="#990066"><td style="color:#FFFFFF" colspan="8" align="center"><h1><?php echo strtoupper($search);?></h1></td></tr>
<tr>
<td width="50%" align="center" valign="middle">Itemname</td>
	<td width="50%" align="center" valign="middle"><?php echo $row3['itemname'];?></td>
</tr>
	
<tr><td align="center" valign="middle">Description</td>
	<td align="center" valign="middle"><?php echo $row3['description'];?></td></tr>
<tr><td align="center" valign="middle">Supplier</td>
	<td align="center" valign="middle"><?php echo $row3['supplier'];?></td></tr>
<tr><td align="center" valign="middle">Available Stock</td>
	<td align="center" valign="middle"><?php echo $q['tquantity'];?></td></tr>
<tr><td align="center" valign="middle">Item Sold</td>
	<td align="center" valign="middle"><?php echo $q1['squantity'];?></td></tr>


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
