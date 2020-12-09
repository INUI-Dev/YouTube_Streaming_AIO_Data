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
 │ Created   │ Wednesday, May 13, 2020                        │
 │ Modified  │ 00:00:0000                                     │
 └────────────────────────────────────────────────────────────┘

PREMIUM API PLAYER
Mixed Video Player API v1.4.0
IF YOU ARE INTERESTED IN BUYING IT CONTACT US TRC4@USA.COM
DEMO: http://albdroid.al/Paid_Codes/Mixed_Video_Player_API/
FEATURES http://albdroid.al/Paid_Codes/Mixed_Video_Player_API/features.php
*/
?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>YouTube HTML5 Embed Player</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="icon" href="favicon.ico"/>
<meta http-equiv="cache-control" content="no-store">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="YouTube HTML5 Embed Player" />
<meta name="author" content="Olsion Bakiaj - Endrit Pano" />
<meta property="og:site_name" content="YouTube HTML5 Embed Player">
<meta property="og:locale" content="en_US">
<meta name="msapplication-TileColor" content="#0F0">
<meta name="theme-color" content="#0F0">
<meta name="msapplication-navbutton-color" content="#0F0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#0F0">
<link rel="google-play-app" content="app-id=player.kodi.al">
<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000000;
}
a:link {
	color: #00FF00;
}
a:visited {
	color: #00FF00;
}
a:hover {
	color: #00FF00;
}
a:active {
	color: #00FF00;
}
</style>
</head>
<body>
<?php
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}
$ROOT_URL = $protocol . $_SERVER['SERVER_NAME'] . ($_SERVER['PHP_SELF']) . "";
$GET_Example = $ROOT_URL . "?id=" . "vAxyfc9vbuk";
if(isset($_GET["id"]) && isset($action[$_GET["id"]]))
{
	$youtube_id = $action[$_GET['id']];
} else {
	$youtube_id = $_GET["id"];
}
$Stream_Provider = "YouTube";
$stream_url = file_get_contents("https://www.youtube.com/watch?v=" . $youtube_id);
preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $stream_url, $matches);
$id = $matches[1];
$width = '100%'; 
$height = '100%';

if(!$youtube_id) die("<html lang=\"en\">
<head>
<title>YouTube HTML5 Embed Player</title>
<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\" />
<meta http-equiv=\"cache-control\" content=\"no-store\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<meta name=\"description\" content=\"YouTube HTML5 Embed Player\" />
<meta name=\"author\" content=\"Olsion Bakiaj - Endrit Pano\" />
<meta property=\"og:site_name\" content=\"YouTube HTML5 Embed Player\">
<meta property=\"og:locale\" content=\"en_US\">
<meta name=\"msapplication-TileColor\" content=\"#0F0\">
<meta name=\"theme-color\" content=\"#0F0\">
<meta name=\"msapplication-navbutton-color\" content=\"#0F0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#0F0\">
<b>
<center>
<font color=lime><h2>YouTube HTML5 Embed Player</h2></b>
</center>
<center>
<font color=red><b>STRUKTURA!!!</b>
</center>
<br/>
<b>
<center>
<font color=lime>Platform: Embed Player</b>
</center>
</font>
<br/>
<body style='background-color:black'>
<b>
<center>
<font color=lime>?id={VIDEO or LIVE STREAM ID}</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>Pershembull:<br>
<font color=lime>GET Example:<font color=lime> $GET_Example<br>
</b>
</center>
</font>
<br/>
<b>
<center>
<font color=lime>API: https://kodi.al/</b></center></font>
<br/>
<b><center><font color=lime>FB: /albdroid.official/</b></center></font><br/>
"
);
else
{
if(!$stream_url) die("<html lang=\"en\">
<head>
<title>YouTube HTML5 Embed Player</title>
<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\" />
<meta http-equiv=\"cache-control\" content=\"no-store\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<meta name=\"description\" content=\"YouTube HTML5 Embed Player\" />
<meta name=\"author\" content=\"Olsion Bakiaj - Endrit Pano\" />
<meta property=\"og:site_name\" content=\"YouTube HTML5 Embed Player\">
<meta property=\"og:locale\" content=\"en_US\">
<meta name=\"msapplication-TileColor\" content=\"#0F0\">
<meta name=\"theme-color\" content=\"#0F0\">
<meta name=\"msapplication-navbutton-color\" content=\"#0F0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#0F0\">
<b>
<b>
<center>
<font color=red>Stream Error!!!
</b></center>
</font><br />
<body style='background-color:black'><b>
<center>
<font color=lime>PHP Script Don't Fetching Data From $Stream_Provider Server<br /><br />
Check Your Link If Is Online Or Regex Code if it is Correct
</b></center>
</font><br /><b>
<center>
<font color=lime>Contact: TRC4@USA.COM
</b></center>
</font><br /><b>
<center>
<font color=lime>Facebook: /albdroid.official/
</b></center>
<center>
<font color=lime>Github: github.com/SxtBox
</b></center>
</font>
<br />");
}
?>
</body>
</html>
<iframe id="ytplayer" type="text/html" width="<?php echo $width; ?>" height="<?php echo $height; ?>"
src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=lime&iv_load_policy=3"
frameborder="0" allowfullscreen>
</iframe>