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

     <section class="hero-wrap hero-wrap-2" style="background-image: url('images/jordan.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">قيد فردي <i class="fa fa-chevron-right"></i></a></span>
              <span class="mr-2"><a href="index.html">خدماتنا <i class="fa fa-chevron-right"></i></a></span> <span> الصفحة الرئيسية  <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">بخدمتك</h1>
          </div>
        </div>
      </div>
    </section>

<?php if (isset($_SESSION['nat_id'])) {?>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">خدماتنا</span>
            <h2>قيد فردي</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md">
          <form method="POST" action="indiv-client.php">

			<div style="margin-left: 200px;" class="col-sm-12 col-md">
            <label>الرقم الوطني<input style="width: 360px;" value="<?php echo $_SESSION['nat_id']; ?>" type="text" name="nationalID" class="form-control" required></label>
           </div>

			<div style="margin-left: 200px;" class="col-sm-12 col-md">
		   <label>الإسم الأول <input style="width: 360px;" value="<?php echo $_SESSION['user_fname']; ?>" type="text" name="f_name" class="form-control" required></label> 
			</div>

			<div style="margin-left: 200px;" class="col-sm-12 col-md">
            <label>الإسم الثاني <input style="width: 360px;" value="<?php echo $_SESSION['user_mname']; ?>" type="text" name="m_name" class="form-control" required></label> 
			</div>

			<div style="margin-left: 200px;" class="col-sm-12 col-md">
            <label>الإسم الأخير <input style="width: 360px;" value="<?php echo $_SESSION['user_lname']; ?>" type="text" name="l_name" class="form-control" required></label> 
			</div>

			<div style="margin-left: 200px;" class="col-sm-12 col-md">
           <label>رقم الجواز<input style="width: 360px;" type="text" name="passport_num" class="form-control" required></label>
			</div>

			<div style="margin-left: 200px;" class="col-sm-12 col-md">
           <label for="cars">اختر الخدمة :

			<select class="form-control" name="service" id="services" required>
  				<option value="new">إصدار قيد فردي</option>
  				
  			
			</select>
			</label><br>
            </div>
			
			<div style="margin-left: 200px;" class="col-sm-12 col-md">
             <label>الرقم السري<input style="width: 360px;" type="password" name="pass" class="form-control" required></label> <br>
             </div>
			 
			 <div style="margin-left: 200px;" class="col-sm-12 col-md">
			 <input type="submit" class="btn btn-danger1 py-3 px-4" name="signup" value="سجل">
             </div>
			 
          </form>

        </div>
        </div>
      </div>
    </section>
     <?php } else{ ?>

<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">خدماتنا</span>
            <h2>قيد فردي</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md">

          <a href="login.php" class="btn btn-danger py-3 px-4" style="margin-left: 450px;">يرجى تسجيل الدخول أولا</a>

        </div>
        </div>
      </div>
    </section>
<?php }?>


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
<!--  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
    -->
  </body>
</html>