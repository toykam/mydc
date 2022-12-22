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
                    'message' => "Invalid request"
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
                $participantId = $participantData["id"];
    
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
                        'message' => "Scanned In successfully"
                    ];
                } else {
    
                    $db->insert('in_out', [
                        'pid' => $participantId, 
                        'out_scanner' => $tokenData['id'],
                    ]);
        
                    $response = [
                        'status' => true,
                        'message' => "Scanned out successfully"
                    ];
                }
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
