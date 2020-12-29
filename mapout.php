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
?>







<h1>welcome to keels</h1>



<?php
      echo "test"; ?>









<div class="row">
  <div class="col-sm-4">.col-sm-4 need to fill with cards</div>
  <div class="col-sm-8">




<div>


<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(7.0840,80.0098),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);


var mycenter = new google.maps.LatLng(7.0840,80.0098);


var marker = new google.maps.Marker({position:mycenter,animation:google.maps.Animation.BOUNCE});


marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"test "
});

infowindow.open(map,marker);


}


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBheNEtrngM3cbowGS3tLPwoBXlswmmSb0&callback=myMap"></script>

</div>













  </div>






</div>


<?php

mysqli_close($con);



?>



</body>
</html>