<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

        <title><?php echo "$pageTitle" ?></title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png">
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="https://kit.fontawesome.com/920d9f6c70.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="header">
  <h1>MBoss Realtors</h1>
</div>

<div class="topnav">
  
<?php
    if (isset($_SESSION["useruid"])){
	    echo"<a href='home.php'>Home</a>";
	    echo"<a href='sell.php'>Sell</a>";
		echo"<a href='rent.php'>Rent</a>";
		echo"<a href='airbnb.php'>AirBnB</a>";
		echo"<a href='includes/logout.inc.php' style='float:right'>Log Out</a>";
	}
	else{
	    echo"<a href='index.php'>Home</a>";
		echo"<a href='login.php' style='float:right'>Login</a>";
		echo"<a href='signup.php' style='float:right'>Sign Up</a>";
	}
	
?>
</div>

<div class="row">