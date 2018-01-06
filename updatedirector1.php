<!DOCTYPE html>
<html>
    <head>
        <title> Update Writer</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    
<div class="header">
    <h1>Welcome to your company's writers database</h1>
</div>
<div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
    <link rel="stylesheet" type="text/css" href="style.css"/>

    <body>

        <form action="updatedirector1.php" method="post">
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
      <?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "tvseries";
   
   $conn = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $SSN = $_POST['SSN'];
   $NAME = $_POST['NAME'];
   $LITERACY_AGENCY = $_POST['LITERACY_AGENCY'];

   $sel="SELECT * FROM director WHERE SSN ='$SSN'";
  $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==false)
{
  echo"<center><h2 style='color:director'>Director does not exist</h2></center>";
}
else
{
  $sel="UPDATE `director` SET `NAME`='".$NAME."',`LITERACY_AGENCY`= '".$LITERACY_AGENCY."' WHERE `SSN` = $SSN";
  $cq=mysqli_query ($conn,$sel)or die(mysqli_error($conn));
  echo"<center><h2 style='color:black'>Director detatils Updated</h2></center>";
}

   mysqli_close($conn);
}

?>



    </body>


</html>
