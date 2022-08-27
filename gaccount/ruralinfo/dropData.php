<?php

    // database connection
    include("../connection/db_connection.php");


    // person details delete functions
 
    if(isset($_POST['dropId'])){

        $pid = $_POST['dropId'];

        $pdelete = "DELETE FROM `personal_details` WHERE p_id='".$pid."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $pdelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }



    // abroad peoples details delete function

    if(isset($_POST['dro_ab_id'])){

        $ab_id = $_POST['dro_ab_id'];

        $abdelete = "DELETE FROM `abroadpeople` WHERE ab_id='".$ab_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $abdelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }


    // infirm peoples details delete function

    if(isset($_POST['dro_inf_id'])){

        $inf_id = $_POST['dro_inf_id'];

        $infdelete = "DELETE FROM `infirmpeople` WHERE inf_id='".$inf_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $infdelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }


    // Home details delete function

    if(isset($_POST['dro_h_id'])){

        $ho_id = $_POST['dro_h_id'];

        $hodelete = "DELETE FROM `home_info` WHERE h_id='".$ho_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $hodelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }

    
    // Home land info details delete function

    if(isset($_POST['drop_land_tID'])){

        $la_id = $_POST['drop_land_tID'];

        $ladelete = "DELETE FROM `home_land` WHERE l_id='".$la_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $ladelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }


    // Cultivation land info details delete function

    if(isset($_POST['drop_culti'])){

        $cul_id = $_POST['drop_culti'];

        $culdelete = "DELETE FROM `cultivate_land` WHERE c_id='".$cul_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $culdelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }


    // home vehicle info details delete function

    if(isset($_POST['drop_veh'])){

        $vehi_id = $_POST['drop_veh'];

        $vehidelete = "DELETE FROM `vehicle_info` WHERE id='".$vehi_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $vehidelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }


    // sports people info details delete function

    if(isset($_POST['drop_sport'])){

        $sport_id = $_POST['drop_sport'];

        $sportdelete = "DELETE FROM `sports_info` WHERE id='".$sport_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $sportdelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }


    // edu people info details delete function

    if(isset($_POST['drop_edu'])){

        $edu_id = $_POST['drop_edu'];

        $edudelete = "DELETE FROM `edu_people` WHERE id='".$edu_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $edudelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }


    // home animal info details delete function

    if(isset($_POST['drop_animal'])){

        $ani_id = $_POST['drop_animal'];

        $anidelete = "DELETE FROM `home_animal` WHERE id='".$ani_id."'";
        // $result = mysqli_query($conn, $delete);

        if (mysqli_query($conn, $anidelete)) {
            echo "Delete successfully";
        } else {
            echo "Error";
        }

    }

?>