<?php

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

include('../connection.php');

$oid = $_GET['email'];
$sql=mysqli_query($con,'select * from room_booking_details where email="$oid"');
$name='name';
$email = 'email';
$phone = 'phone';
$address = 'address';
$room_type = 'room_type';
$cin = 'check_in_date';
$cout = 'check_out_date';

$to = "junaed.brohi@gmail.com";
$subject = "HTML email test 3";

$hudai = "<html>
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
$sql=mysqli_query($con,$mysql);
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
    <td><?php echo $res[$name]; ?></td>
    <td><?php echo $res[$email]; ?></td>
    <td><?php echo $res[$phone]; ?></td>
    <td><?php echo $res[$address]; ?></td>
    <td><?php echo $res[$room_type]; ?></td>
    <td><?php echo $res[$check_in_date]; ?></td>
    <td><?php echo $res[$check_out_date]; ?></td>
    <td>Confirmed</td>
</tr>
<?php
}
?>
</table>
</body>
</html>";

$message = $hudai;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <brohi96@gmail.com>' . "\r\n";
// $headers .= 'Cc: md.al.junaed.islam@g.bracu.ac.bd' . "\r\n";

mail($to, $subject, $message, $headers);

$q = mysqli_query($con, "update room_booking_details set confirmation='Yes' where email='$oid' ");
if ($q) {
    header('location:dashboard.php?option=booking_details');
}
