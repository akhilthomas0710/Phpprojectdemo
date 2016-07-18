<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Initialize</title>
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>

<body>

<?php
$conn=mysqli_connect("localhost","root","","inventory system");
//mysqli_select_db("akhildb");
$sql ="SELECT * FROM admin";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)

{
?>	
<script type="text/javascript">	
	window.location.href="login.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">	
	window.location.href="admin/addstoredetailsform.php";
</script>
<?php
}
?>
</body>
</html>
