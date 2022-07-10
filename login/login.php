<?php
	$pageTitle ='Log In';
	include_once 'header.php';
?>
  <section class="signup-form">
        <h2><center>Login</center></h2>
		    <form action="includes/login.inc.php" method="post">
			    <input type="text" name="uid" placeholder="Username/Email"><br>
				<input type="password" name="pwd" placeholder="Password"><br>
				<button type="submit" name="submit">Login</button>
				
			</form>
    
	<?php
	    if (isset($_GET["error"])){
			if ($_GET["error"] == "emptyinput"){
				echo "<br><br><p><center><p>Fill in all fields!</center></p>";
			}
			
			else if ($_GET["error"] == "wronglogin"){
			    echo "<br><br><p><center><p>Wrong Login Information</center></p>" ;
			}
			
			
		}
	?>
	
    </section>
    

<?php
	include_once 'footer.php';
	?>