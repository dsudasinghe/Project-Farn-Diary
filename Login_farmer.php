 
<?php session_start()
?>
 
 <html>
<head>
    <title> farmer Login Panel </title>
  
<link rel="stylesheet" href="css/Style_3.css">
<link rel="shortcut icon" href="img/icon.png" />

</head>
    <body style=" background-image: url(img/farmer.jpg); ">

  <?php
        $servername="localhost";
        $susername="root";
        $spassword="";
        $sdbname="farmdiary";
      // Create connection
      $con = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");
      // Check connection
      if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      if(isset($_POST["username1"])){


      
           if(!($_POST["username1"]) || !($_POST["password1"]))  
           {  
                echo '<script>alert("Both Fields are required")</script>';  
           }  
           else  
           {  
                $username1 =$_POST["username1"];  
                $password1 =$_POST["password1"];  
                $password1 = md5($password1);  
                $query = "SELECT * FROM farmer WHERE fnic = '$username1' AND fpassword = '$password1'";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                    
                     $_SESSION['username1'] = "$username1";
                     
                    header("Location:mapinput.php");  
                      
                }  
                else  
                {  
                     echo '<script>alert("Wrong User Details")</script>';  
                }  
           }  
    


          }
      ?>  


    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>farmer Login </h1>
            <form action="Login_farmer.php" method="POST" enctype="multipart/form-data">
            <p>NIC </p>
            <input type="text" name="username1" placeholder="NIC">
            <p>Password</p>
            <input type="password" name="password1" placeholder="Enter Your Password">
            <input type="submit" name="submit" value="Login">
            <div class="row">
            <a href="#">Forget Password </a>
            <a href="signupfarmer.php"> &nbsp; &nbsp; &nbsp;signup</a>
            </div>   
            </form>
        
        
        </div>
    
    </body>
</html>