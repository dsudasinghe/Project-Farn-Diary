<!DOCTYPE html>
<html>
<body>

<?php include 'navcommonfarmer.php'; ?>





<h1>My First Google Map</h1>

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
  content:'<form action = "inputdata.php" method = "post" enctype = "multipart/form-data"></br> Content: <input type="text" name = "con"> <br> Latitude : <input type ="hidden" name"lat" value="'+myCenter.lat()+'"> <input type = "submit"> </form>'
  });

  infowindow.open(map,marker);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBheNEtrngM3cbowGS3tLPwoBXlswmmSb0&callback=myMap"></script>



<?php include 'footer.php'; ?>

</body>
</html>