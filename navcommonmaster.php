<html>

<head>

<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- added styles from home page -->

<link href="css/navbarstyles.css" rel="stylesheet" type="text/css" >
</head>
<body>

<div class="sticky-top">
<nav class="navbar navbar-light" style="background-color: #0e9647;">
  <!-- Navbar content -->
<img   src="img/keellslogo1.png" alt="" height="40px" width="80px" >

<?php include 'dbconnect.php'; ?>
  
 

   <?php
   
   /*
   $tesst=$_SESSION["username1"];
   

$sql3 = "SELECT * FROM `master` where m_nic='$tesst'";
$result2 = mysqli_query($con, $sql3);
//setcookie("myJavascriptVar","");
if (mysqli_num_rows($result2) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result2))
   {
    ?>
  <div     style='margin-left: 75% ;   color:white;'>
<b>
  <?php echo $row["m_fname"]; ?>&nbsp;
  <?php echo $row["m_lname"]; ?>&nbsp;
     
  </b>   

  </div>
     
<?php
   }}
mysqli_close($con);
*/


?>

   
   <a class="link-dark" href="logout.php" style="
   color:white">Logout</a>
 


 </nav>
 </div>
 </body>
 </html>