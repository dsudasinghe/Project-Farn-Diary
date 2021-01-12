<!DOCTYPE html>
<html>
<head>
<title>message</title>
</head>
<body>
	<div  style="
	margin-left: 60%;">
	<div>
		<table class="table table-hover" border="0">
			<thead>
			<b>inbox</b>
			</thead>
			<tbody>
				<?php
                    include('dbconnect.php');
                    $logflag=2;
					$query=mysqli_query($con,"SELECT * FROM `message` where receverid='$logflag' OR senderid='$logflag'" );
					while($row=mysqli_fetch_array($query)){
						?>
						<tr style="border: 2px solid #dedede;
 padding: 10%;">
							<td style="
    border-right-width: 40%;
"><?php echo $row['senderid']; ?>:</td>
							<td ><?php echo $row['message']; ?></td>
							&nbsp;
							<td>
							<a href="deletemessage.php?msgid=<?php echo $row['msgid'];?>">  Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
        </table>
        
    </div>
    <div>
   <form action="messagesend.php" method="post" >
   <input style="display:none;" type="text" value="<?php echo $senderrr?>" name="receverid" />
   <label for="lname">reply:</label><br>
   <input type="text" id="mess" name="message" value=""><br><br>
   <input class="btn btn-outline-success" type="submit" value="send">
    </form>
    </div>

	<?php

mysqli_close($con);



?>
	</div>


</body>
</html>