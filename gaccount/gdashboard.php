
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
    <title>Dashboard</title>
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

            <div class="container">
                                   
                
                <form action="" method="POST">
                    <span class="connection">
                        <button class="btn btn-success con-status" name="online" id="online">Online</button>
                    </span>
                    <span class="connection">
                        <button class="btn btn-danger con-status" name="offline" id="offline">Offline</button>
                    </span>
                </form>
                    <!-- user available status update start -->
                    <?php
                    
                        if(isset($_POST['online'])){
                            $sql = "UPDATE availability  SET status=1 WHERE id=2";
                            $result = mysqli_query($conn, $sql);

                            if($result){
                                
                                echo' 
                                        <script>
                                            availableReload();
                                        </script>'
                                    ;
                            }

                        }


                        if(isset($_POST['offline'])){
                            $sql = "UPDATE availability  SET status=0 WHERE id=2";
                            $result = mysqli_query($conn, $sql);

                            if($result){
                                echo' 
                                        <script>
                                            availableReload();
                                        </script>'
                                    ;
                            }

                        }
                                    
                    ?>  <!-- user available status update end -->
                <br>
                <div>
                    <!-- user available status update mention start -->
                    <?php
                        $sqlStatus = "SELECT status FROM `availability`";
                        $resultStatus = mysqli_query($conn,$sqlStatus); 
                        if(mysqli_num_rows($resultStatus)>0){
                            $statusData = mysqli_fetch_assoc($resultStatus);
                            $online = $statusData['status'];
                            if($online == "1"){
                                echo'
                                    <p style="color:#f000;"><strong style="color:green;">Available Status is now: Online</strong></p>
                                ';
                            }
                            else{
                                echo'
                                    <p style="color:#f000;"><strong style="color:red;">Available Status is now: Offline</strong></p>
                                ';
                            }
                        }   
                    ?>  <!-- user available status update mention end -->
                            
                </div>

            <div class="line"></div>


            <?php

                if(isset($_SESSION['gsId'])){

                    $appointmentValue = "SELECT COUNT(CASE acceptance WHEN 'accepted' THEN 1 ELSE NULL END) AS approved, COUNT(CASE acceptance WHEN 'rejected' THEN 1 ELSE NULL END)AS rejected, COUNT(CASE acceptance WHEN 'pending' THEN 1 ELSE NULL END) AS pending FROM `appointment`";
                    $appResult = mysqli_query($conn, $appointmentValue);
                    $checkAppResult = mysqli_fetch_assoc($appResult);

                    if(mysqli_num_rows($appResult)>0){

                        $accepted = $checkAppResult['approved'];
                        $rejected = $checkAppResult['rejected'];
                        $pending = $checkAppResult['pending'];

                    }

                }

            ?>


            <div class="card-topic ms-0">
                <h3>Remain</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 ms-2"> <!-- Card row Start -->
                <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card text-white bg-primary mx-3 my-3">
                        <a href="notification/appointmentList" class="rural-details" style="text-decoration:none;">
                        <div class="card-header text-white">Pending Appointments</div>
                        <div class="card-body">
                            <div class="card-title">
                                <!-- <p><span><i class="bi bi-people-fill card-icon"></i></span></p> -->
                                <p class="mx-auto text-white text-center fs-4"><?php echo $pending; ?></p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card text-white bg-success mx-3 my-3">
                    <a href="notification/approvedAppointmnet.php" class="nounderline" style="text-decoration:none;">
                        <div class="card-header text-white">Approved Appointment</div>
                        <div class="card-body">
                            <div class="card-title">
                                <!-- <p><span><i class="bi bi-people-fill card-icon"></i></span></p> -->
                                <p class="mx-auto text-white text-center fs-4"><?php echo $accepted; ?></p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card text-white bg-danger mx-3 my-3">
                    <a href="notification/rejectedAppointmnet.php" class="rural-details appointment" style="text-decoration:none;">
                        <div class="card-header text-white">Rejected Appointmnet</div>
                        <div class="card-body">
                            <div class="card-title">
                                <!-- <p><span><i class="bi bi-people-fill card-icon"></i></span></p> -->
                                <p class="mx-auto text-white text-center fs-4"><?php echo $rejected ?></p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div> <!-- Card row end -->
           
        <div class="line"></div>
                
            </div>

            <h3 class="header mt-4">Today Appointment list</h3>

            <!-- appointment list table start -->
            <div class="row my-5">
                <table class="table table-striped table-responsive-md table-bordered my-5" id="todayAppointment">
                    <thead>
                        <tr>
                            <th class="sinhala-font">නම</th>
                            <th class="sinhala-font">හැදුනුම්පත් අංකය</th>
                            <th class="sinhala-font">ඊමේල් ලිපිනය</th>
                            <th class="sinhala-font">දුරකතන අංකය</th>
                            <th class="sinhala-font">කුමක් සදහාද?</th>
                            <th class="sinhala-font">හේතුව</th>
                            <th class="sinhala-font">දිනය සහ වේලාව</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                        $appointmentId = "SELECT id FROM appointment WHERE acceptance='accepted' AND appointment.date_time LIKE'".$date."'";
                        $result= mysqli_query($conn, $appointmentId);

                        if(mysqli_num_rows($result)>0){
                            
                            while($row = mysqli_fetch_assoc($result)){
                                $appointmentId = $row['id'];

                                //todaya appointment list
                                $sqlToday = "SELECT user.first_name,user.last_name,user.nic,user.email,appointment.phone,appointment.category,appointment.text,appointment.date_time FROM `appointment`,`user` WHERE user.u_id=appointment.user_id AND appointment.acceptance='accepted' AND appointment.id='".$appointmentId."'";
                                $resultToday = mysqli_query($conn, $sqlToday);
                                $resultData = mysqli_fetch_assoc($resultToday);

                                $name = $resultData['first_name']." ".$resultData['last_name'];
                                $nic = $resultData['nic'];
                                $email = $resultData['email'];
                                $phone = $resultData['phone'];
                                $category = $resultData['category'];
                                $text = $resultData['text'];
                                $date_time = $resultData['date_time'];

                                echo'
                                <tr>
                                    <td class="sinhala-font" name="name" id="name">'.$name.'</td>
                                    <td class="sinhala-font" name="nic" id="nic">'.$nic.'</td>
                                    <td class="sinhala-font" name="email" id="email">'.$email.'</td>
                                    <td class="sinhala-font" name="phone" id="phone">'.$phone.'</td>
                                    <td class="sinhala-font" name="category" id="category">'.$category.'</td>
                                    <td class="sinhala-font" name="reason" id="reason">'.$text.'</td>
                                    <td class="sinhala-font" name="dateTime" id="dateTime">'.$date_time.'</td>
                                </tr>
                                ';
                            }

                        }


                    ?>
                        <!-- <tr class="'.$appointmentId.'" id="'.$appointmentId.'"> -->
                        
                    </tbody>
                </table>
            </div>  <!-- appointment list table end -->
            

            

        </div>
        <div class="invsible" id="timer" hidden></div>
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