<?php
session_start();
if(isset($_SESSION['salesmanager']))
{
	$salesmanager = $_SESSION['salesmanager'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['salesmanager']))
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Items To Purchase</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="additemtopurchase.php" onsubmit="">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"><font color="#009900"> Logged in as <?php echo strtoupper($salesmanager);?></font>
   <font color="#FFFFFF">|</font><a href="salesmanagerlogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="salesmanagerhome.php">Sales Manager Home</a></li>
        <!--<li><a href="items.php">Add Item</a></li>-->
        <li><a href="viewitem.php">View Stock Details</a></li>
		<!--<li><a href="categories.php">Add Item Category</a></li>-->
		<li class="active"><a href="itemtopurchase.php">Add Items to Purchase</a></li>
		<li><a href="viewsalesreport.php">View Sales Report</a></li>
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
		$itemid = array();
		mysql_connect("localhost","root","");
		mysql_select_db("inventory system");
		$sql=mysql_query("SELECT itemid FROM purchase where itemid not in (select itemid from items_to_purchase) and quantity<=10");
		while($row = mysql_fetch_array($sql))
		{
		    
			$itemid[]=$row['itemid'];
		}
		?>
    	<table width="413" border="0" align="center" style="width:50%" bgcolor="#562051">
        <tr>
        	<td height="41" colspan="2" style="color:#FFFFFF" bgcolor="#990066"><div align="center" class="style1"><h1>ADD ITEM TO BE PURCHASED</h1> </div></td>
      	</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
        <tr>
			<td width="594" align="right">Item Id</td>
        	<td><label><select name="itemid" id="itemid" onchange="display_itemname()">
						<option>Select</option>
						<?php foreach($itemid as $itm_id)
							  {
						?>
						<option><?php echo $itm_id;?></option>
						<?php			
							  }
						?>
						</select></label>
			<span class="c" id="s2"></span></td></td>
        </tr>
		<tr>
        	<td width="594" align="right">Item Name</td>
        	<td width="804"><label><div id="disp_itemname">
			<input name="itemname" type="text" id="itemname" /></div></label>
			<span class="c" id="s1"></span></td>
        </tr>
		<tr>
        	<td width="594" align="right">Category</td>
        	<td width="804"><label><div id="disp_category">
			<input name="category" type="text" id="category" /></div></label>
			<span class="c" id="s1"></span></td>
        </tr>
        
        
        <tr>
            <td height="47" colspan="2"><div align="center">
				<label><input type="submit" name="Submit" value="Submit" /></label>
                <label><input type="button" name="cancel" value="Cancel" /></label></td>
        </tr>
		</div>
		</table>
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
</form>
</body>
</html>
