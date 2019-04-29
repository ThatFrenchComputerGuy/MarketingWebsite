<?php
    session_start();
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $token = $_SESSION["token"];

        # curl setup
        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_CAINFO, dirname(__FILE__)."/cacert.pem");
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlSession, CURLOPT_TIMEOUT, 3);
        curl_setopt($curlSession, CURLOPT_HTTPHEADER, array("Content-Type: application/json",
                                                            "Authorization: Bearer ".$token));

        # get meetings
        $meetingsURL = "https://backend.team8dev.com/meeting";
        curl_setopt($curlSession, CURLOPT_URL, $meetingsURL);
        $meetingResultsJSON = curl_exec($curlSession);
        $meetingResults = json_decode($meetingResultsJSON, true);

        # add notes to meeting info
        foreach ($meetingResults as $key => $value) {
            $notesURL = "https://backend.team8dev.com/note?meetingId=".$meetingResults[$key]["id"];
            curl_setopt($curlSession, CURLOPT_URL, $notesURL);
            $notesResultsJSON = curl_exec($curlSession);
            $notesResults = json_decode($notesResultsJSON, true);

            $meetingResults[$key]["notes"] = $notesResults;
        }


        # curl close
        curl_close($curlSession);

        echo json_encode($meetingResults);
    }
?>
