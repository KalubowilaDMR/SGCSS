<?php
    session_start();

    //import database connection
    include("connection/db_connection.php");
    // $_SESSION['message'] = "Account_Created!";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="landingassets/images/tag.png">
    <title>Verify Registration</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/all.css">   
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
       
</head>
<body>

<?php

    if(isset($_SESSION['message']) && ($_SESSION['message'] == "Account_Created!") ){

        // Verify user email
        echo '
        <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Active Account</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <p>Your account has been created successfully. Check your email to active account.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
        </div>
        ';

        echo '
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("myModal"), {})
            myModal.show()
        </script>
        ';
    }
    else{

        echo '
        <script>
            swal({
                title: "Somthing Wrong!",
                text: "Invalid OTP!",
                icon: "error",
                button: "OK!",
            }).then(function(){
                    window.location = "index.php";
                });
        </script>
        ';

    }

?>

        <div class="container">
         <div class="row">
            <div class="col-md-6  col-lg-5 col-sm-12 mx-auto offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="POST" class="row g-3 needs-validation" autocomplete="off" novalidate>
                        <h4>Active Account</h4>
                        <p class="m-2 p-2">Please, provide your account activate OTP code here.</p>
                        <div class="col-12 mt-1 mb-2">
                            <label for="activeOtpCode" class="form-label">OTP</label>
                            <input type="text" class="form-control" name="activeOtpCode" id="activeOtpCode" milength="5" maxlength="5" required>
                            <div class="invalid-feedback">
                            Invalid OTP code.
                            </div>
                        </div>
                        <div class="col-12 mt-2 ">
                            <button type="submit" name="activeSubmit" class="btn btn-dark float-start">Active Account</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Already Active? <a href="signin.php">Signin</a></p>
                    </div>
                </div>
            </div>
             </div>
         </div>

         <?php
            
            if(isset($_POST['activeSubmit'])){

                if($_SESSION['regOtp'] == $_POST['activeOtpCode']){
                    
                    
                    $email = $_SESSION['regEmail'];

                    $sql = "UPDATE user SET status='enable' WHERE email='".$email."'";
                    $result = mysqli_query($conn, $sql);

                    session_destroy();

                    echo '
                        <script>
                        swal({
                            title: "Success!",
                            text: "Account activate successful!",
                            icon: "success",
                            button: "OK!",
                        }).then(function(){
                                window.location = "signin.php";
                            });
                        </script>
                    ';
                    
                }

                // OTP does not match
                else{

                    echo '
                    <script>
                        swal({
                            title: "Somthing Wrong!",
                            text: "Invalid OTP!",
                            icon: "error",
                            button: "OK!",
                        });
                    </script>
                    ';
                }
                
                
            }
            

        ?> <!-- forget password php function end -->
    
    <!-- javascript libraries -->
    <script src="assets/js/script.js"></script>
    
</body>
</html>