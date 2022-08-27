<?php

    session_start();
    //database connection
    include("connection/db_connection.php");
    include("../autoLogout.php");

    //echo $_SESSION['user'];


    // check user session active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "user"){

        // redirrect user to signin page
        header('Location: ../signin.php');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="asset/tag.png">
    <title>SGCSS - Account</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <?php
                include("sidebar.php");
            ?>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <div class="dashboard-name">
                        <h2 class="dashboard-header">Account</h2>
                    </div>
                </div>
            </nav>
            <hr>
            

            <?php
                    
                

                    //slect user data from databse user table
                    $sql = "SELECT * FROM user WHERE email = '".$_SESSION['email']."'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    //check any data has to fetching
                    if($resultCheck > 0){

                        $row = mysqli_fetch_assoc($result);

                                
                                // value added to variables
                                $fname = $row['first_name']; 
                                $lname = $row['last_name']; 
                                $address = $row['address']; 
                                $nic = $row['nic']; 
                                $gender = $row['gender']; 
                                $phone = $row['phone']; 
                

                    }
                    else{
                        // echo error message
                        echo "
                        <script>
                                alert('There has no data to display on there');
                        </script>
                        ";
                    }


            ?>


            <div class="mb-4 p-2"></div>
            <!-- User Details start  -->
            <div class="accout-form mt-10 bg-light">
                <form class="row g-3 needs-validation  mb-4 p-3" action="function/fvaccount.php" method="POST" autocomplete="off" novalidate>
                    <div class="account-header col-12 ms-4 ps-2 ">
                        <h3 >Accout Details</h3>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name here..."  required value="<?php echo $fname; ?>">
                        <div class="invalid-feedback">
                        First Name Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="lname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name here..."  required value="<?php echo $lname; ?>">
                        <div class="invalid-feedback">
                        Last Name Required..
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address here..."  required value="<?php echo $address; ?>">
                        <div class="invalid-feedback">
                        Address Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nic" class="form-label">NIC Number</label>
                        <input type="text" class="form-control" name="nic" id="nic" placeholder="NIC Number here..."  pattern=".{10,12}" oninput="this.value = this.value.toUpperCase()" required value="<?php echo $nic; ?>" readonly>
                        <div class="invalid-feedback">
                        NIC Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender" required value="<?php echo $gender; ?>">
                            <?php

                                if($gender == "Male"){

                                    echo'
                                        <option disabled value>Choose...</option>
                                        <option value="male" name="male" selected>Male</option>
                                        <option value="female" name="female">Female</option>
                                    ';
                                }
                                else{

                                    echo'
                                        <option disabled value>Choose...</option>
                                        <option value="male" name="male">Male</option>
                                        <option value="female" name="female" selected>Female</option>
                                    ';
                                }

                            ?>
                            
                        </select>
                        <div class="invalid-feedback">
                        Gender Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="pnumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="pnumber" id="pnumber" placeholder="07xxxxxxxx here..."  pattern=".{10}"  required value="<?php echo $phone; ?>">
                        <div class="invalid-feedback">
                        Phone Number Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="07xxxxxxxx here..."  required value="<?php echo $_SESSION['email']; ?>" readonly>
                        <div class="invalid-feedback">
                        Phone Number Required..
                        </div>
                    </div>
     
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="submit" id="submit">Update</button>
                    </div>
                </form>
            </div>
           <!-- User Details end  -->
           
            
        </div>
        <div class="invsible" id="timer" hidden></div>
    </div>
 
    <!-- javascript libraries -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>