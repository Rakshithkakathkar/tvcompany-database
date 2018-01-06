<!DOCTYPE html>
<html>
<body>
<div class="header">
    <h1>All Directors details</h1>
</div>

 
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php

session_start();
$db = mysqli_connect("localhost","root","","tvseries");
if (!$db){
	die("can not connet : " . mysqli_error());
}
$sql ="select SSN,NAME,LITERACY_AGENCY,TITLE from director W,  tvshow M where W.NAME = M.DIRECTOR  ";
$myData = mysqli_query($db,$sql);
echo "<center><table border=5>
<tr>
<th>SSN</th>
<th>NAME</th>
<th>LITRACY_AGENCY</th>
<th>SHOW TITLE</th>
</tr>";
if(mysqli_num_rows($myData)>0){

while($record = mysqli_fetch_assoc($myData)){
	echo "<tr>";
	echo "<td>" . $record['SSN'] . "</td>";
	echo "<td>" . $record['NAME'] . "</td>";
	echo "<td>" . $record['LITERACY_AGENCY'] . "</td>";
	echo "<td>" . $record['TITLE'] . "</td>";
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