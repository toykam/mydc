<?php

require __DIR__.'/../includes/all.php';
require __DIR__.'/../includes/jwt_manager.php';

header("Content-Type: application/json");

// var_dump($_POST);

try {
    $headers = getallheaders();
    
    if (isset($headers['Token']) || isset($headers['token'])) {
    
        $tokenData = verifyToken($headers['token'] ?? $headers['Token']);
    
        if (in_array($tokenData['department'], ['admin', 'r_and_r'])) {
    
            if (!isset($_POST['qr_token'])) {
                $response = [
                    'status' => false,
                    'message' => "Please provide a qrcode to scan"
                ];
                echo json_encode($response);
                exit();
            }
            $qrData = hex2bin($_POST['qr_token']);
            
            $userTokenData = explode('_',$qrData);
            
            $response = [
                'status' => true,
                'message' => "Qrcode Data Retrieved",
                'data' => $userTokenData[0]
            ];

        } else {
            $response = [
                'status' => false,
                'message' => "You are not allowed to make this request"
            ];
        }
        
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