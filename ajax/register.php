<?php

// Allow the config
define('__CONFIG__', true);

require_once '../inc/config.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    header('Content-Type: application/json');
    $return = [];

    $email = Filter::String($_POST['email']);

    $user_found = findUser($con, $email);

    if ($user_found) {
        // User exists
        // We can also check to see is they are able to log in
        $return['error'] = "You already have an account";
        $return['is_logged_in'] = false;
    } else {
        // User does not exist - add now

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $addUser = $con->prepare("INSERT INTO users(email, password) VALUES (LOWER(:email), :password)");
        $addUser->bindParam(':email', $email, PDO::PARAM_STR);
        $addUser->bindParam(':password', $password, PDO::PARAM_STR);
        $addUser->execute();

        $user_id = $con->lastInsertId();

        $_SESSION['user_id'] = (int)$user_id;

        $return['redirect'] = 'php_login_course/dashboard.php';
        $return['is_logged_in'] = true;
    }

    // Make sure the user can be added and is added

    // Return the proper information back to JavaScript is redirect us

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
} else {
    exit('Invalid URL');
}



?>