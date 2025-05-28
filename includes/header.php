<?php 

	session_start(); // Start the session
	define("APPURL", "http://localhost/hotel-booking/");
	$currentPage = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Angkor Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/jquery.timepicker.css">

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/style.css">
  </head>
  <body>
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">097 6986 872</a> or <span class="mailus">email us:</span> <a href="#">AngkorHotels@outlook.com</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
								<a href="https://www.facebook.com/sreyneak.koeurng" class="d-flex align-items-center justify-content-center" target="_blank"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="<?php echo APPURL; ?>">Angkor<span>   Hotel</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>"><a href="<?php echo APPURL; ?>" class="nav-link">Home</a></li>
				<li class="nav-item <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>"><a href="<?php echo APPURL; ?>/about.php" class="nav-link">About</a></li>
				<li class="nav-item <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>"><a href="<?php echo APPURL; ?>/services.php" class="nav-link">Services</a></li>
				<li class="nav-item <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>"><a href="<?php echo APPURL; ?>/contact.php" class="nav-link">Contact</a></li>
			 <?php if (!isset($_SESSION['username'])) : ?>
			  <li class="nav-item <?php echo ($currentPage == 'login.php') ? 'active' : ''; ?>"><a href="<?php echo APPURL;?>/auth/login.php" class="nav-link">Login</a></li>
			  <li class="nav-item <?php echo ($currentPage == 'register.php') ? 'active' : ''; ?>"><a href="<?php echo APPURL;?>/auth/register.php" class="nav-link">Register</a></li>
			  <?php else : ?>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<?php echo $_SESSION['username']; ?>
				</a>
				    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="<?php echo APPURL; ?>/users/bookings.php?id=<?php echo $_SESSION['id']; ?>">View booking</a></li>
					    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
				    </ul>
				</li>
				<?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->