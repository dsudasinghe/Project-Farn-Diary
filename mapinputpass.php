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
 // $image = $_FILES['image']['name']; 
  


  //$move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);	

   
    
  $sql = "INSERT INTO product(latitude,longitude,price,`datetime`,`type`,`description`,senderid) values ('$latitude','$longitude','$price','$datetime','$type','$description','$senderid')";
  
    
  //excute query

  
  mysqli_query($con,$sql);



 echo 
"latitude:$latitude,longitude:$longitude,type:$type,description:$description,datetime:$datetime,price:$price";  

  




  echo"all set";
  


  //Get text




}
 

?>



</html>
