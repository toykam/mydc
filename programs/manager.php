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
        // if ($result) {
        //     header("location:facilitators.php");
        //     mysqli_close($conn);
        //     exit();
        // } else {
        //     echo ("Couldn't connect".mysqli_error($conn).$q);
        // }
    }