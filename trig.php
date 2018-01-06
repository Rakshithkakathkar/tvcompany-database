<!DOCTYPE html>
<html>
<body>
<div class="header">
    <h1>List of all movies shown using a trigger</h1>
</div>

<?php
// Create connection
$conn = mysqli_connect("localhost","root","","tvseries");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

               $sql = "SELECT distinct* FROM log ";
				$result = mysqli_query($conn, $sql);
				
   				

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "MOVIE TITLE "." - "." - " .$row["MOV_TITLE"].  "<br>";
				    }
				} else {
				    echo "0 results";
}

mysqli_close($conn);
?> 
<link rel="stylesheet" type="text/css" href="style.css"/>

</body>
</html>