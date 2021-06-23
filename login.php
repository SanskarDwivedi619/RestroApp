<?php 
include 'connect.php'; 

session_start();

if (isset($_SESSION['user'])) {
	# code...
	header('location:index.html');

}

if(isset($_POST['sbutton'])) {

	$mobile = $_POST['mobile'];
	$password = $_POST['password'];


	$sql = mysqli_query($con, "SELECT * FROM `tbl_sign`WHERE `username` = '".$mobile."' and `password` = '".$password."' ");

	while ($abc = mysqli_fetch_assoc($sql)) {
			# code...

			$_SESSION['rid'] = $abc['reg_id'];
			$_SESSION['user'] = $abc['name'];

		}
		 /*name of the session is user*/

 	header('location:index1.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
   <link href="style.css" rel="stylesheet">
   <style type="text/css">
   	body{
   		background-image: url(img/login.jpg);
   	}
   	#login{
  margin-top: 20%;
  box-sizing: border-box;
  padding: 20px;
  background-color: rgba(0, 0, 0, 0.2);
  border-radius: 20px;
  text-align: center;
}

#login h3{
	
	border-radius: 20px;
	font-family: 'Abril Fatface', cursive;
}
input{
	border-radius: 20px;
	width: 80%;
	height: 40px;
	text-align: center;
}

button{
	
}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4" id="login">
				<h3 class="text-center">Login</h3>
				<br>
				<form method="post">
					<input type="text" name="mobile"  placeholder="Mobile number" required="">

					<br><br>
					<input type="password" name="password"  placeholder="Password" required="">
					<br><br>
					<button class="btn btn-success text-center" name="sbutton" style="float: left;"> Login </button>
					<a href="signup.php" style="float: right;">Not a User? Click Here </a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>