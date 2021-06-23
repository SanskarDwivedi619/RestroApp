<?php 
session_start();
/*session_destroy();*/
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	// code...
	if (isset($_POST['Addtocart'])) {
		// code...
		if (isset($_SESSION['cart'])) {
			// code...
			$myitems =array_map(function($element){return $element['itemName'];}, $_SESSION['cart']);
			echo "<script> 
				alert('Item  added');
				window.location.href='index1.php#menu';
				</script>";
		
			if (in_array($_POST['itemName'],$myitems)) {
				// code...
				echo "<script> 
				alert('Item Already added');
				window.location.href='index1.php#menu';
				</script>";
				
			}
			else{
			$count = count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('itemName' =>$_POST['itemName'] ,'price' =>$_POST['price'],'Quantity'=> 1);
			echo "<script> 
				alert('Item added');
				window.location.href='index1.php#menu';
				</script>";
			}
		}
		else{
			$_SESSION['cart'][0] = array('itemName' =>$_POST['itemName'] ,'price' =>$_POST['price'],'Quantity'=> 1);
			echo "<script> 
				alert('Item  added');
				window.location.href='index1.php#menu';
				</script>";
		}
	}
	if (isset($_POST['Remove_item'])) {
		// code...
		foreach ($_SESSION['cart'] as $key => $value) {
			// code...
			if ($value['itemName']==$_POST['itemName']) {
				// code...
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']= array_values($_SESSION['cart']);
				echo"<script> alert('Item Removed');
				window.location.href='cart.php';
				 </script>";
			}
		}
	}
}
 ?>