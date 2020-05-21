<?php
include "conn.php";

if(isset($_POST['done'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$job_id=$_POST['job_id'];
	$login_id=$_POST['login_id'];
	$housenum=$_POST['housenum'];
	$stnum=$_POST['stnum'];
	$city=$_POST['city'];
	$q="INSERT INTO `employee`(`name`, `email`,`job_id`,`login_id`,`housenum`,`stnum`,`city`) VALUES ('$name','$email','$job_id','$login_id','$housenum','$stnum','$city')";
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
									<h1 class="text-white text-center">  INSERT EMPLOYEE INFO</h1>
							</div> <br>
							<label> Name:</label>
							<input type="text" name="name" class="form-control"> <br>
							
							<label> Email: </label>
							<input type="text" name="email" class="form-control"> <br>
							
							<label> Job Id: </label>
							<input type="text" name="job_id" class="form-control"> <br>
							
							<label> Log in Id: </label>
							<input type="text" name="login_id" class="form-control"> <br>
							
							<label> House number: </label>
							<input type="text" name="housenum" class="form-control"> <br>
							
							<label> Street Number: </label>
							<input type="text" name="stnum" class="form-control"> <br>
							
							<label> City: </label>
							<input type="text" name="city" class="form-control"> <br>
							
							
							
							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>
					
				</form>	
			
			</div>

</body>
</html>	