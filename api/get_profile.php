<?php

require __DIR__.'/../includes/all.php';
require __DIR__.'/../includes/jwt_manager.php';

header("Content-Type: application/json");

// var_dump(getallheaders());
// exit();

try {
    $headers = getallheaders();
    
    if (isset($headers['Token']) || isset($headers['token'])) {
    
        $tokenData = verifyToken($headers['token'] ?? $headers['Token']);


        $userDetail = $db->get('admins', "*", [
            'id' => $tokenData['id']
        ]);

        $response = [
            'status' => true,
            'message' => "PROFIL FETCHED",
            'data' => $userDetail
        ];
        
    } else {
        $response = [
            'status' => false,
            'message' => "Please provide your token to continue"
        ];
    }
} catch (Exception $e) {
    $response = [
        'status' => false,
        'message' => $e->getMessage()
    ];
}


echo json_encode($response);