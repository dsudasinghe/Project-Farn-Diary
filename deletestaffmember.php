<?php

include 'dbconnect.php'; // Using database connection file here

$id = $_GET['sid']; // get id through query string

$del = mysqli_query($con,"delete from `staff` where s_id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:masterpage.php"); // redirects to all records page
    ?>

    <?php
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>