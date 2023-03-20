<?php
date_default_timezone_set('Asia/Manila');

if(!isset($_SESSION)){
    session_start();
}
require('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//url = js/css/img/frontend
$url = $_ENV['URL'];
//dir = importing file backend exp include
$dir = dirname(__DIR__)."/logistic-1";

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

// $dir = dirname(__DIR__)."/public_html";

?>