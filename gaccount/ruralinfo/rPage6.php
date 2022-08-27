
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
    <title>SGCSS - වගාකරඇති ඉඩම පිළිබද තොරතුරු - වසමතුල</title>
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
                                    <a href="#" class="rural-details sinhala-font" name="rPage6">වගාකර ඇති ඉඩම් පිළිබඳ තොරතුරු(වසම තුල)</a>
                                </li>
                                <li>
                                    <a href="rPage7.php" class="rural-details sinhala-font" name="rPage7">නිවසේ වාහන පිළිබඳ තොරතුරු</a>
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
                    <h3 class="table-name-header m-5"><u>වගාකරඇති ඉඩම පිළිබද තොරතුරු - වසමතුල</u></h3>
            </div>

            <!-- new data insert start -->
            <div class="insert-new">
                <button type="submit" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#cultiForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="cultiForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">වගාකරන ඉඩම පිළිබද දත්ත ඇතුලත්කරන ආකෘති පත්‍රය(වසමතුල)</h5>
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
                                    <label for="landOwner" class="form-label sinhala-font">ඉඩම්හිමියාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="landOwner" id="landOwner" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land owner's name is Required..
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
                                    <label for="landName" class="form-label sinhala-font">ඉඩමේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="landName" id="landName" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land name is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="landNumber" class="form-label sinhala-font">ඔප්පු අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="landNumber" id="landNumber" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land deed number is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="landType" class="form-label sinhala-font">වගාව</label>
                                    <select class="form-select sinhala-font" name="landType" id="landType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option class="sinhala-font" name="1" id="1">තේ</option>
                                        <option class="sinhala-font" name="2" id="2">පොල්</option>
                                        <option class="sinhala-font" name="3" id="3">රබර්</option>
                                        <option class="sinhala-font" name="4" id="4">වෙනත් වගා</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Cultivation is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="landSize" class="form-label sinhala-font">ඉඩමේ ප්‍රමාණය</label>
                                    <input type="text" class="form-control sinhala-font" name="landSize" id="landSize" maxlength="50" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land size is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="cultIn">Insert new field</button>
                                </div>
                            </form>

                            <!-- forma data select and insert to cultivate_land table start -->
                            <?php

                                if(isset($_POST['cultIn'])){

                                    $homeNo = mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                    $landOwner = mysqli_real_escape_string($conn, trim($_POST['landOwner']));
                                    $nic = mysqli_real_escape_string($conn, trim($_POST['nic']));
                                    $landName = mysqli_real_escape_string($conn, trim($_POST['landName']));
                                    $landNumber = mysqli_real_escape_string($conn, trim($_POST['landNumber']));
                                    $landType = mysqli_real_escape_string($conn, trim($_POST['landType']));
                                    $landSize = mysqli_real_escape_string($conn, trim($_POST['landSize']));


                                    // select there has any existing land number or not
                                    $sql = "SELECT l_number FROM `cultivate_land` WHERE l_number='".$landNumber."";
                                    $result = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($result)>0){

                                        echo'
                                            <script>
                                                swal({
                                                    title: "Error Occurd!",
                                                    text: "There has existing Land number. Please findout!",
                                                    icon: "error",
                                                    button: "OK!",  
                                                }).then(function(){
                                                    window.location = "rPage6.php";
                                                });
                                            </script>
                                        ';
                                    }
                                    else{

                                        // insert data to cultivate_land tabale
                                        $insert = "INSERT INTO `cultivate_land` (`h_no`, `owner_name`, `nic`, `land_name`, `l_number`, `cultivation`, `land_size`) VALUES ('".$homeNo."', '".$landOwner."', '".$nic."', '".$landName."', '".$landNumber."', '".$landType."', '".$landSize."');";

                                        //  echo'
                                        //     <script>
                                        //         alert("'.$insert.'");
                                        //     </script>
                                        // ';

                                        $resultData = mysqli_query($conn, $insert);

                                        echo '
                                            <script>
                                                swal({
                                                    title: "Success!",
                                                    text: "Insert Data successfully",
                                                    icon: "success",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage6.php";
                                                });
                                            </script>
                                        ';
                            
                                        echo '
                                                <script>
                                                    r6reload();
                                                </script>
                                        ';

                                    }

                                }                                

                            ?>   <!-- forma data select and insert to cultivate_land table end -->

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
                <table class="table table-striped table-responsive-md table-bordered my-5" id="cultiTable">
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">CID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">ඉඩම්හිමියාගේ නම</th>
                            <th class="sinhala-font">හැදුනුම්පත් අංකය</th>
                            <th class="sinhala-font">ඉඩමේ නම</th>
                            <th class="sinhala-font">ඔප්පු අංකය</th>
                            <th class="sinhala-font">වගාව</th>
                            <th class="sinhala-font">ඉඩමේ ප්‍රමාණය</th>
                            <th class="sinhala-font">වෙනස් කිරීම්</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                            $selectData = "SELECT * FROM `cultivate_land` ORDER BY `h_no`";
                            $resultSelect = mysqli_query($conn, $selectData);
                            if(mysqli_num_rows($resultSelect)>0){
                                while($row = mysqli_fetch_assoc($resultSelect)){

                                    echo '
                                        <tr>
                                            <td class="sinhala-font d-none" name="t_cid" id="t_cid">'.$row["c_id"].'</td>
                                            <td class="sinhala-font" name="hNo" id="t_hNo">'.$row["h_no"].'</td>
                                            <td class="sinhala-font" name="landOwner" id="t_landOwner">'.$row["owner_name"].'</td>
                                            <td class="sinhala-font" name="t_nic" id="t_nic">'.$row["nic"].'</td>
                                            <td class="sinhala-font" name="landName" id="t_landName">'.$row["land_name"].'</td>
                                            <td class="sinhala-font" name="landNumber" id="t_landNumber">'.$row["l_number"].'</td>
                                            <td class="sinhala-font" name="cultivate" id="t_cultivate">'.$row["cultivation"].'</td>
                                            <td class="sinhala-font" name="landSize" id="t_landSize">'.$row["land_size"].'</td>
                                            <td name="change" id="change">
                                                <div class="btn-group">
                                                    <button class="btn btn-success mr-1" name="update" id="update" data-toggle="modal" data-target="#cultiUpdate"><i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-danger " name="delete" id="'.$row["c_id"].'" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE" onclick="r6DeleteRow(this.id)"><i class="bi bi-trash"></i></button>
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
            <div class="modal fade  " id="cultiUpdate" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">වගාකරන ඉඩම පිළිබද දත්ත සංස්කරන  ආකෘති පත්‍රය(වසමතුල)</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="#" method="POST" autocomplete="off" novalidate>
                            <div class="input-group mb-3" hidden>
                            <input type="text"  name="cId" id="cId" readonly>
                        </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="c_homeNo" id="c_homeNo" pattern=".{3,5}"  required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_landOwner" class="form-label sinhala-font">ඉඩම්හිමියාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="c_landOwner" id="c_landOwner" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land owner's naame is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="c_nic" id="c_nic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    NIC is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_landName" class="form-label sinhala-font">ඉඩමේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="c_landName" id="c_landName" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land name is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_landNumber" class="form-label sinhala-font">ඔප්පු අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="c_landNumber" id="c_landNumber" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land deed number is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_landType" class="form-label sinhala-font">වගාව</label>
                                    <select class="form-select sinhala-font" name="c_landType" id="c_landType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option class="sinhala-font" name="1" id="1" value="තේ">තේ</option>
                                        <option class="sinhala-font" name="2" id="2" value="පොල්">පොල්</option>
                                        <option class="sinhala-font" name="3" id="3" value="රබර්">රබර්</option>
                                        <option class="sinhala-font" name="4" id="4" value="වෙනත් වගා">වෙනත් වගා</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Cultivativation is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_landSize" class="form-label sinhala-font">ඉඩමේ ප්‍රමාණය</label>
                                    <input type="text" class="form-control sinhala-font" name="c_landSize" id="c_landSize" maxlength="50" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land size is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="cultUp">Update new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['cultUp'])){

                                    $cId = mysqli_real_escape_string($conn, trim($_POST['cId']));
                                    $c_homeNo = mysqli_real_escape_string($conn, trim($_POST['c_homeNo']));
                                    $c_landOwner = mysqli_real_escape_string($conn, trim($_POST['c_landOwner']));
                                    $c_nic = mysqli_real_escape_string($conn, trim($_POST['c_nic']));
                                    $c_landName = mysqli_real_escape_string($conn, trim($_POST['c_landName']));
                                    $c_landNumber = mysqli_real_escape_string($conn, trim($_POST['c_landNumber']));
                                    $c_landType = mysqli_real_escape_string($conn, trim($_POST['c_landType']));
                                    $c_landSize = mysqli_real_escape_string($conn, trim($_POST['c_landSize']));

                                    $update = "UPDATE `cultivate_land` SET `h_no`='".$c_homeNo."',`owner_name`='".$c_landOwner."',`nic`='".$c_nic."',`land_name`='".$c_landName."',`l_number`='".$c_landNumber."',`cultivation`='".$c_landType."',`land_size`='".$c_landSize."' WHERE `c_id`='".$cId."'";
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
                                                    window.location = "rPage6.php";
                                                });
                                            </script>
                                        ';

                                        echo'
                                            <script>
                                                r6updateReload();
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
                                                    window.location = "rPage6.php";
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