<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>KeepTrack of TAG Hessen e.V's activities</title>
</head>
<body>
	<header>
		<h1>KeepTrack</h1>
	</header>

	<section id="cd-timeline" class="cd-container">
		<?php
			// activites txt file
			$path = "activities.txt" ;
			$content = file_get_contents($path) ;
			$activities = explode("\n", $content) ;
			
			foreach($activities as $activity) {
				$entities = explode(";", $activity);
				$title = $entities[0] ;
				$date = $entities[1] ;
				if(array_key_exists(2, $entities))
					$link = $entities[2] ;
				else
					$link = "-" ;
		?>
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/cd-icon-location.svg" alt="Aktivität">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><?php if ($link != "-") {?><a href="<?php echo $link ; ?>"><?php } ?><?php echo $title ; ?><?php if ($link != "-") {?></a><?php } ?></h2>
				<span class="cd-date"><?php echo $date ; ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		<?php 
			}
		?>
	</section> <!-- cd-timeline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>