<?php 
include 'connect.php';
	
if (isset($_POST['sbutton'])) {
 	# code...
 	$name = mysqli_real_escape_string($con, $_POST['name']);
 	/*$email = mysqli_real_escape_string($con, $_POST['email']);*/
 	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
 /*	$address = mysqli_real_escape_string($con, $_POST['address']);*/
 	$password = mysqli_real_escape_string($con, $_POST['password']);
 	$cnfpassword = mysqli_real_escape_string($con, $_POST['cnfpassword']);


		$query = mysqli_query($con,"SELECT * FROM `tbl_sign` WHERE mobile = '".$mobile."' ");
if (mysqli_num_rows($query)> 0)
{
  echo "<script> 
 		alert('Mobile Number Already Exists');
 		
 		</script>";
} else {
     $sql ="INSERT INTO tbl_sign (name, mobile, password, cnfpassword ) VALUES ('".$name."',".$mobile."','".$password."','".$cnfpassword."')";
     if (mysqli_query($con, $sql)) {
     	# code...
     	echo "<script> 
    alert('Data Inserted');
    window.location.href='login.php';
    
    </script>";

     }
     else{
     	echo "Data HAs not Inserted";
     }

}
}
 	
 /*	$sql_m = "SELECT * FROM users WHERE username='$username'";
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_m = mysqli_query($con, $sql_m);
  	$res_e = mysqli_query($con, $sql_e);

  	if (mysqli_num_rows($res_m) > 0) {
  	  $name_error = "Sorry... Mobile number already exists"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
 		$sql = mysqli_query($con, "INSERT INTO tbl_sign (name,email, mobile, address,  password, cnfpassword ) VALUES ('".$name."','".$email."','".$mobile."','".$address."','".$password."','".$cnfpassword."')");

 		$results = mysqli_query($con, $sql);
 	}

 	$i = 0;

 	if ($sql > $i) {

 		# code...
 		echo "<script> 
 		alert('Data Sent Successfully');
 		window.location.href='login.php';
 		</script>";

 	}
$i++;
 	
 }*/ ?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">
   <style type="text/css">
     body{
      background-image: url(img/signup.jpg);
     }
      #signup{
  margin-top: 10%;
  box-sizing: border-box;
  padding: 20px;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 20px;
  text-align: center;
}

#signup h3{
  border-radius: 10px;
  font-family: 'Abril Fatface', cursive;
}
input{
  border-radius: 20px;
  width: 80%;
  height: 40px;
  text-align: center;
}
textarea{
	border-radius: 20px;
  width: 80%;
  height: 40px;
  text-align: center;
}
   </style>
   </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        
      </div>
      <div class="col-sm-4" id="signup">
        <h3 class="text-center">Signup Here</h3>
        <br>
        <form method="post">
          <input type="text" name="name" placeholder="Enter Your Name" required="">
          <br><br>
         <!--  <input type="email" name="email" placeholder="Enter Your Email" required="">
          <br><br> -->
          <input type="text" name="mobile"  placeholder="Mobile number" required="">
          <br><br>
          <!-- <textarea name="address" id="address" placeholder="Enter Your Address"></textarea>
          <br><br> -->
          <input type="text" name="password" id="password" placeholder="Create Password" required="">
          <br><br>
           <input type="password" name="cnfpassword" id="cnfpassword"  placeholder="Confirm Password" required="">
          <br><br>
          <button class="btn btn-success text-center" name="sbutton" style="float: left;" onclick="passcheck()"> Signup </button>
         
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function passcheck() {
      // body...
      var a = document.getElementById('password').value;
      var b = document.getElementById('cnfpassword').value;

      if (a!==b) {
        alert('Your Password Does not match');
              }
            }
  </script>
</body>
</html>