<?php

error_reporting(0);
?>
<?php
$insert=false;
if(isset($_POST['name'])){
    $server="localhost:3307";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    
  
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $other=$_POST['other'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    //echo $sql;
    if($con->query($sql)==true){
        //echo "Successfully Inserted";
        $insert=true;
    }
    else{
       echo "ERROR:$sql<br> $con->error";
    }
    $con->close();
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body onload=alert1() background="d.jpg">
    
   <div class="container">
       <h1><marquee style="color:gold;background-color:white;" behavior="alternate"scrollamount="2" width="800px">
      <i>W E L C O M E  T O  C S J M</i> </marquee></h1><br>
       <p>Enter Your Detail </p><br>
       <?php
       if($insert==true){
       echo "<p class='submitmsg'>Thanks for submiting Form</p>";
    }
       ?><br>
       <form action="index.php" method="post">
          <b  style="color:gold;"> ENTER YOUR NAME</b><input type="text "name="name"id ="name" placeholder="Enter Your Name" required maxlength="50">
          <b style="color:Aqua;">ENTER YOUR AGE</b> <input type="text "name="age" id ="age" placeholder="Enter YourAge" required maxlength="50">
          <b style="color:lime;">ENTER YOUR GENDER</b> <input type="text "name="gender" id="gender" placeholder="Enter Your Gender" required maxlength="50">
          <b style="color:magenta;">ENTER YOUR EMAIL ID</b> <input type="email "name="email" id="email" placeholder="Enter Your Email" required maxlength="50">
          <b style="color:green;">ENTER YOUR PHONE No.</b> <input type="phone "name="phone" id="phone" placeholder="Enter Your Contact" required maxlength="10">
          <b style="color:purple;">ENTER YOUR OTHER DETAILS</b> <textarea placeholder="enter"  name="other" id="other" cols="30"  rows="10" required>

           </textarea>
           
       <button class="btn" onclick=confirmation()>Submit</button>
       
       </form>
       <br><hr><br>
           <h2>About Creator</h2><br>
           <p><b style="color:purple;">Name :</b>BHAVESH SINGH</p>
           <p><b style="color:purple;">Branch :</b>CSE</p>
           <p><b style="color:purple;">Year :</b>Final Year</p>
           <p><b style="color:purple;">College :</b> C S J M G P A</p>
           <p><b style="color:purple;">Thanks For Visiting This Page</b></p>
   </div> 
   <script src="index.js"></script>
   
</body>
</html>