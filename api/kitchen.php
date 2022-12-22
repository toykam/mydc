<?php

require __DIR__.'/../includes/all.php';
require __DIR__.'/../includes/jwt_manager.php';

header("Content-Type: application/json");

// var_dump($_POST);

try {
    $headers = getallheaders();
    
    if (isset($headers['Token']) || isset($headers['token'])) {
    
        $tokenData = verifyToken($headers['token'] ?? $headers['Token']);
    
        if (in_array($tokenData['department'], ['admin', 'security'])) {
    
            if (!isset($_POST['user_token'])) {
                $response = [
                    'status' => false,
                    'message' => "Please provide participant token"
                ];
                echo json_encode($response);
                exit();
            }
    
            $qrData = hex2bin($_POST['user_token']);
            
            $userTokenData = explode('_',$qrData);

            $participantData = getParticipantBy(['qrcode' => $userTokenData[0]]);

            if (!$participantData) {
                $response = [
                    'status' => false,
                    'message' => "This QRCode have not been assigned to anyone, something fishy is going on!!!"
                ];
            } else {
                $response = [
                    'status' => true,
                    'message' => $participantData['first_name'].' '.$participantData['last_name']." Scanned for food successfully"
                ];
            }


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
    echo json_encode($response);
} catch (Exception $e) {
    $response = [
        'status' => false,
        'message' => $e->getMessage()
    ];
    echo json_encode($response);
}
