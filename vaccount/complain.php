
<?php

    session_start();
    //database connection
    include("connection/db_connection.php");

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
    <title>SGCSS - Dashboard</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <h2 class="dashboard-header">Complain</h2>
                    </div>
                </div>
            </nav>

            <hr>
            

            <?php

                //selecting user data to form from user table
                $userSql = "SELECT * FROM user WHERE email = '".$_SESSION['email']."'";
                $userCheck = mysqli_query($conn,$userSql);
                

                if(mysqli_num_rows($userCheck)>0){
                    
                    while($getData = mysqli_fetch_assoc($userCheck)){

                        $firstName = $getData['first_name'];
                        $lastName = $getData['last_name'];
                        $nic = $getData['nic'];
            
                    }
                }
                else{
                    echo'
                    <script>
                        alert("There has no data to display");
                    </script>
                    ';
                }

            ?>

            <?php

                if(isset($_POST['submitComplain'])){

                    $phone = mysqli_real_escape_string($conn, trim($_POST['pnumber']));
                    $complain = mysqli_real_escape_string($conn, trim($_POST['complain']));
                    $userId = $_SESSION['userId'];

                    $compSql = "INSERT INTO `complain` (`user_id`, `phone`, `complain_text`) VALUES ('".$userId."','".$phone."','".$complain."')";
                    $sqlResult = mysqli_query($conn, $compSql);

                    // echo '<script>
                    //     alert("'.$compSql.'");
                    // </script>';

                    if($sqlResult){

                        echo '
                        <script>
                            swal({
                                title: "Success !",
                                text: "Complain submitted successfully",
                                icon: "success",
                                button: "OK!",
                            }).then(function(){
                                window.location = "complain.php";
                            });
                         </script>
                        ';

                        echo'
                            <script>
                                comReload();
                            </script>
                            ';
                    }
                    else{
                        echo '
                        <script>
                            swal({
                                title: "Error !",
                                text: "Something went wromg with complain",
                                icon: "error",
                                button: "OK!",
                            }).then(function(){
                                window.location = "complain.php";
                            });
                         </script>
                        ';
                    }    

                }
                

            ?>

            <div class="mb-4 p-2"></div>
            <!-- User complain Details end  -->
            <div class="accout-form mt-10 bg-light">
                <form class="row g-3 needs-validation  mb-4 p-3" action="" method="POST" autocomplete="off" novalidate>
                    <div class="account-header col-12 ms-4 ps-2 ">
                        <h3 >User complain </h3>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="fname" class="form-label sinhala-font">මුල් නම</label>
                        <input type="text" class="form-control" name="fname" id="fname" maxlength="100" value="<?php echo $firstName ?>"  required readonly>
                        <div class="invalid-feedback">
                        First Name Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="lname" class="form-label sinhala-font">අග නම</label>
                        <input type="text" class="form-control" name="lname" id="lname"  maxlength="150" value="<?php echo $lastName  ?>"  required readonly>
                        <div class="invalid-feedback">
                        Last Name Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="nic" class="form-label sinhala-font">හැදුනුම්පත් අංකය</label>
                        <input type="text" class="form-control" name="nic" id="nic"  maxlength="12" value="<?php echo $nic ?>"  required readonly>
                        <div class="invalid-feedback">
                        NIC Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="pnumber" class="form-label sinhala-font">දුරකතන අංකය</label>
                        <input type="text" class="form-control" name="pnumber" id="pnumber"  maxlength="10"  required>
                        <div class="invalid-feedback">
                        Phone Number Required..
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="complain" class="form-label sinhala-font">ඔබගේ පැමිණිල්ල</label>
                        <textarea class="form-control sinhala-font" name="complain" id="complain" placeholder="Type your complain here..." maxlength="300" required></textarea>
                        <div class="invalid-feedback">Please enter a message in the textarea.</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="submitComplain">Complain</button>
                    </div>
                </form>
            </div>
           <!-- User complain Details end  -->
           <p class="rules sinhala-font"><u>භාවිතයට උපදෙස්.</u>
               <article>
                   - ඔබට ඔබගේ පැමිණිල්ල සිංහල අකුරින් එවියහැක 
                   <br>
                   - ඔබගේ පැමිණිල්ලේ උපරිම වචන සංඛ්‍යාව වෙන්නේ අකුරු 350කි.
               </article>
           </p>
           <br>
           <p class="rules sinhala-font">ඔබේ තොරතුරුවල නිරවද්‍යතාවය තහවුරු කර ගැනීමට අපි ඔබට කතා කරන්නෙමු<br><strong>* ඔබේ පැමිණිලි විස්තර අසත්‍ය නොවන බවට කරුණාකර වග බලා ගන්න</strong></p>
        </div>
        <div class="invsible" id="timer" hidden></div>
    </div>
 
    <!-- javascript libraries -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  
</body>
</html>