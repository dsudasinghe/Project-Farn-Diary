<!DOCTYPE html>
<html>



<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="css/mapoutstyles.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- added styles from home page -->

<link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">

<link rel="shortcut icon" type="image/jpg" href="images/keellslogo.png"/>



</head>
<body>





<?php include 'navcommonmaster.php'; ?>

<?php include 'dbconnect.php'; ?>


<h1>create new staff accounts</h1>

<a  class="btn btn-danger" href="signup.php">create</a>


<h1>manage staff accounts</h1>
<table>

<div>
		<table border="1">
			<thead>
				profile
			</thead>
			<tbody>
				<?php
                    include('dbconnect.php');
                    $logflag=2;
					$query=mysqli_query($con,"SELECT * FROM `staff`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr style="border: 2px solid #dedede;
 padding: 10%;">
							<td><?php echo $row['s_fname']; ?></td>
							<td><?php echo $row['s_lname']; ?></td>
                            <td><?php echo $row['s_nic']; ?></td>
							<td>
								<a href="deletemmember.php?sid=<?php echo $row['sid'];?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
        </table>
        
    </div>







</table>




<?php include 'footer.php'; ?>


</body>











</html>