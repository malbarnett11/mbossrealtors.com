<?php
	$pageTitle ='Sign In';
	include_once 'header.php';
?>
  <section class="signup-form">
        <h2><center>Sign Up</center></h2>
		    <form action="includes/signup.inc.php" method="post">
			    <input type="text" name="name" placeholder="Full Name"> <br>
				<input type="text" name="email" placeholder="Email"><br>
				<input type="text" name="uid" placeholder="Username"><br>
				<input type="password" name="pwd" placeholder="Password"><br>
				<input type="password" name="pwdrepeat" placeholder="Repeat password"> <br>
				<button type="submit" name="submit">Sign Up</button>
				
			</form>
    
	<?php
	    if (isset($_GET["error"])){
			if ($_GET["error"] == "emptyinput"){
				echo "<br><br><p><center>Fill in all fields!</center></p>";
			}
			
			else if ($_GET["error"] == "invaliduid"){
			    echo "<br><br><p><center><p>Choose a proper username</center></p>" ;
			}
			
			else if ($_GET["error"] == "invalidemial"){
			    echo "<br><br><p><center><p>Choose a proper email</center></p>" ;
			}
			
			else if ($_GET["error"] == "passwordssontmatch"){
			    echo "<br><br><p><center><p>Password doesn'match!</center></p>"; 
			}
			
			else if ($_GET["error"] == "stmtfailed"){
			    echo "<br><br><p><center><p>Something went wrong. Try again!</center></p>" ;
			}
			
			else if ($_GET["error"] == "usernametaken"){
			    echo "<br><br><p><center><p>Username already taken!</center></p>" ;
			}
			else if ($_GET["error"] == "none"){
			    echo "<br><br><p><center><p>You have signed up!<center></p>" ;
			}
		}
	?>
    </section>
    
    
	
	
<?php
	include_once 'footer.php';
?>