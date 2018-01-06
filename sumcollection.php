<!DOCTYPE html>
<html>
<body>
<div class="header">
    <h1>Income earned by the company calculated using a stored procedure</h1>
</div>


<link rel="stylesheet" type="text/css" href="style.css"/>
<?php

session_start();
$db = mysqli_connect("localhost","root","","tvseries");
if (!$db){
	die("can not connet : " . mysqli_error());
}
$sq = mysqli_query($db,"CALL COLL();");
$sql ="SELECT SUMCOLL FROM collection ORDER BY SUMCOLL DESC LIMIT 1 ";
$myData = mysqli_query($db,$sql);
echo "<center><table border=5>
<tr>
<th>TOTAL INCOME</th>
</tr>";
if(mysqli_num_rows($myData)>0){

while($record = mysqli_fetch_assoc($myData)){
	echo "<tr>";
	echo "<td>" . $record['SUMCOLL'] . "</td>";
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