<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "mydc");

    if (isset($_POST['add_fac'])) {

        // $id = $_POST['id'];
        $id = ($_POST['pid']);

        // check if already in there...
        $check_if_exist = "SELECT * FROM facilitators WHERE pid='$id'";
        $result = $conn->query($check_if_exist);
        // echo ($result) ? '' : mysqli_error($conn); exit();
        // var_dump($result); exit();
        $if_found = $result->num_rows;
        // echo $if_found; exit();
        if ($if_found > 0) {
            $_SESSION['msg'] = 'Participant already a facilitator';
            $_SESSION['flag'] = 'warning';
            header("location: add_facilitator.php ");
            mysqli_close($conn);
            exit();
        } else {
            // if not exist Insert into table
            $query = "INSERT INTO facilitators (pid) VALUES ($id) ";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $_SESSION['msg'] = 'Participant added to facilitator';
                $_SESSION['flag'] = 'success';
                mysqli_close($conn);
                header("location:add_facilitator.php");
                // exit();
            } else {
                $_SESSION['msg'] = 'An error occurred!';
                $_SESSION['flag'] = 'danger';
                header("location:add_facilitator.php");
            }
        }
    } 
    // else {
    //     header("location:add_facilitator.php");
    //     mysqli_close($conn);
    //     exit();
    // }


    // Delete Facilitator
    if (isset($_GET['delete']) && ($_GET['delete'] != '')) {

        $fid = $_GET['delete'];

        $query = "DELETE FROM facilitators WHERE id='$fid'";
        $result = $conn->query($query);
        // var_dump($result); exit();
        if (!$result) {
            // echo mysqli_error($conn); exit();
          $_SESSION['msg'] = 'An error occurred!';
          $_SESSION['flag'] = 'danger';
          header("location:facilitators.php");
        } else {
          $_SESSION['msg'] = 'Facilitator Removed Successfully';
          $_SESSION['flag'] = 'success';
          header("location:facilitators.php");
        }
    }

    if (isset($_POST['submit'])) {

        // $id = $_POST['id'];
        $id = ($_POST['id']);

        // check if already in there...
        $check_if_exist = "SELECT * FROM programs WHERE id='$id'";
        $result = $conn->query($check_if_exist);
        // echo ($result) ? '' : mysqli_error($conn); exit();
        // var_dump($result); exit();
        $if_found = $result->num_rows;
        // echo $if_found; exit();
        if ($if_found > 0) {
            $_SESSION['msg'] = 'Program already added';
            $_SESSION['flag'] = 'warning';
            header("location: add_programs.php ");
            mysqli_close($conn);
            exit();
        } else {
            // if not exist Insert into table
            $query = "INSERT INTO programs (topic, time_start, time_end, day) VALUES (NULL, '".$_POST['topic']."','".$_POST['venue']."','".$_POST['time_start']."','".$_POST['time_end']."','".$_POST['day']."') ";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $_SESSION['msg'] = 'Program added successfully';
                $_SESSION['flag'] = 'success';
                mysqli_close($conn);
                header("location:add_programs.php");
                // exit();
            } else {
                $_SESSION['msg'] = 'An error occurred!';
                $_SESSION['flag'] = 'danger';
                header("location:add_programs.php");
            }
        }
    } 


    // Delete Program
    if (isset($_GET['del']) && ($_GET['del'] != '')) {

        $id = $_GET['del'];

        $query = "DELETE FROM programs WHERE id='$id'";
        $result = $conn->query($query);
        // var_dump($result); exit();
        if (!$result) {
            // echo mysqli_error($conn); exit();
          $_SESSION['msg'] = 'An error occurred!';
          $_SESSION['flag'] = 'danger';
          header("location:programs.php");
        } else {
          $_SESSION['msg'] = 'Program Removed Successfully';
          $_SESSION['flag'] = 'success';
          header("location:programs.php");
        }
    }

    if (isset($_POST['action']) && $_POST['action'] == 'p_assign') {
        global $conn;
        $id = $_POST['id'];
        $p_assign = $_POST['p_assign'];
    
        $sql = "UPDATE facilitators SET p_assign = ".$p_assign." WHERE id = ".$id;
        // echo $sql; exit();
        $update = $conn->query($sql);
        if ($update) {
            $_SESSION['msg'] = "Program Assigned Successfully!";
            $_SESSION['flag'] = 'success';
        } else {
            $_SESSION['msg'] = "An error occured!";
            $_SESSION['flag'] = 'danger';
        }
        header('location: facilitators.php');
    }