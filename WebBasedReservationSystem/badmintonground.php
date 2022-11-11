
<?php
if(session_status()>=0){
    if(isset($_SESSION["uname"])){
        header ("refresh: 0.5; url=private.php");
    }
}
   $uname="";
   $umail="";
   $address="";
   $date="";
   $time="";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname=$_POST["name"];
    $umail=$_POST["email"];
    $address=$_POST["address"];
    $date=$_POST["Date"];
    $time=$_POST["Time"]; 
    
    $server="localhost";
    $user="root";
    $password="";
    $db="ground";
    $conn=mysqli_connect($server,$user,$password,$db);
   
    $sql="SELECT * From book Where time ='$time' and date ='$date' and type='Badminton'";
    
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);

    if($count==1){
        echo "Not booked!! Chose another time slot.";
        header("refresh: 2; url=badmintonground.php");
        exit();
    }else{
        $query="insert into book values('$uname','$umail','$address','$date','$time','Badminton')";
    
    if(mysqli_query($conn,$query)){
        session_start();
        echo "Ground booked";
        header("refresh: 2; url=private.php");
        exit();
    }
    

    }
    
   }
    

?>

<!DOCTYPE html>
<html>
  <head>
      <title>Booking ground</title>
      <style>
          form{
              width:500px;
              margin:auto;
              padding:20px;
              background:crimson;
              font-size:20px;
              font-family:Verdana;
              color:white;
          }
          input[type=text]{
              width:80%;
              padding:5px;
              font-size:18px;

          }
          input[type=submit]{
              padding:5px;
              font-size:20px;
              width:100px;
          }
          select{
              font-size:20px;
              padding:5px;
              background:#e0d3e8;
          }


      </style>

  </head>
  <body>
      <form action="" method="post">
          Your Name<br>
          <input type="text" name="name" placeholder="Enter your name" ><br><br>
          Your Email<br>
          <input type="text" name="email" placeholder="Enter your email"><br><br>
          Your Address<br>
          <input type="text" name="address"placeholder="Enter your address"><br><br>
         
           DATE <br>
           <tr><td>
           <input type="date"  name="Date"></td><br>
           </tr><br>

         
          Your Desire Time<br>
          <select name="Time">
               <option value="Time">Time</option>
               <option value="8-10">8 A.M.-10 A.M.</option>
              <option value="10-12">10 A.M.-12 A.M.</option>
              <option value="12-2">12 A.M.-2 P.M.</option>
          </select><br><br>
          <input type="submit" value="Submit"></input>
      </form>
  </body>

</html>