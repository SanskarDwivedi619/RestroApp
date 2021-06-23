<?php 

include 'connect.php';

session_start();
/*session_destroy();*/

if (isset($_POST['messages'])) {
  # code...
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $subject = mysqli_real_escape_string($con, $_POST['subject']);
  $message = mysqli_real_escape_string($con, $_POST['message']);


  $sql = mysqli_query($con, "INSERT INTO tbl_message (`name`, `email`, `subject`, `message`) VALUES ('".$name."', '".$email."', '".$subject."','".$message."') ");

    if ($sql > 0) {

      echo "<script> alert ('Successfully Posted ');
  window.location.href= 'index1.php';</script>";
      # code...
    }
}


?>

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
   	.food-add-title1{
      font-style: italic;
    font-family: "Poppins", sans-serif;
    float: right;
    }
.food-add-title1 button{
  
  color: white; 	

}

.card{
  background: rgba(12, 11, 9, 0.6);;
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
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#contact">Contact</a></li>
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





  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Restro App</span></h1>
          <h2>Delivering great food</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Order Online</a>
           <!--  <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a> -->
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
        </div>

      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>The Restro App</h3>
            <p class="font-italic">
              As per the current covid-19 pandemic from which we all are suffering from and unable to go to restaurants freely. 



            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> From this web application we can avoid coming in contact with things that can spread disease.</li>
              <li><i class="icofont-check-circled"></i>With the help of contact less order placing we can easily do social distancing and even customer can give order with ease.
With the help of contact less order placing we can easily do social distancing and even customer can give order with ease.
</li>
              <li><i class="icofont-check-circled"></i> Before the pandemic there was no use of barcodes in restaurants, so here we came up with this idea of having the available menu by just scanning the barcode.</li>

              <li><i class="icofont-check-circled"></i> You just need to scan the barcode and place the order and enjoy contact less dine in.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <p>To maintain social distance </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <p>To create safe dining experience</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <p>To create a digital and safe environment</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starter">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
              <li data-filter=".filter-Main-Course">Main Course</li>
            </ul>
          </div>
        </div>
     <div class="container">
       <div class="row">
         <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
           <div class="card">
  <img src="img/menu/frenchfries.jfif" class="card-img-top" alt="...">
  <div class="card-body">
     <br><br><br>
    <h5 class="card-title">French fries</h5>
    <p class="card-text">Price 100/-</p>
   
    <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="itemName" value="frenchfries">
    <input type="hidden" name="price" value="100">
  </div>
</div>
</form>
         </div>
          <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
           <div class="card">
  <img src="img/menu/chickennuggets.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chicken Nuggets</h5>
    <p class="card-text">Price 180/-</p>
    <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="itemName" value="chickennuggets">
    <input type="hidden" name="price" value="180">
  </div>
</div>
</form>
         </div>
          <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
           <div class="card filter-salads">
  <img src="img/menu/grilled.jfif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Veg Grilled Sandwich</h5>
    <p class="card-text">Price 150/-</p>
    <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="itemName" value="grilled">
    <input type="hidden" name="price" value="150">
  </div>
</div>
</form>
         </div>
          <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
           <div class="card">
  <img src="img/menu/pannertikka.jpg" class="card-img-top" alt="..." height="245px;">
  <div class="card-body">
    <h5 class="card-title">Panner tikka</h5>
    <p class="card-text">Price 250/-</p>
    <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="itemName" value="pannertikka">
    <input type="hidden" name="price" value="250">
  </div>
</div>
</form>
         </div>
       </div>
     </div>
		</div>
	</section>
		 <br><br>
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">South Indian Special </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Fruit Salad</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Italian Sandwiches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Shakes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Chinese Combo</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>South Indian Special </h3>
                    <p class="font-italic">The majority of dishes are vegetable- or lentil-based. The hot and spicy dishes are a speciality of the region. Mainly vegetarian dishes are served as part of the cuisine of the region. The uniqueness of Telugu cuisine is that it is a blend of both Hindu as well as Muslim styles of cooking.</p>
                     
                     <p class="card-text">Price 500/-</p>
                     <form action="manage_cart.php" method="post">
                       <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
                      <input type="hidden" name="itemName" value="South Indian Special">
                         <input type="hidden" name="price" value="500">
                     </form>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fruit Salad</h3>
                    <p class="font-italic">Fruit salad is a dish consisting of various kinds of fruit, sometimes served in a liquid, either their own juices or a syrup. In different forms, fruit salad can be served as an appetizer, a side salad, or a dessert.</p>

                     
                     <p class="card-text">Price 250/-</p>
                     <form action="manage_cart.php" method="post">
                       <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
                      <input type="hidden" name="itemName" value="Fruit Salad">
                         <input type="hidden" name="price" value="250">
                     </form>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Italian Sandwich</h3>
                    <p class="font-italic">Profezeni are traditional Italian sandwiches hailing from Trentino. They're made with a combination of thick slices of bread, milk, eggs, butter, onions, parsley, flour, olive oil, and chopped veal brains.</p>
                    
                     <p class="card-text">Price 350/-</p>
                    <form action="manage_cart.php" method="post">
                       <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
                      <input type="hidden" name="itemName" value="Italian Sandwich">
                         <input type="hidden" name="price" value="350">
                     </form>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Shakes</h3>
                    <p class="font-italic">A milkshake is a sweet drink made by blending milk, ice cream, and flavorings or sweeteners such as butterscotch, caramel sauce, chocolate syrup, fruit syrup, or whole fruit into a thick, sweet, cold mixture. It may also be made using other types of milk such as almond milk, coconut milk, or soy milk. </p>
                    <p class="card-text">Price 200/-</p>
                    <form action="manage_cart.php" method="post">
                       <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
                      <input type="hidden" name="itemName" value="Shakes">
                         <input type="hidden" name="price" value="200">
                     </form>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Chinese Combo</h3>
                    <p class="font-italic">Very delicious non veg Chinese meal, A good choice of lunch or dinner.
                      Item: Veg Chinese Combo Meal

Menu items: Fried Rice+Noodles+2 PC Chicken Manchurian(Gravy)(150 GM) Or Chilli Chicken (150 GM)+Spring Roll+Sauce+Dessert.



                      <p class="card-text">Price 350/-</p>
                    <form action="manage_cart.php" method="post">
                       <button type="submit" name="Addtocart" class="btn btn-info">Add To Cart</button>
                      <input type="hidden" name="itemName" value="Chinese Combo">
                         <input type="hidden" name="price" value="350">
                     </form></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
<!-- ======= Book A Table Section ======= -->
   <!--  <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">
      	
      	<div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>
    </div>

   
    	
    </div>
</div>
      </div>
    </section> --><!-- End Book A Table Section -->

    

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">

              <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 23:00 PM
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>restroapp@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 9595228984</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" id="message">

            <form  method="post">
              <div class="row">
                <div class="col-lg-6">
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
              </div>
               <div class="col-lg-6">
                <input type="text" name="email" class="form-control" placeholder="Enter email">
              </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">
                <textarea name="message" placeholder="message" class="form-control"></textarea>
              </div>
              </div>
              <br>

            <div class="text-center">
              <button type="submit" name="messages" class="btn btn-warning">Send Message</button>
            </div>  
              
              
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="footer-info">
              <h3>Restro App</h3>
              <p>
                <strong>Phone:</strong> +91 9595228984<br>
                <strong>Email:</strong> restroaap@email.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index1.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Menu</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
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
  </script>

</body>


</html>