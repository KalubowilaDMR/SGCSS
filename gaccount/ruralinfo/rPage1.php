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
    <title>SGCSS - පුද්ගල දත්ත</title>
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
                                    <a href="#" class="rural-details sinhala-font" name="rPage1">පුද්ගල තොරතුරු</a>
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
                    <h3 class="table-name-header m-5"><u>පුද්ගල තොරතුරු</u></h3>
            </div>

            <!-- new data insert start -->
            <div class="insert-new">
                <button type="button" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#personForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="personForm" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පුද්ගල දත්ත ඇතුලත්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <!-- user dtails form start -->
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
                                    <label for="address" class="form-label sinhala-font">ගෘහ ලිපිනය</label>
                                    <input type="text" class="form-control sinhala-font" name="address" id="address" required>
                                    <div class="invalid-feedback">
                                    Home Address Required..
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
                                    <label for="genderselect" class="form-label sinhala-font">ස්ත්‍රී/පුරුෂභාවය</label>
                                    <select class="form-select sinhala-font" name="genderlist" id="genderselect" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="male" name="male" value="පුරුෂ">පුරුෂ</option>
                                        <option id="female" name="female" value="ස්ත්‍රී">ස්ත්‍රී</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Gender is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="nation" class="form-label sinhala-font">ජාතිය</label>
                                    <select class="form-select sinhala-font" name="nationList" id="nation" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="sinhala" name="sinhala" value="සිංහල">සිංහල</option>
                                        <option id="tamil" name="tamil" value="දෙමළ">දෙමළ</option>
                                        <option id="muslim" name="muslim" value="මුස්ලිම්">මුස්ලිම්</option>  
                                    </select>
                                    <div class="invalid-feedback">
                                    Nation is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="relegion" class="form-label sinhala-font">ආගම</label>
                                    <select class="form-select sinhala-font" name="relegionList" id="relegion" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="budhdhism" name="budhdhism" value="බුද්ධාගම">බුද්ධාගම</option>
                                        <option id="hindi" name="hindi" value="හිංදු ආගම">හිංදු ආගම</option>
                                        <option id="christian" name="christian" value="ක්‍රිස්තියානි ආගම">ක්‍රිස්තියානි ආගම</option>
                                        <option id="islam" name="islam" value="ඉස්ලාම් ආගම">ඉස්ලාම් ආගම</option>   
                                    </select>
                                    <div class="invalid-feedback">
                                    Relegion is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="bday" class="form-label sinhala-font">උපන්දිනය</label>
                                    <input type="date" class="form-control sinhala-font" name="dob" id="bday" required>
                                    <div class="invalid-feedback">
                                    Date of Birth Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="nic" id="nic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" oninput="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="status" class="form-label sinhala-font">වර්තමාන තත්වය</label>
                                    <select class="form-select sinhala-font" name="presentStatus" id="status" required onclick="r1disablestatus()">
                                        <option selected disabled value>Choose...</option>
                                        <option id="married" name="married" value="විවාහකයි">විවාහකයි</option>
                                        <option id="unmarried" name="unmarried" value="අවිවාහකයි" >අවිවාහකයි</option>
                                        <option id="widow" name="widow" value="වැන්දඹු">වැන්දඹු</option>   
                                    </select>
                                    <div class="invalid-feedback">
                                    Current status is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="spouse" class="form-label sinhala-font">ස්වාමියා/බිරිද ගේ සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="spouse" id="spouse" maxlength="150"  oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="edu" class="form-label sinhala-font">අධ්‍යාපන මට්ටම</label>
                                    <select class="form-select sinhala-font" name="eduStatus" id="edu" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="belowOL" name="belowOL" value="සමාන්‍යපෙළට අඩු">සමාන්‍යපෙළට අඩු</option>
                                        <option id="passOL" name="passOL" value="සමාන්‍යපෙළ සමත්">සමාන්‍යපෙළ සමත්</option>
                                        <option id="passAL" name="passAL" value="උසස්පෙළ සමත්">උසස්පෙළ සමත්</option>   
                                        <option id="graduate" name="graduate" value="උපාධිධාරි">උපාධිධාරි</option>   
                                    </select>
                                    <div class="invalid-feedback">
                                    Education status is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="job" class="form-label sinhala-font">රැකියාව</label>
                                    <input type="text" class="form-control sinhala-font" name="job" id="job" maxlength="100">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="office" class="form-label sinhala-font">රැකියාව කරන ආයතනය</label>
                                    <input type="text" class="form-control sinhala-font" name="office" id="office" maxlength="150">
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <label for="grade" class="form-label sinhala-font">ඉගෙනුම ලබන ශ්‍රේණිය</label>
                                    <input type="text" class="form-control sinhala-font" name="grade" id="grade" maxlength="50">
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="personDataInput">Insert new field</button>
                                </div>
                            </form>

                         <!-- insert data function start -->
                        <?php



                            if(isset($_POST['personDataInput'])){

                                // input data value
                                $homeNo = mysqli_real_escape_string($conn,trim($_POST['homeNo']));
                                $address = mysqli_real_escape_string($conn,trim($_POST['address']));
                                $fullName = mysqli_real_escape_string($conn,trim($_POST['fullName']));
                                $gender = mysqli_real_escape_string($conn,trim($_POST['genderlist']));
                                $nation = mysqli_real_escape_string($conn,trim($_POST['nationList']));
                                $religion = mysqli_real_escape_string($conn,trim($_POST['relegionList']));
                                $dob = mysqli_real_escape_string($conn,trim($_POST['dob']));
                                $nic = mysqli_real_escape_string($conn,trim($_POST['nic']));
                                $status = mysqli_real_escape_string($conn,trim($_POST['presentStatus']));
                                $spouse = mysqli_real_escape_string($conn,trim($_POST['spouse']));
                                $edu = mysqli_real_escape_string($conn,trim($_POST['eduStatus']));
                                $job = mysqli_real_escape_string($conn,trim($_POST['job']));
                                $jobPlace = mysqli_real_escape_string($conn,trim($_POST['office']));
                                $grade = mysqli_real_escape_string($conn,trim($_POST['grade']));


                                // search there has any existing data
                                $searcNiceData = "SELECT `nic` FROM personal_details WHERE nic='".$nic."'";
                                $resultData = mysqli_query($conn, $searchNicData);
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
                                                    window.location = "rPage1.php";
                                                });
                                            </script>
                                        ';

                                }
                                else{

                                    // // input data value
                                    
                                    $sqlInsert = "INSERT INTO `personal_details`(`h_no`,`address`, `full_name`, `gender`, `nation`, `religion`, `dob`, `nic`, `status`, `spouse`, `edu`, `job`, `job_place`, `edu_grade`) VALUES ( '".$homeNo."', '".$address."', '".$fullName."', '".$gender."', '".$nation."', '".$religion."', '".$dob."', '".$nic."', '".$status."', '".$spouse."', '".$edu."', '".$job."', '".$jobPlace."', '".$grade."')";

                                    
                                    // echo'
                                    //     <script>
                                    //         alert("'.$sqlInsert.'");
                                    //     </script>
                                    // ';

                                    // $sqlResult = mysqli_query($conn, $sqlInsert);
                                    $sqlResult = mysqli_query($conn, $sqlInsert);

                                    echo '
                                            <script>
                                                swal({
                                                    title: "Success!",
                                                    text: "Insert Data successfully",
                                                    icon: "success",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage1.php";
                                                });
                                            </script>
                                        ';
                                    
                                    echo '
                                        <script>
                                            r1reload();
                                        </script>
                                    ';
                                }

                            }


                        ?>  <!-- insert data function end -->

                        </div>
                    <!-- User Details form end  -->
                    
                   


                </div>
                </div>
            </div>
            </div>
            <!-- modal close  for insert data-->
            <!-- new data insert end -->

            <div class="row my-5"> <!-- User list table row start -->
                <!-- <h3 class="userList mb-3">User List</h3> -->
                <table class="table table-striped table-responsive-md table-bordered my-5" id="personTable" >
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">PID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">ලිපිනය</th>
                            <th class="sinhala-font">සම්පූර්න නම</th>
                            <th class="sinhala-font">ස්ත්‍රී/පුරුෂ</th>
                            <th class="sinhala-font">ජාතිය</th>
                            <th class="sinhala-font">ආගම</th>
                            <th class="sinhala-font">උපන්දිනය</th>
                            <th class="sinhala-font">හැදුනුම්පත් අංකය</th>
                            <th class="sinhala-font">වර්තමාන තත්වය</th>
                            <th class="sinhala-font">ස්වාමියා/බිරිද</th>
                            <th class="sinhala-font">අධ්‍යාපන මට්ටම</th>
                            <th class="sinhala-font">රැකියාව</th>
                            <th class="sinhala-font">සේවා ස්ථානය</th>
                            <th class="sinhala-font">ඉගෙනුම ලබන ශ්‍රේණිය</th>
                            <th class="sinhala-font">වෙනස් කිරීම්</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <!-- rural information data load end -->
                        <?php

                            $sqlRural = "SELECT * FROM `personal_details` ORDER BY `h_no`";
                            $resultRural = mysqli_query($conn, $sqlRural);

                            if(mysqli_num_rows($resultRural)>0){
                                while($data = mysqli_fetch_assoc($resultRural)){
                                    echo'
                                        <tr>
                                            
                                            <td class="sinhala-font d-none" name="pId" id="pId">'.$data["p_id"].'</td>
                                            <td class="sinhala-font" name="hNo" id="hNo">'.$data["h_no"].'</td>
                                            <td class="sinhala-font" name="address" id="address">'.$data["address"].'</td>
                                            <td class="sinhala-font" name="name" id="name">'.$data["full_name"].'</td>
                                            <td class="sinhala-font" name="gender" id="gender">'.$data["gender"].'</td>
                                            <td class="sinhala-font" name="nation" id="pNation">'.$data["nation"].'</td>
                                            <td class="sinhala-font" name="religion" id="pReligion">'.$data["religion"].'</td>
                                            <td class="sinhala-font" name="bday" id="bday">'.$data["dob"].'</td>
                                            <td class="sinhala-font" name="nic" id="nic">'.$data["nic"].'</td>
                                            <td class="sinhala-font" name="status" id="pStatus">'.$data["status"].'</td>
                                            <td class="sinhala-font" name="spouse" id="spouse">'.$data["spouse"].'</td>
                                            <td class="sinhala-font" name="edu" id="pEdu">'.$data["edu"].'</td>
                                            <td class="sinhala-font" name="job" id="job">'.$data["job"].'</td>
                                            <td class="sinhala-font" name="job-place" id="job-place">'.$data["job_place"].'</td>
                                            <td class="sinhala-font" name="edu-grade" id="edu-grade">'.$data["edu_grade"].'</td>
                                            <td name="change" id="change">
                                                <div class="btn-group">
                                                    <button class="btn btn-success mr-1" name="update" id="update" data-toggle="modal" data-target="#personUpdateForm"><i class="bi bi-pencil"></i></button>
                                                    <button class="btn btn-danger " name="delete" id="'.$data["p_id"].'" data-bs-toggle="tootltip" data-bs-placement="top" title="DELETE" onclick="r1DeleteRow(this.id);"><i class="bi bi-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    ';
                                }

                            }


                        ?> <!-- rural information data load start -->
                        
                    </tbody>
                </table>            
            </div> <!-- User list table row end -->

            <!-- Modal start for update data -->
            <div class="modal fade  " id="personUpdateForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="updateData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateData">පුද්ගල දත්ත සංස්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="#" method="POST" autocomplete="off" novalidate>
                                <div class="input-group mb-3" hidden>
                                    <input type="text" name="pid" id="uid">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="phomeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="phomeNo" id="phomeNo" placeholder="First Name here..." pattern=".{3,5}" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="paddress" class="form-label sinhala-font">ගෘහ ලිපිනය</label>
                                    <input type="text" class="form-control sinhala-font" name="paddress" id="paddress" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Address Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pfullName" class="form-label sinhala-font">සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="pfullName" id="pfullName" placeholder="Last Name here..." maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    FullName is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pgender" class="form-label sinhala-font">ස්ත්‍රී/පුරුෂභාවය</label>
                                    <select class="form-select sinhala-font" name="pgender" id="pgender" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="male" name="male" value="පුරුෂ">පුරුෂ</option>
                                        <option id="female" name="female" value="ස්ත්‍රී">ස්ත්‍රී</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Gender is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pnation" class="form-label sinhala-font">ජාතිය</label>
                                    <select class="form-select sinhala-font" name="pnation" id="pnation" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="sinhala" name="sinhala" value="සිංහල">සිංහල</option>
                                        <option id="tamil" name="tamil" value="දෙමළ">දෙමළ</option>
                                        <option id="muslim" name="muslim" value="මුස්ලිම්">මුස්ලිම්</option>  
                                    </select>
                                    <div class="invalid-feedback">
                                    Nation is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="prelegion" class="form-label sinhala-font">ආගම</label>
                                    <select class="form-select sinhala-font" name="prelegion" id="prelegion" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="budhdhism" name="budhdhism" value="බුද්ධාගම">බුද්ධාගම</option>
                                        <option id="hindi" name="hindi" value="හිංදු ආගම">හිංදු ආගම</option>
                                        <option id="christian" name="christian" value="ක්‍රිස්තියානි ආගම">ක්‍රිස්තියානි ආගම</option>
                                        <option id="islam" name="islam" value="ඉස්ලාම් ආගම">ඉස්ලාම් ආගම</option>   
                                    </select>
                                    <div class="invalid-feedback">
                                    Relegion is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pbday" class="form-label sinhala-font">උපන්දිනය</label>
                                    <input type="date" class="form-control sinhala-font" name="pbday" id="pbday" required>
                                    <div class="invalid-feedback">
                                    Date of Birth Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pnic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="pnic" id="pnic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" oninput="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pstatus" class="form-label sinhala-font">වර්තමාන තත්වය</label>
                                    <select class="form-select sinhala-font" name="pstatus" id="pstatus" required onclick="r1disablestatus()">
                                        <option selected disabled value>Choose...</option>
                                        <option id="married" name="married" value="විවාහකයි">විවාහකයි</option>
                                        <option id="unmarried" name="unmarried" value="අවිවාහකයි">අවිවාහකයි</option>
                                        <option id="widow" name="widow" value="වැන්දඹු">වැන්දඹු</option>   
                                    </select>
                                    <div class="invalid-feedback">
                                    Current status is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pspouse" class="form-label sinhala-font">ස්වාමියා/බිරිද ගේ සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="pspouse" id="pspouse" maxlength="150"  oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pedu" class="form-label sinhala-font">අධ්‍යාපන මට්ටම</label>
                                    <select class="form-select sinhala-font" name="pedu" id="pedu" required>
                                        <option selected disabled value>Choose...</option>
                                        <option id="belowOL" name="belowOL" value="සමාන්‍යපෙළට අඩු">සමාන්‍යපෙළට අඩු</option>
                                        <option id="passOL" name="passOL" value="සමාන්‍යපෙළ සමත්">සමාන්‍යපෙළ සමත්</option>
                                        <option id="passAL" name="passAL" value="උසස්පෙළ සමත්">උසස්පෙළ සමත්</option>   
                                        <option id="graduate" name="graduate" value="උපාධිධාරි">උපාධිධාරි</option>   
                                    </select>
                                    <div class="invalid-feedback">
                                    Education status is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="pjob" class="form-label sinhala-font">රැකියාව</label>
                                    <input type="text" class="form-control sinhala-font" name="pjob" id="pjob"maxlength="100">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="poffice" class="form-label sinhala-font">රැකියාව කරන ආයතනය</label>
                                    <input type="text" class="form-control sinhala-font" name="poffice" id="poffice"maxlength="150">
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <label for="pgrade" class="form-label sinhala-font">ඉගෙනුම ලබන ශ්‍රේණිය</label>
                                    <input type="text" class="form-control sinhala-font" name="pgrade" id="pgrade"maxlength="50">
                                </div>

                
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="personUp">Update new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['personUp'])){


                                    $phomeNo = mysqli_real_escape_string($conn, trim($_POST['phomeNo']));
                                    $paddress = mysqli_real_escape_string($conn, trim($_POST['paddress']));
                                    $pfullName = mysqli_real_escape_string($conn, trim($_POST['pfullName']));
                                    $pgender = mysqli_real_escape_string($conn, trim($_POST['pgender']));
                                    $pnation = mysqli_real_escape_string($conn, trim($_POST['pnation']));
                                    $prelegion = mysqli_real_escape_string($conn, trim($_POST['prelegion']));
                                    $pbday = mysqli_real_escape_string($conn, trim($_POST['pbday']));
                                    $pnic = mysqli_real_escape_string($conn, trim($_POST['pnic']));
                                    $pstatus = mysqli_real_escape_string($conn, trim($_POST['pstatus']));
                                    $pspouse = mysqli_real_escape_string($conn, trim($_POST['pspouse']));
                                    $pedu = mysqli_real_escape_string($conn, trim($_POST['pedu']));
                                    $pjob = mysqli_real_escape_string($conn, trim($_POST['pjob']));
                                    $poffice = mysqli_real_escape_string($conn, trim($_POST['poffice']));
                                    $pgrade = mysqli_real_escape_string($conn, trim($_POST['pgrade']));

                                    $update = "UPDATE `personal_details` SET `h_no`='".$phomeNo."',`address`='".$paddress."',`full_name`='".$pfullName."',`gender`='".$pgender."',`nation`='".$pnation."',`religion`='".$prelegion."',`dob`='".$pbday."',`nic`='".$pnic."',`status`='".$pstatus."',`spouse`='".$pspouse."',`edu`='".$pedu."',`job`='".$pjob."',`job_place`='".$poffice."',`edu_grade`='".$pgrade."' WHERE `p_id`='".$_POST['pid']."'";
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
                                                    window.location = "rPage1.php";
                                                });
                                            </script>
                                        ';

                                        echo'
                                            <script>
                                                r1updateReload();
                                            </script>
                                        ';
                                        
                                    }
                                    else{

                                        echo'
                                            <script>
                                                swal({
                                                    title: "Error Occurd!",
                                                    text: "There has existing Data. Please findout!",
                                                    icon: "error",
                                                    button: "OK!",
                                                }).then(function(){
                                                    window.location = "rPage1.php";
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
            <!-- modal close for update data -->

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