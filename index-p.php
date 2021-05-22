<?php 
require 'config-db.php';
session_start();


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
    
    <div class="hero-wrap" style="background-image: url('images/jordan.jpg'); data-stellar-background-ratio:0.5;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
            <div class="text w-100">
              <h1 style="text-align: right;" class="mb-4">أكبر موقع للخدمات و الأوراق الحكومية</h1>
              <p style="text-align: right;" class="mb-4">جميع خدماتك و أوراقك الحكومية اصبحت اونلاين الآن عن طريق موقعنا</p>
              <p><a href="contact.php" class="btn btn-danger1 py-3 px-4">تواصل معنا</a> <a href="our-services.php" class="btn btn-white py-3 px-4">خدماتنا</a></p>
            </div>
          </div>
          <a href="" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
          	<span class="fa fa-play"></span>
          </a>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container-fluid">
    		<div class="row no-gutters">
    			<div class="col-md-3 d-flex">
    				<div class="intro aside-stretch d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-case"></span>
    					</div>
    					<div class="text">
    						<h2>تصديق الصور</h2>
    						<p style="text-align: right;">تصديق الأوراق الحكومية الرسمية من الجهات الرسمية </p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex">
    				<div class="intro color-1 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-auction"></span>
    					</div>
    					<div class="text">
    						<h2>خدمات المحكة</h2>
    						<p style="text-align: right;">نقدم جميع الخدمات التي تخص أوراق المحكمة مثل القيد الفردي .. الخ.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex">
    				<div class="intro color-2 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-court"></span>
    					</div>
    					<div class="text">
    						<h2>التبيغ عن الفقدان</h2>
    						<p style="text-align: right;">خدمات التبليغ عن الأوراق الرسيمية المفقودة</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 d-flex">
    				<div class="intro color-3 d-lg-flex w-100">
    					<div class="icon">
    						<span class="flaticon-family"></span>
    					</div>
    					<div class="text">
    						<h2>أوراق العائلة</h2>
    						<p style="text-align: right;">نقدم جميع الخدمات التي تخص أوراق العائلة من شهادة ميلاد و دفتر عائلة .. الخ.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



		<section class="ftco-counter ftco-section ftco-no-pt mt-4 ftco-no-pb img" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
            <div class="block-18 py-4 w-100">
            	<span class="icon flaticon-checklist"></span>
              <div class="text align-items-center">
                <strong class="number" data-number="1500">0</strong>
                <span>المستفيدين من موقعنا</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
            <div class="block-18 py-4 w-100">
            	<span class="icon flaticon-checklist"></span>
              <div class="text align-items-center">
                <strong class="number" data-number="10">0</strong>
                <span>الجهات الحكومية المغطية من موقعنا</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
            <div class="block-18 py-4 w-100">
            	<span class="icon flaticon-checklist"></span>
              <div class="text align-items-center">
                <strong class="number" data-number="250">0</strong>
                <span>الموظفين في موقع بخدمتك</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
            <div class="block-18 py-4 w-100">
            	<span class="icon flaticon-checklist"></span>
              <div class="text align-items-center">
                <strong class="number" data-number="1698">0</strong>
                <span>الأوراق المطبوعة لدينا</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">خدماتنا</span>
            <h2>ماذا نقدم</h2>
          </div>
        </div>
    		<div class="row">
    			
          <div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<a href="passport.php">
              <div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-stats"></span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-stats"></span>
	    					</div>
    					</div>
    				<h2>جواز سفر</h2>
    					<p>اطلب معاملة جواز السفر أو أي خدمات تخصه الآن عن طريق موقع بخدمتك</p>
    				</div>
          </a>
    			</div>

    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <a href="family-paper.php">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-family"></span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-family"></span>
	    					</div>
    					</div>
    					<h2>دفتر عائلة</h2>
  						<p>اطلب معاملة دفتر العائلة أو أي خدمات تخصه الآن عن طريق موقع بخدمتك</p>
    				</div>
            </a>
    			</div>

    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <a href="indiv-paper.php">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-court"></span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-court"></span>
	    					</div>
    					</div>
    					<h2>قيد فردي</h2>
  						<p>طلب قيد فردي الآن عن طريق موقع بخدمتك</p>
    				</div>
            </a>
    			</div>

    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <a href="certified-copies.php">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-case"></span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-case"></span>
	    					</div>
    					</div>
    					<h2>صور مصدقة</h2>
    					<p>أطلب صور مصدقة لأي من الأوراق الحكومية الآن عن طريق  موقع بخدمتك</p>
    				</div>
            </a>
    			</div>

    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <a href="birth_certifi.php">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-family"></span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-family"></span>
	    					</div>
    					</div>
    					<h2>شهادة ميلاد</h2>
  						<p>أطلب شهادة ميلاد مصدقة الآن عن طريق موقع بخدمتك</p>
    				</div>
            </a>
    			</div>

    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <a href="missing_paper.php">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-auction"></span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-auction"></span>
	    					</div>
    					</div>
    					<h2>التبليغ عن وثائق مفقودة</h2>
  						<p>بإمكانك الآن التبليغ عن أي وثائق حكومية مفقودة عن طريق موقع بخدمتك</p>
    				</div>
            </a>
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
<!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><Circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
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