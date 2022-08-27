<?php

    session_start();
    //database connection
    include("connection/db_connection.php");
    include("../autoLogout.php");

    //echo '<script>alert("'.$_SESSION['viewStatus'].'");</script>';
    //echo $_SESSION['user'];


    // check user session active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "user"){

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
    <title>SGCSS - Appointment</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <?php
                include("sidebar.php");
            ?>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <div class="dashboard-name">
                        <h2 class="dashboard-header">Appointment</h2>
                    </div>
                </div>
            </nav>

            <hr>


            <!-- PHP function start -->

            <?php

                //Select user data from database
                $sql = "SELECT * FROM user WHERE email= '".$_SESSION['email']."'";
                $result =  mysqli_query($conn, $sql);
                $checkResult = mysqli_num_rows($result);


                //if condition to check any data have in database
                if($checkResult > 0){

                    $row = mysqli_fetch_assoc($result);

                    //user id
                    $userId= $row['u_id'];
                    $name = $row['first_name'] ." ". $row['last_name'];
                    $nic = $row['nic'];
                    
                }

                else{

                    echo "<script>
                        alert('You don't have anydata to display here');
                    </script>";
                }


            ?>

            <!-- PHP function end -->

            <!-- Appointment function start -->
            <?php

                if(isset($_POST['submitAppointment'])){
                    
                    $phone = mysqli_real_escape_string($conn, trim($_POST['pNumber']));
                    $category = mysqli_real_escape_string($conn, trim($_POST['category']));
                    $text = mysqli_real_escape_string($conn, trim($_POST['textsome']));
                    $dateTime = mysqli_real_escape_string($conn, trim($_POST['datetime']));

                    
                    $appoinmentSql = "INSERT INTO `appointment` (`user_id`, `phone`, `category`, `text`, `date_time`) VALUES ('".$userId."','".$phone."', '".$category."', '".$text."', '".$dateTime."')";
                    $appointmentResult = mysqli_query($conn, $appoinmentSql);
                    // $checkResult = mysqli_num_rows($result);

                    // INSERT INTO `appointment` (`id`, `user_id`, `phone`, `category`, `text`, `date_time`, `acceptance`) VALUES (NULL, '21', '0770311660', 'hyt5rryt', 'etg', '2021-11-16 00:00:00', '0');

                    // echo'
                    //     <script>
                    //         alert('.$phone.');
                    //     </script>
                    // ';

                    if($checkResult>0){

                    
                        echo '
                            <script>
                                swal({
                                    title: "Success!",
                                    text: "Your appointment was placed. waiting for reply",
                                    icon: "success",
                                    button: "OK!",
                                }).then(function(){
                                    window.location = "vappointment.php";
                                });
                            </script>
                            ';
    
                            echo'
                            <script>
                                appReload();
                            </script>
                            ';


                    }
                    else{
                        echo'
                        <script>
                            swal({
                                title: "Error Occurd!",
                                text: "Your Appointment submitting has error!",
                                icon: "error",
                                button: "OK!",
                            }).then(function(){
                                window.location = "vappointment.php";
                            });
                        </script>
                        ';

                    }


                }


            ?>    <!-- Appointment function end -->


            <div class="mb-4 p-2"></div>
            <!-- Make appoinment start -->
            <div class="accout-form mt-10 bg-light">
                <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                    <div class="account-header col-12 ms-4 ps-2 ">
                        <h3 >Appointment</h3>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="name" class="form-label sinhala-font">නම</label>
                        <input type="text" class="form-control sinhala-font" name="name" id="name" value="<?php echo $name; ?>" readonly required>
                        <div class="invalid-feedback">Name Required..</div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                        <input type="text" class="form-control sinhala-font" name="nic" id="nic" value="<?php echo $nic; ?>" readonly required>
                        <div class="invalid-feedback">NIC Required..</div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="email" class="form-label sinhala-font">ඊමේල් ලිපිනය</label>
                        <input type="text" class="form-control sinhala-font" name="email" id="email" value="<?php echo $_SESSION['email'] ; ?>" readonly required>
                        <div class="invalid-feedback">email Required..</div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="pNumber" class="form-label sinhala-font">සම්බන්දකරගතහැකි දුරකතන අංකය</label>
                        <input type="text" class="form-control sinhala-font" name="pNumber" id="pNumber" pattern=".{10}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        <div class="invalid-feedback">Contact Number Required..</div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="category" class="form-label sinhala-font">කුමක් සදහාද?</label>
                        <select id="category" class="form-select sinhala-font" name="category" required>
                            <option class="sinhala-font" selected disabled value>Choose...</option>
                            <option class="sinhala-font" name="character" value="චරිත සහතික/ පදිංචි සහතික ලබාගැනීම සදහ">චරිත සහතික/ පදිංචි සහතික ලබාගැනීම සදහ</option>
                            <option class="sinhala-font" name="permit" value="අවසරපත්‍ර ලබාගැනීම සදහ">අවසරපත්‍ර ලබාගැනීම සදහ</option>
                            <option class="sinhala-font" name="livingStates" value="පැමිණීම සහ පිටවීම">පැමිණීම සහ පිටවීම</option>
                            <option class="sinhala-font" name="businessRegister" value="ව්‍යාපර ලියාපදිංචිකිරීම සදහා">ව්‍යාපර ලියාපදිංචිකිරීම සදහා</option>
                            <option class="sinhala-font" name="land" value="ඉඩම් පිළිබද කරුණු">ඉඩම් පිළිබද කරුණු</option>
                            <option class="sinhala-font" name="otehrs" value="වෙනත් කරුණු සදහා">වෙනත් කරුණු සදහා</option>
                        </select>
                        <div class="invalid-feedback">choose Category..</div>
                    </div>
                    <div class="mb-4">
                        <label for="textsome" class="form-label sinhala-font">සදහන් කිරීමට යමක්(අනිවාර්ය නැත)</label>
                        <textarea class="form-control sinhala-font" id="textsome" name="textsome" placeholder="Type your problem here"></textarea>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="datetime" class="form-label sinhala-font">දිනය සහ වේලාව</label>
                        <input type='text' class="form-control sinhala-font" id='datetime' name="datetime" required >
                        <div class="invalid-feedback">Selct Date and Time</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="submitAppointment" id="submit">වෙන්කරවාගැනීම සිදුකරන්න</button>
                    </div>
                </form>
            </div>
            <!-- Make appoinment end -->
            <p class="rules"> ග්‍රාමසෙවක කාර්යාලය සෑම අගහාරුවාදා, බ්‍රහස්පතින්දා සහ සෙනසුරාදා දිනයන්වල විවෘතව ඇති බැවින් ඉන් ඕනෑම දිනක ඔබට වෙන්කරවාගැනීම සිදුකරගත හැක. <br> වෙන්කරවාගත හැකි කාල වේලාවන් වනුයේ අගහාරුවාදා සහ බ්‍රහස්පතින්දා උදෑසන 9.00 සිට සවස 4.00 දක්වාත් සෙනසුරාදා උදෑසන 9.00 සිට දහවල් 12 දක්වත් පමනි. <br><strong>* අදාල කරුණූ සලකාබලමින් ඔබගේ වෙන්කරව්වාගැනීමට කාරුණිකවන්න</strong></p>
        </div>
        <div class="invsible" id="timer" hidden></div>
    </div>
 
        


    <!-- javascript libraries -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <script src="js/script.js"></script>
      
</body>
</html>