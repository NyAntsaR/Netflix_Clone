<?php
    require_once("includes/config.php");
    require_once("includes/classes/PreviewProvider.php");

    if( !isset($_SESSION["userLoggedIn"])){
        header("Location: register.php");
    }

    $userLoggedIn = $_SESSION["userLoggedIn"];
?>


<!DOCTYPE html>

<html>
    <head>
        <title> Welcome to nyaflix </title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/fbfc2e7feb.js" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </head>


    <body>
        <div class="wrapper"> 