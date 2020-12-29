<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

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



</body>
</html>