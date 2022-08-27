<?php

	session_start();

	require_once("../connection/db_connection.php");

	// check user session active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "gs"){

        // redirrect user to signin page
        header('Location: ../../signin.php');

		
    }

	if(empty($_POST['approve']) && empty($_POST['reject'])){

		// redirrect user to dashboard page
		header('Location: ../gdashboard.php');
	}
	
?>
		
	<?php
		
		//Approve appointment
		if(isset($_POST['approve'])){
			$id = $_POST['approve'];
			$sql = "UPDATE `appointment` SET `acceptance`='accepted' WHERE id='".$id."'";
			$result = mysqli_query($conn,$sql);

			if(mysqli_affected_rows($conn)>0){
				$return = true;
				// echo'record-added';
				// exit;
			}
			else{
				// echo'error';
				$return = false;
			}
			die(json_encode(array('return' => $return)));

		}


		//Reject appointment
		if(isset($_POST['reject'])){
			$id = $_POST['reject'];
			$sql = "UPDATE `appointment` SET `acceptance`='rejected' WHERE id='".$id."'";
			$result = mysqli_query($conn,$sql);

			if(mysqli_affected_rows($conn)>0){
				$return = true;
				// echo'record-added';
				// exit;
			}
			else{
				// echo'error';
				$return = false;
			}
			die(json_encode(array('return' => $return)));

		}

	?>


	