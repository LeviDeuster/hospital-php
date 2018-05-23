<?php
ini_set('display_errors',1);
define("ROOT", dirname(__DIR__) ."/Hospital/framework-php-master/");

 // print ROOT;exit;

require(ROOT . "core/config.php");
require(ROOT . "core/route.php");
require(ROOT . "core/core.php");
route();