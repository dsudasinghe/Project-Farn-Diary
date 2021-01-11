<!DOCTYPE html>
<html>
<head>
<title>message</title>
</head>
<body>
	<div>
		<table border="1">
			<thead>
				<th>sender</th>
			
				<th></th>
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
							<td><?php echo $row['senderid']; ?></td>
							<td><?php echo $row['message']; ?></td>
							<td>
								<a href="deletemessage.php?msgid=<?php echo $row['msgid'];?>">Delete</a>
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
   <label for="lname">message:</label><br>
   <input type="text" id="mess" name="message" value="enter your message here"><br><br>
   <input class="btn btn-outline-success" type="submit" value="send">
    </form>
    </div>



</body>
</html>