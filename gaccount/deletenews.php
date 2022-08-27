<?php

    session_start();

    // check user session active or inactive
    if(empty($_SESSION['user']) || $_SESSION['user'] !== "gs"){

        // redirrect user to signin page
        header('Location: ../signin.php');

    }

    if($_GET['id'] == ''){
        header('Location: news.php');
    }

    include("connection/db_connection.php");


    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $head = $_GET['head'];

        $sql = "DELETE FROM news WHERE id = $id";
        
        if(mysqli_query($conn, $sql)){

            echo '
                    <script>

                    alert(" News Deleted ! ");
                    window.location = "news.php";
                    
                    </script>
                    
            ';

            // header('Location: news.php');


        }
        else{

            echo '
            <script>
            alert(" Unable to Delete News  ! ");
            window.location = "news.php";
            
            </script>
            
            
            ';
        //   header('Location: news.php');
        }
    }

?>