<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once("framework/main.php");

$appFacade = new AppFacade(new SettingsManager("settings.xml"));

$currentPage = $appFacade->getCurrentSection("page");

$appFacade->handleSectionRequest($currentPage);
$appFacade->displayTemplate("index");
?>