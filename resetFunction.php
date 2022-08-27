<?php

    session_start();
    //database connection
    include("connection/db_connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="shortcut icon"  href="landingassets/images/tag.png">
    <title>Document</title>
    <!-- css libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="wrapper">

<!-- update reset password -->
<?php

    if(isset($_POST['newPassword'])){

        $password = $_POST['password'];
        $rePassword = $_POST['conPass'];
        $email = $_SESSION['otpEmail'];

        if((!empty($password)) && (!empty($rePassword)) && ($password == $rePassword)){

            $hashPassword = md5($password);                   

            $sql = "UPDATE `user` SET `password`= '".$hashPassword."'  WHERE `email`= '".$email."'";
            $result = mysqli_query($conn, $sql);
            

            session_destroy();

            echo '
            <script>
                swal({
                    title: "Success!",
                    text: "Your password reset has been successfully.",
                    icon: "success",
                    button: "OK!",
                }).then(function(){
                        window.location = "signin.php";
                    });
            </script>
            ';
            
            

        }
        else{

            echo '
                <script>
                    swal({
                        title: "Somthing Wrong!",
                        text: "Password update unsuccessfully!",
                        icon: "error",
                        button: "OK!",
                    }).then(function(){
                            window.location = "forgetpass.php";
                        });
                </script>
                ';

        }


    }
    else{
        
        echo '
                <script>
                    swal({
                        title: "Somthing Wrong!",
                        text: "Error Occurred!",
                        icon: "error",
                        button: "OK!",
                    }).then(function(){
                            window.location = "signin.php";
                        });
                </script>
                ';

    }

?> <!-- update reset password -->

    <!-- javascript libraries -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    
    
</body>
</html>