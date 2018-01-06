<?php
  session_start();
  $db=mysqli_connect("localhost","root","","tvseries");
  if(isset($_POST['Treg_btn'])){
    $T_NAME=($_POST['T_NAME']);
    $PRODUCTION_COMPANY=($_POST['PRODUCTION_COMPANY']);
    $NETWORK=($_POST['NETWORK']);
    $sql="INSERT INTO tvseries(T_NAME,PRODUCTION_COMPANY,NETWORK) VALUES('$T_NAME','$PRODUCTION_COMPANY','$NETWORK')";
    mysqli_query($db,$sql);
    header("location:regnext.php");

  }


?>
<!DOCTYPE html>
<html>
<head>
  <title>TVSeries company registration </title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Registration form for TvSeries Company Registration</h1>
  </div>
  <div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
  <form method ="post" action="tvseries.php">
    <table>
      <tr>
        <td>Company Name:</td>
        <td><input type="text" name="T_NAME" class="textInput"></td>
      </tr>
      <tr>
        <td>Production Company:</td>
        <td><input type="text" name="PRODUCTION_COMPANY" class="textInput"></td>
      </tr>
      <tr>
        <td>Network:</td>
        <td><input type="text" name="NETWORK" class="textInput"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Treg_btn" value="Register"></td>
      </tr>
    </table>
  
  </form>  
</body>
</html>