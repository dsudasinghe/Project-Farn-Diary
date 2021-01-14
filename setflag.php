<?php

include 'dbconnect.php'; // Using database connection file here

$id = $_GET['pid']; // get id through query string


;
$flagg = mysqli_query($con,"UPDATE product SET fflag ='1' WHERE pid = '$id'"); // delete query

if($flagg)
{
    mysqli_close($con); // Close connection
    header("location:mapout.php"); // redirects to all records page
    ?>

    <script>

    document.cookie = "myJavascriptVar=1"; 
    </script>

    <?php
    exit;	
}
else
{
    echo "Error flag record"; // display error message if not delete
}
?>