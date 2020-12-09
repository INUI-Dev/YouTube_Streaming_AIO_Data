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
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}
$ROOT_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$XTREAM_PANEL = $ROOT_URL . "Xtream.php?id=" . "v3jpVUOi9XU";
$RAW_STREAM = $ROOT_URL . "RAW.php?id=" . "v3jpVUOi9XU";
$M3U_STREAM = $ROOT_URL . "M3U.php?id=" . "v3jpVUOi9XU";
$KODI_STUCTURE = $ROOT_URL . "Kodi.php?id=" . "v3jpVUOi9XU";

if(!isset($_GET['id']))
die("<b>
<center>
<font color=lime><h2>YouTube Streaming</h2></b>
</center>
<center>
<font color=red><b>STRUKTURA!!!</b>
</center>
<br/>
<b>
<center>
<font color=lime>Platform: Smart TV VLC Kodi ETC</b>
</center>
</font>
<br/>
<body style='background-color:black'>
<b>
<center>
<font color=lime>?id={LIVE STREAM VIDEO ID}</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>Pershembull:<br>
<font color=lime>XTREAM PANEL:<font color=red> $XTREAM_PANEL<br>
<font color=lime>M3U STREAM:<font color=red> $M3U_STREAM<br>
<font color=lime>RAW STREAM:<font color=red> $RAW_STREAM<br>
<font color=lime>KODI STREAM:<font color=red> $KODI_STUCTURE<br>
</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>API: https://kodi.al/</b></center></font>
<br/>
<b><center><font color=lime>FB: /albdroid.official/</b></center></font><br/>
");
{

$id = $_GET["id"];
date_default_timezone_set("Europe/Tirane");
function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36");
    curl_setopt($ch, CURLOPT_REFERER, "https://www.youtube.com/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$url = get_data('https://www.youtube.com/watch?v=' . $id);
preg_match('/"hlsManifestUrl":"(.*?)"/',$url,$matches);
$stream = $matches[1];
$Get_Data_URL = (('http://youtube.com/get_video_info?video_id=' . $id));
$Get_Data_Contents = urldecode(trim($Get_Data_URL));
$string_data = file_get_contents($Get_Data_Contents);
$decoded_data = urldecode($string_data);
preg_match('/"title":"(.*?)"/',$decoded_data,$title_matches);
$title = str_replace(
    array("%20","\u0026","  "),
    array("", " ", ""),
    $title_matches[1]
);
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo "#EXTM3U YouTube Streaming #Albdroid PHP Streaming Tools\n";
echo "#EXTINF:-1,$title\n";
echo $stream;
}
?>
