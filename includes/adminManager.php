<?php

function getAdminsBy($data = null) {
    global $db;
    return $db->select('admins', '*', $data);
}

function getAdminBy($data) {
    global $db;
    return $db->get('admins', '*', $data);
}

function createNewadmin($adminData) {
    global $db;
    // unset($adminData['reg_user']);
    return $db->insert('admins', $adminData);
}

function updateAdmin($adminData, $where) {
    global $db;
    // unset($adminData['reg_user']);
    return $db->update('admins', $adminData, $where);
}


// function updateParticipant($data, $where) {
//     global $db;

//     unset($data['update_user']);
//     unset($data['id']);
//     if ($db->update('participants', $data, $where)) {
//         var_dump($db->log());
//         return ['status' => true];
//     } else {
//         var_dump($db->log());
//         return ['status' => false, 'msg' => $db->error()];
//     }
// }