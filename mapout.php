<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/sty1.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

<!-- added styles from home page -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/fixed.css">
<link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
<link rel="shortcut icon" href="img/icon.png" />


</head>


<body>

<?php include 'dbconnect.php'; ?>





<h1>welcome to keels</h1>



<?php
      echo "test"; ?>






<div class="row">



<div class="container-fluid">
  






<div>


<div id="googleMap" style="width:100%;height:800px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(7.0840,80.0098),
  zoom:15,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);





<?php

$sql = "SELECT * FROM `product`";
$result = mysqli_query($con, $sql);

?>

var markerinfo = [
        <?php if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){ 
                echo '["'.$row['pid'].'", '.$row['latitude'].', '.$row['longitude'].', "'.$row['price'].'"],'; 
            } 
        } 
        ?>
    ];




  for( i = 0; i < markerinfo.length; i++ ) {
        
        var pp = new google.maps.LatLng(markerinfo[i][1], markerinfo[i][2]);
        var marker2 = new google.maps.Marker({position:pp,animation:google.maps.Animation.BOUNCE});
			  marker2.setMap(map);
        var infowindow = new google.maps.InfoWindow({
        content:" test" + markerinfo[i][1] 
        
        });

        infowindow.open(map,marker2);


}        



        }






function myFunction(p1, p2) {









  return p1 * p2;   // The function returns the product of p1 and p2
}





function bigImg(x) {
  x.style.height = "64px";
  x.style.width = "64px";
}

function normalImg(x) {
  x.style.height = "32px";
  x.style.width = "32px";
}














</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBheNEtrngM3cbowGS3tLPwoBXlswmmSb0&callback=myMap"></script>

</div>













  </div>

















</div>






























  <div class="col-sm-4">






<div class="container">
<div class="row">


 <?php

$sql = "SELECT * FROM `product`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
    ?>
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="uploads\test.jpg" alt="Card image cap">
  <div class="card-body">
  <?php
      echo $row["pid"];
      echo $row["type"];
      echo $row["description"];
      echo $row["latitude"];
      echo $row["longitude"];
      echo $row["datetime"];
      echo $row["senderid"];
      echo $row["price"];
      echo $row["image"];
      
      ?>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <?php

     echo "detected";?>




</div>


<br>

<?php



    }} ?>

  
  </div>
</div>






  </div>
  <div class="col-sm-8">





</div>


<?php

mysqli_close($con);



?>



</body>
</html>