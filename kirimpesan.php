<?php
 
define('BOT_TOKEN', '1432066005:AAFZfhSP7u40cljmOkLBu9QLq2Wq9M2_Nns');
define('CHAT_ID','436433943');
 
function kirimTelegram($pesan) {
    $pesan = json_encode($pesan);
    $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
 
kirimTelegram("Hai! Ini adalah Chord Lagu Bot!");