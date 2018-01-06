
<!DOCTYPE html>
<html>
<head>
  <title>Welcome to your company's writers database</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Welcome to your company's writers database</h1>
</div>
<div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
<div class="col-sm-12 col-md-5">
    <div class="panel panel-default">
        <div class="panel-body">
                <center>
                <form method="post" action="regnext.php">
  				<table>
     			<tr>
           			<td>Enter Company Name to check ID : </td>
           			<td><input type="text" name="T_NAME" class="textInput"></td>
     			</tr>
          
                
                
          
      			<tr>
        			<td></td>

        			<td><input type="submit" name="Tbtn" value="Proceed"></td>
              <td><button><a href="home.php">Back</button></a></td>
      			</tr><?php
session_start();
 
//connect to database
$db=mysqli_connect("localhost","root","","tvseries");
                $conn = mysqli_connect("localhost","root","","tvseries");
				// Check connection
				if (!$conn) {
    				die("Connection failed: " . mysqli_connect_error());
				}
				if(isset($_POST['Tbtn'])){

				$T_NAME=($_POST['T_NAME']);

                $sql = "SELECT COMP_ID FROM TVSERIES where T_NAME='$T_NAME' ";
				$result = mysqli_query($conn, $sql);
				
   				

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "YOUR COMPANY IS REGISTERED SUCCESFULLY AND THE ID IS: " .$row["COMP_ID"].  "<br>";
				    }
				} else {
				    echo "0 results";
}
}

 
 
?>

     		</table>
     	</form>

     
     
                
            </center>                                    
        </div>
    </div>
</div> 

