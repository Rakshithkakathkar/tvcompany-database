<?php
session_start();
 
//connect to database
$db=mysqli_connect("localhost","root","","tvseries");
 
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome to your company's database</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Welcome to your company's database</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         session_start(); 
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<div>
    <h1><center>Welcome <?php echo $_SESSION['username']; ?></h1></center>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-sm-12 col-md-5">
    <div class="panel panel-default">
        <div class="panel-body">
                <h3>What is Watchhh?</h3>
                <p>Watchhh is an app that allows you to upload and store all the details about a Tvshow the directors.</p>&nbsp;&nbsp;&nbsp;
                <h3>How do I add a Tvshow?</h3>
                <p>First, register your Tvseries company by filling out the form on this page. Once your company is registered, you can add a writer, his movies and Tvshows along with the actors in them.</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
        </div>
    </div>
</div>	
<div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
<center><b><i>REGISTER YOUR COMPANY BEFORE PROCEEDING</i></b><br><br><button><h3><a href="tvseries.php">TV Company Registration Form</a></h3></button></center><br><br>
<div class="col-sm-12 col-md-5">
    <div class="panel panel-default">
        <div class="panel-body">                
                <center>Select the attribute you want to view, update or Delete<br><br>
                    <button><h2><a href ="directoredit.php">Director</a></h2></button>
                    <button><h2><a href ="tvshowedit.php">TvShow</a></h2></button>
                    <button><h2><a href ="advertisementedit.php">Advertisement</a></h2></button>
                </center>                                    
        </div>
    </div>
</div>  

</body>
</html>