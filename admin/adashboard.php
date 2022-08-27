<?php
    date_default_timezone_set('Asia/Colombo');

    // Then call the date functions
    $date = date('Y-m-d').'%';
    // echo '<script>alert("'.$date.'")</script>';
    // database connection
    include("./connection/db_connection.php");

    session_start();

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
    <title>SGCSS - Dashboard</title>
     <!-- css libraries -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/all.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
</head>
<body>
<div class="wrapper">   
        <nav class="nav-sidebar" id="sidebar"> <!-- Sidebar start -->
            <?php
                include("aSidebar.php");
            ?>
        </nav> <!-- Sidebar end -->

        
        <div id="content"> <!-- Page Content  -->
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
            
            <!-- update user count card data start -->
            <?php

                if(isset($_SESSION['adminId'])){

                    $countUser = "SELECT COUNT(u_id) AS alluser, COUNT(CASE user_type WHEN 'gs' THEN 1 ELSE NULL END) AS gs, COUNT(CASE user_type WHEN 'admin' THEN 1 ELSE NULL END) AS admin, COUNT(CASE WHEN date LIKE '".$date."' THEN 1 ELSE NULL END) AS NewUser FROM user";
                    $result = mysqli_query($conn, $countUser);
                    $checkResult = mysqli_fetch_assoc($result);

                    if(mysqli_num_rows($result)>0){
                        $allUser =$checkResult['alluser'];
                        $gramasewakaCount = $checkResult['gs'];
                        $adminCount = $checkResult['admin'];
                        $newUserCount = $checkResult['NewUser'];
                    }

                }
                

            ?>  <!-- update user count card data end -->



        <div class="row"> <!-- Card row Start -->
            <div class="card-topic ms-3">
                <h3>Users</h3>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2">
                <div class="card text-white bg-primary">
                    <div class="card-header">All users</div>
                    <div class="card-body">
                        <div class="card-title  mx-3">
                            <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                            <p class="text-center"><?php echo $allUser ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2">
                <div class="card text-white bg-success">
                    <div class="card-header">New users</div>
                    <div class="card-body">
                        <div class="card-title  mx-3">
                            <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                            <p class="text-center"><?php echo $newUserCount ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2">
                <div class="card text-white bg-danger">
                    <div class="card-header">Gramasewaka</div>
                    <div class="card-body">
                        <div class="card-title  mx-3">
                            <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                            <p class="text-center"><?php echo $gramasewakaCount ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2">
                <div class="card text-white bg-primary">
                    <div class="card-header">Admin</div>
                    <div class="card-body">
                        <div class="card-title  mx-3">
                            <p><span><i class="bi bi-people-fill card-icon"></i></span></p>
                            <p class="mx-auto ms-4 text-center"><?php echo $adminCount ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Card row end -->
           
        <div class="line"></div>

        
        <div class="row my-5"> <!-- User list table row start -->
            <h3 class="userList mb-3">User List</h3>
            <table class="table table-striped table-responsive-md table-bordered my-5" id="userTable">
                <thead>
                    <tr>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">NIC</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">User Type</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    

                    $sql = "SELECT * FROM user";
                    $result= mysqli_query($conn, $sql);

                    //checkdata availability
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                            $userId = $row["u_id"];
                            echo '
                            <tr>
                                <td class="text-center sinhala-font" name="fname" id="fname">'.$row["first_name"].'</td>
                                <td class="text-center sinhala-font" name="lname" id="lname">'.$row["last_name"].'</td>
                                <td class="text-center sinhala-font" name="address" id="address">'.$row["address"].'</td>
                                <td class="text-center sinhala-font" name="gender" id="gender">'.$row["gender"].'</td>
                                <td class="text-center sinhala-font" name="nic" id="nic">'.$row["nic"].'</td>
                                <td class="text-center sinhala-font" name="phone" id="phone">'.$row["phone"].'</td>
                                <td class="text-center sinhala-font" name="email" id="email">'.$row["email"].'</td>
                                <td class="text-center sinhala-font" name="uType" id="uType">'.$row["user_type"].'</td>
                                <td class="text-center sinhala-font" name="status" id="status">'.$row["status"].'</td>
                                <td class="text-center" name="edit" id="edit">
                                    <div class="btn-group ">
                                        <button type="button"name="change" class="btn btn-success rounded mr-1 p-1 addAttr" data-toggle="modal" data-target="#newsForm" onclick="edit(this)"><i class="bi bi-save"></i></button>
                                    </div>
                                </td>
                            </tr>

                            ';
                        }
                    }

                    ?>
                </tbody>
            </table>           

            <!-- Modal start for change user type -->
            <div class="modal fade  " id="newsForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">Change user type form</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                        <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                        <div class="account-header col-12 ms-2 ps-2 ">
                            <h3>Update new type</h3>
                            <div class="input-group mb-3" hidden>
                                <input type="text" name="uNic" id="uid">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="userType" class="form-label">User Type</label>
                            <select class="form-select" name="userType" id="userType" required>
                                <option selected disabled value>Choose...</option>
                                <option name="villager" id="villager" value="user">Villager</option>
                                <option name="gramasewaka" id="gramasewaka" value="gs">Gramasewaka</option>
                                <option name="admin" id="admin" value="admin">Admin</option>
                            </select>
                            <div class="invalid-feedback">
                            User Type is Required..
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="userStatus" class="form-label">User Status</label>
                            <select class="form-select" name="userStatus" id="userStatus" required>
                                <option selected disabled value>Choose...</option>
                                <option name="enable" id="enable" value="enable">Enable</option>
                                <option name="disable" id="disable" value="blocked">Blocked</option>
                            </select>
                            <div class="invalid-feedback">
                            User Status is Required..
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="changeType" id="submit">Update</button>
                        </div>
                        </form>

                        <?php

                            if(isset($_POST['changeType'])){

                                $uNic = $_POST['uNic'];
                                $userType = $_POST['userType'];
                                $userStatus = $_POST['userStatus'];

                                // $update = "UPDATE `user` SET `user_type`='".$userType."',`status`='".$userStatus."' WHERE `nic`='".$nic."'";

                                $update = "UPDATE `user` SET `user_type`='".$userType."',`status`='".$userStatus."' WHERE `nic`= '".$uNic."'";

                                $updateResult = mysqli_query($conn, $update);

                                if(mysqli_affected_rows($conn) >0 ){

                                    echo '
                                            <script>
                                                swal({
                                                    title: "Success!",
                                                    text: "Update Data successfully",
                                                    icon: "success",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "adashboard.php";
                                                });
                                            </script>
                                        ';
                                }

                                  
                                 
                            }

                        ?>

                    </div> <!-- User Details end  -->
                    
                    
                </div>
                </div>
            </div>
            </div> <!-- modal close  for change user type-->
            

        </div> <!-- User list table row end -->
    </div> <!-- content -->
    <!-- <div class="invsible" id="timer" hidden></div> -->
</div> <!-- wrapper -->
 
    <!-- javascript libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  
</body>
</html>