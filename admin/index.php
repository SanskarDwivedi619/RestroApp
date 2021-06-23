<?php 

include 'connect.php';

session_start();

if (isset($_SESSION['aname'])) {
	# code...
	header('location:dashboard.php');
}

if(isset($_POST['register'])) {

	$email = $_POST['email'];
	$pass = $_POST['password'];


	$sql = mysqli_query($con, "SELECT * FROM `tbl_admin`WHERE `email` = '".$email."' and `pass` = '".$pass."' ");


	$result = mysqli_fetch_array($sql);

	if ($result > 0) {
		# code...
		$_SESSION['aname'] = $result['email']; /*name of the session is user*/

 	header('location:dashboard.php');
	}
	else {
		echo "<script> 

		alert ('Invalid Entry')
		</script>";
	}

 	

 }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">





</head>
<body>
	<div class="container">

	
	
		<div class="row">
			<div class="col-sm-4">
				
			</div>

			<div class="col-sm-4">
				<form method="post">
					<div class="panel panel-default">
						<div class="panel panel-header">
							<h1 class=" jumbotron text-center">Admin Login </h1>
						</div>

						<div class="panel panel-body">


									<label>Email</label>
									<input type="text" name="email" id="email" class="form-control">
									<br><br>

									<label>Password</label>

									<input type="password" name="password" id="password" class="form-control">
									<br><br>
								</div>
									<div class="panel panel-footer">
									<button class="btn btn-success" type="submit" name="register"> Login </button>
									
									<!-- <p>Not Registered <a href="register.php"> Click Here </p> </a> -->
								</div>


							</div>
								</form>

			</div>
		</div>
		
		
	
</div>
</body>
</html>