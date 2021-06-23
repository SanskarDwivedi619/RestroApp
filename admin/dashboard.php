<?php 

include 'connect.php';

session_start();

if (!isset($_SESSION['aname'])) {
	# code...
	header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>DashBoard Page</title>
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
		
		<div class="well">

			<h2>OVERVIEW </h2>
			<br><br>
			<div align="center" class="row">
				<div class="col-sm-3">
					
				</div>

				<div class="col-sm-6">

					<img src="images/male.jpg">

					<?php 
					$users = mysqli_query($con, "SELECT * FROM tbl_sign");

					$uresult = mysqli_num_rows($users);
					 ?>
					<h3>Total Reg- <?php echo $uresult; ?></h3>
				</div>
			</div>
		</div>


<div class="well">

			<h2>OVERVIEW </h2>
			<br><br>
			<div align="center" class="row">

				<div class="col-sm-12">

					<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>SR NO</th>
								<th>Item Name</th>
								<th>Availability</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$counter = 1; 

							$availability = mysqli_query($con, "SELECT * FROM tbl_stock");
							while ($sresult = mysqli_fetch_assoc($availability)) {
							 	# code...
							 ?>
							<tr>
								<td> <?php echo $counter ?> </td>
								<td><?php echo $sresult['item_name']; ?></td>
								<td id="stock_change"><?php echo $sresult['availability']; ?></td>
								<td><button class="btn btn-success" id="change" onclick="replace();">Change</button></td>

							</tr>
							<?php 
							$counter++;
							} ?>		
		</div>
	</div>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	var change = document.getElementById('change');
	var stock_change = document.getElementById('stock_change').innerText;
	function replace() {
  
    var elem = document.getElementById("stock_change");
    if (elem.innerText=="available") elem.innerText = "unavailable";
    else elem.innerText = "available";

	}
</script>
</body>
</html>