
<?php
    session_start();
    
    //database connection
    require_once("../connection/db_connection.php");
    include("../../autoLogout.php");


    // check user session active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "gs"){

        // redirrect user to signin page
        header('Location: ../../signin.php');
    
    
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="strict-origin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="../asset/tag.png">
    <title>Approved Appointment</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body>
    

<!-- Sidebar details Here -->
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../asset/Logo.png" alt="Logo" width="150px" height="75px">
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="../gdashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Publish<i class="bi bi-caret-down-fill bi-lg first"></i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="../news.php">Update News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#workArea" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Work Area <i class="bi bi-caret-down-fill bi-lg first"></i></a>
                    <ul class="collapse list-unstyled" id="workArea">
                        <li>
                            <a href="#rural" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Rural Information <i class="bi bi-caret-down-fill bi-lg first"></i></a>
                            <ul class="collapse list-unstyled" id="rural">
                                <li>
                                    <a href="../ruralinfo/rPage1.php" class="rural-details sinhala-font" name="rPage1">පුද්ගල තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage2.php" class="rural-details sinhala-font" name="rPage2">විදෙස්ගතය පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage3.php" class="rural-details sinhala-font" name="rPage3">ආබාධිත පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage4.php" class="rural-details sinhala-font" name="rPage4">පදිංචි නිවාස පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage5.php" class="rural-details sinhala-font" name="rPage5">පදිංචි ඉඩම් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage6.php" class="rural-details sinhala-font" name="rPage6">වගාකර ඇති ඉඩම් පිළිබඳ තොරතුරු(වසම තුල)</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage7.php" class="rural-details sinhala-font" name="rPage7">නිවසේ වාහන පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage8.php" class="rural-details sinhala-font" name="rPage8">ක්‍රීඩා සදහා අපේක්ෂකයන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage9.php" class="rural-details sinhala-font" name="rPage9">පාඨමාලා හදාරන්නන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="../ruralinfo/rPage10.php" class="rural-details sinhala-font"  name="rPage10">නිවසේ ඇතිකරන සතුන් පිළිබඳ තොරතුරු</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../deathList.php">Death List</a>
                        </li>
                        <li>
                            <a href="../widowList.php">Widow List</a>
                        </li>
                        <li>
                            <a href="../spouseList.php">Spouse List</a>
                        </li>
                        <li>
                            <a href="../votingList.php">Voting List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#analysis" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Analysis <i class="bi bi-caret-down-fill bi-lg first"></i></a>
                    <ul class="collapse list-unstyled" id="analysis">
                        <li> 
                            <a href="../chart1.php" name="aPage1" class="analysis-details sinhala-font">කොට්ඨාශය තොරතුරු</a>
                        </li>
                        <li> 
                            <a href="../chart2.php" name="aPage2" class="analysis-details sinhala-font">නිවස සහ ඉඩම් තොරතුරු</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#notification" data-bs-toggle="collapse"  aria-expanded="false" class="dropdown-toggle">Notifications <i class="bi bi-caret-down-fill bi-lg first"></i></a>
                    <ul class="collapse list-unstyled" id="notification">
                        <li>
                            <a href="appointmentList.php">Appointment List</a>
                        </li>
                        <li>
                            <a href="">Approved Appointment List</a>
                        </li>
                        <li>
                            <a href="rejectedAppointmnet.php">Rejected Appointment List</a>
                        </li>
                        <li>
                            <a href="complain.php">Compalins</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="../account.php">Account</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../../signout.php" class="signout">Sign Out</a>
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
                    <h3 class="table-name-header m-5"><u>Approved Appointment</u></h3>
            </div>

            

            <!-- appointment list table start -->
            <div class="row my-5">
                <table class="table table-striped table-responsive-md table-bordered my-5" id="approvedApList">
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

                        $appointmentId = "SELECT id FROM appointment WHERE acceptance='accepted' GROUP BY date_time";
                        $result= mysqli_query($conn, $appointmentId);
                        // $checkResult= mysqli_num_rows($result);



                        if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_assoc($result)){
                                $appointmentId = $row['id'];
                                // echo'<script>alert('.$userId.')</script>';
                                //select user data
                                $selectUserData = "SELECT user.first_name, user.last_name, user.nic, user.email, appointment.phone, appointment.category, appointment.text, appointment.date_time FROM `user`,`appointment` WHERE appointment.user_id = user.u_id AND appointment.acceptance='accepted' AND appointment.id='".$appointmentId."'";
                                $appointmentResults = mysqli_query($conn, $selectUserData);
                                $Data = mysqli_fetch_assoc($appointmentResults);

                                $name = $Data['first_name']." ".$Data['last_name'];
                                $nic = $Data['nic'];
                                $email = $Data['email'];
                                $phone = $Data['phone'];
                                $category = $Data['category'];
                                $text = $Data['text'];
                                $date_time = $Data['date_time'];
                                

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
                        
                    </tbody>
                </table>
            </div>
            <!-- appointment list table end -->


        </div>
    </div>
 
    <!-- javascript libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script> -->
    <script src="../js/script.js"></script>
  
</body>
</html>