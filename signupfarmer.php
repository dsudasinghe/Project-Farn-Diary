<html>
    <head>


<link href="css/sty2.css" rel="stylesheet" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/sty1.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- added styles from home page
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/fixed.css">
<link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
<link rel="shortcut icon" href="img/icon.png" />
 -->


<!-- added styles from login page -->
<title> Sign up</title>
<link rel="stylesheet" href="css/Style_4.css">

    </head>
   
<body style=" background-image: url(img/farmer.jpg); ">



<?php

  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="farmdiary";

  $db = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");



  error_reporting("0");

	
  if(isset($_POST['submit'])){
  

    //Get text
    $nic= $_POST['nicnum'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $contactnum= $_POST['contactnum'];
    $s_address= $_POST['s_address'];
    $email= $_POST['email'];
    $pwd= $_POST['pwd'];
    $pwdcon= $_POST['pwdcon'];

    echo "<script>alert('$nic,$first_name, $last_name,$contactnum,$s_address,$email,$pwd,$pwdcon');</script>"; 

   if($pwdcon==$pwd){
     $passw=$pwd;}
   else{

    echo '<script>alert("enter same password")</script>';  
   }
   
   $passw=md5($passw);

   echo "<script>alert('$passw');</script>"; 
    //insert query
  
    $sql = "INSERT INTO `farmer`(`ffirstname`, `flastname`, `fcontact`, `faddress`, `femail`, `fnic`, `fpassword`) VALUES ('$first_name','$last_name','$contactnum','$s_address','$email','$nic','$passw')";
    
    //excute query
  
    mysqli_query($db,$sql);
  
    
    if($sql)
  
    
    {
  
    
      echo "connected";
  
    
    }else{
  
    
      echo "error";
  
    
    }
  
    
  }
  


?>



    <div class="login-box" style="height: auto;">


<div class="container">
<div class="row">
<div class="div2">
        <form action="signupfarmer.php" method="POST" enctype="multipart/form-data">
        <h1>Sign up</h1>

     <input type="text" name="nicnum" placeholder="Enter nic number">
     <input type="text" name="first_name" placeholder="Enter Your First Name">
     <input type="text" name="last_name" placeholder="Enter Your Last Name">
     <input type="text" name="contactnum" placeholder="Enter mobile number">
     <input type="text" name="s_address" placeholder="Enter address">
     <input class="mail" type="email" name="email" placeholder="Enter Your Email"> 
     <input type="password" name="pwd"placeholder="Enter Your Password">
     <input type="password" name="pwdcon"placeholder="Confirm Your Password">
 
   
<button type="submit" name="submit" class="submitbtn">Sign up</button>
</div>
<p>By creating an account you agree to our <a href="Login_Menu.php">Terms & Privacy</a>.</p>
<div class="container signin">
<p>Already have an account? <a href="Login_Menu.php">login</a>.</p>
</div>
</div>

        </form>

        
        
        </div>
    
    </body>
</html>



</form>




  </div>



<?php
  function check_string($my_string){
   $regex = preg_match('[@_!#$%^&*()<>?/|}{~:]', $my_string);
   if($regex)
      print("String has been accepted");
   else
      print("String has not been accepted");
}



?>






  




    </body>

  


  

 
<!-- bootstrap -->
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>






</html>