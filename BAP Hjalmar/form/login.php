<?php

    require("main/connectvars.php");

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('location:index.php');
    }

    if (isset($_POST['submit'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $result = $dbc->prepare("SELECT *  FROM form_users WHERE username = :username AND password = :password");
            $result ->bindParam(':username',$username);
            $result ->bindParam(':password',$hashed_password);
            $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            $username = substr($username, 0, 150);
            $password = $_POST['password'];
            $hashed_password = hash('sha512', $password);
            $result ->execute() or die ("something went wrong");

            if($row = $result->fetch()){
                echo "Welcome";
                echo '<br>Click <a href="index.php">here</a> to go back';
            }else {
                header('location:index.php?message=nomatch');
            }
        }else{
            header('location:index.php?message=empty');
        }

        $dbc = null;
        $query = null;
    }
