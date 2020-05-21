<?php
include "conn.php";

if(isset($_POST['done'])){

	$description=$_POST['description'];
	$emp_id=$_POST['emp_id'];

	$q="INSERT INTO `invoice`(`description`, `emp_id`) VALUES ('$description','$emp_id')";
	$query=mysqli_query($con,$q);
	
}

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

			<div class="col-lg-6 m-auto">
				
				<form  method="post" autocomplete="off">
					
					<div class="card">
							
							<div class="card-header bg-dark">
									<h1 class="text-white text-center">  INSERT INVOICE INFO</h1>
							</div> <br>
							<label> Description:</label>
							<input type="text" name="description" class="form-control"> <br>
							
							<label> Employee ID: </label>
							<input type="text" name="emp_id" class="form-control"> <br>
	
							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>

				</form>	
			
			</div>
</body>
</html>	