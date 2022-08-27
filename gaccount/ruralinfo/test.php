<?php

// include("../connection/db_connection.php");

// // $sqlInsert = "INSERT INTO `personal_details`(`h_no`,`address`, `full_name`, `gender`, `nation`, `religion`, `dob`, `nic`, `status`, `edu`, `job`, `job_place`, `edu_grade`) VALUES ( '125', '125/C, Pinnawala,Waga', 'මේනකා කරුනාරත්න', 'ස්ත්‍රී', 'සිංහල', '', '1977-10-12', '97254846X', 'විවාහකයි', 'උපාධිධාරි', 'Teaching', '', '')";

// // $sqlInsert = "INSERT INTO `personal_details`(`h_no`, `full_name`, `gender`, `nation`, `religion`, `dob`, `nic`, `status`, `edu`, `job`, `job_place`, `edu_grade`) VALUES ( '122', 'Maneesha Kalubowila', 'පුරුෂ', 'සිංහල', 'බුද්ධාගම', '2021-12-06', '982911761V', 'අවිවාහකයි', 'උසස්පෙළ සමත්', '', '', '')";

// $sqlInsert = "INSERT INTO `personal_details`(`h_no`, `address`, `full_name`, `gender`, `nation`, `religion`, `dob`, `nic`, `status`, `spouse`, `edu`, `job`, `job_place`, `edu_grade`) VALUES ( '111', '111/C, pinnawala,waga', 'SAMAN KUMARARATHNA', 'පුරුෂ', 'සිංහල', 'බුද්ධාගම', '2021-12-06', '769543279V', 'අවිවාහකයි', 'KUMARI RANATHUNGA', 'උසස්පෙළ සමත්', 'technition', 'Orange Corporation', '')";

// if (mysqli_query($conn, $sqlInsert)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
//   }

// ?>

<?php

// include("../connection/db_connection.php");

// $sqlInsert = "INSERT INTO `abroadpeople` (`h_no`, `full_name`, `nic`, `country`, `course`, `ab_year`) VALUES ('333', 'මනීෂ රසොද් ක්ළුබෝවිල', '982911761v', 'ඕස්ට්‍රලියාව', 'Designer', '2021-12-14')";


// if (mysqli_query($conn, $sqlInsert)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
//   }

?>

<?php

// include("../connection/db_connection.php");

// $sqlInsert = "INSERT INTO `home_info` (`h_no`, `h_type`, `wall_type`, `floor_type`, `roof_type`, `current_type`, `water_type`, `toilet_type`, `tel_type`, `phone`) VALUES ('122', 'තනිමහල්', 'සිමෙන්ති', 'සිමෙන්ති', 'ඇස්බැස්ටොස්', 'ඇත', 'ළිද', 'ජලමුද්රිත', 'ඇත', '0112858788')";


// if (mysqli_query($conn, $sqlInsert)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
//   }

?>
<?php

// include("../connection/db_connection.php");

// $sqlInsert = "INSERT INTO `vehicle_info` (`h_no`, `owner`, `nic`, `vehi_type`, `reg_year`, `made_year`) VALUES ('111', 'SURESh', '982271318V', 'CAR', '2021-12-23', '2021-12-16')";


// if (mysqli_query($conn, $sqlInsert)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
//   }

?>
<?php

// include("../connection/db_connection.php");

// $insert = "INSERT INTO `edu_people` (`h_no`, `fullname`, `nic`, `course`, `duration`) VALUES ('151', 'sdsdvsd', 'vdavdada', 'vsdvsvbs', 'vbsvbsvbs')";


// if (mysqli_query($conn, $insert)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
//   }

?>
<?php

include("../connection/db_connection.php");

$insert = "UPDATE `infirmpeople` SET `h_no`='123',`full_name`='NIMESHA KUMARI',`nic`='908134657V',`reason`='paralice',`inf_date`='2021-12-08' WHERE `inf_id`='4'";


