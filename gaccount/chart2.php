
<?php

date_default_timezone_set('Asia/Colombo');

// Then call the date functions
$date = date('Y-m-d').'%';
// echo '<script>alert("'.$date.'")</script>';

session_start();
// Database connection
include("connection/db_connection.php");
include("../autoLogout.php");


// check user session active or inactive
if(empty($_SESSION['user']) || $_SESSION['user'] !== "gs"){

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
<title>SGCSS - නිවස සහ ඉඩම් තොරතුරු</title>
 <!-- css libraries -->
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="../assets/css/all.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
 
</head>
<body>


<!-- Sidebar details Here -->
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
    <div class="sidebar-header">
                <img src="asset/Logo.png" alt="logo" width="150px" height="75px">
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="gdashboard.php" class="dash-header" id="dashbord">Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Publish</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="news.php">Update News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#workArea" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Work Area</a>
                    <ul class="collapse list-unstyled" id="workArea">
                        <li>
                            <a href="#rural" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Rural Information</a>
                            <ul class="collapse list-unstyled" id="rural">
                                <li>
                                    <a href="./ruralinfo/rPage1.php" class="rural-details sinhala-font" name="rPage1">පුද්ගල තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage2.php" class="rural-details sinhala-font" name="rPage2">විදෙස්ගතය පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage3.php" class="rural-details sinhala-font" name="rPage3">ආබාධිත පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage4.php" class="rural-details sinhala-font" name="rPage4">පදිංචි නිවාස පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage5.php" class="rural-details sinhala-font" name="rPage5">පදිංචි ඉඩම් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage6.php" class="rural-details sinhala-font" name="rPage6">වගාකර ඇති ඉඩම් පිළිබඳ තොරතුරු(වසම තුල)</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage7.php" class="rural-details sinhala-font" name="rPage7">නිවසේ වාහන පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage8.php" class="rural-details sinhala-font" name="rPage8">ක්‍රීඩා සදහා අපේක්ෂකයන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage9.php" class="rural-details sinhala-font" name="rPage9">පාඨමාලා හදාරන්නන් පිළිබඳ තොරතුරු</a>
                                </li>
                                <li>
                                    <a href="./ruralinfo/rPage10.php" class="rural-details sinhala-font" name="rPage10">නිවසේ ඇතිකරන සතුන් පිළිබඳ තොරතුරු</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="deathList.php">Death List</a>
                        </li>
                        <li>
                            <a href="widowList.php">Widow List</a>
                        </li>
                        <li>
                            <a href="spouseList.php">Spouse List</a>
                        </li>
                        <li>
                            <a href="votingList.php">Voting List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#analysis" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Analysis</a>
                    <ul class="collapse list-unstyled" id="analysis">
                        <li> 
                            <a href="chart1.php" class="analysis-details sinhala-font" name="aPage1">කොට්ඨාශය තොරතුරු</a>
                        </li>
                        <li> 
                            <a href="#" class="analysis-details sinhala-font" name="aPage4">නිවස සහ ඉඩම් තොරතුරු</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#notification" data-toggle="collapse"  aria-expanded="false" class="dropdown-toggle">Notifications</a>
                    <ul class="collapse list-unstyled" id="notification">
                        <li>
                            <a href="./notification/appointmentList.php">Appointment List</a>
                        </li>
                        <li>
                            <a href="./notification/approvedAppointmnet.php">Approved Appointment</a>
                        </li>
                        <li>
                            <a href="./notification/rejectedAppointmnet.php">Rejected Appointment</a>
                        </li>
                        <li>
                            <a href="./notification/complain.php">Compalins</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="account.php">Account</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../signout.php" class="signout">Sign Out</a>
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

        <div class="container">
         
                
            </div>

            <h3 class="header mt-4">Chart Analysis</h3>
            <div class="line"></div>

            <div class="row">
                <!-- home story chart deails start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="charthomeStory" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- home story chart deails end -->

                <!-- home current chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartHomeCurrent" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- home current chart details end -->

                <!-- home water chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartHomeWater" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- home water chart details end -->

                <!-- telephone chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="charttelephone" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- telephone chart details end -->

                <!-- village cultivate land chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartCultivate" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- village cultivate land chart details end -->

                <!-- land authority office chart details start --if own Govenment -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartAuthLand" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- land authority office chart details end --if own Govenment -->
            </div>
        
        <!--  chart deails start -->
        <?php

            $sqlHomeStory = "SELECT COUNT(CASE h_type WHEN 'තනිමහල්' THEN 1 ELSE null END) AS oneStory, COUNT(CASE h_type WHEN 'දෙමහල්' THEN 1 ELSE null END) AS twoStory, COUNT(CASE h_type WHEN 'තෙමහල්' THEN 1 ELSE null END) AS threeStory FROM `home_info`";
            $resultHomeStory = mysqli_query($conn, $sqlHomeStory);
            if(mysqli_num_rows($resultHomeStory)>0){
                $dataHomeStory = mysqli_fetch_assoc($resultHomeStory);
                $oneStory = $dataHomeStory['oneStory'];
                $twoStory = $dataHomeStory['twoStory'];
                $threeStory = $dataHomeStory['threeStory'];

                echo '
                    <script>
                        var oneStory = '.$oneStory.';
                        var twoStory = '.$twoStory.';
                        var threeStory = '.$threeStory.';
                        var homeStory = [oneStory,twoStory,threeStory];
                        var colors = ["#99A799","#DE834D", "#4C0070"];
                        var lab = ["තනිමහල්", "දෙමහල්", "තෙමහල්"];

                        new Chart("charthomeStory",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: homeStory
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Home Stroty wise count"
                                        }
                                    }
                                }
                            }
                        );
                    </script>
                ';

            }

        ?>  <!--  chart deails end -->
        
        <!-- home curent chart deails start -->
        <?php

            $sqlCurrent = "SELECT COUNT(CASE current_type WHEN 'ඇත' THEN 1 ELSE null END) AS currentYes, COUNT(CASE current_type WHEN 'නැත' THEN 1 ELSE null END) AS currentNo FROM `home_info`";
            $resultCurrent = mysqli_query($conn, $sqlCurrent);
            if(mysqli_num_rows($resultCurrent)>0){
                $dataCurrent = mysqli_fetch_assoc($resultCurrent);
                $currentYes = $dataCurrent['currentYes'];
                $currentNo = $dataCurrent['currentNo'];

                echo '
                    <script>
                        var currentYes = '.$currentYes.';
                        var currentNo = '.$currentNo.';
                        var currentType = [currentYes,currentNo];
                        var colors = ["#064635","#F2789F"];
                        var lab = ["විදුලිය ඇත", "විදුලිය නැත"];

                        new Chart("chartHomeCurrent",
                            {
                                type:"pie",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: currentType
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Village Home Current Details"
                                        }
                                    }
                                }
                            }
                        );
                    </script>
                ';

            }

        ?>  <!-- home curent chart deails end -->
       
        <!--  home watter type chart deails start -->
        <?php

            $sqlHwater = "SELECT COUNT(CASE water_type WHEN 'ළිද' THEN 1 ELSE null END) AS well ,COUNT(CASE water_type WHEN 'නලජලය' THEN 1 ELSE null END) AS tubeWell ,COUNT(CASE water_type WHEN 'පොදු ළිද' THEN 1 ELSE null END) AS publicWell ,COUNT(CASE water_type WHEN 'පොදුනලජල' THEN 1 ELSE null END) AS publicTubeWell ,COUNT(CASE water_type WHEN 'අන්සතුළිද' THEN 1 ELSE null END) AS anotherHome FROM `home_info`";
            $resultHwater = mysqli_query($conn, $sqlHwater);
            if(mysqli_num_rows($resultHwater)>0){
                $dataHwater = mysqli_fetch_assoc($resultHwater);
                $well = $dataHwater['well'];
                $tubeWell = $dataHwater['tubeWell'];
                $publicWell = $dataHwater['publicWell'];
                $publicTubeWell = $dataHwater['publicTubeWell'];
                $anotherHome = $dataHwater['anotherHome'];

                echo '
                    <script>
                        var well = '.$well.';
                        var tubeWell = '.$tubeWell.';
                        var publicWell = '.$publicWell.';
                        var publicTubeWell = '.$publicTubeWell.';
                        var anotherHome = '.$anotherHome.';
                        var homeWater = [well,tubeWell,publicWell,publicTubeWell,anotherHome];
                        var colors = ["#000B49","#FF5959","#146356","#086E7D","#B3541E"];
                        var lab = ["ළිද", "නලජලය", "පොදු ළිද", "පොදුනලජල", "අන්සතුළිද"];

                        new Chart("chartHomeWater",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: homeWater
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Village Home water suply"
                                        }
                                    }
                                }
                            }
                        );
                    </script>
                ';

            }

        ?>  <!--  home watter type chart deails end -->

        <!--  home telephone chart deails start -->
        <?php

            $sqlTel = "SELECT COUNT(CASE tel_type WHEN 'ඇත' THEN 1 ELSE null END) AS telYes, COUNT(CASE tel_type WHEN 'නැත' THEN 1 ELSE null END) AS telNo FROM `home_info`";
            $resultTel = mysqli_query($conn, $sqlTel);
            if(mysqli_num_rows($resultTel)>0){
                $dataTel = mysqli_fetch_assoc($resultTel);
                $telYes = $dataTel['telYes'];
                $telNo = $dataTel['telNo'];

                echo '
                    <script>
                        var telYes = '.$telYes.';
                        var telNo = '.$telNo.';
                        var homeTel = [telYes,telNo];
                        var colors = ["#116530","#CD1818"];
                        var lab = ["ස්ථාවර දුරකතන ඇත", "ස්ථාවර දුරකතන නැත"];

                        new Chart("charttelephone",
                            {
                                type:"pie",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: homeTel
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Village Home Telephone details"
                                        }
                                    }
                                }
                            }
                        );
                    </script>
                ';

            }

        ?>  <!--  home telephone chart deails end -->

        <!--  village cutivate chart deails start -->
        <?php

            $sqlCulti = "SELECT COUNT(CASE cultivation WHEN 'තේ' THEN 1 ELSE null END) AS tea,COUNT(CASE cultivation WHEN 'පොල්' THEN 1 ELSE null END) AS coconut ,COUNT(CASE cultivation WHEN 'රබර්' THEN 1 ELSE null END) AS rubber ,COUNT(CASE cultivation WHEN 'වෙනත් වගා' THEN 1 ELSE null END) AS other FROM `cultivate_land`";
            $resultCulti = mysqli_query($conn, $sqlCulti);
            if(mysqli_num_rows($resultCulti)>0){
                $dataCulti = mysqli_fetch_assoc($resultCulti);
                $tea = $dataCulti['tea'];
                $coconut = $dataCulti['coconut'];
                $rubber = $dataCulti['rubber'];
                $other = $dataCulti['other'];

                echo '
                    <script>
                        var tea = '.$tea.';
                        var coconut = '.$coconut.';
                        var rubber = '.$rubber.';
                        var other = '.$other.';
                        var cultivateLand = [tea,coconut,rubber,other];
                        var colors = ["#0B4619","#B05E27","#6166B3","#E02401"];
                        var lab = ["තේ", "පොල්","රබර්","වෙනත් වගා"];

                        new Chart("chartCultivate",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: cultivateLand
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Village cultivate land"
                                        }
                                    }
                                }
                            }
                        );
                    </script>
                ';

            }

        ?>  <!--  village cutivate chart deails end -->

        <!-- home land authority office chart deails start --if it own government -->
        <?php

            $sqlAthority = "SELECT COUNT(CASE l_authoffice WHEN 'නිවාස අධිකාරිය' THEN 1 ELSE null END) AS ofiiceOne, COUNT(CASE l_authoffice WHEN 'ඉඩම් ප්‍රතිසස්කරන කොමිසම් සභාව' THEN 1 ELSE null END) AS officeTwo FROM `home_land`";
            $resultAthority = mysqli_query($conn, $sqlAthority);
            if(mysqli_num_rows($resultAthority)>0){
                $dataAthority = mysqli_fetch_assoc($resultAthority);
                $ofiiceOne = $dataAthority['ofiiceOne'];
                $officeTwo = $dataAthority['officeTwo'];

                echo '
                    <script>
                        var ofiiceOne = '.$ofiiceOne.';
                        var officeTwo = '.$officeTwo.';
                        var authLand = [ofiiceOne,officeTwo];
                        var colors = ["#6166B3","#FF5151"];
                        var lab = ["නිවාස අධිකාරිය", "ඉඩම් ප්‍රතිසස්කරන කොමිසම් සභාව"];

                        new Chart("chartAuthLand",
                            {
                                type:"pie",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: authLand
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Land details if own Govenment"
                                        }
                                    }
                                }
                            }
                        );
                    </script>
                ';

            }

        ?>  <!-- home land authority office chart deails end --if it own government -->

        </div>
        
</div>

<!-- javascript libraries -->
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>