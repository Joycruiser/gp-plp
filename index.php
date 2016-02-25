<?php session_start();?>
<html>
  <head>
    <title>Event Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
					<a href="#">
						<img class="header-menu-items" id="menu-item-1" src="img/eicon.png" alt="profile"></img>
					</a>
					<?php 
					if (!isset($_SESSION["user"]))
					{
					?>
					<a href="#">
						<img class="header-menu-items" id="menulogin" src="lock.png" alt="login"></img>
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
						<img class="header-menu-items" id="menu-item-3" src="img/pin.png" alt="pin"></img>
					</a>
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
						<span class="footer-menu-items" id="footer-menu-item-2">About us</span>
					</a>
					<a href="#">
						<span class="footer-menu-items">About EventFinder</span>
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
		<div id="event-managing-center" class="event-tab">
			<div class="event-tab-container">Search+categories filter+profile edit+ create event</div>
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
		<div id="map">
		</div>
	</div>

	<script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);
        
		function init() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(55.4038, 10.4024), // New York
                styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#505050"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"on"},{"saturation":"44"},{"lightness":"-28"},{"hue":"#ff9900"}]},{"featureType":"transit.station","elementType":"geometry.fill","stylers":[{"saturation":"-6"},{"color":"#c27c7c"}]},{"featureType":"transit.station","elementType":"geometry.stroke","stylers":[{"saturation":"0"},{"lightness":"8"},{"color":"#ae5252"}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"lightness":"5"},{"color":"#3c3c3c"}]},{"featureType":"transit.station","elementType":"labels.text.stroke","stylers":[{"color":"#ff9900"},{"weight":"3.55"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"saturation":"-83"},{"weight":"1.84"},{"visibility":"on"},{"gamma":"0.00"},{"color":"#ff9900"},{"lightness":"-6"}]}]
            };

            
			var iconBase = 'https://localhost/eventfinder/';
			var icons = {
			  parking: {
				icon: iconBase + 'pin.png'
			  }
			};

			function addMarker(feature) {
			  var marker = new google.maps.Marker({
				position: new google.maps.LatLng(55.4038, 10.4024),
				icon: icons[feature.type].icon,
				map: map
			  });
			}

        }
		
		
		
		$(document).ready(function(){
		
		$(document).on('click','#menulogin', function(e) {
		$( "#information-box" ).hide();
		$( "#login" ).show();
		$( ".magic-action" ).show();
		}) 

		$(document).on('click','.magic-action', function(e) {
		$( "#login" ).hide();
		$( "#register" ).hide();
		$( "#forgottenpswd" ).hide();
		$( ".magic-action" ).hide();
		$( "#information-box" ).show();

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
		
		
		});
    </script>
    
  </body>
</html>
