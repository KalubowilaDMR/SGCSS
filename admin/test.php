


<!-- admin dashboard modal data

<button type="button"name="change" id="<?php $userId; ?>" class="btn btn-success rounded mr-1 p-1 addAttr" data-toggle="modal" data-target="#newsForm" onclick="edit(this)" ><i class="bi bi-save"></i></button> -->

<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>

<p>My first paragraph.</p>

<?php  $variable = "<script>document.write(a)</script>";

    echo '
      <script>
          alert("'.$variable.'");
      </script>
    ';

?> 

<script>
  var a ="Hello";
  
</script>

</body>
</html>








<!-- <script>

    var table = $('#dataTable').DataTable();

    $('#dataTable tbody').on( 'click', 'tr', function () {
        
        var homeNo = $(this).find("#homeNo").text();
        var address = $(this).find("#address").text();
        var fullName = $(this).find("#fullName").text();
        var nation = $(this).find("#nation").text();
        var relegion = $(this).find("#relegion").text();
        var bday = $(this).find("#bday").text();
        var nic = $(this).find("#nic").text();
        var status = $(this).find("#status").text();
        var spouse = $(this).find("#spouse").text();
        var edu = $(this).find("#edu").text();
        var job = $(this).find("#job").text();
        var office = $(this).find("#office").text();
        var grade = $(this).find("#grade").text();
        
        
        // document.getElementById('uid').value= nic;


            switch (nation) {
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

            switch (relegion) {
                case "":
                    document.getElementById('').selectedIndex = 1;
                    break;
                case "":
                    document.getElementById('').selectedIndex = 2;
                    break;
                default:
                    document.getElementById('').selectedIndex = 0;
            }


            switch (status) {
                case "":
                    document.getElementById('').selectedIndex = 1;
                    break;
                case "":
                    document.getElementById('').selectedIndex = 2;
                    break;
                default:
                    document.getElementById('').selectedIndex = 0;
            }


            switch (edu) {
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
                default:
                    document.getElementById('').selectedIndex = 0;
            }




    } );

</script> -->
