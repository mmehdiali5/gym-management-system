<?php
include "conn.php";

	$q="select*from payment";
	$query=mysqli_query($con,$q);
	
?>


<!DOCTYPE html>
<html>
<head>
	<title></title> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="col-lg-12">
			<br><br>
			<h1 class="text-warning text-center"> Display Payment Info  </h1>
			<br>
			<table class=" table table-striped table-hover table-bordered">
			
				<tr class="bg-dark text-white text-center">
					<th>Id</th>
					<th>Amount</th>
					<th>Description</th>
					<th>Type</th>
					<th>Invoice ID</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>
		<?php
			include "conn.php";
			
			$q="select*from payment";
			
			$query=mysqli_query($con,$q);
			while($res=mysqli_fetch_array($query)){
				
		?>
				
				<tr class="text-center">
					<td><?php echo $res['id'];?> </td>
					<td><?php echo $res['amount'];?> </td>
					<td><?php echo $res['description'];?> </td>
					<td><?php echo $res['type'];?> </td>
					<td><?php echo $res['invoice_id'];?> </td>
					
					<td> <button class="btn-danger btn"> <a href="paymentDelete.php?id=<?php echo $res['id'];?>"class="text-white">Delete </a></button></td>
					<td> <button class="btn-primary btn"> <a href="paymentUpdate.php?id=<?php echo $res['id'];?>"class="text-white">Update </a></button></td>
					
				</tr>
				
				<?php
			}
				?>
				
			</table>
		
	</div>
	</div>
</body>
</html>	
