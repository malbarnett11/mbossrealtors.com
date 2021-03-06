<?php
	$pageTitle ='Home';
	include_once 'header.php';
?>

<?php
	if (isset($_SESSION["useruid"])){
		echo"<p>Welcome " .$_SESSION["useruid"]. "</p>";	
	}
?>
<div class="leftcolumn">
	<div class="card">
		
		<h2>3 Bedroom House For Sale</h2>
		<h5>JMD $21,000,000</h5>
		
		<div id="slideshow1" class="slideshow-container">
			
			<a href="signup.php">
			<div class="mySlides fade">
				
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/3aa400f796d7b1f82f956da8ae18432c.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/5caf25419d2b7dcff71d8d722b6de696.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/b68ffd040fbb530a839ddebcecf8952e.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/d7ca8d13d27fbf540222ed25c0ad4cb0.jpg" style="width:100%">
				
			</div>
			</a>
			
			<a class="prev" onclick="plusSlides(-1,slideshow1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1, slideshow1)">&#10095;</a>
			
			
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1, slideshow1)"></span> 
				<span class="dot" onclick="currentSlide(2, slideshow1)"></span> 
				<span class="dot" onclick="currentSlide(3, slideshow1)"></span> 
			</div>
		</div>
		<br>
		
		
		<p>Cozy 3 bedrooms bungalow, located in the well appointed community of Rhyne Park, Rosehall. Fully walled, automatic gate and well maintained, this property is perfect for the discerning family, or buyer. With just 20 minutes to the airport, 10 mins to major shopping, major medical, beaches, schools, 5 minutes to the famous Cinnamon Hill golf course. Don't let this rare opportunity pass!</p>
		<p>
			<ul class="list">
				<li><i class="fa-solid fa-bed" style="font-size:14px;padding:10px";></i> Bedrooms:2</li>
				<li><i class="fa-solid fa-bath" style="font-size:16px; padding:10px"></i> Bathroom:3</li>
				<li><i class="fa-solid fa-square"style="font-size:16px; padding:10px"></i> Lot Size: 4732</li>
			</ul>
			<hr align="center">
			
			<h3>Amenities</h3>
			
			<ul class="list">
				<li style="font-size:16px; padding:10px;">Other Flooring: Ceramic Tile</li>
				<li style="font-size:16px; padding:10px;">Golf Course Nearby</li>
				<li style="font-size:16px; padding:10px;">Garden Area</li>
				<li style="font-size:16px; padding:10px;">Main Level Entry</li>
				<li style="font-size:16px; padding:10px;">Fully Fenced</li>
				
			</ul>
			
		</p>
		
		
	</div>
	<div class="card">
		<h2>2 Bedroom House For Rent </h2>
		<h5>JMD $90,000 per Month</h5>
		
		<div id="slideshow2" class="slideshow-container">
			
			<a href="signup.php">
			<div class="mySlides fade">
				
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/85fcd3f6747065b7205bc91b26034761.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/629d27c02c39e68d6b455c321d271c68.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/5786248d0f09e46ccc7abf6a55acd7ef.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/d2ebe9efbd6c32b401f9c562c831be83.jpg" style="width:100%">
				
			</div>
			</a>
			
			<a class="prev" onclick="plusSlides(-1, this.parentNode)">&#10094;</a>
			<a class="next" onclick="plusSlides(1, this.parentNode)">&#10095;</a>
			
			
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1, slideshow2)"></span> 
				<span class="dot" onclick="currentSlide(2, slideshow2)"></span> 
				<span class="dot" onclick="currentSlide(3, slideshow2)"></span> 
			</div>
		</div>
		<br>
		
		
		
		<p>This stunning Smart home boasts high ceilings with an open-plan, spacious living/dining area, kitchen with custom built in cabinets and granite countertop, roomy bedrooms with A/C and ceiling fans, water heater, adequate parking and 24-hour security at the entrance to the complex. The gorgeous home provides a family-oriented lifestyle options aplenty: less than 2 minutes' walk from the kids play area with other recreational amenities, such as, swimming pools, basketball and tennis court. Want to relax and kick start other hobbies no need to look any further as this property is five minutes from Caymanas Golf Club and the Kingston Polo Club. Don't Delay...Call today for viewing!</p>
		<p>
			<ul class="list">
				<li><i class="fa-solid fa-bed" style="font-size:16px; padding:10px";></i> Bedrooms:2</li>
				<li><i class="fa-solid fa-bath" style="font-size:16px; padding:10px"></i> Bathroom:1</li>
				<li><i class="fa-solid fa-square"style="font-size:16px; padding:10px"></i> Lot Size: 2598</li>
			</ul>
			<hr align="center">
			<h3>Amenities</h3>
			
			<ul class="list">
				<li style="font-size:16px; padding:10px;">Other Flooring: Ceramic Tile</li>
				<li style="font-size:16px; padding:10px;">Golf Course Nearby</li>
				<li style="font-size:16px; padding:10px;">Garden Area</li>
				<li style="font-size:16px; padding:10px;">Electronic Gate</li>
				<li style="font-size:16px; padding:10px;">Fully Fenced</li>
				<li style="font-size:16px; padding:10px;">24 Hour Security</li>
				<li style="font-size:16px; padding:10px;">Swimming Pool</li>
				<li style="font-size:16px; padding:10px;">Playground</li>
				
			</ul>
			
		</p>
		
		
	</div>
	
	<div class="card">
		<h2>5 Bedroom House </h2>
		<h5>USD $200 per Night</h5>
		
		<div id="slideshow3" class="slideshow-container">
			
			<a href="signup.php">
			<div class="mySlides fade">
				
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/af408eba0c59bd727e2b129fb6428e61115aa055efeb00c97ca7aef2435435c89c0dbf6cb4e56dc4bec8d6e1f2ce4d96bed1d9536b96066188219cc0474576b9.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/6be7d5395b9aae498713573e2a066481b198129949e2ede1a9a064a6727d889843a1d97d25b97b93d66a324b599cebfc1946c722b8fca7e436961c2eb3f4d225.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/90340e508399da5607cfba8fb1de3f50b964b61cff60695e809b163389582fc355c617fdc141e430ce9c4c747bd539e1e521d835e6ae14654d410000d594386a.jpg" style="width:100%">
				
			</div>
			
			<div class="mySlides fade">
				
				<img src="https://d1p6c8qwy766j6.cloudfront.net/storage/e1fa94f3eeece7dc15517ae44e975a669cb124a5763754c2d30e131656518c8508276849aa6478e46e01eb7c54de0f5481c2253bae673bd8d33382d707e3fdd5.jpg" style="width:100%">
				
			</div>
			</a>
			
			<a class="prev" onclick="plusSlides(-1, this.parentNode)">&#10094;</a>
			<a class="next" onclick="plusSlides(1, this.parentNode)">&#10095;</a>
			
			
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1, slideshow3)"></span> 
				<span class="dot" onclick="currentSlide(2, slideshow3)"></span> 
				<span class="dot" onclick="currentSlide(3, slideshow3)"></span> 
			</div>
		</div>
		<br>
		
		<p>Nestled on a coveted cul-de-sac on Sunset Avenue, this classic haven is situated just a short respite from Hillel Academy and Barbican. This 4,000  SF home features 5 bedrooms, 4 full bathrooms across 2-levels and lots of outdoor living space. 
			
			Presiding over a ?? acre property, enjoying a 2-car garage, and second floor views of the city, and self-contained investment flat with additional kitchen. 
			
		Known for its rich history, quiet tree-lined streets, and architectural masterpieces, Cherry Gardens is one of the most distinguished neighborhoods in St. Andrew. Along with the house???s close proximity to Norbrook, Barbican, and the finest retail, restaurants, and shopping are just moments from the home.</p>
		<p>
			<ul class="list">
				<li><i class="fa-solid fa-person"style="font-size:16px; padding:10px;"></i> Max Person: 5</li>
				<li><i class="fa-solid fa-bed" style="font-size:14px; padding:10px;";></i> Bedrooms:5</li>
				<li><i class="fa-solid fa-bath" style="font-size:16px; padding:10px;"></i> Bathroom:4</li>
				<li><i class="fa-solid fa-square"style="font-size:16px;padding:10px;"></i> Lot Size: 4000 </li>
			</ul>
			<hr align="center">
			<h3>Amenities</h3>
			
			<ul class="list">
				<li ><i class="fa-solid fa-shower" style="font-size:16px; padding:10px;"></i> Shower</li>
				<li ><i class="fa-solid fa-wifi" style="font-size:16px; padding:10px;"></i> WiFi</li>
				<li ><i class="fa-solid fa-tv" style="font-size:16px; padding:10px;"></i> TV</li>
				<li ><i class="fa-solid fa-kitchen-set" style="font-size:16px; padding:10px;"></i> kitchen</li>
			</ul>
			<hr align="center">
			
			<h3>Extra Info</h3>
			
			<p>Our apartment is really clean and we like to keep it that way. Enjoy your stay.</p>
			
			<p>We accept: <i class="fa-brands fa-cc-visa"></i> <i class="fa-brands fa-cc-mastercard"></i>  <i class="fa-brands fa-cc-paypal"></i></p>
			
			<hr align="center">
			
			<h3>Contact Information</h3>
			<ul class="list">
				<li style="font-size:16px; padding:10px;"><i class="fa-solid fa-location-dot"></i>  Barbican, Kingston6</li>
				<li style="font-size:16px; padding:10px;"><i class="fa-solid fa-phone"></i> Phone:+1 (876) 123-4567</li>
				<li style="font-size:16px; padding:10px;"><i class="fa-brands fa-google"></i> Email: mail@gmail.com</li>
				
			</ul>
		</p>
		
		
	</div>
