<?php
if(isset($_POST["REGISTER"])){
    if($_POST['upass']==$_POST['conpass']){
    $name=$_POST['name'];
    $phone=$_POST['uphone'];
    $email=$_POST['uemail'];
    $dep=$_POST['department'];
    $address=$_POST['uaddress'];    
    $uname=$_POST['uname'];
    $pass=$_POST['upass'];

    $conn=mysqli_connect('localhost','root','','ground');
    $sql=" INSERT Into users(name,phone,email,department,address,username,password) VALUES(' $name','$phone','$email','$dep','$address','$uname','$pass')";
    if(mysqli_query($conn,$sql)){
        session_start();
        echo "Registration Accepted<br>";
        header("refresh: 4; url=private.php");
    }
 } 

 else{
    echo"Please make sure both password fields are same.";
    header("refresh: 2; url=signup.php");
 }


}
else{
    if(session_status()===PHP_SESSION_NONE){

    }
    header("Location:index.html");
}
?>
