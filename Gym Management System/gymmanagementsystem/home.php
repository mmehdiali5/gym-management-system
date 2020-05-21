<?php
include("conn.php");
?>

<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT*FROM login_info where username='$username' && password='$password'";
    $data=mysqli_query($con,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		header('location:home.php');
	}
	else
	{
		echo "login Failed";
	}
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

			<div class="container">
				
				<div class="card-header bg-dark">
									<h1 class="text-white text-center">  WELCOME TO GYM MANAGEMENT SYSTEM HOMEPAGE</h1>
							</div> <br>
				
				<form  method="post" autocomplete="off">
				
							<button class="btn btn-danger" type="button" onclick="window.location.href='loginPage.php'"> LOGOUT </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='insert.php'"> REGISTER A NEW LOGIN </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='display.php'"> DISPLAY LOGIN INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='empInsert.php'"> INSERT EMPLOYEE RECORD </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='empDisplay.php'"> DISPLAY EMPLOYEE INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='machinesAndToolsInsert.php'"> INSERT MACHINES AND TOOLS RECORD </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='machinesAndToolsDisplay.php'"> DISPLAY MACHINES AND TOOLS INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='jobInsert.php'"> INSERT JOB RECORD </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='jobDisplay.php'"> DISPLAY JOB INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='paymentInsert.php'"> INSERT PAYMENT RECORD </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='paymentDisplay.php'"> DISPLAY PAYMENT INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='invoiceInsert.php'"> INSERT INVOICE RECORD </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='invoiceDisplay.php'"> DISPLAY INVOICE INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='MembersInsert.php'"> INSERT MEMBER RECORD </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='MembersDisplay.php'"> DISPLAY MEMBER INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='dietItemsInsert.php'"> INSERT DIETRY ITEM RECORD </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='dietItemsDisplay.php'"> DISPLAY DIETRY ITEM INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='gymInsert.php'"> INSERT GYM INFO </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='gymDisplay.php'"> DISPLAY GYM INFO </button> <br><br>
							
				</form>	
			
			</div>

</body>
</html>	