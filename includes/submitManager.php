<?php 

// session_start();

require __DIR__.'/error_display.php';
require __DIR__.'/includes.autoload.php';
require __DIR__.'/sessionManager.php';
include __DIR__.'/db.php';
require __DIR__.'/functions.php';
require __DIR__.'/participantManager.php';
require __DIR__.'/adminManager.php';

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

    /// Login User
    if (isset($_POST['login_user'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = getAdminBy(['aemail' => $email]);

        if ($user != null) {
            if (password_verify($password, $user['apassword'])) {
                // echo "Password correct";
    
                $sessionManager->set('admin_loggedin', true);
                $sessionManager->set('admin_id', $user['id']);
                $sessionManager->set('admin_name', $user['aname']);
                $sessionManager->set('department', $user['department']);
                
                if ($user['department'] == 'admin') {
                    header("location: " . site_url("/"));
                } else {
                    header("location: " . site_url("/".$user['department']));
                }
                
            } else {
                // echo "Password not correct";
                // $sessionManager->set('error_message', "incorrect password");
                $sessionManager->setFlash("error_message", "Incorrect password");
                // $_SESSION['error_message'] = "Incorrect password";
                header("location: " . site_url('/login.php'));
            }
        } else {
            // echo "Password not correct";
            // $sessionManager->set('error_message', "User not found");
            $sessionManager->setFlash("error_message", "User not found");
            // $_SESSION['error_message'] = "User not found";
            header("location: " . site_url('/login.php'));
        }
        // var_dump($user);
    }

    /// Add Admin
    if (isset($_POST['add_admin'])) {
        $data['aemail'] = $_POST['email'];
        $data['aname'] = $_POST['name'];
        $data['department'] = $_POST['department'];
        $data['phone_number'] = $_POST['phone_number'];

        $email = $data['aemail'];

        $data['apassword'] = password_hash($data['password'], PASSWORD_BCRYPT);
        unset($data['add_admin']);
        $existingUser = getAdminBy(['aemail' => $email]);
        if ($existingUser == null) {
            $newAdmin = createNewadmin($data);
            if ($newAdmin == null) {
                $sessionManager->setFlash('error_message', "An error occurred");
                $sessionManager->setFlash('flag', "danger");
                $sessionManager->setFlash('__form_data', $_POST);
                header("location: " .  $redirectUrl);
            } else {
                $sessionManager->setFlash('error_message', "Admin added successfully");
                $sessionManager->setFlash('flag', "success");
                header("location: " . site_url('/admin'));
            }
        } else {
            $sessionManager->setFlash('error_message', "An admin with this email already exist");
            $sessionManager->setFlash('flag', "danger");
            header("location: " . site_url('/admin/add_admin.php'));
        }
        
    }

    /// Update Admin
    if (isset($_POST['update_admin'])) {

        $sessionManager->setFlash('__form_data', $_POST);
        $redirectUrl = $_GET['backUrl'] ?? site_url('/admin/add_admin');

        $data['aemail'] = $_POST['email'];
        $data['aname'] = $_POST['name'];
        $data['department'] = $_POST['department'];
        $data['phone_number'] = $_POST['phone_number'];

        $email = $data['aemail'];

        $data['apassword'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        unset($data['add_admin']);
        $existingUser = getAdminBy(['aemail' => $email]);
        // var_dump($existingUser);

        // exit();
        if ($existingUser == null) {
            $newAdmin = updateAdmin($data, ['id'=>$_POST['id']]);
            if ($newAdmin == null) {
                $sessionManager->setFlash('error_message', "An error occurred");
                $sessionManager->setFlash('flag', "danger");
                header("location: " .  $redirectUrl);
            } else {
                $sessionManager->setFlash('error_message', "Admin updated successfully");
                $sessionManager->setFlash('flag', "success");
                header("location: " . $redirectUrl);
            }
        } else {
            $sessionManager->setFlash('error_message', "An admin with this email already exist");
            $sessionManager->setFlash('flag', "danger");
            header("location: " .  $redirectUrl);
        }
        
    }
}