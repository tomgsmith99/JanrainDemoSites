<?php

/***************************************/
$params["homeDir"] = "JanrainDemoSites";

// Finds out where we are in the filesystem and fixes path to fsHome

$params["fsHome"] = strstr(getcwd(), $params["homeDir"], TRUE) . $params["homeDir"];

include $params["fsHome"] . "/includes/includes.php";

/***************************************/

$params["typeOfDemo"] = "engagement";
$params["title"] = "Janrain Post Counter";

$demo = new demo($params);

$demo->addCSS("commenting.css", "fileRef");

$demo->show();