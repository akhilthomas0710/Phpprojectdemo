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
<title>Customer Details</title>



</head>

<body>
<form id="form1" name="form1" method="post" action="">
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
        <li><a href="viewsales.php">View Sales </a></li>
		<li class="active"><a href="viewcustomer.php">View Customer Details </a></li>
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
    <p>&nbsp;</p>
    <table width="50px" height="102px" border="1" style="width:60%">
      
      <thead>
	  <tr bgcolor="#990066" align="center"><td style="color:#FFFFFF" colspan="5" align="center"><h2>CUSTOMER DETAILS</h2></td></tr>
        <th width="162">BILL NO </th>
        <th width="165">CUSTOMER</th>
        <th width="164">ADDRESS</th>
        <th width="87">CONTACT</th>
		<th>EDIT</th>
      </thead>
      <?php
	  $tcolor=0;
	   mysql_connect("localhost","root","");
	   mysql_select_db("inventory system");
	   $s=mysql_query("select * from sales GROUP BY billno");
	  while($r=mysql_fetch_array($s))
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
        
        <td><?php echo $r['billno'];?></td>
        
        <td><?php echo $r['customer'];?></td>
        <td><?php echo $r['address'];?></td>
		<td><?php echo $r['contact'];?></td>
		<td><a href="editcustomer.php?billno=<?php echo $r['billno'];?>"><font color="#9900CC">Edit</font></a></td>
      </tr>
      <?php
	  }
	  ?>
    </table>
  </div>
  <p>&nbsp;</p>
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

