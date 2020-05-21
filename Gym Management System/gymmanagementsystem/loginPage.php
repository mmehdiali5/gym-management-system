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
<div class =vh-100 style="background-image: url('backImage.jpg');background-repeat: no-repeat;
    background-size: cover;height:100% ">
			<div class="container">
				
			<h2 style="color: white; text-align:center; font-size:40px">GYM MANAGEMENT SYSTEM LOGIN</h2>
				<form  method="post" autocomplete="off">

					
					<div class="form-group">

							<label  style="color:white" > Username:</label>
							<input type="text" name="username" class="form-control"> <br>
					</div>	
					
					<div class="form-group">
							<label  style="color:white "> Password: </label>
							<input type="password" name="password" class="form-control"> <br>
					</div>		
							<button class="btn btn-primary" type="submit" name="submit"> LOGIN </button> <br><br>
							<button class="btn btn-primary" type="button" onclick="window.location.href='insert.php'"> SIGN UP </button> <br><br>
				</form>	
			
			</div>

</body>
</html>	

