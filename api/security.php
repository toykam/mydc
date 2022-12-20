<?php

require __DIR__.'/../includes/all.php';
require __DIR__.'/../includes/jwt_manager.php';

header("Content-Type: application/json");

// var_dump($_POST);

try {
    $headers = getallheaders();
    
    if (isset($headers['token'])) {
    
        $tokenData = verifyToken($headers['token']);
    
        if (in_array($tokenData['department'], ['admin', 'security'])) {
    
            if (!isset($_POST['user_token'])) {
                $response = [
                    'status' => false,
                    'message' => "Invalid request"
                ];
                echo json_encode($response);
                exit();
            }
    
            $userTokenData = verifyToken($_POST['user_token']);

            $participantId = $userTokenData['id'];

            $notInLog = $db->get('in_out', "*", [
                'pid' => $participantId, 
                'in_date_time' => null
            ]);

            $now = date("Y-m-d H:i:s");

            if ($notInLog) {
                
                $db->update('in_out', [
                    'pid' => $participantId, 
                    'in_scanner' => $tokenData['id'],
                    'in_date_time' => $now
                ], ['id' => $notInLog['id']]);

                $response = [
                    'status' => true,
                    'message' => "Alaye lua welcome o",
                    "data" => $notInLog
                ];
            } else {

                $db->insert('in_out', [
                    'pid' => $participantId, 
                    'out_scanner' => $tokenData['id'],
                ]);
    
                $response = [
                    'status' => true,
                    'message' => "Alaye lua welcome o",
                    "data" => $userTokenData
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
} catch (Exception $e) {
    $response = [
        'status' => false,
        'message' => $e->getMessage()
    ];
}


echo json_encode($response);