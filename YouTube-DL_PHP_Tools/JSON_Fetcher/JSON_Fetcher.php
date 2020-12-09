<?php

/*
 ┌────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL |
 └────────────────────────────────────────────────────────────┘
 ┌───────────┬────────────────────────────────────────────────┐
 │ Product   │ YouTube HLS Stream Extractor by URL            │
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
 │ Created   │ 02 November 2020                               │
 │ Modified  │ 08 December 2020                               │
 └────────────────────────────────────────────────────────────┘
*/

/*
  BAB DUDA IS HERE
  Copyright (c) 2020 Albdroid.AL
 ┌─────────────────────────────────────────────────────┐
 │ YOUTUBE JSON FETCHER USING BY YOUTUBE-DL DOWNLOADER │
 └─────────────────────────────────────────────────────┘
 NOTE FOR SOME MOTHERFUCKERS => DO NOT FORGET TO CHANGE VALUES AND INSERT YOUR NAME AS CREATOR

 Simple PHP Script To GET JSON Data Using youtube-dl TOOLS
 REQUIRED LINUX OS WITH ROOT ACCESS

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
apt-get update
sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl
IF U SEE ERROR WITH CERTIFICATE USE THIS COMMAND
sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl --no-check-certificate
sudo chmod a+rx /usr/local/bin/youtube-dl
sudo pip install --upgrade youtube_dl
FOR UPDATES sudo youtube-dl -U
PUT PHP FILE IN /var/www/html/YOUR FOLDER
GIVE PERMISSIONS TO 775 OR 777 rwxrwxrwx
--------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------
MANUAL INSTALL
PUT youtube-dl IN => /usr/local/bin/
sudo chmod a+rx /usr/local/bin/youtube-dl
--------------------------------------------------------------------------------------------------------
TO GET JSON DATA USE From Browser youtube_dl.php?url= + URL
EXAMPLE VIDEO youtube_dl.php?url=https://www.youtube.com/watch?v=6IrO01N9LqM
EXAMPLE LIVE STREAM youtube_dl.php?url=https://www.youtube.com/watch?v=v3jpVUOi9XU
--------------------------------------------------------------------------------------------------------
*/

error_reporting(0);
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}

$ROOT_URL_MAIN = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$PHP_PATH = $protocol . ($_SERVER['SERVER_NAME']) . ($_SERVER['PHP_SELF']) . "";

$Example = $PHP_PATH . "?url=" . "https://www.youtube.com/watch?v=6IrO01N9LqM";

define("YOUTUBE_DL_BIN_PATH", "/usr/local/bin/youtube-dl");
$YOUTUBE_DL_BIN_PATH = YOUTUBE_DL_BIN_PATH;
chdir($YOUTUBE_DL_BIN_PATH . "/");

// MANUAL PATH WITHOUT define
//$YOUTUBE_DL_BIN_PATH = '/usr/local/bin/youtube-dl';

if (!isset($_GET['url']) || $_GET['url'] == '') {
    header('HTTP/1.0 400 Bad Request');
    header('Content-Type: text/plain');
    echo "URL: Parameter Missing\n";
    echo "USAGE: ?url= + URL\n";
    echo "Example: {$Example}\n";
    exit(1);
}

$url = $_GET['url'];
$url_parse = parse_url($url);
if ($url_parse === false || !isset($url_parse['scheme']) || !isset($url_parse['host'])) {
    header('HTTP/1.0 400 Bad Request');
    header('Content-Type: text/plain');
    echo "Invalid URL\n";
    exit(1);
}

exec(
   // MANUAL GET youtube-dl --dump-json https://www.youtube.com/watch?v=6IrO01N9LqM
    $YOUTUBE_DL_BIN_PATH . ' --dump-json ' . escapeshellarg($url),
    $JSON_DATA,
    $retval
);

if ($retval === 127) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain');
    echo "[NULL] YOUTUBE-DL NOT FOUND ON YOUR SYSTEM\n";
    echo "[1] -> TO INSTALL RUN THESE COMMANDS ON TERMINAL\n";
    echo "[2] -> wget -q https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl >> /dev/null 2>&1\n";
    echo "[3] -> chmod a+rx /usr/local/bin/youtube-dl >> /dev/null 2>&1\n";
    exit(1);
    } else if ($retval > 0) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain');
    echo "Error Fetching Json Data\n";
    exit(1);
}

header('HTTP/1.0 200 OK');
header('Content-Type: application/json');
echo implode("\n", $JSON_DATA) . "\n";
?>
