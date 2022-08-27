
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
    <title>SGCSS - පදිංචි නිවාස පිළිබද තොරතුරු</title>
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
                                    <a href="#" class="rural-details sinhala-font" name="rPage4">පදිංචි නිවාස පිළිබඳ තොරතුරු</a>
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
                    <h3 class="table-name-header m-5"><u>පදිංචි නිවාස පිළිබද තොරතුරු</u></h3>
            </div>

             <!-- new data insert start -->
             <div class="insert-new">
                <button type="submit" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#homeForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- Modal start for insert data -->
            <div class="modal fade" id="homeForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පදිංචි නිවාස දත්ත ඇතුලත්කරන ආකෘති පත්‍රය</h5>
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
                                    <label for="hType" class="form-label sinhala-font">ස්වභාවය</label>
                                    <select class="form-select sinhala-font" name="hType" id="hType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">තනිමහල්</option>
                                        <option name="2" id="2">දෙමහල්</option>
                                        <option name="3" id="3">තෙමහල්</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Home type is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="wallType" class="form-label sinhala-font">බිත්ති</label>
                                    <select class="form-select sinhala-font" name="wallType" id="wallType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">ගඩොල්</option>
                                        <option name="2" id="2">සිමෙන්ති</option>
                                        <option name="3" id="3">මැටි</option>
                                        <option name="4" id="4">ලෑලි</option>
                                    <option class="sinhala-font" name="5" id="5">කබොක්</option>
                                </select>
                                    <div class="invalid-feedback">
                                    Wall type is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="floorType" class="form-label sinhala-font">බිම</label>
                                    <select class="form-select sinhala-font" name="floorType" id="floorType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">සිමෙන්ති</option>
                                        <option name="2" id="2">ටයිල්</option>
                                        <option name="3" id="3">ටොරාසෝ</option>
                                        <option name="4" id="4">මැටි</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Floor type is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="roofType" class="form-label sinhala-font">වහලය</label>
                                    <select class="form-select sinhala-font" name="roofType" id="roofType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">උළු</option>
                                        <option name="2" id="2">ටකරන්</option>
                                        <option name="3" id="3">ඇස්බැස්ටොස්</option>
                                        <option name="4" id="4">තාරෂීට්</option>
                                        <option name="5" id="5">පොල්අතු</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Roof type is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="currentType" class="form-label sinhala-font">විදුලිය</label>
                                    <select class="form-select sinhala-font" name="currentType" id="currentType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">ඇත</option>
                                        <option name="2" id="2">නැත</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Home current connection is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="waterType" class="form-label sinhala-font">ජල පහසුව</label>
                                    <select class="form-select sinhala-font" name="waterType" id="waterType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">ළිද</option>
                                        <option name="2" id="2">නලජලය</option>
                                        <option name="3" id="3">පොදු ළිද</option>
                                        <option name="4" id="4">පොදුනලජල</option>
                                        <option name="5" id="5">අන්සතුළිද</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Water supply type is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="toiletType" class="form-label sinhala-font">වැසිකිළි පහසුකම</label>
                                    <select class="form-select sinhala-font" name="toiletType" id="toiletType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">ජලමුද්රිත</option>
                                        <option name="2" id="2">වල</option>
                                        <option name="3" id="3">පොදු</option>
                                        <option name="4" id="4">නොමැත</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Toilet facility is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="telType" class="form-label sinhala-font">ස්ථාවර දුරකතන</label>
                                    <select class="form-select sinhala-font" name="telType" id="telType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1">ඇත</option>
                                        <option name="2" id="2">නැත</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    HomeLand Phone Number is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label sinhala-font">දුරකතන අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="phone" id="phone" pattern=".{10}" minlength="10" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    <div class="invalid-feedback">
                                    Phone Number is Required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="liveHomeIn">Insert new field</button>
                                </div>
                            </form>

                            <!-- home information data insert start -->
                            <?php

                                if(isset($_POST['liveHomeIn'])){

                                    $homeNo = mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                    $hType = mysqli_real_escape_string($conn, trim($_POST['hType']));
                                    $wallType = mysqli_real_escape_string($conn, trim($_POST['wallType']));
                                    $floorType = mysqli_real_escape_string($conn, trim($_POST['floorType']));
                                    $roofType = mysqli_real_escape_string($conn, trim($_POST['roofType']));
                                    $currentType = mysqli_real_escape_string($conn, trim($_POST['currentType']));
                                    $waterType = mysqli_real_escape_string($conn, trim($_POST['waterType']));
                                    $toiletType = mysqli_real_escape_string($conn, trim($_POST['toiletType']));
                                    $telType = mysqli_real_escape_string($conn, trim($_POST['telType']));
                                    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));


                                    // find, there has any existing data
                                    $sql = "SELECT h_no,phone FROM `home_info` WHERE h_no='".$homeNo."' OR phone='".$phone."'";
                                    $result = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($result)>0){

                                        echo'
                                            <script>
                                                swal({
                                                    title: "Error Occurd!",
                                                    text: "There has existing Home or Phone number. Please findout!",
                                                    icon: "error",
                                                    button: "OK!",  
                                                }).then(function(){
                                                    window.location = "rPage4.php";
                                                });
                                            </script>
                                        ';

                                    }
                                    else{

                                        // $homeNo = mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                        // $hType = mysqli_real_escape_string($conn, trim($_POST['hType']));
                                        // $wallType = mysqli_real_escape_string($conn, trim($_POST['wallType']));
                                        // $floorType = mysqli_real_escape_string($conn, trim($_POST['floorType']));
                                        // $roofType = mysqli_real_escape_string($conn, trim($_POST['roofType']));
                                        // $currentType = mysqli_real_escape_string($conn, trim($_POST['currentType']));
                                        // $waterType = mysqli_real_escape_string($conn, trim($_POST['waterType']));
                                        // $toiletType = mysqli_real_escape_string($conn, trim($_POST['toiletType']));
                                        // $telType = mysqli_real_escape_string($conn, trim($_POST['telType']));
                                        // $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));

                                        // Insert data to home info table
                                        $insert = "INSERT INTO `home_info` (`h_no`, `h_type`, `wall_type`, `floor_type`, `roof_type`, `current_type`, `water_type`, `toilet_type`, `tel_type`, `phone`) VALUES ('".$homeNo."', '".$hType."', '".$wallType."', '".$floorType."', '".$roofType."', '".$currentType."', '".$waterType."', '".$toiletType."', '".$telType."', '".$phone."')";

                                        
                                        // echo'
                                        //  <script>
                                        //      alert("'.$insert.'");
                                        //  </script>
                                        // ';

                                        $resultInsert = mysqli_query($conn, $insert);
                                        
                                        echo '
                                            <script>
                                                swal({
                                                    title: "Success!",
                                                    text: "Insert Data successfully",
                                                    icon: "success",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage4.php";
                                                });
                                            </script>
                                        ';
                            
                                        echo '
                                                <script>
                                                    r4reload();
                                                </script>
                                        ';

                                    }
                                }


                            ?>  <!-- home information data insert end -->


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
                <table class="table table-striped table-responsive-md table-bordered my-5" id="homeTable">
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">HID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">ස්වභාවය</th>
                            <th class="sinhala-font">බිත්ති</th>
                            <th class="sinhala-font">බිම</th>
                            <th class="sinhala-font">වහලය</th>
                            <th class="sinhala-font">විදුලිය</th>
                            <th class="sinhala-font">ජල පහසුව</th>
                            <th class="sinhala-font">වැසිකිළි පහසුකම</th>
                            <th class="sinhala-font">ස්ථාවර දුරකතන</th>
                            <th class="sinhala-font">දුරකතන අංකය</th>
                            <th class="sinhala-font">වෙනස් කිරීම්</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $homeData = "SELECT * FROM `home_info` ORDER BY `h_no`";
                            $resultData = mysqli_query($conn, $homeData);

                            if(mysqli_num_rows($resultData)>0){
                                while($row = mysqli_fetch_assoc($resultData)){

                                    echo'
                                    <tr>
                                        <td class="sinhala-font d-none" name="h_id" id="h_id">'.$row['h_id'].'</td>
                                        <td class="sinhala-font" name="hNo" id="thNo">'.$row['h_no'].'</td>
                                        <td class="sinhala-font" name="home" id="thome">'.$row['h_type'].'</td>
                                        <td class="sinhala-font" name="wall" id="twall">'.$row['wall_type'].'</td>
                                        <td class="sinhala-font" name="floor" id="tfloor">'.$row['floor_type'].'</td>
                                        <td class="sinhala-font" name="roof" id="troof">'.$row['roof_type'].'</td>
                                        <td class="sinhala-font" name="current" id="tcurrent">'.$row['current_type'].'</td>
                                        <td class="sinhala-font" name="water" id="twater">'.$row['water_type'].'</td>
                                        <td class="sinhala-font" name="toilet" id="ttoilet">'.$row['toilet_type'].'</td>
                                        <td class="sinhala-font" name="telephone" id="ttelephone">'.$row['tel_type'].'</td>
                                        <td class="sinhala-font" name="phone" id="tphone">'.$row['phone'].'</td>
                                        <td name="change" id="change">
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-success mr-1" name="update" id="update" data-toggle="modal" data-target="#homeUpdate"><i class="bi bi-pencil"></i></button>
                                                <button type="submit" class="btn btn-danger " name="delete" id="'.$row['h_id'].'" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE" onclick="r4DeleteRow(this.id);"><i class="bi bi-trash"></i></button>
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
            <div class="modal fade  " id="homeUpdate" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පදිංචි නිවාස දත්ත සංස්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                                <div class="input-group mb-3" hidden>
                                    <input type="text"  name="hid" id="hid" readonly>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="h_homeNo" id="h_homeNo" readonly required>
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_hType" class="form-label sinhala-font">ස්වභාවය</label>
                                    <select class="form-select sinhala-font" name="h_hType" id="h_hType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="තනිමහල්">තනිමහල්</option>
                                        <option name="2" id="2" value="දෙමහල්">දෙමහල්</option>
                                        <option name="3" id="3" value="තෙමහල්">තෙමහල්</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Home type is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_wallType" class="form-label sinhala-font">බිත්ති</label>
                                    <select class="form-select sinhala-font" name="h_wallType" id="h_wallType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="ගඩොල්">ගඩොල්</option>
                                        <option name="2" id="2" value="සිමෙන්ති">සිමෙන්ති</option>
                                        <option name="3" id="3" value="මැටි">මැටි</option>
                                        <option name="4" id="4" value="ලෑලි">ලෑලි</option>
                                        <option name="5" id="5" value="කබොක්">කබොක්</option>
                                </select>
                                    <div class="invalid-feedback">
                                    Wall type is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_floorType" class="form-label sinhala-font">බිම</label>
                                    <select class="form-select sinhala-font" name="h_floorType" id="h_floorType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="සිමෙන්ති">සිමෙන්ති</option>
                                        <option name="2" id="2" value="ටයිල්">ටයිල්</option>
                                        <option name="3" id="3" value="ටොරාසෝ">ටොරාසෝ</option>
                                        <option name="4" id="4" value="මැටි">මැටි</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Floor type is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_roofType" class="form-label sinhala-font">වහලය</label>
                                    <select class="form-select sinhala-font" name="h_roofType" id="h_roofType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="උළු">උළු</option>
                                        <option name="2" id="2" value="ටකරන්">ටකරන්</option>
                                        <option name="3" id="3" value="ඇස්බැස්ටොස්">ඇස්බැස්ටොස්</option>
                                        <option name="4" id="4" value="තාරෂීට්">තාරෂීට්</option>
                                        <option name="5" id="5" value="පොල්අතු">පොල්අතු</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Roof type is required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_currentType" class="form-label sinhala-font">විදුලිය</label>
                                    <select class="form-select sinhala-font" name="h_currentType" id="h_currentType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="ඇත">ඇත</option>
                                        <option name="2" id="2" value="නැත">නැත</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Home current connection is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_waterType" class="form-label sinhala-font">ජල පහසුව</label>
                                    <select class="form-select sinhala-font" name="h_waterType" id="h_waterType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="ළිද">ළිද</option>
                                        <option name="2" id="2" value="නලජලය">නලජලය</option>
                                        <option name="3" id="3" value="පොදු ළිද">පොදු ළිද</option>
                                        <option name="4" id="4" value="පොදුනලජල">පොදුනලජල</option>
                                        <option name="5" id="5" value="අන්සතුළිද">අන්සතුළිද</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Water supply type is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_toiletType" class="form-label sinhala-font">වැසිකිළි පහසුකම</label>
                                    <select class="form-select sinhala-font" name="h_toiletType" id="h_toiletType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="ජලමුද්රිත">ජලමුද්රිත</option>
                                        <option name="2" id="2" value="වල">වල</option>
                                        <option name="3" id="3" value="පොදු">පොදු</option>
                                        <option name="4" id="4" value="නොමැත">නොමැත</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Toilet facility is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_telType" class="form-label sinhala-font">ස්ථාවර දුරකතන</label>
                                    <select class="form-select sinhala-font" name="h_telType" id="h_telType" required>
                                        <option selected disabled value>Choose...</option>
                                        <option name="1" id="1" value="ඇත">ඇත</option>
                                        <option name="2" id="2" value="නැත">නැත</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    HomeLand Phone Number is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="h_phone" class="form-label sinhala-font">දුරකතන අංකය</label>
                                    <input type="text" class="form-control sinhala-font"  name="h_phone" id="h_phone" pattern=".{10}" minlength="10" maxlength="10" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    <div class="invalid-feedback">
                                    Phone Number is Required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="liveHomeUp">Update new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['liveHomeUp'])){

                                    $h_homeNo = mysqli_real_escape_string($conn, trim($_POST['h_homeNo']));
                                    $h_hType = mysqli_real_escape_string($conn, trim($_POST['h_hType']));
                                    $h_wallType = mysqli_real_escape_string($conn, trim($_POST['h_wallType']));
                                    $h_floorType = mysqli_real_escape_string($conn, trim($_POST['h_floorType']));
                                    $h_roofType = mysqli_real_escape_string($conn, trim($_POST['h_roofType']));
                                    $h_currentType = mysqli_real_escape_string($conn, trim($_POST['h_currentType']));
                                    $h_waterType = mysqli_real_escape_string($conn, trim($_POST['h_waterType']));
                                    $h_toiletType = mysqli_real_escape_string($conn, trim($_POST['h_toiletType']));
                                    $h_telType = mysqli_real_escape_string($conn, trim($_POST['h_telType']));
                                    $h_phone = mysqli_real_escape_string($conn, trim($_POST['h_phone']));

                                    $update = "UPDATE `home_info` SET `h_no`='".$h_homeNo."',`h_type`='".$h_hType."',`wall_type`='".$h_wallType."',`floor_type`='".$h_floorType."',`roof_type`='".$h_roofType."',`current_type`='".$h_currentType."',`water_type`='".$h_waterType."',`toilet_type`='".$h_toiletType."',`tel_type`='".$h_telType."',`phone`='".$h_phone."' WHERE `h_id`='".$_POST['hid']."'";
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
                                                    window.location = "rPage4.php";
                                                });
                                            </script>
                                        ';

                                        echo'
                                            <script>
                                                r4updateReload();
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