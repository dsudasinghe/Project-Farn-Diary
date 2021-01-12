
<html>
<head>


</head>


<body>





<?php include 'dbconnect.php'; ?>








<div class="row">



<div class="container-fluid">
  

<div>


<div id="googleMap" style="width:100%;height:900px;"></div>

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
                echo '["'.$row['pid'].'", '.$row['latitude'].', '.$row['longitude'].', "'.$row['price'].'", "'.$row['image'].'", "'.$row['description'].'", "'.$row['datetime'].'"],'; 
            } 
        } 
        ?>
    ];




  for( i = 0; i < markerinfo.length; i++ ) {
        
        var pp = new google.maps.LatLng(markerinfo[i][1], markerinfo[i][2]);
        var marker2 = new google.maps.Marker({position:pp,icon:'images/markerico3.png',animation:google.maps.Animation.BOUNCE});
			  marker2.setMap(map);
        var path = "uploads/";
        var imagename = markerinfo[i][4];
        var disname = path.concat(imagename);
        var descr = markerinfo[i][5];
        var infowindow = new google.maps.InfoWindow({
        content:'<div class=infow><img src="'+disname+'" width="100" height="100"> </br>' + markerinfo[i][0]+"<br>price per Kg-"+ markerinfo[i][3]+"</div> <button type='button' class='btn btn-outline-success'    data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'  onclick='createcontentcollapse("+markerinfo[i][0]+")'                     >more</button>"
        });
        //infoWindow.setContent(html);
       /* infowindow2 = new google.maps.InfoWindow({
       content:"",
        });



        marker2.addListener("click", () => {
        infowindow2.open(map, marker);
        });*/
        infowindow.open(map,marker2);


}        



        }



</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBheNEtrngM3cbowGS3tLPwoBXlswmmSb0&callback=myMap"></script>

</div>









<?php

mysqli_close($con);



?>





  </div>
  </div>
  </div>


</body>
</html>