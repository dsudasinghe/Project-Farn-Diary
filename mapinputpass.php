<?php
  if(isset($_POST['submit'])){
  
    //Get image name
  
    $var1 = $_FILES['image']['name'];
    //Get text
    $type= $_POST['type'];
    $description= $_POST['description'];
    $datetime= $_POST['datetime'];
    $senderid= $_POST['senderid'];
    $price= $_POST['price'];
    $latitude= $_POST['latitude'];
    $longitude= $_POST['longitude'];
    echo $description,$price;
 
  //image file directory
  
    $move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);			
  
    
    include 'dbconnect.php'; 
    //insert query
  
   
  
    $sql = "INSERT INTO product(`type`, `description`, `latitude`, `longitude`, `datetime`, `senderid`, `price`, `image`) values ('$type','$description','$latitude','$longitude','$datetime','$senderid','$price','$var')";
    //excute query
  
    
    mysqli_query($db,$sql);
  
    
    if($move)
  
    
    {
  
    
      echo " successfully uploaded";
  
    
    }else{
  
    
      echo "Failed to upload";
  
    
    }
  
    
  }
  

?>




<?php

mysqli_close($con);



?>