<!--connect file-->
<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Paradise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- ayana link -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
=======
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
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
<<<<<<< HEAD
          <a class="navbar-brand" href="#"><span class="text-white  btn-dark btn-sl">Vah</span><span class="btn-sl btn-light"><b>ana</b></span></a>
=======
          <a class="navbar-brand" href="#"><span class="text-white  btn-dark btn-sl">Vehi</span><span class="btn-sl btn-light"><b>cle</b></span></a>
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
                <a class="nav-link" href="">Spare Parts</a>
              </li> 
				</div>
<<<<<<< HEAD
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
=======
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="./admin_area/index.php">Post an Advertisement</a>
              </li>
				</div>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
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
				
            </ul>
          </div>
        </div>
      </nav>






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
        <h3 class="text-center text-light">Vehicle Store</h3>
      </div>

<!--search nav-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" 
            placeholder="Search" aria-label="Search" name="search_data">
            
            <input type="submit" value="search" class="btn btn-outline-dark" name="search_data_product">
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
 <!-- include footer -->
 <?php
 include("./includes/footer.php");
 ?>
</div>

    
<<<<<<< HEAD
 <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
=======

>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
   
</body>
</html>