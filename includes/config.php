<?php
    ob_start(); // Turns on output buffering
    session_start(); // check if the user is logged in or not
    date_default_timezone_set("America/Los_Angeles");

    try {
        $con = new PDO("mysql:dbname=nyaflix;host=localhost", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    catch (PDOException $e) {
        exit("connection failed: " . $e->getMessage());
    }
?>