<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ace in the Hole Multisport Events</title>
	<meta name="description" content="Contact Ace in the Hole Multisport Events to participate or volunteer for one of our running, swimming, or triathalon events.">
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
		<header>
			<?php include '../includes/header.inc.html.php'?>
			<?php include '../includes/mobile.inc.html.php'?>
			<?php include '../includes/nav.inc.html.php' ?>

		</header>
		<main>

			<div class="box">
				<h2>FQA</h2>
				<p><b>What are the Rules? </b>We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike race for obvious safety reasons.</p>

				<p><b>Can I use a personal music device while cycling? </b>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>

				<p><b>Can I use a personal music device while running? </b>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
				<ul>
					<li>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</li>
					<li>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>
					<li>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>
				</ul>

				<p><b>Do I need to wear a wetsuit? </b>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>

				<p><b>Do I have to use a road or racing bike? </b> No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>

			</div>
			<div class="form">
				<form method="post" action=" " id="contactform">

					<p class="contact"><label for="myName">Name:</label></p>
					<input id="myName" name="myName" placeholder="First and last name" required="" tabindex="1" type="text">

					<p class="contact"><label for="myEmail">Email</label></p>
					<input id="myEmail" name="myEmail" placeholder="example@domain.com" required="" type="text">

					<p><label for="myQuestion">Question:</label></p>
					<textarea rows="10" cols="40" name="myQuestion" id="myQuestion" type="text"></textarea>

					<p class="contact"><label for="role">Role:</label></p>
					<select id="role" name="role" required="">
						<option id="setOption1" selected disabled value>Select One</option>
						<option value="athlete">Athlete</option>
						<option value="volunteer">Volunteer</option>
						<option value="interestedParty">Interested Party</option>
					</select>

					<br>

					<input class="buttom" name="submit" id="submit" tabindex="5" value="submit" type="submit">

				</form>

			</div>


		</main>
		<?php include '../includes/footer.inc.html.php'?>
	</div>
</body>

</html>
