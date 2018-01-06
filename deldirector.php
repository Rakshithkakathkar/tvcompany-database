
<html>
<head>
<body style="background-color:#E5E5E5">
<title>
deletion form</title>
</head>

<div class="header">
    <h1>Welcome to your company's writers database</h1>
</div>
<div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
<link rel="stylesheet" type="text/css" href="style.css"/>
<form action=""method="post">
<table border="0" align="center">
<tbody>
<tr>
<td><label for="id">Enter SSN to be deleted:</label></td>
<td><input id="id" maxlength="50" name="SSN" type="text"/></td>
</tr>
<tr>
<td align="right" ><input name="Submit" type="Submit" value="Delete"/>&nbsp;<input
type="reset" onClick="refresh()"></p></td><td><button><a href = "home.php">Back</a></button></tr>
</tbody>
</table>
</form>
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="tvseries";
$tbl_name="director";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(isset($_POST['Submit']))
{
	$SSN=$_POST['SSN'];
	$sel="SELECT * FROM director WHERE SSN ='$SSN'";
	$cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==false)
{
	echo"<center><h2 style='color:black'>Director does not exist</h2></center>";
}
else
{
	$sel="delete from director where SSN='$SSN'";
	$cq=mysqli_query ($conn,$sel)or die(mysqli_error($conn));
	echo"<center><h2 style='color:black'>Director detatils deleted</h2></center>";
}
}
Mysqli_close($conn);
?>
</html>

		
