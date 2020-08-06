<?php

// Allow the config
define('__CONFIG__', true);

require_once 'inc/config.php';

forceLogin();

?>

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
    <h2>Dashboard</h2>
    <p>You are signed in as user: <?php echo $_SESSION['user_id']; ?></p>
</div>

<?php require_once "inc/footer.php"; ?>

