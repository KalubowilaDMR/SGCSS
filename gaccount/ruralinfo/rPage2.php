
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
    <title>SGCSS - විදෙස්ගතව සිටින අය පිළිබද තොරතුරු</title>
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
                                    <a href="#" class="rural-details sinhala-font" name="rPage2">විදෙස්ගතය පිළිබඳ තොරතුරු</a>
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
                    <h3 class="table-name-header m-5"><u>විදෙස්ගතව සිටින අය පිළිබද තොරතුරු</u></h3>
            </div>

             <!-- new data insert start -->
             <div class="insert-new">
                <button type="button" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#abroadPersonForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="abroadPersonForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පුද්ගල දත්ත ඇතුලත්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                                <div class="col-md-6 mb-4">
                                    <label for="homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="homeNo" id="homeNo" pattern=".{3,5}"  required>
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="fullName" class="form-label sinhala-font">සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="fullName" id="fullName" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    FullName is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="nic" id="nic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    FullName is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="country" class="form-label sinhala-font">විදෙස්ගත රට</label>
                                    <input type="text" class="form-control sinhala-font" name="abCountry" id="country" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Abroaded country is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="job" class="form-label sinhala-font">කරනුලබන රැකියාව හෝ පාඨමාලාව</label>
                                    <input type="text" class="form-control sinhala-font" name="job" id="job" maxlength="150" required>
                                    <div class="invalid-feedback">
                                    Job or Course is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="year" class="form-label sinhala-font">විදෙස්ගතවු වර්ෂය</label>
                                    <input type="date" class="form-control sinhala-font" name="abYear" id="year" required>
                                    <div class="invalid-feedback">
                                    Abroaded year is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="abroadIn">Insert new field</button>
                                </div>
                            </form>

                            <!-- insert data function start -->
                            <?php



                                if(isset($_POST['abroadIn'])){

                                    // insert abroad peoples data
                                    $homeNo =mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                    $fullName = mysqli_real_escape_string($conn, trim($_POST['fullName']));
                                    $nic = mysqli_real_escape_string($conn, trim($_POST['nic']));
                                    $abCountry = mysqli_real_escape_string($conn, trim($_POST['abCountry']));
                                    $job = mysqli_real_escape_string($conn, trim($_POST['job']));
                                    $abyear =mysqli_real_escape_string($conn, trim($_POST['abYear']));

                                    // search there has any existing data
                                    $searchNic = "SELECT `nic` FROM abroadpeople WHERE nic='".$nic."'";
                                    $resultData = mysqli_query($conn, $searchNic);
                                    if(mysqli_num_rows($resultData)>0){
                                        // echo'
                                        //     <script>
                                        //         alert("There has existing data. Please findout");
                                        //     </script>
                                        //     ';

                                        echo'
                                            <script>
                                                swal({
                                                    title: "Error Occurd!",
                                                    text: "There has existing NIC number. Please findout!",
                                                    icon: "error",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage2.php";
                                                });
                                            </script>
                                            ';
                                    }
                                    else{
                                        

                                        $sqlAbData = "INSERT INTO `abroadpeople` (`h_no`, `full_name`, `nic`, `country`, `course`, `ab_year`) VALUES ('".$homeNo."', '".$fullName."', '".$nic."', '".$abCountry."', '".$job."', '".$abyear."')";

                                    //     echo'
                                    //     <script>
                                    //         alert("'.$sqlAbData.'");
                                    //     </script>
                                    // ';


                                        $resultAbData = mysqli_query($conn, $sqlAbData);

                                        echo '
                                            <script>
                                                swal({
                                                    title: "Success!",
                                                    text: "Insert Data successfully",
                                                    icon: "success",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage2.php";
                                                });
                                            </script>
                                        ';

                                        echo '
                                            <script>
                                                r2reload();
                                            </script>
                                        ';
                                        
                                        
                                    }

                                }


                            ?>  <!-- insert data function end -->

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
                <table class="table table-striped table-responsive-md table-bordered my-5" id="abroadTable">
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">aID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">සම්පූර්න නම</th>
                            <th class="sinhala-font">හැදුනුම්පත් අංකය</th>
                            <th class="sinhala-font">විදෙස්ගත රට</th>
                            <th class="sinhala-font">කරනුලබන රැකියාව හෝ පාඨමාලාව</th>
                            <th class="sinhala-font">විදෙස්ගතවු වර්ෂය</th>
                            <th class="sinhala-font">වෙනස් කිරීම්</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                                $AbData = "SELECT * FROM `abroadpeople`";
                                $result = mysqli_query($conn, $AbData);

                                if(mysqli_num_rows($result)>0){
                                    while($data = mysqli_fetch_assoc($result)){
                                        echo'
                                            <tr>
                                                <td class="sinhala-font d-none" name="ab_id" id="ab_id">'.$data["ab_id"].'</td>
                                                <td class="sinhala-font" name="hNo" id="thNo">'.$data["h_no"].'</td>
                                                <td class="sinhala-font" name="name" id="tname">'.$data["full_name"].'</td>
                                                <td class="sinhala-font" name="nic" id="tnic">'.$data["nic"].'</td>
                                                <td class="sinhala-font" name="country" id="tcountry">'.$data["country"].'</td>
                                                <td class="sinhala-font" name="occupation" id="toccupation">'.$data["course"].'</td>
                                                <td class="sinhala-font" name="abroadYear" id="tabroadYear">'.$data["ab_year"].'</td>
                                                <td name="change" id="change">
                                                    <div class="btn-group">
                                                        <button class="btn btn-success mr-1" name="update" id="update" data-toggle="modal" data-target="#abroadPersonUpdateForm"><i class="bi bi-pencil"></i></button>
                                                        <button class="btn btn-danger " name="delete" id="'.$data["ab_id"].'" data-bs-toggle="tootltip" data-bs-placement="top" title="DELETE" onclick="r2DeleteRow(this.id)"><i class="bi bi-trash"></i></button>
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
            <div class="modal fade  " id="abroadPersonUpdateForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="updateData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateData"><b>දත්ත සංස්කරන ආකෘති පත්‍රය</b></h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                                <div class="input-group mb-3" hidden>
                                    <input type="text" name="aid" id="aid">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="aHomeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="aHomeNo" id="aHomeNo" pattern=".{3,5}"  required>
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="aFullName" class="form-label sinhala-font">සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="aFullName" id="aFullName" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    FullName is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="aNic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="aNic" id="aNic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    FullName is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="aCountry" class="form-label sinhala-font">විදෙස්ගත රට</label>
                                    <input type="text" class="form-control sinhala-font" name="aCountry" id="aCountry" maxlength="100" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Abroaded country is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="aJob" class="form-label sinhala-font">කරනුලබන රැකියාව හෝ පාඨමාලාව</label>
                                    <input type="text" class="form-control sinhala-font" name="aJob" id="aJob" maxlength="150" required>
                                    <div class="invalid-feedback">
                                    Job or Course is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="aYear" class="form-label sinhala-font">විදෙස්ගතවු වර්ෂය</label>
                                    <input type="date" class="form-control sinhala-font" name="aYear" id="aYear" required>
                                    <div class="invalid-feedback">
                                    Abroaded year is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="abroadUp">Update new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['abroadUp'])){

                                    $aHomeNo = mysqli_real_escape_string($conn, trim($_POST['aHomeNo']));
                                    $aFullName = mysqli_real_escape_string($conn, trim($_POST['aFullName']));
                                    $aNic = mysqli_real_escape_string($conn, trim($_POST['aNic']));
                                    $aCountry = mysqli_real_escape_string($conn, trim($_POST['aCountry']));
                                    $aJob = mysqli_real_escape_string($conn, trim($_POST['aJob']));
                                    $aYear = mysqli_real_escape_string($conn, trim($_POST['aYear']));

                                    $update = "UPDATE `abroadpeople` SET `h_no`='".$aHomeNo."',`full_name`='".$aFullName."',`nic`='".$aNic."',`country`='".$aCountry."',`course`='".$aJob."',`ab_year`='".$aYear."' WHERE `ab_id`='".$_POST['aid']."'";
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
                                                    window.location = "rPage2.php";
                                                });
                                            </script>
                                        ';

                                        echo'
                                            <script>
                                                r2updateReload();
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
    <script src="../js/script.js"></script>
</body>
</html>