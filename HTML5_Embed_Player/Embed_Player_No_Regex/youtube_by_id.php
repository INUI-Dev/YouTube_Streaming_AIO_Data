<?php
/*
 ┌────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 |                                                NOTE FOR SOME MOTHERFUCKERS                                                 |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 ┌────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 | DISA MOTER QIRA I NDRYSHOJNE EMRIN OSE VALUES KETYRE SCRIPTAVE EDHE I SHPERNDAJNE NE FORUME TE NDRYSME EDHE HIQEN SI AUTOR |
 | KETA SCRIPTA JANE KRIJUAR NGA ALBDROID.AL EDHE JANE FREE PER TE GJITHE!                                                    |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 ┌────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
 | SOME MOTHERS FUCKERS CHANGING NAME OR VALUES OF SCRIPT AND SHARE IN DIFFERENT FORUMS ALSO SAYS CREATED BY ME               |
 | THESE SCRITS ARE CREATED BY ALBDROID.AL AND ARE FREE FOR EVERYONE!                                                         |
 └────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
 ┌────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL |
 └────────────────────────────────────────────────────────────┘
 ┌───────────┬────────────────────────────────────────────────┐
 │ Product   │ YouTube HTML5 Embed Player [Example]           │
 │ Version   │ v1.0                                           │
 │ Provider  │ https://www.youtube.com/                       │
 │ Support   │ Embed Player                                   │
 │ Licence   │ MIT                                            │
 │ Author    │ Olsion Bakiaj                                  │
 │ Email     │ TRC4@USA.COM                                   │
 │ Author    │ Endrit Pano                                    │
 │ Email     │ INFO@ALBDROID.AL                               │
 │ Website   │ https://kodi.al                                │
 │ Facebook  │ /albdroid.official/                            │
 │ Created   │ Wednesday, July 15, 2020 (GMT+2)               │
 │ Modified  │ 00:00:0000                                     │
 └────────────────────────────────────────────────────────────┘
*/
?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>YouTube Embed Video Player</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="cache-control" content="no-store">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="YouTube Embed Video Player" />
<meta name="author" content="Olsion Bakiaj - Endrit Pano" />
<meta property="og:site_name" content="YouTube Embed Video Player">
<meta property="og:locale" content="en_US">
<meta name="msapplication-TileColor" content="#0F0">
<meta name="theme-color" content="#0F0">
<meta name="msapplication-navbutton-color" content="#0F0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#0F0">
<link rel="google-play-app" content="app-id=player.kodi.al">
<style>
    body{
      background-color:black;
    }
    #video{
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      margin: auto;
      max-height: 100%;
      max-width: 100%;
    }
</style>

<style type="text/css">
html, body {";
height: 100%";
}";

body {
margin: 0;
overflow: hidden;
};

* {;
padding: 0;
margin: 0;
list-style: none;
};

html, body {
margin: 0px;
padding: 0px;
width: 100%;
height: 100%;
font-size: 62.5%;
}
</style>

<?php
error_reporting(0);

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}

$ROOT_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$PHP_PATH = $protocol . ($_SERVER['SERVER_NAME']) . ($_SERVER['PHP_SELF']) . "";

// https://www.php.net/manual/en/function.parse-url.php

// function youtube_embed($url, $width=560, $height=315, $fullscreen=true) /* MANUAL */
function youtube_embed($url, $width="100%", $height="100%", $fullscreen = true)  /* FULL SCREEN */
{
parse_str( parse_url( $url, PHP_URL_QUERY ), $array_variable );
$youtube_embed = '<iframe allowtransparency="true" scrolling="no" width="'.$width.'" height="'.$height.'" src="//www.youtube.com/embed/'.$array_variable['v'].'" frameborder="0"'.($fullscreen?' allowfullscreen':NULL).'>
</iframe>';
return $youtube_embed;
}

if($_GET['id'] != ""){
    $youtube_id = $_GET['id'];
}

if(!$youtube_id)
die("<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Youtube Embed Video Player</title>
<link rel='shortcut icon' href='favicon.ico'/>
<link rel='icon' href='favicon.ico'/>
<b>
<center>
<font color=lime><h2>Youtube Embed Video Player</h2></b>
</center>
<center>
<font color=red><b>STRUKTURA!!!</b>
</center>
<br/>
<b>
<center>
<font color=lime>Platform: Web Player</b>
</center>
</font>
<br/>
<body style='background-color:black'>
<b>
<center>
<font color=lime>?id={VIDEO ID}</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>Pershembull: $PHP_PATH?id=dNTnhu-sPJg<br>
</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>API: https://kodi.al/</b></center></font>
<br/>
<b><center><font color=lime>FB: /albdroid.official/</b></center></font><br/>
</head>
");

$url = 'https://www.youtube.com/watch?v='.$youtube_id;
echo youtube_embed($url, "100%", "100%", true); // FULL SCREEN
// echo youtube_embed($url, 560, 315, true); // MANUAL
?>