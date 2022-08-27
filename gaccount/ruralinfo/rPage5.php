
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
    <title>SGCSS - පදිංචි ඉඩම පිළිබද තොරතුරු - රජයේ ඉඩමක පදිංචි</title>
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
                                    <a href="#" class="rural-details sinhala-font" name="rPage5">පදිංචි ඉඩම් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage6.php" class="rural-details sinhala-font" name="rPage6">වගාකර ඇති ඉඩම් පිළිබඳ තොරතුරු(වසම තුල)</a>
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
                    <h3 class="table-name-header m-5"><u>පදිංචි ඉඩම පිළිබද තොරතුරු - රජයේ ඉඩමක පදිංචි</u></h3>
            </div>

            <!-- new data insert start -->
            <div class="insert-new">
                <button type="submit" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#livingForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="livingForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පදිංචි ඉඩම පිළිබද දත්ත ඇතුලත්කරන ආකෘති පත්‍රය(රජයේ)</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="#" method="POST" autocomplete="off" novalidate>
                                <div class="col-md-6 mb-4">
                                    <label for="homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="homeNo" id="homeNo" pattern=".{3,5}"  required>
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="landOwner" class="form-label sinhala-font">ඉඩම්හිමියාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="landOwner" id="landOwner" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land owner's naame is Required..
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
                                    <label for="landSize" class="form-label sinhala-font">ඉඩමේ ප්‍රමාණය</label>
                                    <input type="text" class="form-control sinhala-font" name="landSize" id="landSize" maxlength="50" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land size is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="office" class="form-label sinhala-font">ඔප්පුව ලැබුණ ආයතනය</label>
                                    <input type="text" class="form-control sinhala-font" name="office" id="office" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Approved office is required..
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
                                    <label for="landoffice" class="form-label sinhala-font">අනවසර පදිංචිනම් ඉඩම අයත් ආයතනය</label>
                                    <select class="form-select sinhala-font" name="landOffice" id="landOffice" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">නිවාස අධිකාරිය</option>
                                        <option name="2" id="2">ඉඩම් ප්‍රතිසස්කරන කොමිසම් සභාව</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Land own affice is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="liveLandIn">Insert new field</button>
                                </div>
                            </form>

                            <!-- insert land info to home_land table start -->
                            <?php

                                if(isset($_POST['liveLandIn'])){

                                    $homeNo = mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                    $landOwner = mysqli_real_escape_string($conn, trim($_POST['landOwner']));
                                    $landName = mysqli_real_escape_string($conn, trim($_POST['landName']));
                                    $landSize = mysqli_real_escape_string($conn, trim($_POST['landSize']));
                                    $landOffice = mysqli_real_escape_string($conn, trim($_POST['office']));
                                    $landNumber = mysqli_real_escape_string($conn, trim($_POST['landNumber']));
                                    $authOffice = mysqli_real_escape_string($conn, trim($_POST['landOffice']));


                                    // find there has existing data or not
                                    $sql = "SELECT h_no,l_number FROM `home_land` WHERE h_no='".$homeNo."' OR l_number='".$landNumber."'";
                                    $result = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($result)>0){
                                        
                                        echo'
                                            <script>
                                                swal({
                                                    title: "Error Occurd!",
                                                    text: "There has existing Home or Land number. Please findout!",
                                                    icon: "error",
                                                    button: "OK!",  
                                                }).then(function(){
                                                    window.location = "rPage5.php";
                                                });
                                            </script>
                                        ';
                                    }
                                    else{

                                        // insert data to homeland table
                                        $insert = "INSERT INTO `home_land` (`h_no`, `owner_name`, `l_name`, `l_size`, `l_office`, `l_number`, `l_authoffice`) VALUES ('".$homeNo."', '".$landOwner."', '".$landName."', '".$landSize."', '".$landOffice."', '".$landNumber."', '".$authOffice."')";

                                        // echo'
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
                                                    window.location = "rPage5.php";
                                                });
                                            </script>
                                        ';
                            
                                        echo '
                                                <script>
                                                    r5reload();
                                                </script>
                                        ';

                                    }

                                }

                            ?>  <!-- insert land info to home_land table end -->



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
                <table class="table table-striped table-responsive-md table-bordered my-5" id="landTable">
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">LID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">ඉඩම්හිමියාගේ නම</th>
                            <th class="sinhala-font">ඉඩමේ නම</th>
                            <th class="sinhala-font">ප්‍රමාණය</th>
                            <th class="sinhala-font">ඔප්පුව ලැබුණ ආයතනය</th>
                            <th class="sinhala-font">ඔප්පු අංකය</th>
                            <th class="sinhala-font">අනවසර පදිංචිනම් ඉඩම අයත් ආයතනය</th>
                            <th class="sinhala-font">වෙනස් කිරීම්</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                        $selectData = "SELECT * FROM `home_land` ORDER BY h_no";
                        $dataResult = mysqli_query($conn,$selectData);

                        if(mysqli_num_rows($dataResult)>0){
                            while($row = mysqli_fetch_assoc($dataResult)){
                                
                                echo'
                                    <tr>
                                        <td class="sinhala-font d-none" name="tID" id="tID">'.$row["l_id"].'</td>
                                        <td class="sinhala-font" name="hNo" id="thNo">'.$row["h_no"].'</td>
                                        <td class="sinhala-font" name="landOwner" id="tlandOwner">'.$row["owner_name"].'</td>
                                        <td class="sinhala-font" name="landName" id="tlandName">'.$row["l_name"].'</td>
                                        <td class="sinhala-font" name="size" id="tsize">'.$row["l_size"].'</td>
                                        <td class="sinhala-font" name="office" id="toffice">'.$row["l_office"].'</td>
                                        <td class="sinhala-font" name="landNo" id="tlandNo">'.$row["l_number"].'</td>
                                        <td class="sinhala-font" name="illigleOffice" id="tilligleOffice">'.$row["l_authoffice"].'</td>
                                        <td name="change" id="change">
                                            <div class="btn-group">
                                                <button class="btn btn-success mr-1" name="update" id="update" data-toggle="modal" data-target="#govLandUpdate"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-danger " name="delete" id="'.$row["l_id"].'" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE" onclick="r5DeleteRow(this.id)"><i class="bi bi-trash"></i></button>
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

            <!-- Modal start for update data -->
            <div class="modal fade  " id="govLandUpdate" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පදිංචි ඉඩම පිළිබද දත්ත සංස්කරන ආකෘති පත්‍රය(රජයේ)</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="#" method="POST" autocomplete="off" novalidate>
                            <div class="input-group mb-3" hidden>
                                <input type="text"  name="lID" id="lID" readonly>
                            </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="h_homeNo" id="h_homeNo" pattern=".{3,5}"  required>
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_landOwner" class="form-label sinhala-font">ඉඩම්හිමියාගේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="h_landOwner" id="h_landOwner" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land owner's naame is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_landName" class="form-label sinhala-font">ඉඩමේ නම</label>
                                    <input type="text" class="form-control sinhala-font" name="h_landName" id="h_landName" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land name is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_landSize" class="form-label sinhala-font">ඉඩමේ ප්‍රමාණය</label>
                                    <input type="text" class="form-control sinhala-font" name="h_landSize" id="h_landSize" maxlength="50" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land size is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_office" class="form-label sinhala-font">ඔප්පුව ලැබුණ ආයතනය</label>
                                    <input type="text" class="form-control sinhala-font" name="h_office" id="h_office" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Approved office is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_landNumber" class="form-label sinhala-font">ඔප්පු අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="h_landNumber" id="h_landNumber" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Land deed number is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_landOffice" class="form-label sinhala-font">අනවසර පදිංචිනම් ඉඩම අයත් ආයතනය</label>
                                    <select class="form-select sinhala-font" name="h_landOffice" id="h_landOffice" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="නිවාස අධිකාරිය">නිවාස අධිකාරිය</option>
                                        <option name="2" id="2" value="ඉඩම් ප්‍රතිසස්කරන කොමිසම් සභාව">ඉඩම් ප්‍රතිසස්කරන කොමිසම් සභාව</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Land own office is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="liveLndUp">Update new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['liveLndUp'])){

                                    $lID = mysqli_real_escape_string($conn, trim($_POST['lID']));
                                    $h_homeNo = mysqli_real_escape_string($conn, trim($_POST['h_homeNo']));
                                    $h_landOwner = mysqli_real_escape_string($conn, trim($_POST['h_landOwner']));
                                    $h_landName = mysqli_real_escape_string($conn, trim($_POST['h_landName']));
                                    $h_landSize = mysqli_real_escape_string($conn, trim($_POST['h_landSize']));
                                    $h_office = mysqli_real_escape_string($conn, trim($_POST['h_office']));
                                    $h_landNumber = mysqli_real_escape_string($conn, trim($_POST['h_landNumber']));
                                    $h_landOffice = mysqli_real_escape_string($conn, trim($_POST['h_landOffice']));
                                    
                                    $update = "UPDATE `home_land` SET `h_no`='".$h_homeNo."',`owner_name`='".$h_landOwner."',`l_name`='".$h_landName."',`l_size`='".$h_landSize."',`l_office`='".$h_office."',`l_number`='".$h_landNumber."',`l_authoffice`='".$h_landOffice."' WHERE `l_id`='".$lID."'";
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
                                                    window.location = "rPage5.php";
                                                });
                                            </script>
                                        ';

                                        echo'
                                            <script>
                                                r5updateReload();
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
            <!-- modal close  for update data-->


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