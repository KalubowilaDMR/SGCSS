<?php

session_start();


if(!empty($_SESSION['message'])){

    echo ' 
            <div class="alert alert-danger text-center" role="alert">
                '.$_SESSION['message'].'
            </div>
        ';

        unset ($_SESSION['message']);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="shortcut icon"  href="assets/images/tag.png">
<title>Registration</title>
<!-- css libraries -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
<link rel="stylesheet" href="assets/css/all.css"> 
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<div class="container">
    <div class="row">
        <!-- <div class="col-md-8  col-lg-5 col-sm-12 mx-auto offset-md-4"> -->
        <div class="col-md-8 col-lg-7 col-xl-6 mx-auto offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="function/createacc.php" method="POST" class="row g-3 needs-validation" autocomplete="off" novalidate>
                        <h4>Welcome Here</h4>
                        <div class="col-12 mb-2">
                            <label for="fname" class="form-label">First name</label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name here..."   maxlength="100" required>
                            <div class="invalid-feedback">
                            First Name Required..
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="lname" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name here..."   maxlength="150" required>
                            <div class="invalid-feedback">
                            Last Name Required..
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address here..."   maxlength="350"  required>
                            <div class="invalid-feedback">
                            Address Name Required..
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="nic" class="form-label">NIC number</label>
                            <input type="text" class="form-control" name="nic" id="nic" placeholder="NIC number here..."  pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$"  required oninput="this.value = this.value.toUpperCase()">
                            <div class="invalid-feedback">
                            NIC number Required..
                            </div>
                        </div>
                        <div class="col-12 mb-1">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label me-3 " >Gender</label>
                                <div class="form-check form-check-inline p-3">
                                    <input class="form-check-input ml-4" type="radio" name="gender" id="male" value="Male"  required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline p-3">
                                    <input class="form-check-input ml-2" type="radio" name="gender" id="female" value="Female"  required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="07xxxxxxxx" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="10"  maxlength="10" pattern=".{10}" required>
                            <div class="invalid-feedback">
                            Phone number Required..
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email here..."   maxlength="320"  required>
                            <div class="invalid-feedback">
                            Email Required..
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password here..." minlength="8" maxlength="100" pattern=".{8,100}" required>
                            <i class="far fa-eye" id="eye" ></i>
                            <div class="invalid-feedback" maxlength="100" >
                            Minimum 8 characters..
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="com_password" class="form-label">Re-password</label>
                            <input type="password" class="form-control" name="com_password" id="com_password" placeholder="Password here..." minlength="8"  maxlength="100" pattern=".{8,100}" required>
                            <div class="invalid-feedback">
                            Minimum 8 characters..
                            </div>
                        </div>
                        <div class="col-12  form-check" style="padding-left:40px;">
                            <input class="form-check-input" type="checkbox" value="" id="easy" onclick="checkpassword()" required>
                            <label class="form-check-label" for="easy">
                                All details are correct
                            </label>
                        </div>
                        <div class="col-12 mt-4 ">
                            <button type="submit" class="btn btn-dark float-start" name="submit" id="submit" onclick="passwordValidate()">Sign Up</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Have an existing account? <a href="signin.php">SignIn</a></p>
                        <p class="text-center mt-1">Return <a href="index.php">Home</a></p>
                    </div>
                </div>
            </div>
             </div>
         </div>
    </div>
</div>
    
    <!-- javascript libraries -->
    <script src="assets/js/script.js"></script>
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>    
    
</body>
</html>