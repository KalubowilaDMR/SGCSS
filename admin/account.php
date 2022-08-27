<?php
    session_start();
    date_default_timezone_set('Asia/Colombo');

    // Then call the date functions
    $date = date('Y-m-d').'%';
    // echo '<script>alert("'.$date.'")</script>';
    // database connection
    include("./connection/db_connection.php");
    include("../autoLogout.php");


    //check user session is active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "admin"){

        //redirect to signin page
        header('Location: ../signin.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asset/tag.png">
    <title>SGCSS - Account</title>
     <!-- css libraries -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/all.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <script src="./js/sweetalert.min.js"></script>

   
</head>
<body>
<div class="wrapper">   
    <nav class="nav-sidebar" id="sidebar"> <!-- Sidebar start -->
        <?php
            include("aSidebar.php");
        ?>
    </nav> <!-- Sidebar end -->

    
    <div id="content"> <!-- Page Content  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">  <!-- Top navbar start -->
            <div class="container-fluid">
                
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <div class="dashboard-name">
                    <h2 class="dashboard-header">Admin Dashboard</h2>
                </div>
            </div>
        </nav> <!-- Top navbar end -->
        
            <!-- Select user data start -->
            <?php

                // echo $_SESSION['email'];

                //select the user data from database user table
                $sql = "SELECT * FROM user WHERE email ='".$_SESSION['email']."'";
                $result = mysqli_query($conn, $sql);
                $checkResult = mysqli_num_rows($result);

                if($checkResult > 0){
                    
                    while($row = mysqli_fetch_assoc($result)){

                        //get data from datbase to variables
                        $fname = $row['first_name'];
                        $lname = $row['last_name'];
                        $nic = $row['nic'];
                        $gender = $row['gender'];
                        $phone = $row['phone'];
                        $address = $row['address'];
                    }
                }


            ?> <!-- Select user data end -->

            <?php
            //Update user data from the database
                if(isset($_POST['submit'])){

                $fname = mysqli_real_escape_string($conn, trim($_POST['fname']));
                $lname = mysqli_real_escape_string($conn, trim($_POST['lname']));
                $gender = mysqli_real_escape_string($conn, trim($_POST['gender']));
                $address = mysqli_real_escape_string($conn, trim($_POST['address']));
                $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));

                $sql = "UPDATE user SET first_name = '".$fname."', last_name = '".$lname."', gender = '".$gender."', address = '".$address."', phone = '".$phone."' WHERE email = '".$_SESSION['email']."'";
                $result = mysqli_query($conn, $sql);

                echo '
                    <script>

                        swal({
                            title: "success!",
                            text:"Update Successfully.",
                            icon: "success",
                            button: "Ok!",
                        }).then(function(){
                            window.location = "account.php";
                        });

                    </script>
                    ';
                
                echo'
                        <script>
                            pageReload();
                        </script>
                ';

                }

            ?> <!-- Update Profile end -->

        <!-- update user count card data start -->
        <div class="mb-4 p-2"></div>
        <!-- User Details start  -->
            <div class="accout-form mt-10 bg-light">
                <form class="row g-3 needs-validation  mb-4 p-3" action="#" method="POST" autocomplete="off" novalidate>
                    <div class="account-header col-12 ms-4 ps-2 ">
                        <h3 >Accout Details</h3>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname; ?>" placeholder="First Name here..."  required>
                        <div class="invalid-feedback">
                        First Name Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="lname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $lname; ?>" placeholder="Last Name here..."  required>
                        <div class="invalid-feedback">
                        Last Name Required..
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $address; ?>" placeholder="Address here..."  required>
                        <div class="invalid-feedback">
                        Address Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nic" class="form-label">NIC Number</label>
                        <input type="text" class="form-control" name="nic" id="nic" value="<?php echo $nic; ?>" placeholder="NIC Number here..."  pattern=".{10,12}" oninput="this.value = this.value.toUpperCase()" required readonly>
                        <div class="invalid-feedback">
                        NIC Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <?php

                                if($gender == "Male"){
                                    echo '<option  disabled value>Choose..</option>
                                    <option value="Male" name="male" selected>Male</option>
                                    <option value="Female" name="female">Female</option>';
                                }
                                else{
                                    
                                    echo'<option disabled value>Choose..</option>
                                    <option value="Male" name="male">Male</option>
                                    <option value="Female" name="female" selected>Female</option>';
                                }

                            ?>
                            
                        </select>
                        <div class="invalid-feedback">
                        Gender Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="07xxxxxxxx here..."  pattern=".{10}"  required>
                        <div class="invalid-feedback">
                        Phone Number Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['email']; ?>" placeholder="abc@gmail.com here..."  required readonly>
                        <div class="invalid-feedback">
                        Email address Required..
                        </div>
                    </div>
    
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="submit">Update</button>
                    </div>
                </form>
            </div>  <!-- User Details end  -->           
        </div> <!-- User list table row end -->
    </div> <!-- content -->
</div> <!-- wrapper -->
 
    <!-- javascript libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  
</body>
</html>