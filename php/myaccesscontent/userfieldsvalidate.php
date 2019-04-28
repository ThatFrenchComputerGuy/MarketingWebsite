<?php
    try {
        if ($_SERVER["REQUEST_METHOD"] == "POST" &&
            isset($_POST["username"], $_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if(isset($username, $password)) {
                $backendURL = "https://backend.team8dev.com/login";
                $loginInfo = array("username" => $username,
                                   "password" => $password);

                $jsonLoginInfo = json_encode($loginInfo);

                $curlSession = curl_init();
                curl_setopt($curlSession, CURLOPT_CAINFO, dirname(__FILE__)."/cacert.pem");
                curl_setopt($curlSession, CURLOPT_URL, $backendURL);
                curl_setopt($curlSession, CURLOPT_POST, 1);
                curl_setopt($curlSession, CURLOPT_POSTFIELDS, $jsonLoginInfo);
                curl_setopt($curlSession, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

                $results = curl_exec($curlSession);

                curl_close($curlSession);
            }
        }
    }
    catch(Exception $e) {}
?>
