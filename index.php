<?php session_start();?>
<html>
  <head>
    <title>Eventt Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="scripts.js"></script>
  </head>
  <body>
	<div id="header-section"></div>
    <div id="wrapper">
		<div id="header-section">
			<div id="header-content" >
				<div id="logo">
					<a href="#">
						<img id="logo-img" src="img/eventlogo.png" alt="logo"></img>
					</a>
				</div>
				<div id="header-menu">
					<?php 
					if (!isset($_SESSION["user"]))
					{
					?>
					    <a href="#">
                            <img class="header-menu-items" id="menulogin" src="img/lock.png" alt="login"></img>
                        </a>
					<?php 
					}
					else 
					{	
					?>
					<a href="#">
						<img class="header-menu-items" id="profile" src="img/login.png" alt="login"></img>
					</a>
					<?php 
					}
					?>
						<a href="#">
							<img class="header-menu-items" id="menu-item-1" src="img/eicon.png" alt="profile"></img>
						</a>
                        <a href="#">
                            <img class="header-menu-items" id="my-location" src="img/pin.png" alt="pin"></img>
                        </a>
                        <div class="categories-menu">
                            <div class="header-categories-box">
                            <ul class="categories-list">
                                <li><img class="categories-icon" src="img/private.png" alt="" />Private</li>
                                    <ul class="sub-categories-list">
                                        <li class="categories-checkbox"><input type="checkbox"/>Party</li>
                                        <li class="categories-checkbox"><input type="checkbox"/>BBQ</li>
                                    </ul>
                                <li><img  class="categories-icon" src="img/coorporate.png" alt="" />Private</li>
                                    <ul class="sub-categories-list">
                                        <li class="categories-checkbox"><input type="checkbox"/>Entertainment</li>
                                        <li class="categories-checkbox"><input type="checkbox"/>Dining</li>
                                    </ul>
                                <li><img  class="categories-icon" src="img/official.png" alt="" />Private</li>
                                    <ul class="sub-categories-list">
                                        <li class="categories-checkbox"><input type="checkbox"/>Education</li>
                                        <li class="categories-checkbox"><input type="checkbox"/>Lectures</li>
                                    </ul>
                            </ul>
                            </div>
                        </div>
				</div>
				<div id="mobile-menu">
					<img id="mobile-menu-img" src="img/mobile.png" alt="logo"></img>
				</div>
			</div>
		</div>
		<div id="footer-section">
			<div id="footer-content">
				<div id="footer-menu">
					<a href="#">
						<span class="footer-menu-items" id="about-us">About us</span>
					</a>
					<a href="#">
						<span class="footer-menu-items" id="about-eventfinder">About EventFinder</span>
					</a>
				</div>
			</div>
		</div>
		<div id="login" class="login-register-forgotten">
			<div id="login-box">
				<div id="login-title"><h2>Login</h2></div>
				<form action="" method="post">
					<input class="input-items" type="text" id="username" placeholder="Username"/>
					<br>
					<br>
					<input class="input-items" type="password"  id="password" placeholder="Password"/>
					<br>
					<br>
					<input type="submit" class="loginbtn" value="Log In" id="loginbtn" />
				</form> 
				<div id="login-options"><a id="login-options-register" href="#">Register </a> | <a id="login-options-lost" href="#"> Lost your password?</a></div>
			</div>
		</div>
		<div id="register" class="login-register-forgotten">
			<div id="register-box">
				<div id="register-title"><h2>Register</h2></div>
				<form action="" method="post">
					<input class="input-items" type="text" id="regname" placeholder="Name"/>
					<br>
					<br>
					<input class="input-items" type="text" id="regusername" placeholder="Username"/>
					<br>
					<br>
					<input class="input-items" type="text" id="email" placeholder="E-mail"/>
					<br>
					<br>
					<input class="input-items" type="password"  id="regpassword" placeholder="Password"/>
					<br>
					<br>
					<input class="input-items" type="password"  id="regreppassword" placeholder="Repeat Password"/>
					<br>
					<br>
					<input type="submit" class="loginbtn" value="Register" id="registerbtn" />
				</form> 
				<div id="login-options"><a id="login-options-login" href="#">Login </a> | <a id="login-options-lost" href="#"> Lost your password?</a></div>
			</div>
		</div>
		<div id="forgottenpswd" class="login-register-forgotten">
			<div id="lost-box">
				<div id="lost-title"><h2>Lost Password</h2></div>
				<form action="" method="post">
					<input class="input-items" type="text" id="lostemail" placeholder="Enter your E-mail"/>
					<br>
					<br>
					<input type="submit" class="loginbtn" value="Submit" id="lostbtn" />
				</form> 
				<div id="login-options"><a id="login-options-login" href="#">Login </a> | <a id="login-options-register" href="#"> Register</a></div>
			</div>
		</div>
		<div id="magic-left" class="magic-action"></div>
		<div id="magic-top" class="magic-action"></div>
		<div id="magic-right" class="magic-action"></div>
		<div id="magic-bottom" class="magic-action"></div>
		<div id="edit-profile" class="login-register-forgotten">
			<div id="edit-profile-box">
				<div id="edit-rofile-title"><h2>Edit Profile</h2></div>
				<form action="" method="post">
				 <img id="editpic" src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar" width="70" height="70">
					<br>
					<br>
					<input class="input-items" type="text" id="Fornavn" value="Name"/>
					<br>
					<br>
					<input class="input-items" type="text" id="email" value="email"/>
					<br>
					<br>
						<input class="input-items" type="text" placeholder="password" />
					<br>
					<br>
					<input class="input-items" type="password"  placeholder="repeat password" />
					<br>
					<br>
					<input type="submit" class="loginbtn" value="Update"/>
				</form> 
			</div>
		</div>
		
		<div id="notification" ><div id="notification-content"></div></div>
		
		<?php 
		if (!isset($_SESSION["user"]))
		{
		?>
		<div id="information-box">
			<p>
				Vel dolore labitur ut, eos minim oportere disputationi eu, delenit tibique accusam vix an. Meis mucius in vim. Ea prompta tractatos nam, imperdiet appellantur pri ex. Nam atqui honestatis ei, vix in natum harum eirmod. Ad eos atomorum gubergren reprehendunt, pro in sale atqui altera, mea ut eleifend delicatissimi.
			</p>
		</div>
		<?php 
		}
		?>
		<div id ="about-us-div">
			<p>
				Web development 2016 Hackathon
			</p>
			<p>
				Project name: #EventFinder
			</p>
			<p>
				Group 1
			</p>
			<p>
				members: Georgi Morten Thor Kaspars Cecilie Ranuka
			</p>
			</p>
		</div>
		<div id ="about-eventfinder-div">
			<p>
			Vel dolore labitur ut, eos minim oportere disputationi eu, delenit tibique accusam vix an. Meis mucius in vim. Ea prompta tractatos nam, imperdiet appellantur pri ex. Nam atqui honestatis ei, vix in natum harum eirmod. Ad eos atomorum gubergren reprehendunt, pro in sale atqui altera, mea ut eleifend delicatissimi.
			</p>
		</div>
		<div id="event-description">
			<p>
			it will come
			</p>
		 <img src="img/party.jpg" alt="party" height="250" width="450"></img>
		</div>
		<div id="map">
		</div>
	</div>

	<script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);
					<?php 
					if (isset($_SESSION["user"]))
					{
						?>
						var	icona = 'http://localhost/eventfinder/img/profilepin.png';
						var cor1 = 55.380679699999995;
						var cor2 = 10.4118356;
						<?php
					}
					else 
					{
						?>
						var	icona = 'http://localhost/eventfinder/img/nonprofilepin.png';
						var cor1 = 55.4038;
						var cor2 = 10.4024;
						<?php
					}
					?>
					

		
			function init() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(cor1, cor2), // New York
                styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"on"},{"saturation":"44"},{"lightness":"-28"},{"hue":"#ff9900"}]},{"featureType":"transit.station","elementType":"geometry.fill","stylers":[{"saturation":"-6"},{"color":"#c27c7c"}]},{"featureType":"transit.station","elementType":"geometry.stroke","stylers":[{"saturation":"0"},{"lightness":"8"},{"color":"#ae5252"}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"lightness":"5"},{"color":"#3c3c3c"}]},{"featureType":"transit.station","elementType":"labels.text.stroke","stylers":[{"color":"#ff9900"},{"weight":"3.55"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"saturation":"-83"},{"weight":"1.84"},{"visibility":"on"},{"gamma":"0.00"},{"color":"#ff9900"},{"lightness":"-6"}]}]
            };

            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
            position: new google.maps.LatLng(cor1, cor2),
			icon: icona,
            map: map,
            title: 'You'
            });
			
			marker.addListener('click', function() {
				$( "#edit-profile" ).show();
				$( ".magic-action" ).show();
			});
			  
			<?php 
					if (isset($_SESSION["user"]))
					{
						?>		
							
							var cat2 = new google.maps.Marker({
							position: new google.maps.LatLng(55.376111699999995, 10.41324),
							icon: "http://localhost/eventfinder/img/coorporatepin.png",
							map: map,
							title: 'Event'
							});
							
							cat2.addListener('click', function() {
								$( "#event-description" ).show();
								$( ".magic-action" ).show();
							});
							
							var cat3 = new google.maps.Marker({
							position: new google.maps.LatLng(55.383179699999995, 10.39124),
							icon: "http://localhost/eventfinder/img/officialpin.png",
							map: map,
							title: 'Event'
							});
							
							cat3.addListener('click', function() {
								$( "#event-description" ).show();
								$( ".magic-action" ).show();
							});
							
							var cat4 = new google.maps.Marker({
							position: new google.maps.LatLng(55.383179699999995, 10.42124),
							icon: "http://localhost/eventfinder/img/officialpin.png",
							map: map,
							title: 'Event'
							});
							
							cat4.addListener('click', function() {
								$( "#event-description" ).show();
								$( ".magic-action" ).show();
							});
							
							var cat5 = new google.maps.Marker({
							position: new google.maps.LatLng(55.381179699999995, 10.42454),
							icon: "http://localhost/eventfinder/img/privatepin.png",
							map: map,
							title: 'Event'
							});
							
							cat5.addListener('click', function() {
								$( "#event-description" ).show();
								$( ".magic-action" ).show();
							});
							
							var cat6 = new google.maps.Marker({
							position: new google.maps.LatLng(55.376979699999995, 10.43454),
							icon: "http://localhost/eventfinder/img/privatepin.png",
							map: map,
							title: 'Event'
							});
							
							cat6.addListener('click', function() {
								$( "#event-description" ).show();
								$( ".magic-action" ).show();
							});
							
							var cat7 = new google.maps.Marker({
							position: new google.maps.LatLng(55.375179699999995, 10.39454),
							icon: "http://localhost/eventfinder/img/privatepin.png",
							map: map,
							title: 'Event'
							});
							
							cat7.addListener('click', function() {
								$( "#event-description" ).show();
								$( ".magic-action" ).show(); 
							});
						<?php
					}
			?>

        }
		
		
		
		$(document).ready(function(){
		
		$(document).on('click','#menulogin', function(e) {
		$( "#information-box" ).hide();
		$( "#login" ).show();
		$( ".magic-action" ).show();
		}) 

		$(document).on('click','#profile', function(e) {
		$( "#information-box" ).hide();
		$( "#edit-profile" ).show();
		$( ".magic-action" ).show();
		}) 

		
		$(document).on('click','.magic-action', function(e) {
		$( "#login" ).hide();
		$( "#register" ).hide();
		$( "#forgottenpswd" ).hide();
		$( ".magic-action" ).hide();
		$( "#edit-profile" ).hide();
		$( "#event-description" ).hide();
		$( "#information-box" ).show();
		$( "#about-us-div" ).hide();
		$( "#about-eventfinder-div" ).hide();
		})

		$('a, form').click(function(e) {
			e.preventDefault();
		});		
		
		$(document).on('click','#loginbtn', function(e) {
		
		var usr = $('#username').val();
		var pswd = $('#password').val();
		
				$.ajax({
			   type: "POST",
			   url: "login.php",
			   data: {usr:usr, pswd:pswd},
				cache: false,
				success: function(html){
				//start session also
				if (html.trim() == "Please check input!")
				{
					$( "#login" ).show();
					$( "#notification-content" ).html(html);
					$("#notification").show().delay(2000).fadeOut();
				}
				else 
				{
					location.reload(); 
				}
				}
				});
		})
		
		$(document).on('click','#registerbtn', function(e) {
		
		var name = $('#regname').val();
		var usrname = $('#regusername').val();
		var email = $('#email').val();
		if ($('#regpassword').val() == $('#regreppassword').val())
		{
		var pswd = $('#regpassword').val();
		
				$.ajax({
			   type: "POST",
			   url: "register.php",
			   data: {name:name, usrname:usrname, email:email, pswd:pswd},
				cache: false,
				success: function(html){
					$( "#register" ).hide();
					$( "#login" ).show();
					$( "#notification-content" ).html(html);
					$("#notification").show().delay(2000).fadeOut();
				}
				});
		}
		else 
		{
		alert('passwords dont match');
		}

		})
		

		
		$(document).on('click','#lostbtn', function(e) {
		var email = $('#lostemail').val();
				$.ajax({
			   type: "POST",
			   url: "retrivepassword.php",
			   data: {email:email},
				cache: false,
				success: function(html){
					$( "#forgottenpswd" ).hide();
					$( "#login" ).show();
					$( "#notification-content" ).html(html);
					$("#notification").show().delay(2000).fadeOut();
				}
				});
		})
		
		
		$(document).on('click','#login-options-register', function(e) {
			$( "#login" ).hide();
			$( "#forgottenpswd" ).hide();
			$( "#register" ).show();			
		})
		
		$(document).on('click','#login-options-lost', function(e) {
			$( "#login" ).hide();
			$( "#register" ).hide();
			$( "#forgottenpswd" ).show();			
		})
		
		$(document).on('click','#login-options-login', function(e) {
			$( "#forgottenpswd" ).hide();
			$( "#register" ).hide();
			$( "#login" ).show();			
		})
		
		$(document).on('click','#my-location, #logo-img', function(e) {
			location.reload(); 
		})
		
		$(document).on('click','#about-us', function(e) {
			$( "#about-us-div" ).show();
			$( ".magic-action" ).show();
		})
		
		$(document).on('click','#about-eventfinder', function(e) {
			$( "#about-eventfinder-div" ).show();
			$( ".magic-action" ).show();
		})
		
		});
		



    </script>
    
  </body>
</html>
