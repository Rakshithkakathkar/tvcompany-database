
<!DOCTYPE html>
<html>
<head>
  <title>Add directors of the company</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Fill in the details of the director</h1>
  </div>
  <div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
  <form method ="post" action="director.php">
    <table>
      <tr>
        <td>SSN:</td>
        <td><input type="number" name="SSN" class="textInput"></td>
      </tr>
      <tr>
        <td>Name :</td>
        <td><input type="text" name="NAME" class="textInput"></td>
      </tr>
      <tr>
        <td>D.O.B:</td>
        <td><input type="date" name="BDAY" class="textInput"></td>
      </tr>
      <tr>
        <td>Literacy agency:</td>
        <td><input type="text" name="LITERACY_AGENCY" class="textInput"></td>
      </tr>
      <tr>
        <td>Company ID:</td>
        <td><input type="number" name="COMP_ID" class="textInput"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Wreg_btn" value="Proceed"></td>
      </tr>
    </table>    
  </form>  
  <?php
  session_start();
  $db=mysqli_connect("localhost","root","","tvseries");
  if(isset($_POST['Wreg_btn'])){
    $SSN=($_POST['SSN']);
    $NAME=($_POST['NAME']);
    $BDAY=($_POST['BDAY']);
    $LITERACY_AGENCY=($_POST['LITERACY_AGENCY']);
    $COMP_ID=($_POST['COMP_ID']);

      $sel="SELECT COMP_ID FROM tvseries T WHERE T.COMP_ID ='$COMP_ID'";
  $cq=mysqli_query($db,$sel) or die(mysqli_error($db));
$ret=mysqli_num_rows($cq);
if($ret==false)
{
  echo"<center><h2>Please enter a Valid Company ID </h2></center>";
}
else{
    $sql="INSERT INTO director(SSN,NAME,BDAY,LITERACY_AGENCY,COMP_ID) VALUES('$SSN','$NAME','$BDAY','$LITERACY_AGENCY',$COMP_ID)";
    mysqli_query($db,$sql);
    header("location:home.php");

  }
}


?>
</body>
</html>