</div>
<div class="rightcolumn">
    <div class="card">
		<h2 class="header3">About Me</h2>
		 <img src="https://scontent.fktp2-1.fna.fbcdn.net/v/t31.18172-8/14409407_355948488069888_5138327829980609409_o.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=whuN4bug2R0AX-ilUXf&_nc_ht=scontent.fktp2-1.fna&oh=00_AT95gkIa--FfLr-nuaIPzSryl4Qzk4DBH_kAERzdVkHasQ&oe=62F0EF22" class="img1" height="100px" width="100%" />
		<p>I started a HEART course on Web Design on January 10, 2022 and came a long way from then. Trail and error of previous projects lead to this project. September 2022, I will be studing accounting at UWI. You will say "Wait a minute why don't you study Web Designing". Why not continue with both courses In today economic one skill is not enough to be successful.</p>
		
		
		<h3 class="center">Acknolwegement</h3>
		<div>I would like to express my special thanks to Mr.Gordon and fellow team mate from PHP Application who I learned alot from. I would like to thank W3Schools Dani Krossing on Youtube to help me take web designing to a next level. Inspiration for this project I am grateful to acknowledge Keller Williams Jamaica and lastly i will like to thank my parents  who help push me to finish this project.</div>
		
		<h3 class="header3">Popular Post</h3>
		<a href="https://www.kellerwilliamsjamaica.com/" class="links" target="_blank"><img src="https://blog.kellerwilliamsjamaica.com/wp-content/uploads/2021/05/beachfront-apartments-for-sale-antigua-2-1152x600-1-1024x533.jpg" class="img1" height="100px" width="100%" /></a>
		<p>Looking to Buy, Sell or Rent a Property. Check out <a href="https://www.kellerwilliamsjamaica.com/" class="links" target="_blank">Keller Williams Jamaica</a>.</p>
		
		<a href="https://www.jamstockex.com/" class="links" target="_blank"><img src="https://www.jamstockex.com/wp-content/uploads/2022/01/JSE-Logo-New-scaled-1-e1641761341894.jpeg" class="img1" height="100px" width="100%" /></a>
		<p>New Stock Market. Visit <a href="https://www.jamstockex.com/" class="links" target="_blank">Jamaica Stock Exchange</a>.</p>
		
		<a href="https://www.w3schools.com/" class="links" target="_blank"><img src="img/w3.png" class="img1" height="100px" width="100%" /></a>
		<p>Want to learn Web Designing. Visit <a href="https://www.w3schools.com/" class="links" target="_blank">W3school</a>.</p>
		
		
		<iframe width="100%" height="150" src="https://www.youtube.com/embed/TKYsuU86-DQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<p>Check Out <a href="https://www.youtube.com/c/TheCharmefis" class="links" target="_blank">Dani Krossing</a> Youtube Channel</p>
		
		<h3 class="header3">Follow Me</h3>
		<p><center>
		<a href="https://www.facebook.com/malik.barnett.737/" class="icon"><i class="fa-brands fa-facebook"></i></a> 
		<a href="https://www.instagram.com/malikbarnett2002/" class="icon"><i class="fa-brands fa-instagram"></i></a>
		<a href="https://twitter.com/MalikBarnett10" class="icon"><i class="fa-brands fa-twitter"></i></a>
		</center></p>
	</div>
</div>

<?php
	include_once 'footer.php';
?>
