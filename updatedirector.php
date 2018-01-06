<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "tvseries";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $SSN = $_POST['SSN'];
   $NAME = $_POST['NAME'];
   $LITERACY_AGENCY = $_POST['LITERACY_AGENCY'];
   
   // mysql query to Update data
   $query = "UPDATE `writer` SET `NAME`='".$NAME."',`LITERACY_AGENCY`= '".$LITERACY_AGENCY."' WHERE `SSN` = $SSN";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo '<center><b>Data Updated</b></center>';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> Update Writer</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <link rel="stylesheet" type="text/css" href="style.css"/>

    <body>

        <form action="updatewriter.php" method="post">
          <table>
            <tr><td>
            SSN To Update: <input type="text" name="SSN" required><br><br></td></tr>
            <tr><td>
            New Name:<input type="text" name="NAME" required><br><br></td></tr>
            <tr><td>
            Literacy Agency:<input type="text" name="LITERACY_AGENCY" required><br><br></td></tr>

            
            <tr><td>
            <input type="submit" name="update" value="Update Data"></td><td><button><a href="home.php">Back</a></button></td></tr>

        </form>
      </table>

    </body>


</html>
