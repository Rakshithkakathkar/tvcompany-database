<?php
  session_start();
  $db=mysqli_connect("localhost","root","","tvseries");
  if(isset($_POST['Mreg_btn'])){
    $TITLE=($_POST['TITLE']);
    $YEAR=($_POST['YEAR']);
    $STUDIO=($_POST['STUDIO']);
    $DIRECTOR=($_POST['DIRECTOR']);
    $COLLECTION=($_POST['COLLECTION']);
    $sql="INSERT INTO tvshow(TITLE,YEAR,STUDIO,DIRECTOR,COLLECTION) VALUES('$TITLE','$YEAR','$STUDIO','$DIRECTOR','$COLLECTION')";
    mysqli_query($db,$sql);
    header("location:home.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tv Show </title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Fill in the details of the Tv Show</h1>
  </div>
  <div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
  <form method ="post" action="tvshow.php">
    <table>
      <tr>
        <td>Show Name:</td>
        <td><input type="text" name="TITLE" class="textInput"></td>
      </tr>
      <tr>
        <td>Year of release:</td>
        <td><input type="number" name="YEAR" class="textInput"></td>
      </tr>
      <tr>
        <td>Studio:</td>
        <td><input type="text" name="STUDIO" class="textInput"></td>
      </tr>
      <tr>
        <td>Director:</td>
        <td><input type="text" name="DIRECTOR" class="textInput"></td>
      </tr>
      <tr>
        <td>Income from advertisement:</td>
        <td><input type="number" name="COLLECTION" class="textInput"></td>
      </tr>
      <tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Mreg_btn" value="Proceed"></td>
      </tr>
    </table>    
  </form>  
</body>
</html>