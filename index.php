<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Kerridge App</title>
	<link rel="shortcut icon" type="image/png" href="images/tabLogo.png"/>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nav.css" />
	<link rel="stylesheet" href="css/indexcontent/concept.css" />
	<link rel="stylesheet" href="css/indexcontent/usermanual.css" />
	<link rel="stylesheet" href="css/indexcontent/devmanual.css" />
	<link rel="stylesheet" href="css/indexcontent/team.css" />
    <link rel="stylesheet" href="css/indexcontent/login.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Please note that I do own a commercial licence for this plugin which can be found in the script below -->
	<script src="fullpage.js"></script>

</head>

<body>

	    <div id = "blackout"></div>

		<header>
			<?php include "php/nav.php" ;?>
	        <?php include "php/indexcontent/login.php" ;?>
		</header>

	<div id="fullpage">
		<section class="section" id="wall">
			<?php include "php/indexcontent/concept.php" ;?>
		</section>

		<section class="section" id="usermanual_section">
			<?php include "php/indexcontent/usermanual.php" ;?>
		</section>

		<section class="section" id="devmanual_section">
			<?php include "php/indexcontent/devmanual.php" ;?>
		</section>

		<section class="section" id="team_section">
			<?php include "php/indexcontent/team.php" ;?>
		</section>
	</div>

	<!-- I own a commercial licence -->
		<script type="text/javascript">
	    new fullpage('#fullpage', {
	    licenseKey: 'D27032A3-7B9948EC-84472083-5EB2E21E',
	    anchors: ['theConcept', 'userManual', 'devManual', 'theTeam'],
        navigation:true,
        showActiveTooltip: true,
        menu: '#menu'
		});
		</script>
</body>
</html>
