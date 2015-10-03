<?php

/* error reporting - all errors for development (ensure you have display_errors = On in your php.ini file) */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require './app/globals.php';

$RainTPL = new RainTPL();
$RainTPL::configure("base_url", BASE_URL);


if (!isset($_GET['url'])) {
    $_GET['url'] = "articles/showAll/";
}

$app = new Application(); //new article();

