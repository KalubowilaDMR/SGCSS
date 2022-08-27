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
    <title>Notice</title>
     <!-- css libraries -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/all.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
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

            <!-- continue content -->
            <div class="table-name">
                    <h3 class="table-name-header mb-3"><u>PUBLISH</u></h3>
            </div>
           
           <!-- new data insert start -->
           <div class="insert-new" style="padding-bottom:20px;">
                <button type="submit" class="btn btn-primary " name="insert" id="insert" data-bs-toggle="modal" data-bs-target="#newsForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <br>
            <!-- Modal start for insert data -->
            <div class="modal fade  " id="newsForm" tabindex="-1" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">News Update Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                        <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST"  novalidate>
                        <div class="account-header col-12 ms-4 ps-2 ">
                            <h3>Update News</h3>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="head" class="form-label">News Head</label>
                            <input type="text" class="form-control" name="head" id="head" placeholder="News head here..." maxlength="100"  required>
                            <div class="invalid-feedback">
                            Head is Required..
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="body" class="form-label">News Body</label>
                            <textarea type="text" class="form-control" name="body" id="body" placeholder="News body here..." maxlength="350" required></textarea>
                            <div class="invalid-feedback">
                            News Body is Required..
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category" id="category" required>
                                <option selected disabled value>Choose...</option>
                                <option name="notice" id="notice">Notice</option>
                                <option name="job" id="job">Job</option>
                            </select>
                            <div class="invalid-feedback">
                            category is Required..
                            </div>
                        </div>
                        <div class="col-12">
                            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Publish" />
                        </div>
                    </form>


                    <?php
                    
                        include("connection/db_connection.php");

                        if(isset($_POST['submit'])){

                            $head = $_POST["head"];
                            $body = $_POST["body"];
                            $category = $_POST["category"];


                            $sql = "INSERT INTO news (head, body, category) VALUES ('".$head."', '".$body."', '".$category."')";




                            if (mysqli_query($conn, $sql)) {
                                echo '
                                    <script>
                                        swal({
                                            title: "Success!",
                                            text: "You have successfully update news",
                                            icon: "success",
                                            button: "OK!",
                                        }).then(function(){
                                            window.location = "news.php";
                                        });
                                    </script>
                                ';
            
                            } 
                            else {
                                echo '<script> 
                                    alert ("Unable to Update News");
                                </script>';
                            }
                              
                              mysqli_close($conn);

                        }
            
                    ?>

                    </div>
                    <!-- User Details end  -->
                    
                </div>
                </div>
            </div>
            </div>
            <!-- modal close  for insert data-->
            <!-- new data insert end -->


            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php
                
                    include("connection/db_connection.php");


                        $sql = "SELECT * FROM news GROUP BY date_time DESC";
                        $result= mysqli_query($conn, $sql);

                        //checkdata availability
                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){ 
                            
                                $id = $row['id'];

                                if($row['category']== "Notice"){

                                    $img_path = "./asset/news.jpg";

                                }
                                else{

                                    $img_path = "./asset/job.jpg";
                                }

                                echo '
                                    
                                    <div class="col">
                                        <div class="card h-100">
                                        <img src="'.$img_path.'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">'.$row['head'].'</h5>
                                            <p class="card-text">'.$row['body'].'</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">'.$row['date_time'].'</small>
                                        <a href="deletenews.php?id='.$id.'&head='.$row['head'].'" ><i class="bi bi-x-lg" style="float:right;color:red;" ></i></a>
                                        </div>
                                        </div>
                                    </div>
                            
                                ';
                            }
                        }

                
                ?>

            </div>

        </div> <!-- Page content end -->
    </div> <!-- Wrapper end -->
 
    <!-- javascript libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  
</body>
</html>