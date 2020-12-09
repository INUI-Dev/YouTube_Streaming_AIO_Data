<?php

/*
 ┌────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL |
 └────────────────────────────────────────────────────────────┘
 ┌───────────┬────────────────────────────────────────────────┐
 │ Product   │ YouTube HLS Stream Extractor by Video ID       │
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
 │ Created   │ 08 December 2020                               │
 │ Modified  │ xx:xxxx:xxxx                                   │
 └────────────────────────────────────────────────────────────┘

*/

// Created 08 December 2020

/*
 PHP Code Generated Date: Tuesday, 08 December 2020 - 22:29:12
 PHP Code Generated From Host: demo.kodi.al
 https://demo.kodi.al/Framework
*/

/*
   Error Output
   E_ALL or E_NOTICE or 0 For Disable
   https://www.php.net/manual/en/function.error-reporting.php
*/

/*
--------------------------------------------------------------------------------------------------------
BAB DUDA IS HERE
Simple PHP Script For Xtream Codes + VLC Player Using youtube-dl TOOLS
REQUIRED LINUX OS WITH ROOT ACCESS
--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
INSTALL PYTHON

apt-get update
sudo apt-get install python-setuptools
--------------------------------------------------------------------------------------------------------
[NOTE] YT-DL WORKING ONLY IN PYTHON 2, I'WE TESTED ON PYTHON 3 BUT NOT WORKING!!!
INSTALL Python 2
sudo apt install python-pip
IF PYTHON 2 Successfully GO TO youtube-dl INSTALLER IGNORE Python 3
--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
INSTALL Python 3
sudo apt install python3-pip 
--------------------------------------------------------------------------------------------------------
https://pip.pypa.io/en/stable/installing/
sudo easy_install pip
curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py
python get-pip.py
--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
INSTALL youtube-dl
https://ytdl-org.github.io/youtube-dl/download.html

apt-get update
sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl

IF U SEE ERROR WITH CERTIFICATE USE THIS COMMAND
sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl --no-check-certificate

sudo chmod a+rx /usr/local/bin/youtube-dl
sudo pip install --upgrade youtube_dl

FOR UPDATES sudo youtube-dl -U
FOR HELP youtube-dl --help

PUT PHP FILE IN /var/www/html/YOUR FOLDER
START YOUR BROWSER NAVIGATE YOUR IP/YOUR FOLDER
--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
FOR PANEL USE 127.0.0.1
http://127.0.0.1/youtube_dl/file.php?id=v3jpVUOi9XU

http://192.168.1.10/PHP_Streams/YT_DL/file.php?id=v3jpVUOi9XU

FOR VLC OR KODI USE YOUR REAL IP http://[IP OR HOST]/file.php?id=v3jpVUOi9XU

I Love The 90 - Spain Valencia 2018 (Megamix)
http://127.0.0.1/PHP_Streams/YT_DL/file.php?id=ydyFTgfCWRc

Wave Music Radio Live Stream
http://192.168.1.10/PHP_Streams/YT_DL/file.php?id=v3jpVUOi9XU
--------------------------------------------------------------------------------------------------------
*/

ob_start();
error_reporting(0); // C'AKTIVOZO ERRORS ON PHP
set_time_limit(0); // SET UNLIMITET TIME LIMIT
@ini_set("default_socket_timeout", 10);
ini_set("user_agent", "Albdroid PHP Codes");
date_default_timezone_set("Europe/Tirane");

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}

$ROOT_URL_MAIN = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$PHP_PATH = $protocol . ($_SERVER['SERVER_NAME']) . ($_SERVER['PHP_SELF']) . "";

$Example_Live = $PHP_PATH . "?id=" . "v3jpVUOi9XU";
$Example_Video = $PHP_PATH . "?id=" . "6IrO01N9LqM";

    if(empty($_GET["id"])) {
    exit( json_encode(array(
    "App" => "YouTube HLS Extractor",
    "Version" => "1.0",
    "Player" => "Raw",
    "Message" => "ID Parameter Required",
    "Parameters" => "?id=VIDEO_ID",
    "Example Live Stream" => "{$Example_Live}",
    "Example Video" => "{$Example_Video}",
    "PHP Code Generated From Host" => "demo.kodi.al",
    "PHP Code Generated Date" => "Tuesday, 08 December 2020 - 22:29:12"
    )));
}

$video_id = $_GET["id"];
// NO AUDIO ON VIDEO
//$youtube_bin = exec("/usr/local/bin/youtube-dl -i -g https://www.youtube.com/watch?v=" . $video_id . "", $matches);

// WITH AUDIO VIDEO + LIVE STREAM
$youtube_bin = exec("/usr/local/bin/youtube-dl -f best -g https://www.youtube.com/watch?v=" . $video_id . "", $matches);

//$youtube_downloader = "youtube-dl -f best -g ".$get_url." 2>&1";
$stream = $matches[0];
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $stream;
ob_end_flush();
?>
