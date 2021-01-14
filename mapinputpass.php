<html>

<?php session_start()
?>





<?php

$senderid=1;






include 'dbconnect.php';
if($con === false){
	
  die("ERROR: Could not connect. " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
  // do logic
  $latitude= $_POST['latitude'];
  $longitude= $_POST['longitude'];
  $type= $_POST['type'];
  $description= $_POST['description'];
  $datetime= $_POST['datetime'];
  $price= $_POST['price'];
<<<<<<< HEAD
  //$image = $_FILES['image']['name']; 
=======
 // $image = $_FILES['image']['name']; 
>>>>>>> 9bf18cc26cfa8565d6cf488b20678fa1dcf93089
  


  //$move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);	

   
    
<<<<<<< HEAD
  $sql = "INSERT INTO product(latitude,longitude,price,datetime,type,description) values ('$latitude','$longitude','$price','$datetime','$type','$description','$senderid')";
=======
  $sql = "INSERT INTO product(latitude,longitude,price,`datetime`,`type`,`description`,senderid) values ('$latitude','$longitude','$price','$datetime','$type','$description','$senderid')";
>>>>>>> 9bf18cc26cfa8565d6cf488b20678fa1dcf93089
  
    
  //excute query

  
  mysqli_query($con,$sql);



 echo 
"latitude:$latitude,longitude:$longitude,type:$type,description:$description,datetime:$datetime,price:$price";  

  




  echo"all set";
  


  //Get text




}
 

?>



</html>
