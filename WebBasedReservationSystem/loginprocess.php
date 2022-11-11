<?php 
if(session_status()>=0){
    if(isset($_SESSION["uname"])){
        header ("refresh: 0.5; url=private.php");
    }
}
    if(empty($_POST["uname"]) || empty($_POST["pass"]))
    
    
    {
        echo"Fill the username and password."."<br>";
            header("refresh: 2; url=login.php");
    }
        else{
    if(isset($_POST["Login"])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];

        $conn=mysqli_connect('localhost','root','','ground');
        $sql="SELECT * From users Where username ='$uname' and password='$pass'"; 

        $result=mysqli_query($conn,$sql);
        
        $count=mysqli_num_rows($result);

        if($count>=1){
            session_start();
            echo "REDIRECTING";
            header("refresh: 2; url=private.php");
            exit();
        }
        else{
            echo"User not found";
            header("refresh: 2; url=login.php");
            exit();
        }

    }

    
    }

    
    

?>


    
