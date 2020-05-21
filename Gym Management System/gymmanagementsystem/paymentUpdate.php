<?php
include "conn.php";

if(isset($_POST['done'])){

	$id=$_GET['id'];
	$amount=$_POST['amount'];
	$description=$_POST['description'];
	$type=$_POST['type'];
	$invoice_id=$_POST['invoice_id'];

	$q="UPDATE `payment` SET `id`=$id,`amount`=$amount,`description`='$description',`type`='$type',`invoice_id`='$invoice_id' WHERE id=$id";
	$query=mysqli_query($con,$q);
	header('location:paymentDisplay.php');
	
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
									<h1 class="text-white text-center">  UPDATE PAYMENT INFO</h1>
							</div> <br>
							<label> Amount :</label>
							<input type="text" name="amount" class="form-control"> <br>
							
							<label> Description: </label>
							<input type="text" name="description" class="form-control"> <br>
	
							<label> Type: </label>
							<input type="text" name="type" class="form-control"> <br>

							<label> Invoice ID: </label>
							<input type="text" name="invoice_id" class="form-control"> <br>

							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>

				</form>	
			
			</div>
</body>
</html>	