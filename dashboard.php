<?php

// Allow the config
define('__CONFIG__', true);

require_once 'inc/config.php';

forceLogin();

$user_id = $_SESSION['user_id'];

$getUserInfo = $con->prepare("SELECT email, reg_time FROM users WHERE user_id= :user_id LIMIT 1");
$getUserInfo->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$getUserInfo->execute();

if ($getUserInfo->rowCount() == 1) {
    // User was found
    $User = $getUserInfo->fetch(PDO::FETCH_ASSOC);
} else {
    // User is not signed in
    header("Location: logout.php");
    exit;
}

?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <base href="/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css">
</head>
<body>

<div class="uk-section uk-container">
    <h2>Dashboard</h2>
    <p>Hello <?php echo $User['email']; ?>, you registered at <?php echo $User['reg_time']; ?></p>
    <p><a href="php_login_course/logout.php">Logout</a></p>
</div>

<?php require_once "inc/footer.php"; ?>

