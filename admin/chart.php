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
    <title>SGCSS - Chart</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>
<body>
<div class="wrapper">   
    <nav class="nav-sidebar" id="sidebar"> <!-- Sidebar start -->
        <?php
            include("aSidebar.php");
        ?>
    </nav> <!-- Sidebar end -->

    
    <div id="content"> <!-- Page Content start -->
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
        <div>
            <h3 class="header mb-3">Charts</h3>
        </div>
       
        <!-- chart card start -->
        <div class="row">
            <!-- user type chart details start -->
            <div class="col-lg-4 mb-3">
                <div class="border">                    
                    <canvas id="chartUserType" style="width: 100%; max-width:500px;"></canvas>                    
                </div>
            </div> 
            <!-- user type chart details end -->

            <!-- user status chart details start -->
            <div class="col-lg-4 mb-3">
                <div class="border">                    
                    <canvas id="chartUserStatus" style="width: 100%; max-width:500px;"></canvas>                    
                </div>
            </div> 
            <!-- user status chart details end -->

            <!-- user status chart details start -->
            <div class="col-lg-4 mb-3">
                <div class="border">                    
                    <canvas id="chartUserCount" style="width: 100%; max-width:500px;"></canvas>                    
                </div>
            </div> 
            <!-- user status chart details end -->
        </div>  <!-- chart card end -->


        <!-- user type chart details start -->
        <?php

            $sqlUtype = "SELECT COUNT(CASE user_type WHEN 'user' THEN 1 ELSE null END) AS villager, COUNT(CASE user_type WHEN 'gs' THEN 1 ELSE null END) AS gramasewaka, COUNT(CASE user_type WHEN 'admin' THEN 1 ELSE null END) AS admin FROM `user`";
            $resultUtype = mysqli_query($conn, $sqlUtype);
            if(mysqli_num_rows($resultUtype)>0){
                $dataUtype = mysqli_fetch_assoc($resultUtype);
                $villager = $dataUtype['villager'];
                $gramasewaka = $dataUtype['gramasewaka'];
                $admin = $dataUtype['admin'];

                echo '
                    <script>
                        var villager = '.$villager.';
                        var gramasewaka = '.$gramasewaka.';
                        var admin = '.$admin.';
                        var userType = [villager,gramasewaka,admin];
                        var colors = ["#0dcaf0","#FF5959","#198754"];
                        var lab = ["Villager","Gramasewaka","Admin"];

                        new Chart("chartUserType",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: userType
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "SGCSS user type"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>   <!-- user type chart details end -->


        <!-- user status chart details start -->
        <?php

            $sqlStatus = "SELECT COUNT(CASE status WHEN 'enable' THEN 1 ELSE null END) AS Enable, COUNT(CASE status WHEN 'blocked' THEN 1 ELSE null END) AS Blocked FROM `user`";
            $resultStatus = mysqli_query($conn, $sqlStatus);
            if(mysqli_num_rows($resultStatus)>0){
                $dataStatus = mysqli_fetch_assoc($resultStatus);
                $Enable = $dataStatus['Enable'];
                $Blocked = $dataStatus['Blocked'];

                echo '
                    <script>
                        var Enable = '.$Enable.';
                        var Blocked = '.$Blocked.';
                        var userStatus = [Enable,Blocked];
                        var colors = ["#146356","#9B0000"];
                        var lab = ["Enable","Blocked"];

                        new Chart("chartUserStatus",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: userStatus
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "SGCSS user Status"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>   <!-- user status chart details end -->


        <!-- user count chart details start -->
        <?php

            $sqlUserCount = "SELECT COUNT(u_id) AS alluser, COUNT(CASE WHEN date LIKE '".$date."' THEN 1 ELSE NULL END) AS NewUser FROM user";
            $resultUserCount = mysqli_query($conn, $sqlUserCount);
            if(mysqli_num_rows($resultUserCount)>0){
                $dataUserCount = mysqli_fetch_assoc($resultUserCount);
                $alluser = $dataUserCount['alluser'];
                $newUser = $dataUserCount['NewUser'];

                echo '
                    <script>
                        var alluser = '.$alluser.';
                        var NewUser = '.$newUser.';
                        var userCount = [alluser,NewUser];
                        var colors = ["#4FBDBA","#FFBD35"];
                        var lab = ["Alluser","NewUser"];

                        new Chart("chartUserCount",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: userCount
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "SGCSS user Status"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>   <!-- user count chart details end -->

        
    </div> <!-- Page content end-->
</div> <!-- wrapper -->
 
    <!-- javascript libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>