
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="sidebar-header">
            <h3><a href="vdashboard.php" class="dash-header">SGCSS</a></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="news.php">News</a>
                        </li>
                        <li>
                            <a href="village.php">Village</a>
                        </li>
                        <li>
                            <a href="complain.php">Complains</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#appointment">Appointment</a>
                </li>
                <li>
                    <a href="vnotification.php">Notification
                    <span class='badge small '>    
                        <i class="bi bi-circle-fill " style="color:#F05365;"></i>
                    </span>
                    </a>

                </li>
                <li>
                    <a href="vaccount.php">Account</a>
                </li>
                <li>
                    <a href="vcontact.php">Contact Us</a>
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
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <div class="dashboard-name">
                        <h2 class="dashboard-header">Notification</h2>
                    </div>
                </div>
            </nav>

            <div class="line"></div>

            <!-- user appointment card open -->
            <?php
            
                
            
            ?> <!-- user appointment card open -->
            

            <div class="row"> <!-- Card row Start -->
            <div class="card-topic ms-3">
                <h3>Notification</h3>
            </div>
            <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card text-white bg-light mx-3 my-3">
                    <div class="card-header bg-success">Approved Appointment</div>
                    <div class="card-body">
                        <div class="card-title">
                            <p class="app-details" style="color:black;">
                                <span><i class="bi bi-patch-check-fill card-icon" style="color:green;"></i></span>
                                ඔබ විසින් date දිනට වෙන්කරනලද වෙන්කරවාගැනීම අප විසින් අනුමත කර්නලදි. කරුණාකර නියමිත වේලාවට කාර්යාලයට පැමිණීමට වගබලාගන්න. ස්තූතියි.
                            </p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xm-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card text-white bg-light mx-3 my-3">
                    <div class="card-header bg-danger">Reject Appointment</div>
                    <div class="card-body">
                        <div class="card-title">
                            <p style="color:black;">
                                <span><i class="bi bi-exclamation-circle-fill " style="color:red;"></i></span>
                                ඔබ විසින් date දිනට වෙන්කරනලද වෙන්කරවාගැනීම මෙම අවස්ථාවේදි අපට අනුමත කරනොහැක. කරුණාකර වෙනත් දිනයක් වෙන්කරනවාගන්න.ස්තූතියි.
                            </p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Card row end -->

        </div>
</div>
 


    <!-- javascript libraries -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</html>