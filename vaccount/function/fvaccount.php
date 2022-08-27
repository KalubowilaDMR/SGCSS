<?php
    session_start();

    // check user session active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "user"){

        // redirrect user to signin page
        header('Location: ../../signin.php');

    }

    // include and check database connection
    include("../connection/db_connection.php");

    
    // check user has clicked the button to update feild
    if(isset($_POST['submit'])){
        // echo "this is the vaccount function folder";

        $fname = mysqli_real_escape_string($conn, trim($_POST["fname"]));
        $lname = mysqli_real_escape_string($conn, trim($_POST["lname"]));
        $address = mysqli_real_escape_string($conn, trim($_POST["address"]));
        $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
        $phone = mysqli_real_escape_string($conn, trim($_POST["pnumber"]));
        

        $sql = "UPDATE user SET first_name='".$fname."', last_name='".$lname."', gender='".$gender."', address='".$address."', phone='".$phone."' WHERE email = '".$_SESSION['email']."'";

        $result = mysqli_query($conn, $sql);
        header('Location: ../vaccount.php');

        
    }
    else{
        echo "<script>
            alert('You have not clicked the update button and not complete');
        </script>";
    }


?>



