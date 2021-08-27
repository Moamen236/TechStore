<?php

//  paths & urls
// $path = __DIR__ . "/";
define("PATH",  __DIR__ . "/"); // path my folder
define("URL", "http://localhost/Route/workshop/techstore/"); //path the link

// db credentials
define("DB_SERVER_NAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "techstore");

// include classes
require_once(PATH . "vendor/autoload.php");


use TechStore\Classes\Request;
use TechStore\Classes\Session;

// obiects
$request = new Request;
$session = new Session;