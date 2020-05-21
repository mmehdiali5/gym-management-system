<?php
include "conn.php";

if(isset($_POST['done'])){

	$type=$_POST['type'];
	$description=$_POST['description'];
	$q="INSERT INTO `job`(`type`, `description`) VALUES ('$type','$description')";
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
									<h1 class="text-white text-center">  INSERT JOB INFO</h1>
							</div> <br>
							<label> JOB:</label>
							<input type="text" name="type" class="form-control"> <br>
							
							<label> DESCRIPTION: </label>
							<input type="text" name="description" class="form-control"> <br>
							
							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>
					
				</form>	
			
			</div>

</body>
</html>	