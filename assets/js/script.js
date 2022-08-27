
// starter JavaScript for disabling form submissions if there are invalid fields start
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
  // starter JavaScript for disabling form submissions if there are invalid fields end

            
//show password visibility for registration and login form
var eye1 = document.getElementById("eye");
var password1 = document.getElementById("password");
var password2 = document.getElementById("com_password");
var showPassword = false;

eye1.addEventListener("click" , function(){
    if (showPassword == false) {
        //check inputb flield type of password or text
        password1.setAttribute("type", "text");
        password2.setAttribute("type", "text");
        eye1.classList.add("fa-eye-slash");
        eye1.classList.remove("fa-eye");
        showPassword = true;
    }
    else{
        //check inputb flield type of password or text
        password1.setAttribute("type", "password");
        password2.setAttribute("type", "password");
        eye1.classList.remove("fa-eye-slash");
        eye1.classList.add("fa-eye");
        showPassword = false;
    }
});





// check password validate
function checkpassword(){
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("com_password").value;

    if(pass1 != pass2){
        var check = document.getElementById("easy");
        check.checked=false;
        
        document.getElementById("password").style.border="1px solid red";
        document.getElementById("com_password").style.border="1px solid red";
        document.getElementById("submit").disabled=true;
        alert("Password does not match");

    }
    else{
        document.getElementById("password").style.border="1px solid green";
        document.getElementById("com_password").style.border="1px solid green";
        document.getElementById("submit").disabled=false;
    }
}

