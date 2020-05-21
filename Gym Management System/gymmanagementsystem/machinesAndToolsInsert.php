<?php
include "conn.php";

if(isset($_POST['done'])){

	$name=$_POST['name'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
	$q="INSERT INTO `machinesAndTools`(`name`, `quantity`,`price`) VALUES ('$name','$quantity','$price')";
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
									<h1 class="text-white text-center">  INSERT Machines AND Tools INFO</h1>
							</div> <br>
							<label> Name:</label>
							<input type="text" name="name" class="form-control"> <br>
							
							<label> Quantity: </label>
							<input type="text" name="quantity" class="form-control"> <br>
							
							<label> Price: </label>
							<input type="text" name="price" class="form-control"> <br>
							
							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>
					
				</form>	
			
			</div>

</body>
</html>	