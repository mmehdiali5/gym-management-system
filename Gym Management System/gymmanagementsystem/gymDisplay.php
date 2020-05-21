<?php
include "conn.php";

	$q="select*from gym";
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
			<div class="card-header bg-dark">
			<h1 class="text-warning text-center"> DISPLAY GYM INFO  </h1>
			</div> <br>	
			<br>
			<table class=" table table-striped table-hover table-bordered">
			
				<tr class="bg-dark text-white text-center">
					<th>Gym Id</th>
					<th>Gym Type</th>
					<th>Gym Description</th>
					<th>Gym Address</th>
					<th>Delete</th>
					<th>Update</th>
				
				</tr>
			
		<?php
			include "conn.php";
			
			$q="select*from gym";
			
			$query=mysqli_query($con,$q);
			while($res=mysqli_fetch_array($query)){
				
			
			
	
		?>
				
				<tr class="text-center">
					<td><?php echo $res['gymID'];?> </td>
					<td><?php echo $res['gymType'];?> </td>
					<td><?php echo $res['gymDescription'];?> </td>
					<td><?php echo $res['gymAddress'];?> </td>
					<td> <button class="btn-danger btn"> <a href="gymDelete.php?gymID=<?php echo $res['gymID'];?>"class="text-white">Delete </a></button></td>
					<td> <button class="btn-primary btn"> <a href="gymUpdate.php?gymID=<?php echo $res['gymID'];?>"class="text-white">Update </a></button></td>
					
				</tr>
				
				<?php
			}
				?>
				
			</table>
		
	</div>
	</div>
</body>
</html>	
