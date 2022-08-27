<?php

session_start();


if(!empty($_SESSION['error'])){

    echo ' 
            <div class="alert alert-danger text-center" role="alert">
                '.$_SESSION['error'].'
            </div>

        ';

        unset ($_SESSION['error']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon"  href="assets/images/tag.png">
    <title>Login</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    
</head>
<body>
     <div class="container">
         <div class="row">
            <div class="col-md-6  col-lg-5 col-sm-12 mx-auto offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="./function/signacc.php" method="POST" class="row g-3 needs-validation" autocomplete="off" novalidate>
                        <h4>Welcome Back</h4>
                        <div class="col-12 mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <div class="invalid-feedback">
                            Email Required..
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" minlength="8"   required>
                            <i class="far fa-eye" id="eye"></i>
                            <div class="invalid-feedback">
                            Password Required..
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="details">
                                <div class="form-check">
                                    <div class="custom-control float-right">
                                        <label  class="custom-label"  for="forgetPassword"><a href="forgetpass.php">Forget Password</a></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4 ">
                            <button type="submit" name="submit" class="btn btn-dark float-start">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Have not account yet? <a href="signup.php">Signup</a></p>
                        <p class="text-center mt-1">Return <a href="index.php">Home</a></p>
                    </div>
                </div>
            </div>
             </div>
         </div>
     
    
    <!-- javascript libraries -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
</body>
</html>