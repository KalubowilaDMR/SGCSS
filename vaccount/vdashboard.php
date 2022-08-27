<?php

session_start();

//database connection
include("connection/db_connection.php");
include("../autoLogout.php");

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
    <meta http-equiv="refresh" content="30">
    <title>SGCSS - Dashboard</title>
     <!-- css libraries -->
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/all.css">
     <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
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
                        <h2 class="dashboard-header">Villager Dashboard</h2>
                    </div>
                </div>
            </nav>

            <div class="gs-details col-md-6 me-1">
                <div class="gs-icon">
                    <img class="mt-3" src="./asset/gs.png" alt="GramasewakaStatus">

                    <?php
                    
                        $sql = "SELECT status FROM availability WHERE id=2";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                $status = $row["status"];
                            }

                            if($status == 1){
                                echo '<span><i class="fas fa-circle" style="color:#90ee90" data-bs-toggle="tooltip" data-bs-placement="top" title="Online"></i></span>';
                            }
                            else{
                                echo '<span><i class="fas fa-circle" style="color:red" data-bs-toggle="tooltip" data-bs-placement="top" title="Offline"></i></span>';
                                
                            }
                        }
                        else{
                            echo "Unable To Update";
                        }
                    ?>

                    
                </div>
            </div>

            <br>
            

            <!-- get gramsewaka details start -->
            <?php

                $selectData = "SELECT first_name,last_name,phone FROM `user` WHERE user_type='gs'";
                $resultData = mysqli_query($conn, $selectData);
                if(mysqli_num_rows($resultData)>0){

                    $data = mysqli_fetch_assoc($resultData);
                    $gsName = $data['first_name']." ".$data['last_name'];
                    $gsNumber = $data['phone'];

                }
                        
            ?>
            <!-- get gramsewaka details end -->

            <label class="gs mb-2" for="">Gramasewaka Status</label>
            <p>Name: <?php echo $gsName ?> <br> Office Number: <?php echo $gsNumber ?> <br> Office: 456,පින්නවල,උතුර <br> ප්‍රාදේශීය ලේකම් කාර්යාලය - පාදුක්ක</p>

            <br>

            <div class="line"></div>

            <h2 class="header mt-4">Contact Numbers of places</h2>
            <p> ඔබට අවශ්‍ය දුරකතන අංක පහතින් ලබාගත හැක.
            </p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Office Name</th>
                        <th class="text-center">Contatct Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="sinhala-font">පින්නවල උප තැපැල් කාර්යාලය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0342274008">0342274008</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">පින්වල සණස බැංකුව</td>
                        <td class="text-center text-decoration-none"><a href="tel:0112858116">0112858116</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">හංවැල්ල පොලිස් ස්ථානය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0362255222">0362255222</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">පාදුක්ක පොලිස් ස්ථානය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0112859110">0112859110</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">පාදුක්ක කොට්ඨාස රෝහල</td>
                        <td class="text-center text-decoration-none"><a href="tel:0112859095">0112859095</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">පාදුක්ක ප්‍රාදේශීය ලේකම් කාර්යාලය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0112858198">0112858198</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">පාදුක්ක ගොවිජන සේවා මධ්‍යස්ථානය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0112830403">0112830403</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">පාදුක්ක තැපැල් කාර්යාලය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0112859028">0112859028</a></td>
                    </tr>
                    <tr>
                        <td class="sinhala-font">සෞඛ්‍ය වෛද්‍ය නිලධාරී කාර්යාලය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0112859497">0112859497</a></td>
                    </tr>
                    </tr>
                    <tr>
                        <td class="sinhala-font">පාදුක්ක පශු වෛද්‍ය කාර්යාලය</td>
                        <td class="text-center text-decoration-none"><a href="tel:0718103660">0718103660</a></td>
                    </tr>
                    
                </tbody>
            </table>

            <div class="line"></div>
            
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