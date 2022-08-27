<?php

//database connection
include("connection/db_connection.php");

?>

<div class="sidebar-header">
            <h3><img src="asset/logo.png" alt="system logo" height="75" width="150"></h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="vdashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Feature</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="news.php">News</a>
                        </li>
                        <li>
                            <a href="complain.php">Complains</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="vappointment.php">Appointment</a>
                </li>
                <li>
                    <a href="vnotification.php">Notification

                    <?php

                        if($_SESSION['viewStatus']>0){
                            echo'
                            <span>    
                            <i class="bi bi-circle-fill" style="color:#F05365;"></i>
                            </span>
                            ';
                        }

                    ?>
                    
                    </a>

                </li>
                <li>
                    <a href="vaccount.php">Account</a>
                </li>
                <li>
                    <a href="vcontact.php">Contact Admin</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../signout.php" class="signout">Sign Out</a>
                </li>
               
            </ul>