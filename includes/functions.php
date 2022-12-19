<?php
// require __DIR__.'/sessionManager.php';
function site_url($path = '') {
    // var_dump($_SERVER[]);
    return 'https://'.$_SERVER['HTTP_HOST'].'/mydc'.$path;
    // return 'https://ba50-2a0d-5600-41-9000-00-1925.ngrok.io/mydc'.$path;
    // return 'http://localhost/mydc'.$path;
}

function isLoggedIn() {
    global $sessionManager;
    // var_dump($_SERVER);
    if ($_SERVER['REQUEST_URI'] != "/mydc/login.php") {
        if ($sessionManager->get('admin_loggedin') != true) {
            $sessionManager->setFlash('error_message', "Please login to continue");
            header("location: ".site_url("/login.php"));
        }
    }
}