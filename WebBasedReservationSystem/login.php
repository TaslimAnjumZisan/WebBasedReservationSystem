
<?php 
if(session_status()>=0){
    session_start();
    if(isset($_SESSION["uname"])){
        header("refresh: 1; url=private.php");
    }
}
?> 

<!DOCTYPE html>
<html>
    <head>
        <style>
            .a{
    color:white;
    font-size:25px;
    font-family:consolas;
    text-decoration:none; 

}

.my-font{
    font-size:25px;
    font-family:consolas;
}

 .header{
    height:20px;
    background-color:black;
    position: fixed;
    width:100%;
    top:0;
    left:0;
}

.left-menue{
    height:100%;
    width:170px;
    top:0;
    left:0;
    position:fixed;
    background-color:black;
    z-index:1;
    padding-top:27px;
}


.login-div{
    border:1px solid black;
    margin:auto;
    width: 25%;
    border-radius:10px;
    margin-top:15%;
    padding-bottom:25px;
    padding: 25px  ;

}

.footer{
    height:20px;
    background-color:black;
    bottom:0;
    left:0;
    position:fixed;
    width:100%;

}

.btn-mine{
    background-color:red;
    font:white;
    border:none;
    width:100%;
    border-radius: 5px;
    padding: 5px;

}
.btn-mine:hover{
    background-color:green;
}
.btn-mine:active{
    background-color:skyblue;
}
.err_msg{
     color:red;
     font-size: 20px;
     font-family: Cambria;
 } 
        </style>
        <script src="login.js"></script>
    
       
    
    
    </head>
    <body>
        
       <div class="header" class="my-font"></div>
       
       <div class="login-div">
       <table align="center">
           <tr>
               <td colspan="2" align="center"></td>
           </tr>
          <tr>
              <td><img src="images/user.png" width="150px" ></td>
              <td><h1 align="center">Login Form</h1></td>
          </tr>
       
       </table>
       <form action="loginprocess.php" onsubmit="return validateForm()" method="POST">
       <table align="center">
             <tr>
                 <td><span class="my-font">Username:</span></td>
                 <td><input class="my-font" type="text" id="uname" requred placeholder="username" name="uname">
                 <p id="erroruser"></p>
                 
                 
             </tr>

             <tr>
                 <td><span class="my-font">Password:</span></td>
                 <td><input class="my-font"type="password" id="pass" requred placeholder="password" name="pass">
                 <p id="errorpass"></p>
               
                 
             </tr>
             <tr>
                
                 <td colspan="2"align="right" ><input class="btn-mine my-font" type="submit" value="Login"  name="Login"></td>
                 
             </tr>
        </table>  
       </form>
       <div>
           <p>If don't you have any account   <a href="     signup.php">SignUp</a></p>
           
       </div>
        
       </div> 
       

       <div class="footer my font">
       Footer
       </div>
    </body>



</html>


