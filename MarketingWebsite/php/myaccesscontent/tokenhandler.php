<?php
    session_start();
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["token"])) {
        $_SESSION["token"] = $_POST["token"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["get"])) {
        if ($_POST["get"]) {
            echo $_SESSION["token"];
        }
    }
?>
