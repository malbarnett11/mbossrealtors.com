</div>

<?php
	
if (isset($_SESSION["useruid"])){
	    echo"<div class='footer'>
  <div class='div-footer'>
				    
					<p>We specialize in the sale and lease of commercial and residential properties to local and international clients. Our highly trained, tech-savvy, and well-supported agents help home buyers and investors to move into their dream homes and investment properties faster and more seamlessly.</p>
				
				</div>
				
				<div class='div-footer'>
				    <p><a href='home.php' class='link'>Home</a></p>
		            <p><a href='sell.php' class='link'>Sell</a></p>
					<p><a href='rent.php' class='link'>Rent</a></p>
					<p><a href='airbnb.php' class='link'>AirBnb</a></p>
				
				</div>
				   
				
				<div class='div-footer'>
				     
				     <p><i class='fa-solid fa-location-dot'></i> 95 Whitehall Avenue, Kingston 8.<p>
					 <p><i class='fa-solid fa-phone'></i> (876) 123-4567</p>
					 <p><i class='fa-solid fa-envelope'></i> info@gmail.com</p>
					 <p><i class='fa-brands fa-facebook'></i> <i class='fa-brands fa-instagram'></i> <i class='fa-brands fa-twitter'></i></p>
					 
				     
				</div>
				
				
				
				<div class='div-footer'>
				    <p><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7588.255132716485!2d-76.7976708081459!3d18.019282493638812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb3fe2af72bf9f%3A0xbeb017a71a773774!2sHalfway%20Tree%20Transport%20Centre!5e0!3m2!1sen!2sjm!4v1649570289346!5m2!1sen!2sjm' class='map' width='350' height='400' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></p>
				
				</div>
</div>";
	   
	}
	else{
	    echo"<div class='footer'>
  <div class='div-footer'>
				    
					<p>We specialize in the sale and lease of commercial and residential properties to local and international clients. Our highly trained, tech-savvy, and well-supported agents help home buyers and investors to move into their dream homes and investment properties faster and more seamlessly.</p>
				
				</div>
				
				<div class='div-footer'>
				    <p><a href='index.php' class='link'>Home</a></p>
				    <p><a href='signup.php' class='link'>Sign Up</a></p>
		            <p><a href='login.php' class='link'>Log In</a></p>
					
				
				</div>
				   
				
				<div class='div-footer'>
				     
				     <p><i class='fa-solid fa-location-dot'></i> 95 Whitehall Avenue, Kingston 8.<p>
					 <p><i class='fa-solid fa-phone'></i> (876) 123-4567</p>
					 <p><i class='fa-solid fa-envelope'></i> info@gmail.com</p>
					 <p><i class='fa-brands fa-facebook'></i> <i class='fa-brands fa-instagram'></i> <i class='fa-brands fa-twitter'></i></p>
					 
				     
				</div>
				
				
				
				<div class='div-footer'>
				    <p><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7588.255132716485!2d-76.7976708081459!3d18.019282493638812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb3fe2af72bf9f%3A0xbeb017a71a773774!2sHalfway%20Tree%20Transport%20Centre!5e0!3m2!1sen!2sjm!4v1649570289346!5m2!1sen!2sjm' class='map' width='350' height='400' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></p>
				
				</div>
</div>";
		
	}


?>

<script src="login.js"></script>
</body>
</html>