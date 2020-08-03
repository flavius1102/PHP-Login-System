<?php

// Allow the config
define('__CONFIG__', true);

require_once 'inc/config.php'; ?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
</head>
<body>

<div class="uk-section uk-container">
    <?php
        echo 'Hello World, today is: ';
        echo date("Y.m.d.");
    ?>
    <p>
        <a href="/login.php">Login</a>
        <a href="/register.php">Register</a>
    </p>
</div>

<?php require_once "inc/footer.php"; ?>
