<?php

// Allow the config
define('__CONFIG__', true);

require_once 'inc/config.php';

Page::forceLogin();

$User = New User($_SESSION['user_id']);

?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
</head>
<body>

<div class="uk-section uk-container">
    <h2>Dashboard</h2>
    <p>Hello <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?></p>
    <p><a href="logout.php">Logout</a></p>
</div>

<?php require_once "footer.php"; ?>

