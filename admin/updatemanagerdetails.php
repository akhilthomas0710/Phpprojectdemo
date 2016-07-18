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
<title>Sales Manager Form</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="addmanager.php" onsubmit="">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" style="vertical-align:bottom"></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="adminhome.php">Home</a></li>
        <li><a href="addmanagerform.php">Add Managers </a></li>
        <li  class="active"><a href="viewmanagerdetails.php">Manager Details </a></li>
        <li><a href="viewstock.php">Stock Details</a></li>
		<li><a href="viewsalesreport.php">Sales Report</a></li>
		<li><a href="editstoredetails.php">Edit Store Details</a></li>
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
$sql1=0;
$sql2=0;
$sql3=0;
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$id=$_POST["id"];
$name=$_POST["name"];
$address=$_POST["address"];
$contactno=$_POST["contactno"];
$gender=$_POST["updategender"];
$dob=$_POST["dob"];
$email=$_POST["mail"];
$qualification=$_POST["qualification"];
$uname=$_POST["uname"];
$pword=$_POST["pword"];
$status=$_POST["updatestatus"];

if($status=="Inventory Manager")
{
$sql1 = mysql_query("UPDATE managers SET name='$name',address='$address',contactno='$contactno',gender='$gender',dob='$dob',email='$email',qualification='$qualification',uname='$uname',pword='$pword',status='$status' WHERE id='$id'");
/*$sq1 = mysql_query("UPDATE inventorymanager SET name='$name',address='$address',contactno='$contactno',gender='$gender',dob='$dob',email='$email',qualification='$qualification',uname='$uname',pword='$pword',status='$status' WHERE id='$id'");*/
}
if($status=="Sales Manager")
{
$sql2 = mysql_query("UPDATE managers SET name='$name',address='$address',contactno='$contactno',gender='$gender',dob='$dob',email='$email',qualification='$qualification',uname='$uname',pword='$pword',status='$status' WHERE id='$id'");
/*$sq2 = mysql_query("UPDATE salesmanager SET name='$name',address='$address',contactno='$contactno',gender='$gender',dob='$dob',email='$email',qualification='$qualification',uname='$uname',pword='$pword',status='$status' WHERE id='$id'");*/
}
if($status=="Sales Person")
{
$sql3 = mysql_query("UPDATE managers SET name='$name',address='$address',contactno='$contactno',gender='$gender',dob='$dob',email='$email',qualification='$qualification',uname='$uname',pword='$pword',status='$status' WHERE id='$id'");
/*$sq3 = mysql_query("UPDATE salesperson SET name='$name',address='$address',contactno='$contactno',gender='$gender',dob='$dob',email='$email',qualification='$qualification',uname='$uname',pword='$pword',status='$status' WHERE id='$id'");*/
}
if($sql1 || $sql2 || $sql3)
{
?>
<script type="text/javascript">
	alert("Manager Details Updated");
	window.location.href="viewmanagerdetails.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
	alert("Manager Details Not Updated");
	window.location.href="viewmanagerdetails.php";
</script>
<?php
}
?>			

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
