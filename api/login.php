<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require __DIR__.'/../includes/all.php';

if (!isset($_POST)) {
    die("not supported");
}

$email = $_POST['email'];
$password = $_POST['password'];

$user = getAdminBy(['aemail' => $email]);

if ($user != null) {
    if (password_verify($password, $user['apassword'])) {
        // echo "Password correct";

        $response = [
            'status' => true,
            'message' => 'Login successful',
            'data' => [
                'token' => generateToken(['id' => $user['id'], 'department' => $user['department']]),
                'department' => $user['department']
            ]
        ];

        echo json_encode($response);
        
    } else {
        $response = [
            'status' => false,
            'message' => "Incorrect login detail"
        ];
        echo json_encode($response);
    }
} else {
    $response = [
        'status' => false,
        'message' => "Oops, looks like you do not have account, Pele dear"
    ];
    echo json_encode($response);
}