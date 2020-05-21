<?php

include 'conn.php';

if(isset($_POST['done'])){

	$gymID=$_GET['gymID'];
	$gymType=$_POST['gymType'];
	$gymDescription=$_POST['gymDescription'];
	$gymAddress=$_POST['gymAddress'];
	
	$q="update gym set gymID= $gymID,gymType='$gymType',gymDescription='$gymDescription',gymAddress='$gymAddress'where gymID=$gymID";
	$query=mysqli_query($con,$q);
	header('location:gymDisplay.php');
	
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
									<h1 class="text-white text-center">  UPDATE GYM INFO</h1>
							</div> <br>
							<label> GYM ID:</label>
							<input type="text" name="gymID" class="form-control"> <br>
							
							<label> GYM TYPE:</label>
							<input type="text" name="gymType" class="form-control"> <br>
							
							<label>  GYM Description: </label>
							<input type="text" name="gymDescription" class="form-control"> <br>
							
							<label>  GYM ADDRESS: </label>
							<input type="text" name="gymAddress" class="form-control"> <br>
										
							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>
					
				</form>	
			
			</div>

</body>
</html>	