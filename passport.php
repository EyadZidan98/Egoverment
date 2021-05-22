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
      <a href="" target='_blank'>
        <img src="https://stipendiumhungaricum.hu/includes/images/fb_icon_grey.png" class="icon d-lg-none">
      </a>
      <a href="" target='_blank'>
        <img src="https://stipendiumhungaricum.hu/includes/images/fb_icon_grey.png" class="icon d-none d-lg-block">
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
      <li class="nav-item "><a class="nav-link inpur" href="logout.php">تسجيل خروج</a></li>
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
          <li class="nav-item"><a class="nav-link" href="" target='_blank'>Privacy Policy</a></li>
          <li class="nav-item"><a class="nav-link" href="">FAQ</a></li>
        </ul>
      </div>
      <div class="right">
        <a class="nav-link" href="">
          <img src="" class="icon">
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
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">جواز سفر <i class="fa fa-chevron-right"></i></a></span>
              <span class="mr-2"><a href="index.html">خدماتنا <i class="fa fa-chevron-right"></i></a></span> <span> الصفحة الرئيسية  <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">بخدمتك</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">خدماتنا</span>
            <h2>جواز سفر</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md">
          <form method="POST" action="passport.php">
            <label>الإسم <input type="text" name="name" class="form-control"></label>
             <label>الرقم الوطني<input type="text" name="nationalID" class="form-control"></label>
             
          </form>

        </div>
        </div>
      </div>
    </section>

     <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Law Firm</a></h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Explore</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Practice Areas</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Cases</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Legal</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Join us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy &amp; Policy</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
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
    
  

  <!-- loader
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
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
     -->
  </body>
</html>