function validateForm() {
    var email = document.getElementById("uname").value;
    var password = document.getElementById("pass").value;
   
    if (email=="") {
      document.getElementById("erroruser").innerHTML="user format is not correct!";
      return false;
    }
    if ( password.length < 2) {
      document.getElementById("errorpass").innerHTML="Password format is not correct!";
      return false;
    }
  
  }
  