<<<<<<< HEAD
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

=======
<!--connect file-->
<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Vahana</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
   <nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><span class="text-white  btn-dark btn-sl">Vah</span><span class="btn-sl btn-light"><b>ana</b></span></a>
=======
    <title>Vehical Paradise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- ayana link -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-white "></nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white "></nav>

<!--nav bar-->
<nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="text-white  btn-dark btn-sl">Va</span><span class="btn-sl btn-light"><b>hana</b></span></a>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
<<<<<<< HEAD
            <ul class="navbar-nav navround ms-auto mb-2 mb-lg-0 bg-dark">
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Home</a>
=======
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 bg-dark">
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="./home.php">Home</a>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="display_all.php">Vehicle Store</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" href="">Spare Parts</a>
              </li> 
				</div>
				<?php 
				if(!isset($_SESSION['username'])){
					echo "<div class='btn '>
              <li class='nav-item'>
                <a class='nav-link' href='./users_area/user_login.php'>Post an Advertisement</a>
              </li>
				</div>";
				}else { echo "<div class='btn '>
              <li class='nav-item'>
                <a class='nav-link' href='./admin_area/index.php'>Post an Advertisement</a>
              </li>
				</div>";}
				?>
				
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About us</a>
              </li> 
				</div>
        <?php
         if(!isset($_SESSION['username'])){
          echo 
          "<div class='btn'>
          <li class='nav-item'>
            <a class='nav-link btn btn-warning' style='scale:0.9' href='./users_area/user_login.php'><i class='bi bi-person-circle'></i> Log In</a>
          </li>  
    </div>";
         }else{echo 
          "<div class='btn'>
          <li class='nav-item'>
            <a class='nav-link btn btn-warning' style='scale:0.9' href='./session/logout.php'><i class='bi bi-person-circle'></i>Log Out</a>
          </li>  
    </div>";}
         
         ?>
				
=======
                <a class="nav-link" href="#services">Notices</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Post an Advertisement</a>
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="#team">About</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item ">
				  
                <a class="nav-link btn btn-warning " style="scale:0.9" href="./users_area/user_login.php"><i class="bi bi-person-circle"></i>Login</a>
              </li>  
				</div>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
            </ul>
          </div>
        </div>
      </nav>
<<<<<<< HEAD
         
         
         
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/audi2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Dream Car</h5>
                              <p>Let's find your Dream Car with Us.</p>
                              <p><a href="display_all.php" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/car-future.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Get in touch with the Future</h5>
                              <p>Under Development</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/bidding.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>For Your Price</h5>
                              <p>Let's buy your Vehicle for your Price</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    
      <!-- services section Starts -->
      
			  
              <section id="services" >
				   <div class="container section-padding">
            <h1><center>SERVICES</center></h1>
            <div class="img">
              <div class="img-cap">
				 <div class="img-margin1">
            <a href=""><img  src="img/car.jpg"></a> 
				  </div>
            <a href=""><h3> Vehicles</h3></a> 
				   
              </div>
                <div class="img-cap">
					<div class="img-margin2">
              <a href=""><img  src="img/sparepart.jpg" ></a>  
					</div>
              <a href=""><h3>Spare Parts</h3></a> 
                </div>
                <div class="img-cap">
					<div class="img-margin3">
              <a href=""><img  src="img/OIP.jpg"></a> 
					</div>
              <a href=""><h3>Bidding</h3></a> 
                </div>
                <div class="img-cap">
				<div class="img-margin4">
                    <a href=""><img  src="img/forum.jpg"></a>  
					</div>
                    <a href=""><h3>Forums</h3></a> 
					
                </div>
                      
            </div>
				  </div>
        </section>
      <!-- services section Ends -->

      <!-- portfolio strats -->
      <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Description</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="#" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Vehicle Store</h3>
                            <p class="lead">Pending</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="#" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Spare Parts Store</h3>
                            <p class="lead">Pending</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
				
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="#" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Bidding</h3>
                            <p class="lead">Pending</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- portfolio ends -->
      
      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Leave a message</h2>
                        <p>.......</p>
                    </div>
                </div>
            </div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<form action="#" class="bg-light p-4 m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Full Name" required="" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
								</div>
							</div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section>
      <!-- contact ends -->
      <!--footter-->
=======






<div class="container-fluid p-0 ">
    <!--first nav-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <img src="./assets/logo3.png" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
             
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu">
                <a class="nav-link" href="display_all.php">Vehical <span class="sr-only">(current)</span></a>
                <a class="dropdown-item" href="#">Spare parts</a>
                <a class="dropdown-item" href="#">Bidding</a>
                <a class="dropdown-item" href="#">Wanted</a>
               
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-heart" aria-hidden="true"></i><sub>1</sub>
                    Wishlist</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li> -->
             

          </ul>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
      <div class="bg-light p-1">
        <h3 class="text-center text-light">Vehicle store</h3>
      </div>

<!--search nav-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button> -->
            <input type="submit" value="search" class="btn btn-outline-dark">
          </form>
        </div>
      </nav>



      


<!--product list and side nav-->
<div class="row px-1">
  <div class="col-md-10">
    <!--products-->
    <div class="row">

    <!--fetching products-->
    <?php 
    //calling function
    get_all_products();
    get_unique_categories();
    get_unique_brands();

    ?>
    
      <!--row end-->
     </div> 
     <!--col end-->       
  </div>

  <div class="col-md-2 bg-secondary p-0">
<!--brans to dysplay-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h5>Brand</h5></a>      
      </li>
<?php 
getbrands();
?>

    </ul>
<!--brans to dysplay-->
 <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h5>Categores</h5></a>      
      </li>
      <?php 
getcategories();
?>

    </ul>
     </div>
 </div>
 <!--footter-->
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
 <!-- include footer -->
 <?php
 include("./includes/footer.php");
 ?>
</div>

<<<<<<< HEAD







    
    
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




<!--for getting the form download the code from download button-->
=======
    

   
</body>
</html>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
