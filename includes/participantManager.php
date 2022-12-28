<?php

function getParticipantsBy($data = null) {
    global $db;
    
    $response = $db->select('participants', '*', $data);
    // var_dump($db->log());
    return $response;
}

function getParticipantBy($data) {
    global $db;
    return $db->get('participants', '*', $data);
}

function createNewParticipant($participantData) {
    global $db;
    unset($participantData['reg_user']);
    return $db->insert('participants', $participantData);
}

function deleteParticipant($where) {
    global $db;
    return $db->delete('participants', $where);
}

function updateParticipant($data, $where) {
    global $db;

    unset($data['update_user']);
    unset($data['id']);
    $data['date'] = date("Y-m-d H:i");
    if ($db->update('participants', $data, $where)) {
        // var_dump($db->log());
        return ['status' => true];
    } else {
        // var_dump($db->log());
        return ['status' => false, 'msg' => "Something went wrong"];
    }
}