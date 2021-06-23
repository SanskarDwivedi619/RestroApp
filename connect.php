<?php
	$con = mysqli_connect("localhost", "root", "");
	if ($con) {
		# code...

		mysqli_select_db($con,"restroapp");

		/*echo "Yes Connected!...";*/
	}
?>