<?php

include 'conn.php';

if(isset($_POST['done'])){

	$id=$_GET['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$q="update machinesAndTools set id= $id,name='$name',price='$price',quantity='$quantity' where id=$id";
	$query=mysqli_query($con,$q);
	header('location:machinesAndToolsDisplay.php');
	
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
									<h1 class="text-white text-center">  UPDATE LOGIN INFO</h1>
							</div> <br>
							<label> Name:</label>
							<input type="text" name="name" class="form-control"> <br>
							
							<label> Price: </label>
							<input type="text" name="price" class="form-control"> <br>
							
							<label> Quantity: </label>
							<input type="text" name="quantity" class="form-control"> <br>
							
							
							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>
					
				</form>	
			
			</div>

</body>
</html>	