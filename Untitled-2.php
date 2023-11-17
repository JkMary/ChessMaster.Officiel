<?php
session_start();
ob_start();
global $configuration;
date_default_timezone_set("Asia/Calcutta");

$configuration['host'] = "localhost";
$configuration['user'] = "id21017033_root";
$configuration['pass'] = "Ganichess2023@";
$configuration['db'] = "id21017033_chessgame";
$configuration['timezone'] = '+5:30';

//Generic Definations
define("SITE_NAME", "Chess Game");
define("AUTHOR", "Daniel Paul Rajsingh J");
define("SITE_OWNER", "www.daniepaul.com");
define("KEYWORDS", "daniepaul, chess game, chess, two player");
define("DESCRIPTION", "2PlayerChess is a two player chess game. Developed by daniepaul.com");
define("WEBMASTER","services@daniepaul.com");

//Location Definations
define("BASEDIR","http://localhost/Chess2Play-master");
define("FILE_UPLOAD_LOCATION",BASEDIR."uploadFile/");
define("IMAGEPATH",BASEDIR."images/");

//Global Definations
define("FROMEMAILADDRESS","info@maryam.com");

define("COPYRIGHTYEAR","2023");
define("COPYRIGHTNAME","maryam tanassa");
?>