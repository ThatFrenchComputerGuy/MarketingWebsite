<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Page d'accueil</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/indexcontent/concept.css" />
	<link rel="stylesheet" href="css/indexcontent/usermanual.css" />
	<link rel="stylesheet" href="css/indexcontent/devmanual.css" />
	<link rel="stylesheet" href="css/indexcontent/team.css" />
    <link rel="stylesheet" href="css/indexcontent/login.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="smoothslide.js"></script>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>

<body onload="smoothscroll()">
    <div id = "blackout"></div>

	<header>
		<?php include "php/nav.php" ;?>
        <?php include "php/indexcontent/login.php" ;?>
	</header>

	<section id="wall">
		<?php include "php/indexcontent/concept.php" ;?>
	</section>

	<section id="usermanual_section">
		<?php include "php/indexcontent/usermanual.php" ;?>
	</section>

	<section id="devmanual_section">
		<?php include "php/indexcontent/devmanual.php" ;?>
	</section>

	<section>
		<?php include "php/indexcontent/team.php" ;?>
	</section>
</body>
</html>
