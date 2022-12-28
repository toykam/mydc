<?php
require __DIR__.'/sessionManager.php';
function site_url($path = '') {
    if ($_SERVER['HTTP_HOST'] == 'localhost') {
        return 'http://'.$_SERVER['HTTP_HOST'].'/mydc'.$path;
    }
    return 'https://'.$_SERVER['HTTP_HOST'].$path;
}

// what ya mean ?? 

function isLoggedIn() {
    global $sessionManager;
    // var_dump($_SERVER);
    $isNotLogin = $_SERVER['REQUEST_URI'] != "/login.php";
    if ($isNotLogin) {
        if ($sessionManager->get('admin_loggedin') != true) {
            $sessionManager->setFlash('error_message', "Please login to continue");
            header("location: ".site_url("/login.php"));
        }
    }
}