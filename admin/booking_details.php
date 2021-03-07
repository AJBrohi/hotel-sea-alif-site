<table class="table table-bordered table-striped table-hover">
	<h1>Room Booking Details</h1>
	<hr>
	<tr>
		<th>Serial No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Room Type</th>
		<th>Check In Date</th>
		<th>Check Out Date</th>
		<th>Confirm Booking</th>
		<th>Cancel Booking</th>
		<th>Confirmed?</th>
	</tr>

	<?php
	$i = 1;
	$sql = mysqli_query($con, "select * from room_booking_details");
	while ($res = mysqli_fetch_assoc($sql)) {
		$oid = $res['id'];
		$mail = $res['email']

	?>
		<tr>
			<td><?php echo $i;
				$i++; ?></td>
			<td><?php echo $res['name']; ?></td>
			<td><?php echo $res['email']; ?></td>
			<td><?php echo $res['phone']; ?></td>
			<td><?php echo $res['address']; ?></td>
			<td><?php echo $res['room_type']; ?></td>
			<td><?php echo $res['check_in_date']; ?></td>
			<td><?php echo $res['check_out_date']; ?></td>
			<?php
			if ($res['confirmation'] == "No") {
			?>
				<td><a style="color:green" href="send_mail.php?email=<?php echo $mail; ?>">Send Mail</a></td>
			<?php
			} else {
			?>
				<td>Mail Sent</td>
			<?php
			}
			?>
			<td><a style="color:red" href="cancel_booking.php?booking_id=<?php echo $oid; ?>">Cancel</a></td>
			<td><?php echo $res['confirmation']; ?></td>
			</td>
		</tr>
	<?php
	}

	?>
</table>