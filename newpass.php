



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
                            <label for="newPass" class="form-label">New password</label>
                            <input type="text" class="form-control" name="newPass" id="newPass"  required>
                            <div class="invalid-feedback">
                            New password Required..
                            </div>
                            <label for="comNewPass" class="form-label">Comfirm password</label>
                            <input type="text" class="form-control" name="comNewPass" id="comNewPass"  required>
                            <div class="invalid-feedback">
                            Comfirm Password Required..
                            </div>
                        </div>
                        <div class="col-12 mt-2 ">
                            <button type="submit" class="btn btn-dark float-start">Change Password</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">If you want to back? <a href="signup.php">Signup</a></p>
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
</body>
</html>