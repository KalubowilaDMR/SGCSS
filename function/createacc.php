<?php

    // echo "create account.php";

    //database connection
    session_start();
    include("../connection/db_connection.php");

    //check the form submit or not
    if(isset($_POST['submit'])){

        echo "Post Email is :".$_POST['email'];
        echo '<br>';
        echo "Post Nic is :".$_POST['nic'];
        echo '<br>';

        // echo "crate account success";

        // check the user input email alresdy exist or not
        $check_already_email = mysqli_query($conn, "SELECT email FROM user WHERE email = '".$_POST['email']."' ");
        if (mysqli_num_rows($check_already_email) > 0) {
           

            echo "Email alrady exist";
            echo '<br>';
            $_SESSION['message']= "Email Exist";
            header('Location: ../signup.php');
           
          } else {

            echo "No Email found";
            echo '<br>';
            
            // check user input NIC alredy exist or not
            $check_already_nic = mysqli_query($conn, "SELECT nic FROM user WHERE nic = '".$_POST['nic']."' ");
            if (mysqli_num_rows($check_already_nic) > 0) {
              
    
                echo "NIc alrady exist";
                echo '<br>';
                $_SESSION['message']= "NIC Exist";
                header('Location: ../signup.php');
               
              } else {

                echo "No Nic Found";
                echo '<br>';

                $fname = mysqli_real_escape_string($conn, trim($_POST['fname']));
                $lname = mysqli_real_escape_string($conn, trim($_POST['lname']));
                $address = mysqli_real_escape_string($conn, trim($_POST['address']));
                $nic = mysqli_real_escape_string($conn, trim($_POST['nic']));
                $gender = mysqli_real_escape_string($conn, $_POST['gender']);
                $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
                $email = mysqli_real_escape_string($conn, trim($_POST['email']));
                $password = md5($_POST['password']);

                 $crate_new_user = "INSERT INTO user (first_name, last_name, gender, address, nic, phone, email, password) VALUES ('".$fname."', '".$lname."', '".$gender."', '".$address."', '".$nic."', '".$phone."', '".$email."', '".$password."')";
                             

                 if (mysqli_query($conn, $crate_new_user)) {
                    echo "New record created successfully";
                    $_SESSION['message']="Account_Created!";
                    // $code = 12345;
                    $regCode = rand(10000,99999);
                    $_SESSION['regOtp'] = $regCode;
                    $_SESSION['regEmail'] = $email;
                    require_once("createaccOtp.php");  
                    header('Location: ../verifyRegAccount.php');

                    

                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    $_SESSION['message']=  "". $sql ;
                    header('Location: ../signup.php');
                  }
                  
                  mysqli_close($conn);
              }


          }
    }

?>