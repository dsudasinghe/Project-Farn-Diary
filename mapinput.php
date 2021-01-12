<!DOCTYPE html>
<html>
<body>






<?php include 'navcommonfarmer.php'; ?>


<div class="container-fluid" style="padding-right: 0px; padding-left:0px; ">


<?php include 'messagerecive.php'; ?>

<div>



<div id="map" style="width:100%;height:800px;"></div>

<script>
function myMap() {
  let myCenter = new google.maps.LatLng(6.9271,79.8612);
  let mapCanvas = document.getElementById("map");
  let mapOptions = {center : myCenter , zoom : 15};
  let map = new google.maps.Map(mapCanvas , mapOptions);
  let marker = new google.maps.Marker({position : myCenter});
  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
  content:'<form action="mapinput.php" method ="post"></br>   </br> type: <input type="text" name="type"></br> datetime: <input type="text" name="datetime"></br> price: <input type="text" name="price"></br> description: <input type="text" name="description"></br> </br> image: <input type="file" name="image"> <input type = "submit"> </form>'
  });

  infowindow.open(map,marker);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBheNEtrngM3cbowGS3tLPwoBXlswmmSb0&callback=myMap"></script>




<?php include 'footer.php'; ?>




</body>
</html>