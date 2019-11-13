<?php
require __DIR__.'/db.php';
function getParticipantsBy($data = null) {
    global $db;
    return $db->select('participants', '*', $data);
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
}

function updateParticipant($data, $where) {
    global $db;
    unset($data['update_user']);
    unset($data['id']);
    if ($db->update('participants', $data, $where)) {
        var_dump($db->log());
        return ['status' => true];
    } else {
        var_dump($db->log());
        return ['status' => false, 'msg' => $db->error()];
    }
}

