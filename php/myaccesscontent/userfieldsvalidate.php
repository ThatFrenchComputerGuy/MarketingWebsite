<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(isset($username, $password)) {
            if ($username == "H" && $password == "H") {
                echo "/myaccess.php";
            }
        }
    }
?>
