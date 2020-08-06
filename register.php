<?php

// Allow the config
define('__CONFIG__', true);

require_once 'inc/config.php';

Page::forceDashboard();

?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
</head>
<body>

<div class="uk-section uk-container">
    <h2>Register</h2>
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
        <form class="uk-form-stacked js-register">

            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-email" type="email" placeholder="email@email.com" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-password" type="password" placeholder="Your Password" required>
                </div>
            </div>
            <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none"></div>
            <div class="uk-margin">
                <button class="uk-button uk-button-default" type="submit">Register</button>
            </div>
        </form>

    </div>
</div>

<?php require_once "footer.php"; ?>

