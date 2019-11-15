<?php
session_start();
require __DIR__.'/connection.php';
require __DIR__.'/../includes/functions.php';
if (isset($_POST)) {
	if (isset($_POST['add_member'])) {
		// Add member
		global $conn;
		$pid = $_POST['pid'];
		$dep_id = 3;
		$post = $_POST['position'];
		$valSql = "SELECT * FROM workers WHERE pid = ".$pid." AND dep_id = ".$dep_id;
		$check = $conn->query($valSql);
		if ($check->num_rows > 0) {
			$_SESSION['msg'] = "User is already a member!";
			$_SESSION['flag'] = "warning";
		} else {
			$sql = "INSERT INTO workers (pid, dep_id, position) VALUES ($pid, $dep_id, '".$post."')";
			$insert = $conn->query($sql);
			if ($insert) {
				$_SESSION['msg'] = "Insert Successfull";
				$_SESSION['flag'] = "success";
			} else {
				$_SESSION['msg'] = "Errorr:=> ".mysqli_error($conn);
				$_SESSION['flag'] = "danger";
			}
		}
		header('location: '.site_url('/security/add_member.php'));
	}

	if (isset($_POST['assign_post'])) {
		// Assign post
		// var_dump($_POST);
		global $conn;
		$pid = $_POST['pid'];
		$duty = $_POST['duty'];
		$clock_in = $_POST['clock_in'];
		$clock_out = $_POST['clock_out'];
		$post = $_POST['post'];
		$position = $_POST['position'];
		$today = date('Y-m-d H:i:s');
		$checkPostSql = "SELECT * FROM security WHERE post = '".$post."' AND duty = '".$duty."' AND ('".$clock_in."' = clock_in)";
		// echo $checkPostSql; exit();
		$checkFromDb = $conn->query($checkPostSql);
		// echo $checkFromDb->num_rows; exit();
		if ($checkFromDb && $checkFromDb->num_rows == 2) {
			echo "Post filled by: ";
		} else {
			if ($pid == $checkFromDb->fetch_assoc()['pid']) {
				echo "He has been assig6ned to this post for ".$clock_in;
			} else {
					// echo "The Post Will Be Assigned To This Personel";
				$asignSql = "INSERT INTO security(pid, duty, post, clock_in, clock_out,position)";
				$asignSql .= " VALUES($pid, '".$duty."', '".$post."', '".$clock_in."', '".$clock_out."', '".$position."')";
				echo $asignSql;
				$assign = $conn->query($asignSql);
				if ($assign) {
					echo "Assigned";
				} else {
					echo mysqli_error($conn);
				}
			}
		}

		// $checkSql = "SELECT * FROM security WHERE pid = ".$pid." AND duty = ".$duty." ";
	}
}


if (isset($_GET)) {
	if(isset($_GET['action']) && $_GET['action'] == 'remove') {
		global $conn;
		$id = $_GET['id'];
		$valSql = "DELETE FROM workers WHERE id = ".$id;
		$data = $conn->query($valSql);
		if ($data) {
			$_SESSION['msg'] = 'Member removal successful';
			$_SESSION['flag'] = "success";
			header('location: members.php');
		} else {
			$_SESSION['msg'] = 'Error:=> ';
			$_SESSION['flag'] = "danger";
			echo "Error ".mysqli_error($conn);
		}

	}
}
