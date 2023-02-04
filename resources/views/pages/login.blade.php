<!DOCTYPE html>
<html>
    
<head>
	<title>sigin Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="{{asset('design')}}/maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="{{asset('design')}}/maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="{{asset('design')}}/cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('design')}}/css/style.sigin.css">

  <!-- Favicon -->
  <link href="{{ asset('design')}}/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('design')}}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('design')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('design')}}/css/style.css" rel="stylesheet">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	 <!-- Topbar Start -->
	 <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">About</a>
                    <a class="text-body mr-3" href="">Contact</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button" ><a href="login">Login</a></button>
                            <button class="dropdown-item" type="button" ><a href="register">Register</a></button>
							<button class="dropdown-item" type="button" ><a href="register">Logout</a></button>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light " data-toggle="dropdown">USD</button>
                       
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light " data-toggle="dropdown">EN</button>
                        
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    {{-- <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Sasta</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Hoga</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <a href=""><i class="fa fa-search"></i></a>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
				{{-- <button type="button" class="btn btn-outline-primary">Logout</button> --}}
                 <p class="m-0">Third Party Service</p>
                <h5 class="m-0">Amazon Alibaba Ebay</h5> 
            </div>
        </div>
    </div>
    <!-- Topbar End -->
	  <!-- Navbar Start -->
	  <div class="container-fluid bg-dark mb-30">
		<div class="row px-xl-5">
			<div class="col-lg-3 d-none d-lg-block">
			 </div>
			<div class="col-lg-9">
				<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
					<a href="" class="text-decoration-none d-block d-lg-none">
						<span class="h1 text-uppercase text-dark bg-light px-2">Sasta</span>
						<span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Hoga</span>
					</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
						<div class="navbar-nav mr-auto py-0">
							<a href="mainindex" class="nav-item nav-link active">Home</a>
							<a href="hotproduct" class="nav-item nav-link">Hot Products</a>
							<a href="detail.html" class="nav-item nav-link">Coupon</a>
							<a href="detail.html" class="nav-item nav-link">Events</a>
	 
							<a href="usedproducts.html" class="nav-item nav-link">Used Products</a>
							<a href="contactus" class="nav-item nav-link">Contact Us</a>
						</div>
						<div class="navbar-nav ml-auto py-0 d-none d-lg-block">
							<a href="" class="btn px-0">
								<i class="fas fa-heart text-primary"></i>
								<span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
							</a>
							</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- Navbar End -->
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{asset('design')}}/img/SASTA.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="/login" method="POST">
						<div class="input-group mb-3">
							@csrf
							<div class="input-group-append">
								
								<span class="input-group-text" for="emailid"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" id="emailid" placeholder="email" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						{{-- <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div> --}}
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="signUp.html" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	   <!-- Footer Start -->
	   <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
		<div class="row px-xl-5 pt-5">
			<div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
				<h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
				<p class="mb-4">Here we will provide all kind of product  with deeply analysis for customer care.We can prodive the second hand products to everyone. Just come here & enjoy </p>
				<p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>room#209 Iqbal Hostel, Rahim Yar Khan</p>
				<p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>nmadni827@gmail.com</p>
				<p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+92 302 2357042</p>
			</div>
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-md-4 mb-5">
						<h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
						<div class="d-flex flex-column justify-content-start">
							<a class="text-secondary mb-2" href="mainindex"><i class="fa fa-angle-right mr-2"></i>Home</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Hot Products</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Coupon</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Event</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
							<a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<h5 class="text-secondary text-uppercase mb-4">My Account</h5>
						<div class="d-flex flex-column justify-content-start">
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
							<a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
							<a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
						<p>Subscribe here, new products update daily </p>
						<form action="">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Your Email Address">
								<div class="input-group-append">
									<button class="btn btn-primary">Sign Up</button>
								</div>
							</div>
						</form>
						<h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
						<div class="d-flex">
							<a class="btn btn-primary btn-square mr-2" href="www.twitter.com/sastahoga"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-primary btn-square mr-2" href="www.facebook.com/sastahoga"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-primary btn-square mr-2" href="www.linkdin.com/sastahoga"><i class="fab fa-linkedin-in"></i></a>
							<a class="btn btn-primary btn-square" href="www.instagram.com/sastahoga"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
			<div class="col-md-6 px-xl-0">
				<p class="mb-md-0 text-center text-md-left text-secondary">
					&copy; <a class="text-primary" href="www.sastahogablogpost.com">Domain</a>. All Rights Reserved. Designed
					by
					<a class="text-primary" href="#">Nasir Madni</a>
				</p>
			</div>
			<div class="col-md-6 px-xl-0 text-center text-md-right">
				<img class="img-fluid" src="{{('design')}}/img/payments.png" alt="">
			</div>
		</div>
	</div>
	<!-- Footer End -->
	  
	  
</body>

</html>
