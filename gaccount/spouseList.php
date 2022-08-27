
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
<title>Spouse List</title>
 <!-- css libraries -->
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="../assets/css/all.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
                            <a href="">Spouse List</a>
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

        <div class="container">
    
       
        <div class="line"></div>
            
        </div>

        <h3 class="header mt-4">Spouse people list</h3>

        <!-- spouse people list table start -->
        <div class="row my-5">
            <table class="table table-striped table-responsive-md table-bordered my-5" id="spouseTable">
                <thead>
                    <tr>
                        <th class="sinhala-font">ගෘහ අංකය</th>
                        <th class="sinhala-font">ගෘහ ලිපිනය</th>
                        <th class="sinhala-font">සම්පූර්න නම</th>
                        <th class="sinhala-font">ස්ත්‍රී/පුරුෂ</th>
                        <th class="sinhala-font">ස්වාමියා/බිරිද ගේ සම්පූර්න නම</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    $sql = "SELECT h_no, address, full_name, gender, spouse FROM `personal_details` WHERE status='විවාහකයි'";
                    $result= mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result)>0){
                        
                        while($row = mysqli_fetch_assoc($result)){
                            
                            echo'
                            <tr>
                                <td class="sinhala-font" name="hno" id="hno">'.$row["h_no"].'</td>
                                <td class="sinhala-font" name="address" id="address">'.$row["address"].'</td>
                                <td class="sinhala-font" name="name" id="name">'.$row["full_name"].'</td>
                                <td class="sinhala-font" name="gender" id="gender">'.$row["gender"].'</td>
                                <td class="sinhala-font" name="spouse" id="spouse">'.$row["spouse"].'</td>
                            </tr>
                            ';
                        }

                    }


                ?>
                                        
                </tbody>
            </table>
        </div>  <!-- spouse people list table end -->
        
    </div>
</div>

<!-- javascript libraries -->
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>