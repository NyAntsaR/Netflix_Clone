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
        <script src="https://kit.fontawesome.com/fbfc2e7feb.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="wrapper"> 