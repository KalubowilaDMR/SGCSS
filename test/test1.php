<?php

	require_once("../connection/db_connection.php");

?>



	
	<?php

		

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

	?>


	