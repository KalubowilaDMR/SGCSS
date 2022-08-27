<?php

    session_start();
    // Database connection
    include("connection/db_connection.php");
    include("../autoLogout.php");

    // check user session active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "gs"){

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
    <title>Account</title>
     <!-- css libraries -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/all.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="./js/sweetalert.min.js"></script>
     
</head>
<body>
    

<!-- Sidebar details Here -->
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
        <div class="sidebar-header">
                <img src="asset/Logo.png" alt="logo" width="150px" height="75px">
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="gdashboard.php" class="dash-header" id="dashbord">Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Publish</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="news.php">Update News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#workArea" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Work Area</a>
                    <ul class="collapse list-unstyled" id="workArea">
                        <li>
                            <a href="#rural" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Rural Information</a>
                            <ul class="collapse list-unstyled" id="rural">
                                <li>
                                    <a href="./ruralinfo/rPage1.php" class="rural-details sinhala-font" name="rPage1">පුද්ගල තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage2.php" class="rural-details sinhala-font" name="rPage2">විදෙස්ගතය පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage3.php" class="rural-details sinhala-font" name="rPage3">ආබාධිත පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage4.php" class="rural-details sinhala-font" name="rPage4">පදිංචි නිවාස පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage5.php" class="rural-details sinhala-font" name="rPage5">පදිංචි ඉඩම් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage6.php" class="rural-details sinhala-font" name="rPage6">වගාකර ඇති ඉඩම් පිළිබඳ තොරතුරු(වසම තුල)</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage7.php" class="rural-details sinhala-font" name="rPage7">නිවසේ වාහන පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage8.php" class="rural-details sinhala-font" name="rPage8">ක්‍රීඩා සදහා අපේක්ෂකයන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage9.php" class="rural-details sinhala-font" name="rPage9">පාඨමාලා හදාරන්නන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage10.php" class="rural-details sinhala-font" name="rPage10">නිවසේ ඇතිකරන සතුන් පිළිබඳ තොරතුරු</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="deathList.php">Death List</a>
                        </li>
                        <li>
                            <a href="widowList.php">Widow List</a>
                        </li>
                        <li>
                            <a href="spouseList.php">Spouse List</a>
                        </li>
                        <li>
                            <a href="votingList.php">Voting List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#analysis" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Analysis</a>
                    <ul class="collapse list-unstyled" id="analysis">
                        <li> 
                            <a href="chart1.php" class="analysis-details sinhala-font" name="aPage1">කොට්ඨාශය තොරතුරු</a>
                        </li>
                        <li> 
                            <a href="chart2.php" class="analysis-details sinhala-font" name="aPage4">නිවස සහ ඉඩම් තොරතුරු</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#notification" data-toggle="collapse"  aria-expanded="false" class="dropdown-toggle">Notifications</a>
                    <ul class="collapse list-unstyled" id="notification">
                        <li>
                            <a href="./notification/appointmentList.php">Appointment List</a>
                        </li>
                        <li>
                            <a href="./notification/approvedAppointmnet.php">Approved Appointment</a>
                        </li>
                        <li>
                            <a href="./notification/rejectedAppointmnet.php">Rejected Appointment</a>
                        </li>
                        <li>
                            <a href="./notification/complain.php">Compalins</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="">Account</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../signout.php" class="signout">Sign Out</a>
                </li>
               
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="bi bi-text-left bi-bold"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                   
                    <div class="dashboard-name">
                        <h2 class="dashboard-header">Gramasewaka Dashboard</h2>
                    </div>
                </div>
            </nav>
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

                    // $result = mysqli_query($conn, $sql);
                    if($result = mysqli_query($conn, $sql)){

                        echo '
                        <script type="text/javascript">
                
                            $(document).ready(function(){
                    
                                swal({
                                    title: "success!",
                                    text:"Update Successfully.",
                                    icon: "success",
                                    button: "Ok!",
                                }).then(function(){
                                    window.location = "account.php";
                                });
                            });
                
                        </script>
                        ';

                        echo '
                            <script>
                                accReload();
                            </script>
                        ';
                    }
                    else{
                        echo '
                                <script>
                                    swal({
                                        title: "Error Occured!",
                                        text: "Try Again",
                                        icon: "error",
                                        button: "OK!",
                                    }).then(function(){
                                        window.location = "account.php";
                                    });
                                </script>
                            ';
                    }
                    

                }

            ?> <!-- Update Profile end -->




            <div class="mb-4 p-2"></div>
            <!-- User Details start  -->
            <div class="accout-form mt-10 bg-light">
                <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
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
            </div>
           <!-- User Details end  -->

        </div>
    </div>
 
    <!-- javascript libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>