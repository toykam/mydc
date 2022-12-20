<?php 

require __DIR__.'/../includes/all.php';
require __DIR__.'/../includes/jwt_manager.php';

header("Content-Type: application/json");


if (!isset($_POST)) {
    die("not supported");
}

$email = $_POST['email'];
$password = $_POST['password'];

$user = getAdminBy(['aemail' => $email]);

if ($user != null) {
    if (password_verify($password, $user['apassword'])) {
        
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