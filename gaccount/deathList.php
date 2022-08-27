
<?php

date_default_timezone_set('Asia/Colombo');

// Then call the date functions
$date = date('Y-m-d').'%';
// echo '<script>alert("'.$date.'")</script>';

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
<title>මියගිය පුද්ගල දත්ත ගොනුව</title>
 <!-- css libraries -->
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="../assets/css/all.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                            <a href="">Death List</a>
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
                            <a href="chart2.php" class="analysis-details sinhala-font" name="aPage2">නිවස සහ ඉඩම් තොරතුරු</a>
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
                    <a href="account.php">Account</a>
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

            <!-- continue content -->
            <div class="table-name">
                    <h3 class="table-name-header m-5"><u>මියගිය පුද්ගල පිළිබඳ තොරතුරු</u></h3>
            </div>

            <!-- new data insert start -->
            <div class="insert-new">
                <button type="submit" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#deathForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="deathForm" tabindex="-1" data-backdrop="static" data-keyboard="false"  aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">මියගිය පුද්ගල පිළිබද දත්ත ඇතුලත්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                            <div class="col-md-6 mb-4">
                                    <label for="homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="homeNo" id="homeNo"  required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="deathDate" class="form-label sinhala-font">මරණය සිදු වු දිනය</label>
                                    <input type="date" class="form-control sinhala-font" name="deathDate" id="deathDate" required>
                                    <div class="invalid-feedback">
                                    Date is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="deathPlace" class="form-label sinhala-font">මරණය සිදු වු ස්ථානය</label>
                                    <input type="text" class="form-control sinhala-font" name="deathPlace" id="deathPlace" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Place is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="address" class="form-label sinhala-font">ගෘහ ලිපිනය</label>
                                    <input type="text" class="form-control sinhala-font" name="address" id="address" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Address Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="fullName" class="form-label sinhala-font">සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="fullName" id="fullName" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    FullName is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="genderselect" class="form-label sinhala-font">ස්ත්‍රී/පුරුෂභාවය</label>
                                    <select class="form-select sinhala-font" name="genderselect" id="genderselect" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="male" name="male" value="පුරුෂ">පුරුෂ</option>
                                        <option id="female" name="female" value="ස්ත්‍රී">ස්ත්‍රී</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Gender is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="age" class="form-label sinhala-font">මියයනවිට වයස</label>
                                    <input type="text" class="form-control sinhala-font" name="age" id="age" required>
                                    <div class="invalid-feedback">
                                    Age is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="nic" id="nic" pattern=".{10,12}" oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="job" class="form-label sinhala-font">රැකියාව</label>
                                    <input type="text" class="form-control sinhala-font" name="job" id="job" maxlength="150">
                                    <div class="invalid-feedback">
                                        Job is Required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="reason" class="form-label sinhala-font">මරණයට හේතුව</label>
                                    <input type="text" class="form-control sinhala-font" name="reason" id="reason" maxlength="200" required>
                                    <div class="invalid-feedback">
                                        Reason Is Required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="infoPerson" class="form-label sinhala-font">දැනුම් දියයුත්තාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="infoPerson" id="infoPerson" maxlength="450" oninput="this.value = this.value.toUpperCase()" required>
                                    <div class="invalid-feedback">
                                        Name is Required
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <label for="infoAddress" class="form-label sinhala-font">දැනුම් දියයුත්තාගේ ලිපිනය</label>
                                    <input type="text" class="form-control sinhala-font" name="infoAddress" id="infoAddress" maxlength="350" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                        Address is Required
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="deathlistIn">Insert new field</button>
                                </div>
                            </form>

                            
                            <!-- insert data to database deathList table start -->
                            <?php

                                if(isset($_POST['deathlistIn'])){

                                    $homeNo = mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                    $deathDate = mysqli_real_escape_string($conn, trim($_POST['deathDate']));
                                    $deathPlace = mysqli_real_escape_string($conn, trim($_POST['deathPlace']));
                                    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
                                    $fullName = mysqli_real_escape_string($conn, trim($_POST['fullName']));
                                    $genderselect = mysqli_real_escape_string($conn, trim($_POST['genderselect']));
                                    $age = mysqli_real_escape_string($conn, trim($_POST['age']));
                                    $nic = mysqli_real_escape_string($conn, trim($_POST['nic']));
                                    $job = mysqli_real_escape_string($conn, trim($_POST['job']));
                                    $reason = mysqli_real_escape_string($conn, trim($_POST['reason']));
                                    $infoPerson = mysqli_real_escape_string($conn, trim($_POST['infoPerson']));
                                    $infoAddress = mysqli_real_escape_string($conn, trim($_POST['infoAddress']));
                                    
                                    $sqlNic ="SELECT nic FROM `death_list` WHERE nic='".$nic."'";
                                    $resultNic = mysqli_query($conn,$sqlNic);
                                    if(mysqli_num_rows($resultNic)>0){

                                        echo'
                                                <script>
                                                    swal({
                                                        title: "Error Occurd!",
                                                        text: "There has existing NiC number. Please findout!",
                                                        icon: "error",
                                                        button: "OK!",  
                                                    }).then(function(){
                                                        window.location = "deathList.php";
                                                    });
                                                </script>
                                            ';
                                        
                                    }
                                    else{

                                        $sqlInsert = "INSERT INTO `death_list` (`h_no`, `d_date`, `d_place`, `h_address`, `full_name`, `gender`, `d_age`, `nic`, `job`, `d_reason`, `info_name`, `info_address`) VALUES ('".$homeNo."', '".$deathDate."', '".$deathPlace."', '".$address."', '".$fullName."', '".$genderselect."', '".$age."', '".$nic."', '".$job."', '".$reason."', '".$infoPerson."', '".$infoAddress."')";

                                        // echo'
                                        //     <script>
                                        //         alert("'.$sqlInsert.'");
                                        //     </script>
                                        // ';

                                        $resultInsert = mysqli_query($conn,$sqlInsert);

                                            echo '
                                                    <script>
                                                        swal({
                                                            title: "Success!",
                                                            text: "You have successfully insert data",
                                                            icon: "success",
                                                            button: "OK!",
                                                        }).then(function(){
                                                            window.location = "deathList.php";
                                                        });
                                                    </script>
                                                ';
                                    
                                            echo '
                                                    <script>
                                                        reloadInsertDeath();
                                                    </script>
                                                ';


                                    }

                                }

                            ?>  <!-- insert data to database deathList table end -->


                        </div>
                    <!-- User Details end  -->
                </div>
                </div>
            </div>
            </div>
            <!-- modal close  for insert data-->
            <!-- new data insert end -->

            <!-- death people list table start -->
            <div class="row my-5">
                <table class="table table-striped table-responsive-md table-bordered my-5" id="dethListTable">
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">ID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">මරණය සිදු වු දිනය</th>
                            <th class="sinhala-font">මරණය සිදු වු ස්ථානය</th>
                            <th class="sinhala-font">ලිපිනය</th>
                            <th class="sinhala-font">සම්පූර්න නම</th>
                            <th class="sinhala-font">ස්ත්‍රී/පුරුෂ</th>
                            <th class="sinhala-font">මියයනවිට වයස</th>
                            <th class="sinhala-font">හැදුනුම්පත් අංකය</th>
                            <th class="sinhala-font">රැකියාව</th>
                            <th class="sinhala-font">මරණයට හේතුව</th>
                            <th class="sinhala-font">දැනුම් දියයුත්තාගේ නම</th>
                            <th class="sinhala-font">දැනුම් දියයුත්තාගේ ලිපිනය</th>
                            <th class="sinhala-font">වෙනස් කිරීම</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sqlSelect = "SELECT * FROM `death_list`";
                            $resultSelect = mysqli_query($conn,$sqlSelect);
                            if(mysqli_num_rows($resultSelect)>0){
                                while($row = mysqli_fetch_assoc($resultSelect)){
                                    
                                    echo'
                                        <tr>
                                            <td class="sinhala-font d-none" id="tid">'.$row["id"].'</td>
                                            <td class="sinhala-font" id="thoNo">'.$row["h_no"].'</td>
                                            <td class="sinhala-font" id="tdeathDate">'.$row["d_date"].'</td>
                                            <td class="sinhala-font" id="tDeathPlace">'.$row["d_place"].'</td>
                                            <td class="sinhala-font" id="taddress">'.$row["h_address"].'</td>
                                            <td class="sinhala-font" id="tfname">'.$row["full_name"].'</td>
                                            <td class="sinhala-font" id="tgender">'.$row["gender"].'</td>
                                            <td class="sinhala-font" id="tage">'.$row["d_age"].'</td>
                                            <td class="sinhala-font" id="tnic">'.$row["nic"].'</td>
                                            <td class="sinhala-font" id="tjob">'.$row["job"].'</td>
                                            <td class="sinhala-font" id="treason">'.$row["d_reason"].'</td>
                                            <td class="sinhala-font" id="tinfoPeople">'.$row["info_name"].'</td>
                                            <td class="sinhala-font" id="tinfoAddress">'.$row["info_address"].'</td>
                                            <td name="change" id="change">
                                                <div class="btn-group">
                                                    <button class="btn btn-success mr-1" name="updateDeath" id="updateDeath" data-toggle="modal" data-target="#deathUpdateForm"><i class="bi bi-pencil"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    ';

                                }
                            }

                        ?>
                        
                    </tbody>
                </table>
            </div>  <!-- death people list table end -->

            <!-- Modal start for insert data -->
            <div class="modal fade" id="deathUpdateForm" tabindex="-1" data-backdrop="static" data-keyboard="false"  aria-labelledby="updateData" aria-hidden="true">
                <div class="modal-dialog modal-xl   ">
                    <div class="modal-content  ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateData">මියගිය පුද්ගල පිළිබද දත්ත ඇතුලත්කරන ආකෘති පත්‍රය</h5>
                            <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body mt-2 p-0">
                        <div class="accout-form mt-10 bg-light">
                                <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                                    <div class="input-group mb-3" hidden>
                                        <input type="text"  name="d_id" id="d_id" readonly>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                    <label for="uhomeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="uhomeNo" id="uhomeNo"  required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="udeathDate" class="form-label sinhala-font">මරණය සිදු වු දිනය</label>
                                    <input type="date" class="form-control sinhala-font" name="udeathDate" id="udeathDate" required>
                                    <div class="invalid-feedback">
                                    Date is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="udeathPlace" class="form-label sinhala-font">මරණය සිදු වු ස්ථානය</label>
                                    <input type="text" class="form-control sinhala-font" name="udeathPlace" id="udeathPlace" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Place is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="uaddress" class="form-label sinhala-font">ගෘහ ලිපිනය</label>
                                    <input type="text" class="form-control sinhala-font" name="uaddress" id="uaddress" maxlength="350" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Address Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="ufullName" class="form-label sinhala-font">සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="ufullName" id="ufullName" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    FullName is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="ugenderselect" class="form-label sinhala-font">ස්ත්‍රී/පුරුෂභාවය</label>
                                    <select class="form-select sinhala-font" name="ugenderselect" id="ugenderselect" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="male" name="male" value="පුරුෂ">පුරුෂ</option>
                                        <option id="female" name="female" value="ස්ත්‍රී">ස්ත්‍රී</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Gender is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="uage" class="form-label sinhala-font">මියයනවිට වයස</label>
                                    <input type="text" class="form-control sinhala-font" name="uage" id="uage" required>
                                    <div class="invalid-feedback">
                                    Age is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="unic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="unic" id="unic" pattern=".{10,12}" oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="ujob" class="form-label sinhala-font">රැකියාව</label>
                                    <input type="text" class="form-control sinhala-font" name="ujob" id="ujob" maxlength="150">
                                    <div class="invalid-feedback">
                                        Job is Required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="ureason" class="form-label sinhala-font">මරණයට හේතුව</label>
                                    <input type="text" class="form-control sinhala-font" name="ureason" id="ureason" maxlength="200" required>
                                    <div class="invalid-feedback">
                                        Reason Is Required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="uinfoPerson" class="form-label sinhala-font">දැනුම් දියයුත්තාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="uinfoPerson" id="uinfoPerson" maxlength="450" oninput="this.value = this.value.toUpperCase()" required>
                                    <div class="invalid-feedback">
                                        Name is Required
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <label for="uinfoAddress" class="form-label sinhala-font">දැනුම් දියයුත්තාගේ ලිපිනය</label>
                                    <input type="text" class="form-control sinhala-font" name="uinfoAddress" id="uinfoAddress" maxlength="350" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                        Address is Required
                                    </div>
                                </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit" name="deathUp">Update Data</button>
                                    </div>
                                </form>

                                <!-- deathList update database on death_list table function start -->
                                <?php

                                    if(isset($_POST['deathUp'])){

                                        $d_id = mysqli_real_escape_string($conn, trim($_POST['d_id']));
                                        $uhomeNo = mysqli_real_escape_string($conn, trim($_POST['uhomeNo']));
                                        $udeathDate = mysqli_real_escape_string($conn, trim($_POST['udeathDate']));
                                        $udeathPlace = mysqli_real_escape_string($conn, trim($_POST['udeathPlace']));
                                        $uaddress = mysqli_real_escape_string($conn, trim($_POST['uaddress']));
                                        $ufullName = mysqli_real_escape_string($conn, trim($_POST['ufullName']));
                                        $ugenderselect = mysqli_real_escape_string($conn, trim($_POST['ugenderselect']));
                                        $uage = mysqli_real_escape_string($conn, trim($_POST['uage']));
                                        $unic = mysqli_real_escape_string($conn, trim($_POST['unic']));
                                        $ujob = mysqli_real_escape_string($conn, trim($_POST['ujob']));
                                        $ureason = mysqli_real_escape_string($conn, trim($_POST['ureason']));
                                        $uinfoPerson = mysqli_real_escape_string($conn, trim($_POST['uinfoPerson']));
                                        $uinfoAddress = mysqli_real_escape_string($conn, trim($_POST['uinfoAddress']));

                                        $sqlUpdate = "UPDATE `death_list` SET `h_no`='".$uhomeNo."',`d_date`='".$udeathDate."',`d_place`='".$udeathPlace."',`h_address`='".$uaddress."',`full_name`='".$ufullName."',`gender`='".$ugenderselect."',`d_age`='".$uage."',`nic`='".$unic."',`job`='".$ujob."',`d_reason`='".$ureason."',`info_name`='".$uinfoPerson."',`info_address`='".$uinfoAddress."' WHERE `id`='".$d_id."'";
                                        $resultUpdate = mysqli_query($conn,$sqlUpdate);

                                        if(mysqli_affected_rows($conn)>0){

                                            echo'
                                                    <script>
                                                        swal({
                                                            title: "Success!",
                                                            text: "Update Data successfully",
                                                            icon: "success",
                                                            button: "OK!",
                                                        }).then(function(){
                                                            window.location = "deathList.php";
                                                        });
                                                    </script>
                                                ';

                                            echo '
                                                    <script>
                                                        reloadUpdateDeath();
                                                    </script>
                                                ';

                                        }
                                        else{
                                        
                                            echo'
                                                    <script>
                                                        swal({
                                                            title: "Error Occurd!",
                                                            text: "There has an error. Please findout!",
                                                            icon: "error",
                                                            button: "OK!",
                                                        }).then(function(){
                                                            window.location = "deathList.php";
                                                        });
                                                    </script>
                                                ';
                                            
                                            }


                                    }

                                ?>
                                <!-- deathList update database on death_list table function end -->


                            </div>
                            <!-- User Details end  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal close  for insert data-->
        </div>
</div>

<!-- javascript libraries -->
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>