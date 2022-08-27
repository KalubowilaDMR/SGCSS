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
    <link rel="shortcut icon" href="landingassets/images/tag.png">
    <title>Document</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="wrapper">

        
        <!-- forget password php function start -->
        <?php
            
            if(isset($_POST['otpSubmit'])){

                if($_SESSION['otpCode'] == $_POST['otp']){
                    
                    echo '
                    <div class="container">
                    <div class="row">
                    <div class="col-md-6  col-lg-5 col-sm-12 mx-auto offset-md-4">
                        <div class="login-form bg-light mt-4 p-4">
                            <form action="resetFunction.php" method="POST" class="row g-3 needs-validation" autocomplete="off" novalidate>
                                <h4>New Password</h4>
                                <p class="m-2 p-2">Please, provide your new password</p>
                                <div class="col-12 mt-1 mb-2">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="text" class="form-control" name="password" id="password" minlength="8" maxlength="25"  required>
                                    <i class="far fa-eye" id="eye" ></i>
                                    <div class="invalid-feedback">
                                    New Password Required..
                                    </div>
                                </div>
                                <div class="col-12 mt-1 mb-2">
                                    <label for="conPass" class="form-label">Confirm Password</label>
                                    <input type="text" class="form-control" name="conPass" id="conPass" minlength="8" maxlength="25"  required>
                                    <div class="invalid-feedback">
                                    Confirm Password Required..
                                    </div>
                                </div>
                                <div class="col-12  form-check" style="padding-left:20px;">
                                    <label class="form-check-label" for="easy" id="errorPassword"></label>
                                </div>
                                <div class="col-12 mt-2 ">
                                    <button type="submit" name="newPassword" onclick="return checkpassword()" class="btn btn-dark float-start">Submit</button>
                                </div>
                            </form>
                            <hr class="mt-4">
                            <div class="col-12">
                                <p class="text-center mb-0">If you want to back? <a href="signin.php">Signin</a></p>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
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
                        }).then(function(){
                                window.location = "resetPassword.php";
                            });
                    </script>
                    ';
                }
                
            }
            else{

                // click only valid user(from forgetpassword.php)
                if(isset($_SESSION['otpCode'])){
                    
                    echo '
                    <div class="container">
                    <div class="row">
                    <div class="col-md-6  col-lg-5 col-sm-12 mx-auto offset-md-4">
                        <div class="login-form bg-light mt-4 p-4">
                            <form action="" method="POST" class="row g-3 needs-validation" autocomplete="off" novalidate>
                                <h4>OTP Validation</h4>
                                <p class="m-2 p-2">Please, provide your OTP Code to reset password</p>
                                <div class="col-12 mt-1 mb-2">
                                    <label for="otp" class="form-label">OTP code</label>
                                    <input type="text" class="form-control" name="otp" id="otp" minlength="5" maxlength="5" required>
                                    <div class="invalid-feedback">
                                    OTP Required..
                                    </div>
                                </div>
                                <div class="col-12 mt-2 ">
                                    <button type="submit" name="otpSubmit" class="btn btn-dark float-start">Check</button>
                                </div>
                            </form>
                            <hr class="mt-4">
                            <div class="col-12">
                                <p class="text-center mb-0">If you want to back? <a href="signin.php">Signin</a></p>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                    ';

                }
                else{

                    echo '
                        <script>
                            swal({
                                title: "Somthing Wrong!",
                                text: "Invalid Request!",
                                icon: "error",
                                button: "OK!",
                            }).then(function(){
                                    window.location = "signin.php";
                                });
                        </script>
                        ';
                }

            }
     
        ?> <!-- forget password php function end -->

    <!-- javascript libraries -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>

        //show password visibility for registration and login form
        var eye1 = document.getElementById("eye");
        var password1 = document.getElementById("password");
        var password2 = document.getElementById("conPass");
        var showPassword = false;

        eye1.addEventListener("click" , function(){
            if (showPassword == false) {
                //check inputb flield type of password or text
                password1.setAttribute("type", "text");
                password2.setAttribute("type", "text");
                eye1.classList.add("fa-eye-slash");
                eye1.classList.remove("fa-eye");
                showPassword = true;
            }
            else{
                //check inputb flield type of password or text
                password1.setAttribute("type", "password");
                password2.setAttribute("type", "password");
                eye1.classList.remove("fa-eye-slash");
                eye1.classList.add("fa-eye");
                showPassword = false;
            }
        });

        // check password validate
        function checkpassword(){
            var pass1 = document.getElementById("password").value;
            var pass2 = document.getElementById("conPass").value;

            if(pass1 != pass2){
                // var check = document.getElementById("easy");
                // check.checked=false;
                
                document.getElementById("password").style.border="1px solid red";
                document.getElementById("conPass").style.border="1px solid red";
                document.getElementById("errorPassword").innerHTML = 'Password does not match';
                document.getElementById("errorPassword").style.color = "Red";
                return false;

            }
            else{
                document.getElementById("password").style.border="1px solid green";
                document.getElementById("conPass").style.border="1px solid green";
                document.getElementById("errorPassword").disabled=false;
                return true;
            }
        }

    </script>
</body>
</html>