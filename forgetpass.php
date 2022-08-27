



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="wrapper">

<div class="container">
         <div class="row">
            <div class="col-md-6  col-lg-5 col-sm-12 mx-auto offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="POST" class="row g-3 needs-validation" autocomplete="off" novalidate>
                        <h4>Forget Password</h4>
                        <p class="m-2 p-2">Please, provide your account email address to reset password</p>
                        <div class="col-12 mt-1 mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"  required>
                            <div class="invalid-feedback">
                            Email Required..
                            </div>
                        </div>
                        <div class="col-12 mt-2 ">
                            <button type="submit" name="submit" class="btn btn-dark float-start">Send reset code</button>
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
    
        <!-- forget password php function start -->
        <?php

            
            //database connection
            include("connection/db_connection.php");

            //user has clicked submit or not
            if(isset($_POST['submit'])){
                
                //select the user is active or not
                $email = mysqli_real_escape_string($conn,trim($_POST['email']));

                $sql = "SELECT * FROM user WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $checkResult = mysqli_num_rows($result);

                //check user availabled or not in database(Registered user)
                if($checkResult > 0){

                    session_start();
                    // $code = 12345;
                    $code = rand(10000,99999);
                    $_SESSION['otpCode'] = $code;
                    $_SESSION['otpEmail'] = $_POST['email'];
                    //send mail
                    include("resetacc.php");                    

                    //load send code modal
                    echo '
                    <script>
                        swal({
                            title: "Success!",
                            text: "OTP has been sent,Check Your Email!",
                            icon: "success",
                            button: "OK!",
                        }).then(function(){
                                window.location = "resetPassword.php";
                            });
                    </script>
                    ';
                }

                else{
                    
                    echo '
                    <script>
                        swal({
                            title: "Error",
                            text: "Enter Valid Email!",
                            icon: "error",
                            button: "OK!",
                        });
                    </script>
                    ';
                }
            }


        ?>
        <!-- forget password php function end -->


    <!-- javascript libraries -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>