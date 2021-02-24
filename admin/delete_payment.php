<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($con,"select * from payment where trx_id='$id' ");
$res=mysqli_fetch_assoc($sql);

if(mysqli_query($con,"delete from payment where trx_id='$id' "))
{
header('location:dashboard.php?option=payment_details');	
}

?>