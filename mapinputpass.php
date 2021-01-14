<html>
<?php




include 'dbconnect.php'; 
if (isset($_POST['latitude'])) {
  // do logic
  $latitude= $_POST['latitude'];
  $longitude= $_POST['longitude'];
  $type= $_POST['type'];
  $description= $_POST['description'];
  $datetime= $_POST['datetime'];
  $price= $_POST['price'];
 




/*

  $image = $_FILES['image']['name']; 
  $move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);	

*/
   
    
  $sql = "INSERT INTO product(latitude,longitude,datetime,price) values ('$latitude','$longitude','$datetime','$price','$price')";
  
    
  //excute query

  
  mysqli_query($con,$sql);



 echo 
"latitude:$latitude,longitude:$longitude,type:$type,description:$description,datetime:$datetime,price:$price";  

  




  echo"all set";
  
}

  //Get text
  else{


    echo"shi*";

  }



 

?>



</html>
