<?php session_start(); $a = $_SESSION['superhero']; 

  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "opt";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

$sql = "select name, phone, email, cid from user where email ='$a'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$name = $row['name'];
$mail = $row['email'];
$phone = $row['phone'];
$cid = $row['cid'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">OPTICAL STORE</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <!--<div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="shop.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.php">Specs</a>
                <a class="dropdown-item" href="lens.php">Lens</a>
                    
                </div>
            </li>
	          <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
	       <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>-->
	    </div>
	  </nav>
    <!-- END nav -->
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg')"; >
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span></span></p>
            <h1 class="mb-0 bread">Admin Dashboard</h1>
          </div>
        </div>
      </div>
	</div>-->
	
	<div class="row justify-content-center">
		<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
			<div class="cart-total mb-3">
                <h3>Hi! <?php echo $name;?></h3>
                <p class="d-flex">
					<span>Admin ID</span>
					<span><?php echo $cid; ?></span>
				<p class="d-flex">
					<span>Name</span>
					<span><?php echo $name; ?></span>
				</p>
				<p class="d-flex">
					<span>Mail Id</span>
					<span><?php echo $mail; ?></span>
				</p>
				<p class="d-flex">
					<span>Phone Number</span>
					<span><?php echo $phone; ?></span>
				</p>
				<!--<p class="d-flex">
					<span>Discount</span>
					<span><?php ?></span>
				</p>
				<hr>
				<p class="d-flex total-price">
					<span>Total</span>
					<span><?php ?></span>
				</p>-->
			</div>
			<p class="text-center"><a href="index.html" class="btn btn-primary py-3 px-4">Log Out</a></p>
		</div>
    </div> 	
    
    

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Product Detail</th>
                    <th>&nbsp;</th>		       
						        
                    <th>Power</th>
                    <th>Order Date</th>
                                                    
                    <th>Price</th>
                    <th>Status</th>
						      </tr>
                            </thead>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "opt";

                                $conn = new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM orders where status='Processing'";
                                
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                      ?>
                                        <tbody>
                                        <tr class="text-center">
                                        <td class="price"><?php echo $row['cid']; ?></td>
                                            
                                        <td class="price"><?php echo $row['orderid']; ?></td>
                                            <td class="image-prod"><img src = "images/frames/<?php echo $row['imgad'].".jpg"?>" width="250px"; height="150px";></div></td>
                                            
                                            <td class="price">

                                                <a href='pro.php?id=<?php echo $row['pid'];?>'><?php echo $row['productname']; ?></a>
                                               
                                            </td>

                                           
                                            
                                            <td class="price"><?php echo "Left: ".$row['lpower']; echo "<br>";echo "Right: ".$row['rpower']; ?></td>
                                            <td class="price"><?php echo $row['orderdate']; ?></td>

                                            <td class="total"><?php echo"₹".$row['price']; ?></td>
                                            <form method = "post">
                                            <td class="total"><button name="rupdate" class="btn btn-black py-3 px-5" style="color:white;" type="submit" value="<?php echo $row['orderid'];?>">PRODUCT READY</button>
                                                <!--<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">-->
                                            
                                        </td>
                                        </form>
                                            
                                            
                                        </tr><!-- END TR-->
                                        </tbody>
                                    <?php
                                    }
                                }
                            ?>

						  </table>
					  </div>
    			</div>
    		</div>
    		
			</div>
    </section>
    

    <center><b>YET TO DELEVERY</b></center>
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
                    <th>Order ID</th>
                    <th>Customer ID</th>

                    <th>Product Detail</th>
                    <th>&nbsp;</th>		       
						        
                    <th>Power</th>
                    <th>Order Date</th>
                                                    
                    <th>Price</th>
                    <th>Status</th>
						      </tr>
                            </thead>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "opt";

                                $conn = new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM orders where status='Ready for Delivery'";
                                
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                      ?>
                                        <tbody>
                                        <tr class="text-center">
                                            
                                        <td class="price"><?php echo $row['orderid']; ?></td>
                                        <td class="price"><?php echo $row['cid']; ?></td>

                                            <td class="image-prod"><img src = "images/frames/<?php echo $row['imgad'].".jpg"?>" width="250px"; height="150px";></div></td>
                                            
                                            <td class="price">

                                                <a href='pro.php?id=<?php echo $row['pid'];?>'><?php echo $row['productname']; ?></a>
                                               
                                            </td>

                                           
                                            
                                            <td class="price"><?php echo "Left: ".$row['lpower']; echo "<br>";echo "Right: ".$row['rpower']; ?></td>
                                            <td class="price"><?php echo $row['orderdate']; ?></td>
                                          <form method = "post">
                                            <td class="total"><?php echo"₹".$row['price']; ?></td>
                                            <td class="total"><button style="color: white;" name="dupdate" class="btn btn-black py-3 px-5" style="color: white;" type="submit" value="<?php echo $row['orderid'];?>">DELIVERED</button>
                                        </td>
                                            <!--    <td class="total"><p><input type="submit" class="btn btn-black py-3 px-5" name="dupdate" value="Delivered"> </input></p></td> 
                                                <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">-->
                                            <form>

                                        </td>
                                            
                                            
                                        </tr><!-- END TR-->
                                        </tbody>
                                    <?php
                                    }
                                }
                            ?>

						  </table>
					  </div>
    			</div>
    		</div>
    		
			</div>
    </section>

    <center><b>DELIVERED</b></center>
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
                    <th>Order ID</th>
                    <th>Customer ID</th>

                    <th>Product Detail</th>
                    <th>&nbsp;</th>		       
						        
                    <th>Power</th>
                    <th>Order Date</th>
                                                    
                    <th>Price</th>
                    <th>Status</th>
						      </tr>
                            </thead>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "opt";

                                $conn = new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM orders where status='Delivered'";
                                
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                      ?>
                                        <tbody>
                                        <tr class="text-center">
                                            
                                        <td class="price"><?php echo $row['orderid']; ?></td>
                                        <td class="price"><?php echo $row['cid']; ?></td>

                                            <td class="image-prod"><img src = "images/frames/<?php echo $row['imgad'].".jpg"?>" width="250px"; height="150px";></div></td>
                                            
                                            <td class="price">

                                                <a href='pro.php?id=<?php echo $row['pid'];?>'><?php echo $row['productname']; ?></a>
                                               
                                            </td>

                                           
                                            
                                            <td class="price"><?php echo "Left: ".$row['lpower']; echo "<br>";echo "Right: ".$row['rpower']; ?></td>
                                            <td class="price"><?php echo $row['orderdate']; ?></td>

                                            <td class="total"><?php echo"₹".$row['price']; ?></td>
                                                <td class="total"><p><?php echo $row['status'];?></p></td> 
                                                <!--<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">-->
                                            
                                        </td>
                                            
                                            
                                        </tr><!-- END TR-->
                                        </tbody>
                                    <?php
                                    }
                                }
                            ?>

						  </table>
					  </div>
    			</div>
    		</div>
    		
			</div>
    </section>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "opt";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      if(isset($_POST['dupdate']))
			{
        $up = $_POST['dupdate'];
			
				$sql3 = "UPDATE orders SET status='Delivered' WHERE orderid=$up";
				if ($conn->query($sql3) === TRUE) {
          header("location: admindashboard.php");

		
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			
				$conn->close();
      }
      if(isset($_POST['rupdate']))
			{
        $de = $_POST['rupdate'];
      
				$sql4 = "UPDATE orders SET status='Ready for Delivery' WHERE orderid=$de";
				if ($conn->query($sql4) === TRUE) {
          header("location: admindashboard.php");

		
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			
				$conn->close();
			}
			
			
			?>
    ?>

   <!-- <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Winkel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">-->

            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

 </body>
</html>