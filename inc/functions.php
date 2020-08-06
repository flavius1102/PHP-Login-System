<?php

// Force the user to be logged in or redirect
function forceLogin() {
    if (isset($_SESSION['user_id'])) {
        // The user is allowed here

    } else {
        // The user is not allowed here
        header('Location: login.php');
        exit;
    }
}

function forceDashboard() {
    if (isset($_SESSION['user_id'])) {
        // The user is allowed here and redirect anyway
        header('Location: dashboard.php');
        exit;
    } else {
        // The user is not allowed here

    }
}
