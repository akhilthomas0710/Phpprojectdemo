<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Store Details Form</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="addmanager.php" onsubmit="return validate();">
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
      
        <li class="last">&nbsp;<br />&nbsp;&nbsp;</li>
      </ul>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<br />
<div class="wrapper col4" align="center">
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"inventory system");
$storename=$_POST["storename"];
$address=$_POST["address"];
$place=$_POST["place"];
$city=$_POST["city"];
$pin=$_POST["pin"];
$phoneno=$_POST["phoneno"];
$website=$_POST["website"];
$email=$_POST["email"];
$uname = $_POST["uname"];
$pword = $_POST["pword"];
$sq = "INSERT INTO admin VALUES('','$uname','$pword')";
$sql ="INSERT INTO storedetails VALUES('','$storename','$address','$place','$city','$pin','$phoneno','$website','$email')";
if($sq && $sql)
{
?>
<script type="text/javascript">
	alert("Store Details Added to Database");
	window.location.href="../login.php";
</script>			
<?php
}
else
{
?>
<script type="text/javascript">
	alert("Store Details Not Added to Database");
	window.location.href="addstoredetailsform.php";
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

</body>
</html>
