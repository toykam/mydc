<?php

require __DIR__.'/../includes/all.php';
require __DIR__.'/../includes/jwt_manager.php';

header("Content-Type: application/json");

// var_dump($_POST);

// const BREAKFAST = 1001;
// const LAUNCH = 1002;
// const DINNER = 1003;

$food = 2;
$date = date('y-m-d h:s');

try {
    $headers = getallheaders();
    
    if (isset($headers['Token']) || isset($headers['token'])) {
    
        $tokenData = verifyToken($headers['token'] ?? $headers['Token']);
    
        if (in_array($tokenData['department'], ['admin', 'kitchen'])) {
    
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

            // print_r($participantData);

            if (!$participantData) {
                $response = [
                    'status' => false,
                    'message' => "This QRCode have not been assigned to anyone, something fishy is going on!!!"
                ];
            } else {
                $eaten = $db->get('kitchen', "*", [
                    "date_time[<>]" => [date("Y-m-d 14:00"), date("Y-m-d 17:30")],
                    "food" => $food,
                    "participant_id" => $participantData['id']
                ]);
                if ($eaten) {
                    $response = [
                        'status' => false,
                        'message' => $participantData['first_name'].' '.$participantData['last_name']." have eaten already"
                    ];
                } else {
                    $db->insert("kitchen", [
                        "participant_id" => $participantData['id'],
                        "date_time" => date("Y-m-d H:i:s"),
                        "food" => $food
                    ]);

                    $response = [
                        'status' => true,
                        'message' => $participantData['first_name'].' '.$participantData['last_name']." Scanned for food successfully"
                    ];
                }
                // $response = [
                //     'status' => true,
                //     'message' => $participantData['first_name'].' '.$participantData['last_name']." Scanned for food successfully"
                // ];
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
