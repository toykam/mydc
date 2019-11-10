<?php
require __DIR__.'/db.php';
function getParticipantsBy($data = null) {
    global $db;
    return $db->select('participants', '*', $data);
}

function createNewParticipant($participantData) {
    global $db;
    unset($participantData['reg_user']);
    return $db->insert('participants', $participantData);
}