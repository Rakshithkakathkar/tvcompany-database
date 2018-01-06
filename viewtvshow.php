<!DOCTYPE html>
<html>
<body>
<div class="header">
    <h1>All TvShow details</h1>
</div>

 
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php

session_start();
$db = mysqli_connect("localhost","root","","tvseries");
if (!$db){
	die("can not connet : " . mysqli_error());
}
$sql ="select * from tvshow ";
$myData = mysqli_query($db,$sql);
echo "<center><table border=5>
<tr>
<th>Tv SHOW</th>
<th>YEAR</th>
<th>STUDIO</th>
<th>DIRECTOR</th>
<th>INCOME</th>
</tr>";
if(mysqli_num_rows($myData)>0){

while($record = mysqli_fetch_assoc($myData)){
	echo "<tr>";
	echo "<td>" . $record['TITLE'] . "</td>";
	echo "<td>" . $record['YEAR'] . "</td>";
	echo "<td>" . $record['STUDIO'] . "</td>";
	echo "<td>" . $record['DIRECTOR'] . "</td>";
	echo "<td>" . $record['COLLECTION'] . "</td>";
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