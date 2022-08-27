<?php

    session_start();
    //database connection
    include("connection/db_connection.php");
    include("../autoLogout.php");


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
    <title>SGCSS - Contact</title>
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
        </nav>          <!-- Side Bar close -->

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <div class="dashboard-name">
                        <h2 class="dashboard-header">Contact</h2>
                    </div>
                </div>
            </nav>

            <!-- Contact page start -->
            <hr>
            
            <div class="mb-4 p-2"></div>

            <!-- get user data from usertable start -->
            <?php

                $userSql = "SELECT * FROM `user` WHERE email='".$_SESSION['email']."'";
                $resultSql = mysqli_query($conn, $userSql);
                $checkResult = mysqli_num_rows($resultSql);

                if($checkResult>0){

                    $row = mysqli_fetch_assoc($resultSql);

                        $name = $row['first_name']." ".$row['last_name'];
                        $email = $_SESSION['email'];
                        $phone = $row['phone'];
          
                    
                }

            ?> <!-- get user data from usertable start -->
            
            <div class="accout-form mt-10 bg-light">
                <form class="row g-3 needs-validation  mb-4 p-3 " action="" method="POST" autocomplete="off" novalidate>
                    <div class="account-header col-12 ms-4 ps-2 ">
                        <h3 >Contact Admin</h3>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="contractName" class="form-label sinhala-font">නම</label>
                        <input type="text" class="form-control" name="cName" id="contractName" value="<?php echo $name; ?>" required>
                        <div class="invalid-feedback">
                        Contact Name Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="email" class="form-label sinhala-font">ඊමේල් ලිපිනය</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" required>
                        <div class="invalid-feedback">
                        Email Required..
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="phone" class="form-label sinhala-font">දුරකතන අංකය</label>
                        <input type="text" class="form-control" name="pnumber" id="phone" pattern=".{10}" value="<?php echo $phone; ?>"  required>
                        <div class="invalid-feedback">
                        Phone Number Required..
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label sinhala-font">ඔබගේ කාරනාව</label>
                        <textarea class="form-control sinhala-font" name="info" id="info" placeholder="Type your problem here" required></textarea>
                        <div class="invalid-feedback">
                          Please enter a message in the textarea.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="contactAdmin">Send</button>
                    </div>
                </form>

                <!-- send mail function start -->
                <?php
                    if(isset($_POST['contactAdmin'])){

                        $cName = $_POST['cName'];
                        $cEmail = $_SESSION['email'];
                        $cPhone = $_POST['pnumber'];
                        $cInfo = $_POST['info'];

                        include("../contactMail.php");

                    }
                ?>
                <!-- send mail function end -->

            </div>
           
           <hr>
            <!-- Contact page end -->
        </div>
        <div class="invsible" id="timer" hidden></div>
    </div>   <!-- wrapper -->
 
    <!-- javascript libraries -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
   
</body>
</html>