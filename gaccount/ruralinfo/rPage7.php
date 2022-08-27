
<?php

session_start();
// database connection
include("../connection/db_connection.php");
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
    <title>SGCSS - නිවසේ වාහන පිළිබද තොරතුරු</title>
     <!-- css libraries -->
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                    <a href="../gdashboard.php" class="dash-header">Dashboard</a>
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
                                    <a href="rPage1.php" class="rural-details sinhala-font" name="rPage1">පුද්ගල තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage2.php" class="rural-details sinhala-font" name="rPage2">විදෙස්ගතය පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage3.php" class="rural-details sinhala-font" name="rPage3">ආබාධිත පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage4.php" class="rural-details sinhala-font" name="rPage4">පදිංචි නිවාස පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage5.php" class="rural-details sinhala-font" name="rPage5">පදිංචි ඉඩම් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage6.php" class="rural-details sinhala-font" name="rPage6">වගාකර ඇති ඉඩම් පිළිබඳ තොරතුරු(වසම තුල)</a>
                                </li>
                                <li>
                                    <a href="#" class="rural-details sinhala-font" name="rPage7">නිවසේ වාහන පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage8.php" class="rural-details sinhala-font" name="rPage8">ක්‍රීඩා සදහා අපේක්ෂකයන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage9.php" class="rural-details sinhala-font" name="rPage9">පාඨමාලා හදාරන්නන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage10.php" class="rural-details sinhala-font"  name="rPage10">නිවසේ ඇතිකරන සතුන් පිළිබඳ තොරතුරු</a>
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
                            <a href="../notification/appointmentList.php">Appointment List</a>
                        </li>
                        <li>
                            <a href="../notification/approvedAppointmnet.php">Approved Appointment</a>
                        </li>
                        <li>
                            <a href="../notification/rejectedAppointmnet.php">Rejected Appointment</a>
                        </li>
                        <li>
                            <a href="../notification/complain.php">Compalins</a>
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
                    <h3 class="table-name-header m-5"><u>නිවසේ වාහන පිළිබද තොරතුරු</u></h3>
            </div>

            <!-- new data insert start -->
            <div class="insert-new">
                <button type="submit" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#vehForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="vehForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">නිවසේ වාහන පිළිබද දත්ත ඇතුලත්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="#" method="POST" autocomplete="off" novalidate>
                                <div class="col-md-6 mb-4">
                                    <label for="homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="homeNo" id="homeNo" pattern=".{3,5}"  required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="vehOwner" class="form-label sinhala-font">වාහනහිමියාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="vehOwner" id="vehOwner" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Vehicle owner's name is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="nic" id="nic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    NIC is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="vehBrand" class="form-label sinhala-font">වාහන වර්ගය</label>
                                    <input type="text" class="form-control sinhala-font" name="vehBrand" id="vehBrand" maxlength="100"required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Vehicle Brand is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="regYear" class="form-label sinhala-font">ලියාපදිංචි වර්ෂය</label>
                                    <input type="date" class="form-control sinhala-font" name="regYear" id="regYear" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Registered Year is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="madeYear" class="form-label sinhala-font">නිෂ්පාදන වර්ෂය</label>
                                    <input type="date" class="form-control sinhala-font" name="madeYear" id="madeYear" oninput="this.value = this.value.toUpperCase()" required>
                                    <div class="invalid-feedback">
                                    Made Year is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="vehicleIn">Insert new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['vehicleIn'])){
                                    
                                    $homeNo = mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                    $vehOwner = mysqli_real_escape_string($conn, trim($_POST['vehOwner']));
                                    $nic = mysqli_real_escape_string($conn, trim($_POST['nic']));
                                    $vehBrand = mysqli_real_escape_string($conn, trim($_POST['vehBrand']));
                                    $regYear = mysqli_real_escape_string($conn, trim($_POST['regYear']));
                                    $madeYear = mysqli_real_escape_string($conn, trim($_POST['madeYear']));

                                    $sql = "SELECT nic,vehi_type FROM `vehicle_info` WHERE nic='".$nic."' AND vehi_type='".$vehBrand."'";
                                    $resultSql = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($resultSql)>0){

                                        echo'
                                            <script>
                                                swal({
                                                    title: "Error Occurd!",
                                                    text: "There has existing Vehicle Name with NIC. Please findout!",
                                                    icon: "error",
                                                    button: "OK!",  
                                                }).then(function(){
                                                    window.location = "rPage7.php";
                                                });
                                            </script>
                                        ';

                                    }
                                    else{

                                        $insert = "INSERT INTO `vehicle_info` (`h_no`, `owner`, `nic`, `vehi_type`, `reg_year`, `made_year`) VALUES ('".$homeNo."', '".$vehOwner."', '".$nic."', '".$vehBrand."', '".$regYear."', '".$madeYear."');";
                                        $result = mysqli_query($conn, $insert);
                                        
                                        echo '
                                            <script>
                                                swal({
                                                    title: "Success!",
                                                    text: "Insert Data successfully",
                                                    icon: "success",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage7.php";
                                                });
                                            </script>
                                        ';
                            
                                        echo '
                                                <script>
                                                    r7reload();
                                                </script>
                                        ';
                                        
                                    }


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

            <div class="row my-5"> <!-- User list table row start -->
                <!-- <h3 class="userList mb-3">User List</h3> -->
                <table class="table table-striped table-responsive-md table-bordered my-5" id="vehicleTable">
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">VID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">වාහන හිමියාගේ නම</th>
                            <th class="sinhala-font">හැදුනුම්පත් අංකය</th>
                            <th class="sinhala-font">වාහන වර්ගය</th>
                            <th class="sinhala-font">ලියාපදිංචි වර්ෂය</th>
                            <th class="sinhala-font">නිෂ්පාදන වර්ෂය</th>
                            <th class="sinhala-font">වෙනස් කිරීම්</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                                $selectData = "SELECT * FROM `vehicle_info` ORDER BY `h_no`";
                                $resultSelect = mysqli_query($conn, $selectData);
                                if(mysqli_num_rows($resultSelect)>0){
                                    while($row = mysqli_fetch_assoc($resultSelect)){
                                        echo '
                                            <tr>
                                                <td class="sinhala-font d-none" name="hNo" id="t_id">'.$row["id"].'</td>
                                                <td class="sinhala-font" name="hNo" id="t_hNo">'.$row["h_no"].'</td>
                                                <td class="sinhala-font" name="vehicleOwner" id="t_vehicleOwner">'.$row["owner"].'</td>
                                                <td class="sinhala-font" name="nic" id="t_nic">'.$row["nic"].'</td>
                                                <td class="sinhala-font" name="vehicleType" id="t_vehicleType">'.$row["vehi_type"].'</td>
                                                <td class="sinhala-font" name="regYear" id="t_regYear">'.$row["reg_year"].'</td>
                                                <td class="sinhala-font" name="madeYear" id="t_madeYear">'.$row["made_year"].'</td>
                                                <td name="change" id="change">
                                                    <div class="btn-group">
                                                        <button class="btn btn-success mr-1" name="update" id="update" data-toggle="modal" data-target="#vehUpdate"><i class="bi bi-pencil"></i></button>
                                                        <button class="btn btn-danger " name="delete" id="'.$row["id"].'" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE" onclick="r7DeleteRow(this.id);"><i class="bi bi-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        ';
                                    }
                                }

                        ?>

                        
                    </tbody>
                </table>            
            </div> <!-- User list table row end -->

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="vehUpdate" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">නිවසේ වාහන පිළිබද දත්ත සංස්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                            <div class="input-group mb-3" hidden>
                                <input type="text"  name="vID" id="vID" readonly>
                            </div>
                                <div class="col-md-6 mb-4">
                                    <label for="v_homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="v_homeNo" id="v_homeNo" pattern=".{3,5}"  required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="v_vehOwner" class="form-label sinhala-font">වාහනහිමියාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="v_vehOwner" id="v_vehOwner" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Vehicle owner's naame is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="v_nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="v_nic" id="v_nic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    NIC is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="v_vehBrand" class="form-label sinhala-font">වාහන වර්ගය</label>
                                    <input type="text" class="form-control sinhala-font" name="v_vehBrand" id="v_vehBrand" maxlength="100"required oninput="this.value = this.value.toUpperCase()" >
                                    <div class="invalid-feedback">
                                    Vehicle Brand is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="v_regYear" class="form-label sinhala-font">ලියාපදිංචි වර්ෂය</label>
                                    <input type="date" class="form-control sinhala-font" name="v_regYear" id="v_regYear" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Registered Year is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="v_madeYear" class="form-label sinhala-font">නිෂ්පාදන වර්ෂය</label>
                                    <input type="date" class="form-control sinhala-font" name="v_madeYear" id="v_madeYear" oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Made Year is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="vehicleUp">Update new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['vehicleUp'])){

                                    $vID = mysqli_real_escape_string($conn, trim($_POST['vID']));
                                    $v_homeNo = mysqli_real_escape_string($conn, trim($_POST['v_homeNo']));
                                    $v_vehOwner = mysqli_real_escape_string($conn, trim($_POST['v_vehOwner']));
                                    $v_nic = mysqli_real_escape_string($conn, trim($_POST['v_nic']));
                                    $v_vehBrand = mysqli_real_escape_string($conn, trim($_POST['v_vehBrand']));
                                    $v_regYear = mysqli_real_escape_string($conn, trim($_POST['v_regYear']));
                                    $v_madeYear = mysqli_real_escape_string($conn, trim($_POST['v_madeYear']));
                                    
                                    $update = "UPDATE `vehicle_info` SET `h_no`='".$v_homeNo."',`owner`='".$v_vehOwner."',`nic`='".$v_nic."',`vehi_type`='".$v_vehBrand."',`reg_year`='".$v_regYear."',`made_year`='".$v_madeYear."' WHERE `id`='".$vID."'";

                                    // echo '
                                    //     <script>
                                    //         alert("'.$update.'");
                                    //     </script>
                                    // ';

                                    $resultUpdate = mysqli_query($conn, $update);

                                    if(mysqli_affected_rows($conn) >0 ){

                                        echo '
                                            <script>
                                                swal({
                                                    title: "Success!",
                                                    text: "Update Data successfully",
                                                    icon: "success",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage7.php";
                                                });
                                            </script>
                                        ';

                                        echo'
                                            <script>
                                                r7updateReload();
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
                                                    window.location = "rPage7.php";
                                                });
                                            </script>
                                        ';

                                    }


                                }

                            ?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script> -->
    <script src="../js/script.js"></script>
</body>
</html>