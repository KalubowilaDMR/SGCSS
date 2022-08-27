
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
    <title>SGCSS - පාඨමාලා හදාරන්නන් පිළිබඳ තොරතුරු</title>
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
                                    <a href="rPage7.php" class="rural-details sinhala-font" name="rPage7">නිවසේ වාහන පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="rPage8.php" class="rural-details sinhala-font" name="rPage8">ක්‍රීඩා සදහා අපේක්ෂකයන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="#" class="rural-details sinhala-font" name="rPage9">පාඨමාලා හදාරන්නන් පිළිබඳ තොරතුරු</a>
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
                    <h3 class="table-name-header m-5"><u>පාඨමාලා හදාරන්නන් පිළිබඳ තොරතුරු</u></h3>
            </div>

            <!-- new data insert start -->
            <div class="insert-new">
                <button type="submit" class="btn btn-primary" name="insert" id="insert" data-toggle="modal" data-target="#courseForm"><i class="bi bi-plus-lg"></i> new</button>
            </div>

            <!-- Modal start for insert data -->
            <div class="modal fade  " id="courseForm" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පාඨමාලා හදාරන්නන් පිළිබද දත්ත ඇතුලත්කරන ආකෘති පත්‍රය</h5>
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
                                    <label for="name" class="form-label sinhala-font">සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="name" id="name" maxlength="150" required oninput="this.value = this.value.toUpperCase()"> 
                                    <div class="invalid-feedback">
                                    Name is Required..
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
                                    <label for="course" class="form-label sinhala-font">පාඨමාලාව</label>
                                    <input type="text" class="form-control sinhala-font" name="course" id="course" maxlength="100" required>
                                    <div class="invalid-feedback">
                                    Course name is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="courseDuration" class="form-label sinhala-font">පාඨමාලාව හදාරන කාලය</label>
                                    <input type="text" class="form-control sinhala-font" name="courseDuration" id="courseDuration" maxlength="50" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Course duration is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="courseIn">Insert new field</button>
                                </div>
                            </form>

                            <?php
                                if(isset($_POST['courseIn'])){

                                    $homeNo = mysqli_real_escape_string($conn, trim($_POST['homeNo']));
                                    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
                                    $nic = mysqli_real_escape_string($conn, trim($_POST['nic']));
                                    $course = mysqli_real_escape_string($conn, trim($_POST['course']));
                                    $courseDuration = mysqli_real_escape_string($conn, trim($_POST['courseDuration']));

                                    $sql = "SELECT * FROM `edu_people` WHERE nic='".$nic."'";
                                    $resultSql = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($resultSql)>0){

                                        $row = mysqli_fetch_assoc($resultSql);
                                        $homeNumber = $row["h_no"];

                                        if($homeNumber == $homeNo){

                                            $insert = "INSERT INTO `edu_people` (`h_no`, `fullname`, `nic`, `course`, `duration`) VALUES ('".$homeNo."', '".$name."', '".$nic."', '".$course."', '".$courseDuration."')";
                                             
                                                // echo'
                                                //     <script>
                                                //         alert("'.$insert.'");
                                                //     </script>
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
                                                            window.location = "rPage9.php";
                                                        });
                                                    </script>
                                                ';
                                    
                                            echo '
                                                    <script>
                                                        r9reload();
                                                    </script>
                                                ';

                                        }
                                        else{
                                            echo'
                                                <script>
                                                    swal({
                                                        title: "Error Occurd!",
                                                        text: "There has existing NIC with other Home Number. Please findout!",
                                                        icon: "error",
                                                        button: "OK!",  
                                                    }).then(function(){
                                                        window.location = "rPage9.php";
                                                    });
                                                </script>
                                            ';
                                        }

                                    }
                                    else{

                                        $insert = "INSERT INTO `edu_people` (`h_no`, `fullname`, `nic`, `course`, `duration`) VALUES ('".$homeNo."', '".$name."', '".$nic."', '".$course."', '".$courseDuration."')";
                                             
                                                // echo'
                                                //     <script>
                                                //         alert("'.$insert.'");
                                                //     </script>
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
                                                            window.location = "rPage9.php";
                                                        });
                                                    </script>
                                                ';
                                    
                                            echo '
                                                    <script>
                                                        r9reload();
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
                <table class="table table-striped table-responsive-md table-bordered my-5" id="courseTable">
                    <thead>
                        <tr>
                            <th class="sinhala-font d-none">CID</th>
                            <th class="sinhala-font">ගෘහ අංකය</th>
                            <th class="sinhala-font">සම්පූර්න නම</th>
                            <th class="sinhala-font">හැදුනුම්පත් අංකය</th>
                            <th class="sinhala-font">පාඨමාලාව</th>
                            <th class="sinhala-font">පාඨමාලාව හදාරන කාලය</th>
                            <th class="sinhala-font">වෙනස් කිරීම්</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                                $selectData = "SELECT * FROM `edu_people` ORDER BY h_no";
                                $resultData = mysqli_query($conn, $selectData);
                                if(mysqli_num_rows($resultData)>0){
                                    while($data = mysqli_fetch_assoc($resultData)){
                                        echo '
                                            <tr>
                                                <td class="sinhala-font d-none" name="t_cid" id="t_cid">'.$data["id"].'</td>
                                                <td class="sinhala-font" name="hNo" id="t_hNo">'.$data["h_no"].'</td>
                                                <td class="sinhala-font" name="name" id="t_name">'.$data["fullname"].'</td>
                                                <td class="sinhala-font" name="pnic" id="t_pnic">'.$data["nic"].'</td>
                                                <td class="sinhala-font" name="course" id="t_course">'.$data["course"].'</td>
                                                <td class="sinhala-font" name="cDuration" id="t_cDuration">'.$data["duration"].'</td>
                                                <td name="change" id="change">
                                                    <div class="btn-group">
                                                        <button class="btn btn-success mr-1" name="update" id="update" data-toggle="modal" data-target="#courseUpdate"><i class="bi bi-pencil"></i></button>
                                                        <button class="btn btn-danger " name="delete" id="'.$data["id"].'" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE" onclick="r9DeleteRow(this.id);"><i class="bi bi-trash"></i></button>
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
            <div class="modal fade  " id="courseUpdate" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="insertData" aria-hidden="true">
            <div class="modal-dialog modal-xl   ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertData">පාඨමාලා හදාරන්නන් පිළිබද දත්ත සංස්කරන ආකෘති පත්‍රය</h5>
                    <button type="button" class="btn-close btn-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2 p-0">
                    <div class="accout-form mt-10 bg-light">
                            <form class="row g-3 needs-validation  mb-4 p-3" action="#" method="POST" autocomplete="off" novalidate>
                                <div class="input-group mb-3" hidden>
                                    <input type="text"  name="c_id" id="c_id" readonly>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_homeNo" class="form-label sinhala-font">ගෘහ අංකය</label>
                                    <input type="text" class="form-control sinhala-font" name="c_homeNo" id="c_homeNo" pattern=".{3,5}"  required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Home Number Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_name" class="form-label sinhala-font">සම්පූර්න නම</label>
                                    <input type="text" class="form-control sinhala-font" name="c_name" id="c_name" maxlength="150" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Name is Required..
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
                                    <label for="c_course" class="form-label sinhala-font">පාඨමාලාව</label>
                                    <input type="text" class="form-control sinhala-font" name="c_course" id="c_course" maxlength="100" required>
                                    <div class="invalid-feedback">
                                    Course name is Required..
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="c_courseDuration" class="form-label sinhala-font">පාඨමාලාව හදාරන කාලය</label>
                                    <input type="text" class="form-control sinhala-font" name="c_courseDuration" id="c_courseDuration" maxlength="50" required oninput="this.value = this.value.toUpperCase()">
                                    <div class="invalid-feedback">
                                    Course duration is required..
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="courseUp">Update new field</button>
                                </div>
                            </form>

                            <?php

                                if(isset($_POST['courseUp'])){

                                    $c_id = mysqli_real_escape_string($conn, trim($_POST['c_id']));
                                    $c_homeNo = mysqli_real_escape_string($conn, trim($_POST['c_homeNo']));
                                    $c_name = mysqli_real_escape_string($conn, trim($_POST['c_name']));
                                    $c_nic = mysqli_real_escape_string($conn, trim($_POST['c_nic']));
                                    $c_course = mysqli_real_escape_string($conn, trim($_POST['c_course']));
                                    $c_courseDuration = mysqli_real_escape_string($conn, trim($_POST['c_courseDuration']));

                                    $update = "UPDATE `edu_people` SET `h_no`='".$c_homeNo."',`fullname`='".$c_name."',`nic`='".$c_nic."',`course`='".$c_course."',`duration`='".$c_courseDuration."' WHERE `id`='".$c_id."'";
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
                                                    window.location = "rPage9.php";
                                                });
                                            </script>
                                        ';
                                        
                                        echo'
                                            <script>
                                                r9updateReload();
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
                                                    window.location = "rPage9.php";
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