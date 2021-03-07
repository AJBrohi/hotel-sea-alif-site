<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
        <th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Room Type</th>
		<th>Check In Date</th>
		<th>Check Out Date</th>
		<th>Booking Status</th>
</tr>
<?php
$mysql = "select * from room_booking_details where email='$oid'";
$sql=mysqli_query($con,$mysql);
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['phone']; ?></td>
    <td><?php echo $res['address']; ?></td>
    <td><?php echo $res['room_type']; ?></td>
    <td><?php echo $res['check_in_date']; ?></td>
    <td><?php echo $res['check_out_date']; ?></td>
    <td>Confirmed</td>
</tr>
<?php
}
?>
</table>
</body>
</html>