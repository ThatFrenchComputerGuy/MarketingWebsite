<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Page d'accueil</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/concept.css" />
	<link rel="stylesheet" href="css/usermanual.css" />
	<link rel="stylesheet" href="css/devmanual.css" />
	<link rel="stylesheet" href="css/team.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="smoothslide.js"></script>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>

<body onload="smoothscroll()">
	<header>
		<?php include "php/nav.php" ;?>
	</header>

	<section id="wall">
		<?php include "php/concept.php" ;?>
	</section>

	<section id="usermanual_section">
		<?php include "php/usermanual.php" ;?>
	</section>

	<section id="devmanual_section">
		<?php include "php/devmanual.php" ;?>
	</section>

	<section>
		<?php include "php/team.php" ;?>
	</section>
</body>
</html>
