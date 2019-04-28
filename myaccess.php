<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1.0"/>
	<title>My Access</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/myaccesscontent/notes.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        function hide() {
            var mainPageElements = document.getElementsByClassName("mainPage");
            [].forEach.call(mainPageElements, function(item) {
                item.style["visibility"] = "hidden";
            });
        }
    </script>

</head>

<body onload="hide()">
	<header>
        <?php include "php/nav.php" ;?>
    </header>

    <section>
        <?php include "php/myaccesscontent/notes.php" ;?>
    </section>
</body>
</html>
