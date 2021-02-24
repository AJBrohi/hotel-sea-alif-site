<script>
	function delPayment(id)
	{
		if(confirm("You want to confirm this payment ?"))
		{
		window.location.href='delete_payment.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Payment Details</h1><hr>
	
	<tr style="height:40">
		<th>Serial No</th>
		<th>Name</th>
		<th>Phone No</th>
		<th>TRX Number</th>
		<th>Confirm</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from payment");
while($res=mysqli_fetch_assoc($sql))
{
$name=$res['name'];	
$number=$res['phone'];
$trx_id=$res['trx_id'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['trx_id']; ?></td>
		
		<td><a href="#" onclick="delPayment('<?php echo $trx_id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>