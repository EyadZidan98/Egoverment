<?php 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>بخدمتك</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="new 1.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <style type="text/css">
      body{
        font-family: "Cairo";
      }
    </style>
  </head>
  <body>

	  <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navbar">
  <a class="navbar-brand" href="https://stipendiumhungaricum.hu"><img src="images/logo.png" class="logo"></a>
  <div class="icon-bar ml-auto order-lg-1">
    <div class="d-none d-lg-flex facebook-block">
      <a href="https://www.facebook.com/Orsolya-Pacsay-for-Stipendium-Hungaricum-821851368182865/" target='_blank'>
        <img src="https://stipendiumhungaricum.hu/includes/images/fb_icon_grey.png" class="icon d-lg-none">
      </a>
      <a href="https://www.facebook.com/Orsolya-Pacsay-for-Stipendium-Hungaricum-821851368182865/" target='_blank'>
        <img src="https://stipendiumhungaricum.hu/includes/images/fb_icon.png" class="icon d-none d-lg-block">
      </a>
    </div>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navItems" aria-controls="navItems" aria-expanded="false" aria-label="Toggle navigation">
    <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </button>

  <div class="collapse navbar-collapse order-lg-0" id="navItems">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item "><a class="nav-link" href="index-php.php">الصفحة الرئيسية</a></li>
	  <?php if (isset($_SESSION['user_fname'])) {
              ?>
			   <li class="nav-item"><a href="signup.php" class="nav-link"><?php echo $_SESSION['user_fname']; ?></a></li>
      <li class="nav-item "><a class="nav-link" href="logout.php">تسجيل خروج</a></li>
	   <?php } else { ?>
      <li class="nav-item "><a class="nav-link" href="signup.php">سجل معنا</a></li>
      <li class="nav-item "><a class="nav-link" href="login.php">تسجيل الدخول</a></li>
	    <?php  }?>
      <li class="nav-item "><a class="nav-link" href="our-services.php">خدماتنا</a></li>
      <li class="nav-item "><a class="nav-link" href="contact.php">تواصل معنا</a></li>
     
    </ul>
    <div class="navbar-footer d-lg-none">
      <div class="left">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="https://stipendiumhungaricum.hu/includes/pdf/Privacy_policy.pdf" target='_blank'>Privacy Policy</a></li>
          <li class="nav-item"><a class="nav-link" href="https://stipendiumhungaricum.hu/apply#faq">FAQ</a></li>
        </ul>
      </div>
      <div class="right">
        <a class="nav-link" href="https://www.facebook.com/Orsolya-Pacsay-for-Stipendium-Hungaricum-821851368182865/">
          <img src="https://stipendiumhungaricum.hu/includes/images/fb_icon.png" class="icon">
        </a>
      </div>
    </div>
  </div>
</nav>
    <!-- END nav -->
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/jordan.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index-php.php">تواصل معنا <i class="fa fa-chevron-right"></i></a></span> الصفحة الرئيسية  <span><i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">تواصل معنا</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper px-md-4">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>الموقع:</span>دوار المشاغل, دائرة الجوازات الأردنية</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>رقم الهاتف:</span> <a href="tel://+962 790000000">+962 790000000 </a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>البريد الإلكتروني:</span> <a href="mailto:government@gover.com">government@gover.com</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text">
					            <p><span>الموقع</span> <a href="#">be-khedmetak.com</a></p>
					          </div>
				          </div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">تواصل معنا</h3>
										<form method="POST" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">الإسم</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="الإسم">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">البريد الإلكتروني</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="البريد">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">الموضوع</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">رسالتك</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="رسالتك"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="أرسل" class="btn btn-danger1 py-3 px-4">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 order-md-first d-flex align-items-stretch">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27070.272831697283!2d35.90890903955078!3d31.993867600000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5f814ac0f9a3%3A0xf944aaa698c58d81!2zRG9jdW1lbnRhdGlvbiBPZmZpY2Ug2K_Yp9im2LHYqSDYp9mE2KPYrdmI2KfZhCDYp9mE2YXYr9mG2YrYqSDZiNin2YTYrNmI2KfYstin2Ko!5e0!3m2!1sen!2sjo!4v1597570423691!5m2!1sen!2sjo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

     <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">بخدمتك</a></h2>
              <p>جميع خدماتك الحكومية أصبحت أونلاين الآن عن طريق موقع بخدمتك</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">تصفح</h2>
              <ul class="list-unstyled">
                <li><a href="our-services.php"><span class="fa fa-chevron-right mr-2"></span>خدماتنا</a></li>
                <li><a href="signup.php"><span class="fa fa-chevron-right mr-2"></span>سجل معنا</a></li>
                <li><a href="login.php"><span class="fa fa-chevron-right mr-2"></span>تسجيل دخول</a></li>
                <li><a href="index-php.php"><span class="fa fa-chevron-right mr-2"></span>الصفحة الرئيسية</a></li>
              </ul>
            </div>
          </div>
     
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">عندك سؤال؟</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map marker"></span><span class="text">دائرة الأحوال المندنية و الجوازات, دوار المشاغل, عمان</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+962 60000000</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">government@gover.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
		
	            <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | بخدمتك </p>
	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
    
  

  <!-- loader -->
 <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>