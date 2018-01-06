<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "writer";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $SSN = $_POST['SSN'];
   $NAME = $_POST['NAME'];
   $LITERACY_AGENCY = $_POST['LITERACY_AGENCY'];
   
   // mysql query to Update data
   $query = "UPDATE `writer` SET `NAME`='".$NAME."',`LITERACY_AGENCY`= $LITERACY_AGENCY WHERE `SSN` = $SSN";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
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

    <body>

        <form action="php_update_data_from_mysql_database_table.php" method="post">

            SSN To Update: <input type="text" name="SSN" required><br><br>

            Name:<input type="text" name="NAME" required><br><br>

            Literacy Agency:<input type="text" name="LITERACY_AGENCY" required><br><br>

            

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>
