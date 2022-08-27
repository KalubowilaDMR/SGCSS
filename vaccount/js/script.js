

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
    $('#datetime').datetimepicker({
      yearStart: 2021,
      allowTimes: ['09.00','10.00','11.00','12.00','13.00','14.00','15.00','16.00'],
      disabledWeekDays: [0,1,3,5,],
      minDate: new Date()
    });
});

//auto logout inactive user with 10min
var timer = document.getElementById("timer");
        var duration = 600;

        setInterval(updateTimer, 1000);

        function updateTimer(){
            duration--;
            if(duration < 1){
                alert("session time out, please Sign again");
                window.location ="./../signout.php";
            }
            else{
                timer.innerText = duration;
            }
        }

        window.addEventListener("mousemove", resetTimer);

        function resetTimer(){
            duration = 600;
        }

// texbox value null with page relaod on appointment file start
function appReload(){
  document.getElementById('name').value='';
  document.getElementById('nic').value='';
  document.getElementById('email').value='';
  document.getElementById('pNumber').value='';
  document.getElementById('category').value='';
  document.getElementById('textsome').value='';
  document.getElementById('datetime').value='';
}
// texbox value null with page relaod on appointment file end

// texbox value null with page relaod on complain file start
function comReload(){
  document.getElementById('fname').value='';
  document.getElementById('lname').value='';
  document.getElementById('nic').value='';
  document.getElementById('pnumber').value='';
  document.getElementById('complain').value='';
}
// texbox value null with page relaod on complain file end

// texbox value null with page relaod on account file start
function accReload(){
  document.getElementById('fname').value = '';
  document.getElementById('lname').value = '';
  document.getElementById('address').value = '';
  document.getElementById('nic').value = '';
  document.getElementById('gender').value = '';
  document.getElementById('phone').value = '';
  document.getElementById('email').value = '';
}
// texbox value null with page relaod on account file end

    