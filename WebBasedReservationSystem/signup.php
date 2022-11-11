<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         /* navbar Styling*/

.navbar{
    position: fixed;
    width: 100%;
    padding: 30px 0;
    background: crimson;           
    font-family: 'Ubuntu',sans-serif;
  
  }
  .navbar .logo a{
    color:#fff;
    font-size: 35px;
    font-weight: 600;
  
  }
  
  .navbar .logo a span{
    color: skyblue;
  }
  .max-width{
    max-width: 1300px;
    padding: 0 10px;
    margin: auto;
  }
  .navbar .max-width{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .navbar .menu li{
    list-style: none;
    display: inline-block;
  }
  .navbar .menu li a{
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 25px;
  }
  .navbar .menu li a:hover{
    color: rgb(166, 210, 228);
  }
    </style>
     <link rel="stylesheet" href="signupstyle.css">
</head>

 
<body>
    <nav class="navbar">
      <div class="max-width">
        <div class="logo"><a href="#">Play<span>ground</span></a></div>
        <ul class="menu">
        
          <li><a href="login.php">Back</a></li>
          
        </ul>
        
      </div>
    </nav>

    <form action="userprocess.php"  method="post" >
     <div class="reg-box">
    <div class="h1"><h1>Registration</h1></div>

    <div class="textbox">
    <i class="fa fa-users" aria-hidden="true"></i>
    <input type="text" name="name" required placeholder="Name" >
    </div>

    <div class="textbox">
    <i class="fa fa-phone" aria-hidden="true"></i>
    <input type="text" name="uphone" required placeholder="Phone" >
    </div>
     
    <div class="textbox">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    <input type="text" name="uemail" required placeholder="Email" >
    </div>

    <div class="textbox">
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
    <input type="text" name="department" required placeholder="Department" >
    </div>

    <div class="textbox">
    <i class="fa fa-map-marker" aria-hidden="true"></i>
    <input type="text" name="uaddress" required placeholder="Address" >
    </div>

    <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>
    <input type="text" name="uname" required placeholder="Username" >
    </div>

    <div class="textbox">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <input type="password" name="upass" required placeholder="Password" >
    </div>

    <div class="textbox">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <input type="password" name="conpass" required placeholder="Re-type Password" >
    </div>
    

 
       <input class="btn" type="submit" name="REGISTER" value="REGISTER" >
 </div>
 
 


 
 </form>
    
</body>


</html>