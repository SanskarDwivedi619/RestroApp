<?php 
session_start();
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Restro App</title>
  
    <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="style.css" rel="stylesheet">
     <style type="text/css">
       #fcart{
        margin-top: 10%;
       }
       #back{
        background-color: white;
       }
       body{
        font-family: sans-serif;
       }
     </style>
  </head>
  <body>
    <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> <a href="tel:+919595228984"> +919595228984 </a>
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sun: 11:00 AM - 23:00 PM</span>
      </div>
      </div>
  </div>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Restro App</a></h1>


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index1.php">Home</a></li>
          <li><a href="index1.php#about">About</a></li>
          <li><a href="index1.php#menu">Menu</a></li>
          <li><a href="index1.php#gallery">Gallery</a></li>
          <li><a href="index.php#chefs">Chefs</a></li>
          <li><a href="index1.php#contact">Contact</a></li>
          <?php 
          $count = 0;
          if (isset($_SESSION['cart'])) {
             // code...
            $count = count($_SESSION['cart']);
           } ?>
          <li><a href="cart.php" style="text-decoration: none;">
  <i class="fas fa-shopping-cart"></i> <span class="cart-items"> <?php echo "$count"; ?></span> </a> </li>
        </ul>
      </nav>
      </div>
  </header><!-- .nav-menu -->

    <div class="container" id="back">
      <div class="row" style="margin-top: 10%" >
        <div class="col-lg-12 text-center my-5">
          <h2 style="background-color: cornsilk; color: black;">My Cart</h2>
         </div>
            <div class="col-lg-12">
               <table class="table">
               <thead class="text-center">
                <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody class="text-center" style="background-color:#948341;">
    <?php 
    $total =0;
    if (isset($_SESSION['cart'])) {
     
      foreach ($_SESSION['cart'] as $key => $value) {
      $sr = $key+1;
     echo " <tr>
      <td>$sr</td>
      <td>$value[itemName]</td>
      <td>$value[price]<input type='hidden'class='iprice' value='$value[price]'></td>
      <td class='text-center'><input type='number' class='iquantity' onchange='subTotal();' value='$value[Quantity]' min='1' max='10'></td>
      <td class='itotal'></td>
      <form action='manage_cart.php' method='post'><td><button type='' class='btn btn-sm btn-outline-danger' name='Remove_item'>Remove </button>
      <input type='hidden' name='itemName' value='$value[itemName]'></form></td>
      </tr>";
    }
    
    }
     ?>
      </tbody>

</table>

            </div>
          </div>

            <div class="row">
              <div class="col-lg-4">
              <!-- <div class="border bg-light  p-4" style="color: black;">
                <h3 class="text-center" style="background-color: cornsilk; color: black; padding: 4px;">Required time to prepare your order:<br> <span id="rtime"></span> min</h3>
              </div> -->
            </div>
              <div class="col-lg-4">
              <div class="border bg-light  p-4" style="color: black;">
                <h3 class="text-center" style="background-color: cornsilk; color: black; padding: 4px;">Your Reward Points are &nbsp;&nbsp; <span id="rewardp"></span></h3>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="border bg-light  p-4" style="color: black;">
                <h6>Total:</h6>
                <h6 class="text-right" id="gtotal"></h6>
                <p>Your Reward Points </p>
                <b> <p class="text-right"id="applyp" style="font-size: 17px;"></p> </b>
                <h4>Grand Total:</h4><br>
                <b><h4 class="text-right" id="gttotal"></h4> </b>
                <form>
   <div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="cash">
  <label class="form-check-label" for="cash">
   Cash 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="payOnline" checked>
  <label class="form-check-label" for="payOnline">
   Pay Online
  </label>
</div>
<br>

                 <button class="btn btn-primary btn-block" id="confirm">Confirm Order</button>
                </form>
              </div>
             
            </div>
          </div>
          <div class="col-lg-12">
            
          </div>
        </div>
      </div>
    </div>










    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/venobox/venobox.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script type="text/javascript">
    var gt=0;
     var iprice= document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    var rewardp = document.getElementById('rewardp');
    var applyp = document.getElementById('applyp');
    var gttotal = document.getElementById('gttotal');
    var rtime = document.getElementById('rtime');
     function subTotal() {
      gtt = 0;
      ap = 0;
      rp = 0;
      gt=0;
      rt = 0;
       for (var i = 0; i < iprice.length; i++)
        {
          
         itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
         gt= gt+(iprice[i].value)*(iquantity[i].value);
         rp = (rp + gt)/10;
         ap = rp;
         gtt = (gt - ap);
         rt = (iprice.length + iquantity.length)*5;
       }
       gtotal.innerText=gt;
       rewardp.innerText=rp;
       applyp.innerText = ap;
       gttotal.innerText = gtt;
       rtime.innerText = rt;
         }
         subTotal();

         var cnforder = document.getElementById('confirm');
         function confirmorder() {
           // body...
         if (cnforder == 'clicked') {
          window.location.href = 'timeleft.php'
         }
         }
  </script>
  </body>
  </html>

  