<?php

   //database connection
   include("../connection/db_connection.php");
   session_start();

   //check user has click submit button
   if(isset($_POST['submit'])){
        // echo "sign page";
        echo "<br>";

        $email = mysqli_real_escape_string($conn,trim($_POST['email']));
        $password = md5(mysqli_real_escape_string($conn,trim($_POST['password'])));

        $validate_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' && password = '$password'");

        // $result = mysqli_fetch_array($validate_user);
        // echo $result;
        // json_encode($validate_user);

        
        if(mysqli_num_rows($validate_user)>0){
                // echo "valid user";
                $result = mysqli_fetch_array($validate_user);
                //select user id to session
                $_SESSION['userId']= $result['u_id'];

                $check_user_status = mysqli_query($conn, "SELECT status FROM user WHERE email = '$email'");

                echo '<br>';
                // while($status = mysqli_fetch_array($check_user_status)){
                //     echo $status['status'];
                // }

                $status = mysqli_fetch_array($check_user_status);
                

                $check_status = $status['status'];
                // echo "Status is : ". $status['status'];

                echo '<br>';

                //check user has active account or inactive account(enable or disable)
                if ( $check_status == "enable"){

                    // echo "user active";

                    $check_user_type = mysqli_query($conn, "SELECT user_type FROM user WHERE email = '$email'");
                    $user_type = mysqli_fetch_array($check_user_type);
                    $select_type = $user_type['user_type'];
                    $type = $select_type;

                    //appointment view status
                    $appView = "SELECT COUNT(view) AS viewStatus FROM `appointment` WHERE user_id='".$_SESSION['userId']."' AND view='0'";
                    $appCheck = mysqli_query($conn, $appView);
                    $appResult = mysqli_fetch_assoc($appCheck);
                    $totalViewCount = $appResult['viewStatus'];

                        switch ($type) {
                        case "user":
                            echo "Your are villager type user";
                            $_SESSION['user']= "user";
                            $_SESSION['email']= $email;
                            $_SESSION['userId']= $result['u_id'];
                            $_SESSION['viewStatus'] = $totalViewCount;
                            header('Location: ../vaccount/vdashboard.php');
                            break;
                        case "gs":
                            echo "Your are grama sewaka";
                            $_SESSION['user']= "gs";
                            $_SESSION['email']= $email;
                            $_SESSION['gsId']= $result['u_id']; 
                            header('Location: ../gaccount/gdashboard.php');
                            break;
                        case "admin":
                            echo "Your are admin";
                            $_SESSION['user']= "admin";
                            $_SESSION['email']= $email;
                            $_SESSION['adminId']= $result['u_id']; 
                            header('Location: ../admin/adashboard.php');
                            break;
                        default:
                            // echo "Not a valid user type";
                            $_SESSION['error']= "Not a valid user type";
                            header('Location: ../signin.php');
                        }

                }
                elseif($check_status=="disable"){

                    $_SESSION['regEmail'] = $email;
                    $_SESSION['message']="Account_Created!";
                    $code = rand(10000,99999);
                    $_SESSION['regOtp'] = $code;
                    // $_SESSION['regEmail'] = $_POST['email'];
                    //send mail     
                    include("createaccOtp.php");
                    echo '
                    <script>
                        swal({
                            title: "Active account!",
                            text: "Check your email to account active OTP code",
                            icon: "warning",
                            button: "OK!",
                        }).then(function(){
                                window.location = "../verifyRegAccount.php";
                            });
                    </script>
                    ';

                }

                else{

                    // echo "user not active";
                    $_SESSION['error']= "Sorry your account has been Blocked.";
                    header('Location: ../signin.php');
                    echo $type;
                }
        }
        else{
            
            // echo "invalid user";
            $_SESSION['error']= "Invalid email or password";
            header('Location: ../signin.php');
        }
   }
   


?>