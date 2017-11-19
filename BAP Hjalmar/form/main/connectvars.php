<?php
session_start();
$dbc = new PDO('mysql:host=localhost;dbname=********', '**************', '****************');
if(!$dbc) {
    echo "Problem with connecting";
}

require_once("logfunction.php");
$path=$_SERVER['REQUEST_URI'];
$path=strtolower($path);
$clean_path=preg_replace("/[^a-z0-9_\.\-\/]/", '', $path);

logEvent("requestPage",$clean_path);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])) {
        die('Invalid CSRF token');
    }
}

// random_bytes(16) php 7
$_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));

