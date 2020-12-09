<?php
/*
 ┌────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL |
 └────────────────────────────────────────────────────────────┘
 ┌───────────┬────────────────────────────────────────────────┐
 │ Product   │ YouTube HLS Stream Extractor by Channel Name   │
 │ Version   │ v1.1                                           │
 │ Provider  │ https://www.youtube.com/                       │
 │ Support   │ M3U8/VLC/KODI/SMART TV/Xream Codes Panel ETC   │
 │ Licence   │ MIT                                            │
 │ Author    │ Olsion Bakiaj                                  │
 │ Email     │ TRC4@USA.COM                                   │
 │ Author    │ Endrit Pano                                    │
 │ Email     │ INFO@ALBDROID.AL                               │
 │ Website   │ https://kodi.al                                │
 │ Facebook  │ /albdroid.official/                            │
 │ Created   │ 19 January 2020                                │
 │ Modified  │ 08 December 2020                               │
 └────────────────────────────────────────────────────────────┘
*/

// FIXED 08 December 2020

error_reporting(0);
date_default_timezone_set("Europe/Tirane");
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}

$ROOT_URL_MAIN = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$PHP_PATH = $protocol . ($_SERVER['SERVER_NAME']) . ($_SERVER['PHP_SELF']) . "";

$Example_Live = $PHP_PATH . "?id=" . "v3jpVUOi9XU";

    if(empty($_GET["id"])) {
    exit( json_encode(array(
    "App" => "YouTube HLS Extractor",
    "Version" => "1.0",
    "Support" => "Live Stream Only",
    "Message" => "ID Parameter Required",
    "Parameters" => "?id=VIDEO_ID",
    "Example Live Stream" => "{$Example_Live}",
    "PHP Code Generated From Host" => "demo.kodi.al",
    "PHP Code Generated Date" => "Tuesday, 08 December 2020 - 22:29:12"
    )));
}

$id = $_GET["id"];
$url = file_get_contents("https://www.youtube.com/watch?v=$id");

preg_match('/"hlsManifestUrl":"(.*?)"/',$url,$match);
$stream = $match[1];

$stream=str_replace("\/", "/", $stream);
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
//header("Location: " .$stream, 302); // PER XT PANEL HAP KETTE LINE EDHE MBYLL 2 TE TJERAT QE JANE ME POSHTE
echo $stream;     // << PRINT RAW CODE
readfile ($stream); // << READ HLS SOURCE DIRECT FROM BROWSER
?> 
