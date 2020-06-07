<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register - Ace in the Hole Multisport Events</title>
	<meta name="description" content="Register today with Ace in the Hole Multisport Events to participate or volunteer for one of our running, swimming, or triathalon events.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="../hamburger.js"></script>
	<script src="../slide.js"></script>
	<link rel="stylesheet" href=../css/style.css>
	<link href="../css/grid.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
	<div id="wrapper">
		<?php include '../includes/header.inc.html.php'?>
		<?php include '../includes/mobile.inc.html.php'?>
		<?php include '../includes/nav.inc.html.php' ?>
		
		<main>
			<a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="ruby" data-basecolor="rgba(255, 1, 1, 0.7)" data-highcolor="#ffd4e3">PORTLAND WEATHER</a>
			<script>
				! function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (!d.getElementById(id)) {
						js = d.createElement(s);
						js.id = id;
						js.src = 'https://weatherwidget.io/js/widget.min.js';
						fjs.parentNode.insertBefore(js, fjs);
					}
				}(document, 'script', 'weatherwidget-io-js');

			</script>
			<h1>Register Now!</h1>
			<div class="form">
				<form method="post" action=" ">
					<p class="contact">
						<label for="myname">Name:</label>
					</p>
					<input type="text" name="myname" id="myname" 
								 placeholder="First and last name" required="" tabindex="1" >

					<p class="contact">
						<label for="mygender">Gender</label>
					</p>
					<select size="1" name="mygender" id="mygender" >
						<option value="">Select a Gender</option>
						<option value="female">Female</option>
						<option value="male">Male</option>
						<option value="neutral">Non-Binary</option>
					</select>

					<p class="contact">
						<label for="myemail">Email</label>
					</p>
					<input type="email" name="myemail" id="myemail"  
								 placeholder="example@domain.com">

					<p class="contact">
						<label for="myphone">Mobile phone</label>
					</p>
					<input type="text" name="myphone" id="myphone"
								 placeholder="phone number">
					
					<h5 class="form-header">Emergency Contact</h5>
					
					<p class="contact">
						<label for="emergname">Name</label>
					</p>
					<input type="text" name="emergname" id="emergname"
								 placeholder="First and last name" tabindex="1" >

					<p class="contact">
						<label for="emergemail">Email</label>
					</p>
					<input type="email" name="emergemail" id="emergemail" 
								 placeholder="example@domain.com">

					<p class="contact">
						<label for="mytshirt">T-Shirt</label>
					</p>
					<select size="1" name="mytshirt" id="mytshirt">
						<option value="">Select a Size</option>
						<option value="xs">XS</option>
						<option value="s">S</option>
						<option value="m">M</option>
						<option value="l">L</option>
						<option value="xl">XL</option>
						<option value="xxl">XXL</option>
						<option value="xxxl">XXXL</option>
					</select>

					<h5 class="form-header">Saturday</h5>
					
					<p class="contact">
						<label for="myathlete">Role:</label>
					</p>
					<select size="1" name="myathlete" id="myathlete">
						<option value="">Select a Role</option>
						<option value="athlete">Athlete</option>
						<option value="">Volunteer</option>
					</select>

					<p class="contact">
						<label for="setevent">Event</label>
					</p>
					<select size="1" name="setevent" id="setevent">
						<option id="setOption1" selected disabled value>Select an event</option>
						<option value="long-course">Long Course - $240</option>
						<option value="olympic-tri">Olympic Triathalon = $110</option>
						<option value="10k">10K Race - $50</option>
						<option value="half-tri">Half Marathon - $75</option>
					</select>

					<h5 class="form-header">Sunday</h5>
					
					<p class="contact">
						<label for="myvolunteer">Role:</label>
					</p>
					<select size="1" name="myvolunteer" id="myvolunteer">
						<option value="">Select a Role</option>
						<option value="athlete">Athlete</option>
						<option value="">Volunteer</option>
					</select>

					<p class="contact"
						 ><label for="setevent2">Event</label>
					</p>
					<select size="1" name="setevent2" id="setevent2">
						<option id="setOption1" selected disabled value>Select an event</option>
						<option value="long-course">Long Course - $240</option>
						<option value="olympic-tri">Olympic Triathalon = $110</option>
						<option value="10k">10K Race - $50</option>
						<option value="half-tri">Half Marathon - $75</option>
					</select>
					
					<br>

					<input class="buttom" tabindex="5" value="Sign me up!" type="submit">
				</form>
			</div>
			
			<div class="box">
				<h5>Cost Includes</h5>
				<ul>
					<li>Food & Beer</li>
					<li>Access to the weekend's live entertainment & Fitness Expo</li>
					<li>Commemorative Finisher medal</li>
					<li>Accurate Chip Timing for competitive races</li>
					<li>Ace in the Hole Multisport Weekend Tech Shirt</li>
					<li>Post-event party & entertainment</li>
					<li><b>NOTE </b>Tech shirts guaranteed to pre-registered participants only.</li>
				</ul>
			</div>

		</main>
		<?php include '../includes/footer.inc.html.php'?>
	</div>
</body>

</html>
