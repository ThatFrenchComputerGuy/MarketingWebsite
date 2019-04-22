<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Page d'accueil</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nav.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="smoothslide.js"></script>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>

<body onload="smoothscroll()">
	<header>
		<?php include "php/nav.php" ;?>
	</header>

	<section id="wall">
		<?php include "php/indexcontent/concept.php" ;?>
	</section>
</body>
</html>
