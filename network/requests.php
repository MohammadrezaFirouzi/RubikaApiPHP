<?php 

function getServer(){
    return "https://messengerg2c" . rand(2, 6) . ".iranlms.ir";
}

function request($data) {

    $head = array(
        "Accept-Encoding: gzip",
        "Connection: Keep-Alive",
        "User-Agent: okhttp/3.12.1",
        "Referer: https://web.rubika.ir/",
        "Content-Type: application/json; charset=utf-8"
    );

    while (true) { 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, getServer());
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $result = json_decode($response, true);

        if ($status == 200) {
            return json_decode($response, true);
        } else {
            continue;
        }
    }
}

?>