<?php

	require_once("../connection/db_connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

     <style>
     	
     </style>

</head>
<body>
	
	<button class="" name="aprove" id="4" onclick="aprove(this)">aprove</button>
	<button class="" name="reject" id="2" onclick="reject(this)">reject</button>


	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script>
		//appointmnet accept reject function
		function aprove(clicked_id){
			var x = clicked_id.id;
			alert(x);	
			$.ajax({
                        type: "POST",
                        url: "test1.php",
                        data: {
                            approve: x
                        },
						dataType: 'json',
                        success: function(data) {
							// var mydata = data.split(',');
							// var status = mydata[0];
							// alert(status);
                            // $("#nullstatus").html(data);
							if (data.return) {
								alert("return is true");
							} else {
								alert("return is false");
							}
							console.log(data);

                        }
                    });	  
		}
		function reject(clicked_id){
		  	var y = clicked_id.id;
			alert(y);	
			$.ajax({
                        type: "POST",
                        url: "test1.php",
                        data: {
                            reject: y
                        },
						dataType: 'json',
                        success: function(data) {
							// var mydata = data.split(',');
							// var status = mydata[0];
							// alert(status);
                            // $("#nullstatus").html(data);
							if (data.return) {
								alert("return is true");
							} else {
								alert("return is false");
							}
							console.log(data);

                        }
                    });	
		}
	</script>

</body>
</html>