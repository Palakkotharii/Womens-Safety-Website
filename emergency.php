<?php
session_start();

$con1 = $_SESSION["contact1"];
$con2 = $_SESSION["contact2"];
$con3 = $_SESSION["contact3"];

$nameOfUser =  $_SESSION["username"];

$contactArray = array($con1, $con2, $con3);

for ($i = 0; $i < 3; $i++) {
    $fields = array(
        "sender_id" => "NEEDHELP",
        "message" => "EMERGENCY NEED HELP -- I'M $nameOfUser",
        "route" => "v3",
        "numbers" => "$contactArray[$i]",
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($fields),
        CURLOPT_HTTPHEADER => array(
            "authorization: grpPQ3AqWoLcha6M7j2841S0tKlyexZsFEUNJfv5bBOIG9wXuDvm5ARdC1w4X6opI3x0DYhbnB7jyguf",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo  "cURL Error #:" . $err;
    }
    else {
        echo $response;
        echo "  Your message is sent successfully";
        header("location: index.php");
    }
}