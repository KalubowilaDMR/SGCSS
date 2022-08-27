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

    $notifySql = "SELECT id,view FROM `appointment` WHERE appointment.user_id='".$_SESSION['userId']."' AND appointment.view='0'";
    // $notifySql = "SELECT id,view FROM `appointment` WHERE appointment.user_id='44' AND appointment.view='0'";
    $notifyResult = mysqli_query($conn, $notifySql);
    
    //update appointmnet view status
    if(mysqli_num_rows($notifyResult)>0){
        while($notifyData = mysqli_fetch_assoc($notifyResult)){

            $nId = $notifyData['id'];

        }
    }

    
?>

<?php
    if($_SESSION['viewStatus']>0){
        $viesSql = "UPDATE `appointment` SET `view`='1' WHERE user_id='".$_SESSION['userId']."'";
        $viewResult  = mysqli_query($conn, $viesSql);
        $_SESSION['viewStatus'] = 0;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="asset/tag.png">
    <title>SGCSS - Notification</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
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
                        <h2 class="dashboard-header">Notification</h2>
                    </div>
                </div>
            </nav>

            <div class="line"></div>

            <div class="row"> <!-- Card row Start -->
            <div class="card-topic ms-3">
                <h3>Notification</h3>
            </div>

            <!-- user appointment card open -->
            <?php
            
                //selecting user approved appointment
                $approveSql = "SELECT * FROM appointment WHERE  user_id='".$_SESSION['userId']."' ORDER BY date_time DESC";
                $approveResult = mysqli_query($conn, $approveSql);
                $checkResult = mysqli_num_rows($approveResult);
                
                if($checkResult>0){

                    while($getData= mysqli_fetch_assoc($approveResult)){
                        $date = $getData['date_time'];
                        $type = $getData['acceptance'];

                        if($type=="accepted"){
                            echo '
                        
                            <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="card text-white bg-light mx-3 my-3">
                                    <div class="card-header bg-success">Approved Appointment</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <p class="app-details" style="color:black;">
                                                <span><i class="bi bi-patch-check-fill card-icon" style="color:green;"></i></span>
                                                ඔබ විසින් '.$date.' දිනට වෙන්කරනලද වෙන්කරවාගැනීම අප විසින් අනුමත කර්නලදි. කරුණාකර නියමිත වේලාවට කාර්යාලයට පැමිණීමට වගබලාගන්න. ස්තූතියි.
                                            </p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                        }

                        if($type == "rejected"){
                            echo'
                            <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="card text-white bg-light mx-3 my-3">
                                    <div class="card-header bg-danger">Reject Appointment</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <p style="color:black;">
                                                <span><i class="bi bi-exclamation-circle-fill " style="color:red;"></i></span>
                                                ඔබ විසින් '.$date.' දිනට වෙන්කරනලද වෙන්කරවාගැනීම මෙම අවස්ථාවේදි අපට අනුමත කරනොහැක. කරුණාකර වෙනත් දිනයක් වෙන්කරනවාගන්න.ස්තූතියි.
                                            </p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                        

                    }

                }
            ?> <!-- user appointment card open -->
        </div> <!-- Card row end -->

        </div>
        <div class="invsible" id="timer" hidden></div>
    </div>
 


    <!-- javascript libraries -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</html>