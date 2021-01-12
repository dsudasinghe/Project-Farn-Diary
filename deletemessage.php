<?php

include 'dbconnect.php'; // Using database connection file here

$id = $_GET['msgid']; // get id through query string

$del2 = mysqli_query($con,"delete from `message` where msgid='$id'"); // delete query

if($del2)
{
    mysqli_close($con); // Close connection
    header("location:messagerecive.php"); // redirects to all records page
    ?>


    <?php
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>