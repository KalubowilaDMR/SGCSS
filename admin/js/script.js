

//Toggle Page on side bar collapse
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

// selecting the date and time for appoinment form
$(function () {
    $('#datetimepicker4').datetimepicker();
});

//dataTable
$(document).ready(function(){
  $('#userTable').DataTable();
});


// change usertype and user status selecting to form function start
var table = $('#userTable').DataTable();

$('#userTable tbody').on( 'click', 'tr', function () {
  console.log( table.row( this ).data() );
  var nic = $(this).find("#nic").text();
  var userType = $(this).find("#uType").text();
  var userStatus = $(this).find("#status").text();
  
  document.getElementById('uid').value= nic;


      switch (userType) {
          case "user":
              document.getElementById('userType').selectedIndex = 1;
              break;
          case "gs":
              document.getElementById('userType').selectedIndex = 2;
              break;
          case "admin":
              document.getElementById('userType').selectedIndex = 3;
              break;
          default:
              document.getElementById('userType').selectedIndex = 0;
      }
      // console.log(userType); // Tuesday

      switch (userStatus) {
          case "enable":
              document.getElementById('userStatus').selectedIndex = 1;
              break;
          case "blocked":
              document.getElementById('userStatus').selectedIndex = 2;
              break;
          default:
              document.getElementById('userStatus').selectedIndex = 0;
      }

} );
// change usertype and user status selecting to form function end

// account.php file input field data clear when page reload start
function pageReload(){
    document.getElementById('fname').value = '';
    document.getElementById('lname').value = '';
    document.getElementById('address').value = '';
    document.getElementById('gender').value = '';
    document.getElementById('phone').value = '';
}
// account.php file input field data clear when page reload end

    