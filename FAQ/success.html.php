<!DOCTYPE html>
<html lang="en">

<head>
	<title>FQA</title>
	<meta name="description" content="Contact Ace in the Hole Multisport Events to participate or volunteer for one of our running, swimming, or triathalon events.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="../hamburger.js"></script>
	<script src="../slide.js"></script>
	<link rel="stylesheet" href=../css/style.css>
	<link rel="stylesheet" href="../css/grid.css">
	<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>
	<div id="wrapper">
		<?php include '../includes/header.inc.html.php'; ?>
		<?php include '../includes/nav.inc.html.php'; ?>
		<main>
			<h1>Thank you!</h1>
			<p>Our records show you submitted the following:<br>

				Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
				Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
				Message: <?php echo htmlspecialchars($mymessage, ENT_QUOTES, 'UTF-8'); ?><br>
			</p>
		</main>
		<?php include '../includes/footer.inc.html.php'; ?>
	</div>
</body>

</html>