if (mysqli_query($conn, $insert)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
  }

?>


<!-- admin dashboard modal data

<button type="button"name="change" id="<?php $userId; ?>" class="btn btn-success rounded mr-1 p-1 addAttr" data-toggle="modal" data-target="#newsForm" onclick="edit(this)" ><i class="bi bi-save"></i></button> -->


<div class="input-group mb-3" hidden>
    <input type="text"  name="" id="" readonly>
</div>



<script>

        var table = $('#homeTable').DataTable();

        $('#homeTable tbody').on( 'click', 'tr', function () {
            
            

            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            var  = $(this).find("#").text();
            
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;
            document.getElementById('').value= ;

            
            // alert(nic);
            
            // document.getElementById('uid').value= nic;


                switch () {
                    case "":
                        document.getElementById('').selectedIndex = 1;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 2;
                        break;
                    default:
                        document.getElementById('').selectedIndex = 0;
                }

                switch () {
                    case "":
                        document.getElementById('').selectedIndex = 1;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 2;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 3;
                        break;
                    default:
                        document.getElementById('').selectedIndex = 0;
                }
                // console.log(userType); // Tuesday

                switch () {
                    case "":
                        document.getElementById('').selectedIndex = 1;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 2;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 3;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 4;
                        break;
                    default:
                        document.getElementById('').selectedIndex = 0;
                }


                switch () {
                    case "":
                        document.getElementById('').selectedIndex = 1;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 2;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 3;
                        break;
                    default:
                        document.getElementById('').selectedIndex = 0;
                }


                switch () {
                    case "":
                        document.getElementById('').selectedIndex = 1;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 2;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 3;
                        break;
                    case "":
                        document.getElementById('').selectedIndex = 4;
                        break;
                    default:
                        document.getElementById('').selectedIndex = 0;
                }


        } );

    </script>




if(mysqli_affected_rows($conn) >0 ){

echo '
    <script>
        swal({
            title: "Success!",
            text: "Update Data successfully",
            icon: "success",
            button: "OK!",
        }).then(function(){
            window.location = "rPage.php";
        });
    </script>
';

echo'
    <script>
        updateReload();
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
            window.location = "rPage.php";
        });
    </script>
';

}




$.ajax(
                {
                    type:"POST",
                    url: "tmp_add_to_cart.php",
                    data: {
                        add_to_cart : "kalhara",
                        item_code : item_id,
                        item_qtt : item_qtt,
                          },    
                    success: function (test) { 

                        console.log(test);

                        if(test == "Data added to array session"){
                            
                            alert("item added to cart");
                        }else{
                            alert("unable to item added to cart");
                        }
                        
                               
                    },
                    error: function (jqXhr, textStatus, errorMessage) { // error callback 
                               
                        alert("System error");
                    }
                });



<!-- delete data ajax function -->

<script>

        //Delete data from person-details table
        $('# tbody').on( 'click', 'tr', function () {
            

            
            // alert(th_id);

            $.ajax(
                {
                    type:"POST",
                    url: "dropData.php",
                    data: {
                        dro_ : ,
                        },    
                        success: function (status) { 

                            console.log(status);
                            // alert(status);

                            if(status == "Delete successfully"){
                                
                                swal({
                                    title: "Success!",
                                    text: "Delete Data successfully",
                                    icon: "success",
                                    button: "OK!",
                                    }).then(function(){
                                        window.location = "rPage.php";
                                });
                                
                                
                            }else{
                                
                                swal({
                                    title: "Error Occurd!",
                                    text: "There has an error. Please findout!",
                                    icon: "error",
                                    button: "OK!",
                                    }).then(function(){
                                        window.location = "rPage.php";
                                });


                            }
                            
                                
                        },
                        error: function (jqXhr, textStatus, errorMessage) { // error callback 
                                
                            alert("System error");
                        }
                });

        } );
</script>