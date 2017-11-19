<?php

require ("main/connectvars.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location:index.php');
}

if (isset($_POST['submit'])) {
    if (!empty($_POST['search'])) {
        $search = filter_var($_POST['search'], FILTER_SANITIZE_STRING);
        $search = substr($search, 0, 150);
        echo htmlspecialchars($search) . " had 0 results";
        echo '<br>Click <a href="index.php">here</a> to go back';

    }else{
        header('location:index.php?message=empty');
    }
}
$dbc = null;
$query = null;