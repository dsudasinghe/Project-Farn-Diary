<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/sty1.css" rel="stylesheet" type="text/css" >

<link href="css/mapoutstyles.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- added styles from home page -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/fixed.css">
<link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
<link rel="shortcut icon" href="img/icon.png" />


</head>


<body>

<?php include 'dbconnect.php'; ?>





<h1 class=wed>welcome to keels</h1>


<?php
      echo "test"; ?>






<div class="row">



<div class="col-sm-8">
  






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
        content:'<div class=infow><img src="'+disname+'" width="100" height="100"> ' + markerinfo[i][1]+"<br>price per Kg-"+ markerinfo[i][3]+"</div> <button type='button' class='btn btn-outline-success'    data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'  onclick='createcontentcollapse("+markerinfo[i][0]+")'                     >more</button>"
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






</div>





<div class="collapse" id="collapseExample">
  <div class="card card-body">  
<label id="demo1"></label>


<div class="container">
<div class="row">
<script>


function createcontentcollapse(productid) {

alert(productid);
var xx = productid;
document.getElementById("demo1").innerHTML = productid;
document.cookie = "myJavascriptVar = " + productid; 
}
</script>

 <?php
  $myPhpVar= $_COOKIE['myJavascriptVar'];
$sql = "SELECT * FROM `product` where pid='$myPhpVar'";
$result = mysqli_query($con, $sql);
//setcookie("myJavascriptVar","");
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
    ?>
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="uploads\<?php echo $row['image']; ?>" alt="Card image cap">
  <div class="card-body">
   <h1><?php echo $row['type']; ?></h1> 
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
    <h1 class=cardprice><?php echo $row['price']; ?></h1> 
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <?php

     echo "detected";
      
      ?>



</div>


<br>

<?php



    }} ?>

  
  </div>
</div>





















</div>












</div>






<!--

  <div class="container-fluid">









  -->


  </div>
  <div class="col-sm-8">





</div>


<?php

mysqli_close($con);



?>


</body>
</html>