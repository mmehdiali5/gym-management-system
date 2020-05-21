<?php
include "conn.php";

if(isset($_POST['done'])){

    $MID=$_POST['MID'];
	$MName=$_POST['MName'];
	$email=$_POST['email'];
	$HouseNo=$_POST['HouseNo'];
	$StreetNo=$_POST['StreetNo'];
	$City=$_POST['City'];
	$Country=$_POST['Country'];
	$q="INSERT INTO `members`(`MID`,`MName`, `email`,`HouseNo`,`StreetNo`,`City`,`Country`) VALUES ('$MID','$MName','$email','$HouseNo','$StreetNo','$City','$Country')";
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
									<h1 class="text-white text-center">  INSERT MEMBER INFO</h1>
							</div> <br>
							<label> Member ID:</label>
							<input type="text" name="MID" class="form-control"> <br>
							
							<label> Name:</label>
							<input type="text" name="MName" class="form-control"> <br>
							
							<label> Email: </label>
							<input type="text" name="email" class="form-control"> <br>
							
							<label> House number: </label>
							<input type="text" name="HouseNo" class="form-control"> <br>
							
							<label> Street Number: </label>
							<input type="text" name="StreetNo" class="form-control"> <br>
							
							<label> City: </label>
							<input type="text" name="City" class="form-control"> <br>
							
							<label> Country: </label>
							<input type="text" name="Country" class="form-control"> <br>
							
							
							<button class="btn btn-success" type="submit" name="done"> Submit </
							button> <br>
					</div>
					
				</form>	
			
			</div>

</body>
</html>	