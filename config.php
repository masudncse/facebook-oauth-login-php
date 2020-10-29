<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');

require_once 'vendor/autoload.php';

session_start();

// Call Facebook API

$facebook = new \Facebook\Facebook([
    'app_id' => '350414762719013',
    'app_secret' => '4ebae0c25956b7cfe808c70ad98ce5a2',
    'default_graph_version' => 'v5.0'
]);

?>