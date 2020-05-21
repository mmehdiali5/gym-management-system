<?php
include "conn.php";

	$q="select*from members";
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
			<h1 class="text-warning text-center"> Display Members Info  </h1>
			</div> <br>	
			<br>
			<table class=" table table-striped table-hover table-bordered">
			
				<tr class="bg-dark text-white text-center">
					<th>Member Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>HOUSE NUMBER</th>
					<th>STREET NUMBER</th>
					<th>City</th>
					<th>Country</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>
		<?php
			include "conn.php";
			
			$q="select*from members";
			
			$query=mysqli_query($con,$q);
			while($res=mysqli_fetch_array($query)){
				
			
			
	
		?>
				
				<tr class="text-center">
					<td><?php echo $res['MID'];?> </td>
					<td><?php echo $res['MName'];?> </td>
					<td><?php echo $res['email'];?> </td>
					<td><?php echo $res['HouseNo'];?> </td>
					<td><?php echo $res['StreetNo'];?> </td>
					<td><?php echo $res['City'];?> </td>
					<td><?php echo $res['Country'];?> </td>
					
					<td> <button class="btn-danger btn"> <a href="MembersDelete.php?MID=<?php echo $res['MID'];?>"class="text-white">Delete </a></button></td>
					<td> <button class="btn-primary btn"> <a href="MembersUpdate.php?MID=<?php echo $res['MID'];?>"class="text-white">Update </a></button></td>
					
				</tr>
				
				<?php
			}
				?>
				
			</table>
		
	</div>
	</div>
</body>
</html>	
