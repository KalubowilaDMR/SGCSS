
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
<title>SGCSS - කොට්ඨාශය තොරතුරු</title>
<!-- css libraries -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
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
                            <a href="#" class="analysis-details sinhala-font" name="aPage1">කොට්ඨාශය තොරතුරු</a>
                        </li>
                        <li> 
                            <a href="chart2.php" class="analysis-details sinhala-font" name="aPage4">නිවස සහ ඉඩම් තොරතුරු</a>
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
            
            <!-- chart card start -->
            <div class="row">
                <!-- village GenderCount chart deails start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartGender" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- village GenderCount chart deails end -->

                <!-- ageRange chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartAge" style="width: 100%; max-width:500px;"></canvas>
                        </div>
                    </div>
                </div>  <!-- ageRange chart details end -->

                <!-- nation chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartNation"></canvas>
                        </div>
                    </div>
                </div>  <!-- nation chart details end -->

                <!-- religion chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartReligion"></canvas>
                        </div>
                    </div>
                </div>  <!-- religion chart details end -->

                <!-- current people's status chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartStatus"></canvas>
                        </div>
                    </div>
                </div>  <!-- current people's status chart details end -->

                <!-- edu peoples chart details start -->
                <div class="col-lg-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="chartEdu"></canvas>
                        </div>
                    </div>
                </div>  <!-- edu peoples chart details end -->
            </div>  <!-- chart card end -->
        
        <!-- village GenderCount chart deails start -->
        <?php

            $sqlGender = "SELECT COUNT(CASE gender WHEN 'පුරුෂ' THEN 1 ELSE NULL END) AS male, 
            COUNT(CASE gender WHEN 'ස්ත්‍රී' THEN 1 ELSE NULL END) AS female FROM personal_details";
            $resultGender = mysqli_query($conn, $sqlGender);
            if(mysqli_num_rows($resultGender)>0){
                $data = mysqli_fetch_assoc($resultGender);
                $male = $data['male'];
                $female = $data['female'];

                echo '
                    <script>
                        var male = '.$male.';
                        var female = '.$female.';
                        var maleFemale = [male,female];
                        console.log(maleFemale);
                        var colors = ["#f7e61f","#1f77fb"];
                        var lab = ["පුරුෂ", "ස්ත්‍රී"];

                        new Chart("chartGender",
                            {
                                type:"pie",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: maleFemale
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Village Gender Count"
                                        }
                                    }
                                }
                            }
                        );
                    </script>
                ';

            }

        ?>  <!-- village GenderCount chart deails end -->

        
        <!-- ageRange chart details start -->
        <?php

            $sqlAge = "SELECT SUM(CASE WHEN TIMESTAMPDIFF(YEAR, dob, CURDATE()) < 15 THEN 1 ELSE 0 END) AS Childhood, 
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, dob, CURDATE()) BETWEEN 15 AND 24 THEN 1 ELSE 0 END) AS Youth, 
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, dob, CURDATE()) BETWEEN 25 AND 64 THEN 1 ELSE 0 END) AS Adulthood,
            SUM(CASE WHEN TIMESTAMPDIFF(YEAR, dob, CURDATE()) > 64 THEN 1 ELSE 0 END) AS seniority FROM personal_details";
            $resultAge = mysqli_query($conn, $sqlAge);
            if(mysqli_num_rows($resultAge)>0){
                $dataAge = mysqli_fetch_assoc($resultAge);
                $Childhood = $dataAge['Childhood'];
                $Youth = $dataAge['Youth'];
                $Adulthood = $dataAge['Adulthood'];
                $seniority = $dataAge['seniority'];

                echo '
                    <script>
                        var Childhood = '.$Childhood.';
                        var Youth = '.$Youth.';
                        var Adulthood = '.$Adulthood.';
                        var seniority = '.$seniority.';
                        var ageCatergory = [Childhood,Youth,Adulthood,seniority];
                        var colors = ["#0dcaf0","#20c997","#198754","#ffc107"];
                        var lab = ["ළමා වයසැති", "තරුණ වයසැති","වැඩිහිටි","ජ්යෙෂ්ඨ"];

                        new Chart("chartAge",
                            {
                                type:"pie",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: ageCatergory
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Villagers Age Range"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>   <!-- ageRange chart details end -->
        
        <!-- village nation wise cont chart details start -->
        <?php

            $sqlNation = "SELECT COUNT(CASE nation WHEN 'සිංහල' THEN 1 ELSE null END) AS sinhala, COUNT(CASE nation WHEN 'දෙමළ' THEN 1 ELSE null END) AS tamil, COUNT(CASE nation WHEN 'මුස්ලිම්' THEN 1 ELSE null END) AS muslim FROM `personal_details`";
            $resultNation = mysqli_query($conn, $sqlNation);
            if(mysqli_num_rows($resultNation)>0){
                $dataNation = mysqli_fetch_assoc($resultNation);
                $sinhala = $dataNation['sinhala'];
                $tamil = $dataNation['tamil'];
                $muslim = $dataNation['muslim'];

                echo '
                    <script>
                        var sinhala = '.$sinhala.';
                        var tamil = '.$tamil.';
                        var muslim = '.$muslim.';
                        var nation = [sinhala,tamil,muslim];
                        var colors = ["#198754","#0d6efd","#dc3545"];
                        var lab = ["සිංහල","දෙමළ","මුස්ලිම්"];

                        new Chart("chartNation",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: nation
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Villagers Nation catergory"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>   <!-- village nation wise cont chart details end -->

        <!-- village religion wise cont chart details start -->
        <?php

            $sqlReligion = "SELECT COUNT(CASE religion WHEN 'බුද්ධාගම' THEN 1 ELSE null END) AS budhdhism, 
            COUNT(CASE religion WHEN 'හිංදු ආගම' THEN 1 ELSE null END) AS hindu, 
            COUNT(CASE religion WHEN 'ක්‍රිස්තියානි ආගම' THEN 1 ELSE null END) AS christian, 
            COUNT(CASE religion WHEN 'ඉස්ලාම් ආගම' THEN 1 ELSE null END) AS muslim FROM `personal_details`";
            $resultReligion = mysqli_query($conn, $sqlReligion);
            if(mysqli_num_rows($resultReligion)>0){

                $dataReligion = mysqli_fetch_assoc($resultReligion);
                $budhdhism = $dataReligion['budhdhism'];
                $hindu = $dataReligion['hindu'];
                $christian = $dataReligion['christian'];
                $muslim = $dataReligion['muslim'];

                echo '
                    <script>
                        var budhdhism = '.$budhdhism.';
                        var hindu = '.$hindu.';
                        var christian = '.$christian.';
                        var muslim = '.$muslim.';
                        var religion = [budhdhism,hindu,christian,muslim];
                        var colors = ["#B3541E","#9A0680","#1A5F7A","#146356"];
                        var lab = ["බුද්ධාගම","හිංදු ආගම","ක්‍රිස්තියානි ආගම","ඉස්ලාම් ආගම"];

                        new Chart("chartReligion",
                            {
                                type:"pie",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: religion
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Villagers Religion catergory"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>
        <!-- village religion wise cont chart details end -->

        <!-- village current status wise count chart details start -->
        <?php

            $sqlStatus = "SELECT COUNT(CASE status WHEN 'විවාහකයි' THEN 1 ELSE null END) AS married, COUNT(CASE status WHEN 'අවිවාහකයි' THEN 1 ELSE null END) AS unmarried, COUNT(CASE status WHEN 'වැන්දඹු' THEN 1 ELSE null END) AS widow FROM `personal_details`";
            $resultStatus = mysqli_query($conn, $sqlStatus);
            if(mysqli_num_rows($resultStatus)>0){

                $dataStatus = mysqli_fetch_assoc($resultStatus);
                $married = $dataStatus['married'];
                $unmarried = $dataStatus['unmarried'];
                $widow = $dataStatus['widow'];

                echo '
                    <script>
                        var married = '.$married.';
                        var unmarried = '.$unmarried.';
                        var widow = '.$widow.';
                        var nation = [married,unmarried,widow];
                        var colors = ["#F14A16","#1A5F7A","#9A0680"];
                        var lab = ["විවාහකයි","අවිවාහකයි","වැන්දඹු"];

                        new Chart("chartStatus",
                            {
                                type:"doughnut",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: nation
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Villagers Current people status"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>
        <!-- village current status wise count chart details end -->

        <!-- village edu people count chart details start -->
        <?php

            $sqlEdu = "SELECT COUNT(CASE edu WHEN 'සමාන්‍යපෙළට අඩු' THEN 1 ELSE null END) AS underOL, COUNT(CASE edu WHEN 'සමාන්‍යපෙළ සමත්' THEN 1 ELSE null END) AS aboveOL, COUNT(CASE edu WHEN 'උසස්පෙළ සමත්' THEN 1 ELSE null END) AS passAL, COUNT(CASE edu WHEN 'උපාධිධාරි' THEN 1 ELSE null END) AS graduate FROM `personal_details`";
            $resultEdu = mysqli_query($conn, $sqlEdu);
            if(mysqli_num_rows($resultEdu)>0){

                $dataEdu = mysqli_fetch_assoc($resultEdu);
                $underOL = $dataEdu['underOL'];
                $aboveOL = $dataEdu['aboveOL'];
                $passAL = $dataEdu['passAL'];
                $graduate = $dataEdu['graduate'];

                echo '
                    <script>
                        var underOL = '.$underOL.';
                        var aboveOL = '.$aboveOL.';
                        var passAL = '.$passAL.';
                        var graduate = '.$graduate.';
                        var eduStatus = [underOL,aboveOL,passAL,graduate];
                        var colors = ["#EA5C2B","#F3C892","#FF5959","#DB6B97"];
                        var lab = ["සමාන්‍යපෙළට අඩු","සමාන්‍යපෙළ සමත්","උසස්පෙළ සමත්","උපාධිධාරි"];

                        new Chart("chartEdu",
                            {
                                type:"pie",
                                data: {
                                    labels: lab, 
                                    datasets: [{
                                        backgroundColor: colors,
                                        data: eduStatus
                                    }]
                                },
                                options: {
                                    plugins: {
                                        title: {
                                            display: true,
                                            text: "Villagers People Education status"
                                        }
                                    }
                                }
                            
                            }
                        );
                    </script>
                ';

            }

        ?>
        <!-- village edu people count chart details end -->
       
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