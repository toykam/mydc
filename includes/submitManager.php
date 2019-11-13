<?php 
// session_start();
require __DIR__.'/functions.php';
require __DIR__.'/participantManager.php';
if ($_POST) {
    if (isset($_POST['reg_user'])) {

        foreach ($_POST as $key => $userData) {
            if (strlen($userData) == 0) {
                $response = array();
                $response['status'] = 0;
                $response['flag'] = 'alert-warning';
                $response['msg'] = str_replace(['_'], [' '], ucfirst($key)).' is required';
                echo json_encode($response);
                exit();
            }
        }

        if (createNewParticipant($_POST)) {
            $response = array();
            $response['status'] = 1;
            $response['flag'] = 'alert-success';
            $response['msg'] = 'Registration Successful!';
            echo json_encode($response);
        } else {
            $response = array();
            $response['status'] = 0;
            $response['flag'] = 'alert-danger';
            $response['msg'] = 'An error occurred!';
            echo json_encode($response);
        }
    }

    // Update User
    if (isset($_POST['update_user'])) {
        // echo json_encode($_POST);
        // exit();
        foreach ($_POST as $key => $userData) {
            if (strlen($userData) == 0) {
                $response = array();
                $response['status'] = 0;
                $response['flag'] = 'alert-warning';
                $response['msg'] = str_replace(['_'], [' '], ucfirst($key)).' is required';
                echo json_encode($response);
                exit();
            }
        }
        $data = $_POST;
        $where = ['id' => (int)$_POST['id']];
        $update = updateParticipant($data, $where);
        if ($update['status'] == 1) {
            $response = array();
            $response['status'] = 1;
            $response['flag'] = 'alert-success';
            $response['msg'] = 'Update Successful!';
            echo json_encode($response);
        } else {
            $response = array();
            $response['status'] = 0;
            $response['flag'] = 'alert-danger';
            $response['msg'] = 'Error:=> '.$update['msg'];
            echo json_encode($response);
        }
    }
}