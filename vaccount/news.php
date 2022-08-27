<?php

session_start();

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
    <link rel="shortcut icon"  href="asset/tag.png">
    <title>SGCSS - Dashboard</title>
    <!-- css libraries -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   
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
                        <h2 class="dashboard-header">News</h2>
                    </div>
                </div>
            </nav>

            <div class="news-title">
                <p class="sinhala-font" style="color:#000000; font-size:18px; margin:50px 0; padding-left:4px;">
                    ඔබට මෙහිදී අප විසින් දමන ලද දැනුම්දීම් දැකබලාගත හැක.
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            
                include("connection/db_connection.php");


                    $sql = "SELECT * FROM news ORDER BY date_time DESC";
                    $result= mysqli_query($conn, $sql);

                    //checkdata availability
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                         
                            if($row['category']== "Notice"){

                                $img_path = "./asset/news.jpg";

                            }
                            else{

                                $img_path = "./asset/job.jpg";
                            }

                            echo '
                            
                          
                            <div class="col">
                                <div class="card h-100">
                                <img src="'.$img_path.'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['head'].'</h5>
                                    <p class="card-text">'.$row['body'].'</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">'.$row['date_time'].'</small>
                                </div>
                                </div>
                            </div>
                        
                            
                            
                            ';
                        }
                    }

            
            ?>

            </div>
            

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