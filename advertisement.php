<?php
  session_start();
  $db=mysqli_connect("localhost","root","","tvseries");
  if(isset($_POST['Ereg_btn'])){
    $NAME=($_POST['NAME']);
    $ADLENGTH=($_POST['ADLENGTH']);
    $SHOWNAME=($_POST['SHOWNAME']);
    $COST=($_POST['COST']);
    $sql="INSERT INTO advertisement(NAME,SHOWNAME,ADLENGTH,COST) VALUES('$NAME','$SHOWNAME','$ADLENGTH','$COST')";
    mysqli_query($db,$sql);
    header("location:home.php");

  }


?>
<!DOCTYPE html>
<html>
<head>
  <title>Add advertisement </title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Fill in the details of the Advertisements for your company</h1>
  </div>
  <div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
  <form method ="post" action="advertisement.php">
    <table>
      <tr>
        <td>Advertisement name:</td>
        <td><input type="text" name="NAME" class="textInput"></td>
      </tr>
      <tr>
        <td>Length in secs:</td>
        <td><input type="number" name="ADLENGTH" class="textInput"></td>
      </tr>
      <tr>
        <td>TvShow Name:</td>
        <td><input type="text" name="SHOWNAME" class="textInput"></td>
      </tr>      
      <tr>
        <td>Income:</td>
        <td><input type="number" name="COST" class="textInput"></td>
      </tr>
      <tr>

      <tr>
        <td></td>
        <td><input type="submit" name="Ereg_btn" value="Proceed"></td>
      </tr>
    </table>    
  </form>  
</body>
</html>