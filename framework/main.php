<?php
require_once("classes/AppInit.php");
require_once("classes/Autoloader.php");

require_once("libs/smarty/libs/Smarty.class.php");

$appInit = new AppInit("framework");

Autoloader::init("app");

spl_autoload_register(array("Autoloader", "autoload"));