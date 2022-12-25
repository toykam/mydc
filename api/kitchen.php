<?php

require __DIR__.'/../includes/all.php';
require __DIR__.'/../includes/jwt_manager.php';

header("Content-Type: application/json");

// var_dump($_POST);

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
            //check if scanned user has taken meal starts
            $date_time = date('Y-m-d H:i:s');
            $explode = explode(' ',$date_time);
            $now = $explode[1];
            $participant_id = $participantData['id'];
            $admin_id = $tokenData['id'];

            if( ($now >= '07:00:00' && $now <= '12:00:00') ){
                $meal_time = 'Breakfast';
                $where1 = "[date('Y-m-d 07:00:00'), date('Y-m-d 12:00:00')]";
            } else if( ($now >= '14:00:000' && $now <= '17:00:00') ){
                $where1 = "[date('Y-m-d 14:00:00'), date('Y-m-d 17:00:00')]";
                $meal_time = 'Lunch';
            } else if( ($now >= '19:00:000' && $now <= '00:00:00') ){
                $where1 = "[date('Y-m-d 19:00:00'), date('Y-m-d 00:00:00')]";
                $meal_time = 'Dinner';
            }

            function bf_id($where){
                return $db->select('kitchen',['participant_id'],  ["date_time[><]" => $where] );
            }

            function check($where1){
                if(!bf_id($where1)){
                    $db->insert('kitchen',['participant_id' => $participant_id, 'date_time' => $date_time, 'food' => '1', 'user_id' => $admin_id ]);
                    $response = ['status' => true,'message' => $participantData['first_name'].' '. 'has not taken '. $meal_time];
                } else{
                    $response = ['status' => true,'message' => $participantData['first_name'].' '. 'has not taken '. $meal_time];
                }
            }

            check($where1);     
            //check if scanned user has taken meal ends
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
