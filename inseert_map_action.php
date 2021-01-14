<?php
include "dbconnect.php";
?>

<?php
if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $ptype = $_POST["ptype"];
    $Latitude = $_POST["Latitude"];
    $Longitude = $_POST["Longitude"];
    $senderid = $_POST["senderid"];
    $Price = $_POST["Price"];
    $Desciption = $_POST["Desciption"];
    $date = date("Y-m-d h:i:sa");

    $statusMsg = '';

    // File upload path
    $targetDir = "images/uploads";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
               
                $insert = $con->query("INSERT into product (type, description, latitude, longitude, datetime, senderid,price,image) VALUES ('" . $ptype ."','" . $Desciption ."','" . $Latitude ."','" . $Longitude ."','" . $date ."','" . $senderid . "','" . $Price ."','" . $fileName . "')");
                if ($insert) {
                   
                    echo "<script>
                    alert('The file " . $fileName . " has been uploaded successfully.');
                    window.location = 'mapgo.php';
                   </script> ";
                } else {
                    echo "ERROR: Could not able to execute $insert.";
                    echo "<script>
                    alert(' Could not able to execute');
                    window.location = 'mapgo.php';
                   </script> ";
                }
            } else {
               
                echo "<script>
                    alert(' Sorry, there was an error uploading your file.');
                    window.location = 'mapgo.php';
                   </script> ";
            }
        } else {
          
            echo "<script>
                    alert('Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.');
                    window.location = 'mapgo.php';
                   </script> ";
        }
    } else {
       
        echo "<script>
                    alert('Please select a file to upload.');
                    window.location = 'mapgo.php';
                   </script> ";
    }
    // Display status message
    mysqli_close($con);
}
?>