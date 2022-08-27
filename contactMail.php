  
<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sgcss.pinnawala.north@gmail.com';                     //SMTP username
        $mail->Password   = '0763819316';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('sgcss.pinnawala.north@gmail.com', 'User Contact');
        $mail->addAddress('sgcss.handle@gmail.com');     //Add a recipient
        $mail->addReplyTo('noreply@sgcss.com', 'noreply');

        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'User contact';
        $mail->Body    = '
        User Email: <b>'.$cEmail.'</b> <br>
        User Name: <b>'.$cName.'</b> <br>
        User Phone: <b>'.$cPhone.'</b> <br>
        Mail Body: <b>'.$cInfo.'</b> <br>
        ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->send()){
            echo '
                <script>
                    swal({
                        title: "Success !",
                        text: "Mail sent successfully",
                        icon: "success",
                        button: "OK!",
                    }).then(function(){
                        window.location = "vcontact.php";
                    });
                </script>
                ';
        }
        else{
            echo '
            <script>
                swal({
                    title: "Error!",
                    text: "Something went wromg with sent mail",
                    icon: "error",
                    button: "OK!",
                }).then(function(){
                    window.location = "vcontact.php";
                });
             </script>
            ';
        } 
        // $mail->send();
        // echo 'Message has been sent';
    } 

    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



?> 

