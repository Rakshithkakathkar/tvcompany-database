<!DOCTYPE html>
<html>
<body>
<div class="header">
    <h1>All Advertisement details fetched using a trigger</h1>
</div>

 
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php

session_start();
$db = mysqli_connect("localhost","root","","tvseries");
if (!$db){
	die("can not connet : " . mysqli_error());
}
$sql ="select distinct * from log ";
$myData = mysqli_query($db,$sql);
echo "<center><table border=5>
<tr>
<th>NAME</th>


<th>INCOME</th>
</tr>";
if(mysqli_num_rows($myData)>0){

while($record = mysqli_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['MOV_TITLE'] . "</td>";
	echo "<td>" . $record['ADCOST'] . "</td>";
    echo "</tr>";

}
echo"</table>";
}else{
	echo "0 results";
}

mysqli_close($db);

?>

</body>
</html>

