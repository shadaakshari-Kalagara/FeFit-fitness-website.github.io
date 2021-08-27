<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FeFit- Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Amoeba - v2.2.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>FeFit</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#services">GET STARTED</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
          
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to FeFit</h1>
      <h2>We design your perfect Fitness routine </h2>
      <a href="#services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-5 order-6 order-lg-3">
            
            <img src="fit.jpg" class="rounded float-left" alt="" >
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3>What we do to help you.</h3>
            
            <ul>
              <li><i class="icofont-check-circled"></i> We collect your preferences</li>
              <li><i class="icofont-check-circled"></i> Analyse you choices and present a perfect health plan including fitness and diet.</li>
              <li><i class="icofont-check-circled"></i> We also help you to track your progress.</li>
                <li><i class="icofont-check-circled"></i> We help to give you a comfortable and confusion-free fitness routine.</li>
            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
          

        <div class="section-title">
          <h2>Questionnaire</h2>
            <h3>Fill us in with your choices.</h3>
            
<p>Give appropriate values</p>
<p>Age:</p>
            

<form action="questions.php" method="POST">
  <label for="choose"></label>
  <select id="age" name="age">
    <option value="">---choose age---</option>
    <option value="1">15-25</option>
    <option value="2">25-35</option>
    <option value="3">35-45</option>
    <option value="4">45+</option>
  </select>
    <p>Occupation:</p>
  <label for="choose"></label>
  <select id="occupation" name="occupation">
      <option value="">---choose occupation---</option>
    <option value="1">full-time</option>
    <option value="2">Part-time</option>
    <option value="3">Free-lancer</option>
    <option value="4">Home-Maker</option>
      <select>
      <p>Weight in kg:</p>
  <label for="choose"></label>
  <select id="weight" name="weight">
    <option value="">---choose weight---</option>
    <option value="1">30-40</option>
    <option value="2">40-50</option>
    <option value="3">50-65</option>
    <option value="4">65-80</option>
      <option value="5">80-100</option>
    </select>
          <p>Height in cms:</p>
  <label for="choose"></label>
  <select id="height" name="height">
    <option value="">---choose height---</option>
    <option value="1">150-</option>
    <option value="2">140-150</option>
    <option value="3">150-165</option>
    <option value="4">165-180</option>
      <option value="5">180+</option>
      
      </select>

      <p>1st workout preference:</p>
      <label for="choose"></label>
      <select id="pref1" name="pref1">
        <option value="">---choose preference 1---</option>
        <option value="1">core</option>
        <option value="2">cardio</option>
        <option value="3">muscle strenghtening</option>
        <option value="4">flexibility</option>
        <option value="5">aerobics</option>
        <option value="6">weight loss</option>
        </select>
        
        <p>2nd workout preference:</p>
      <label for="choose"></label>
      <select id="pref2" name="pref2">
        <option value="">---choose preference 2---</option>
        <option value="1">core</option>
        <option value="2">cardio</option>
        <option value="3">muscle strenghtening</option>
        <option value="4">flexibility</option>
        <option value="5">aerobics</option>
        <option value="6">weight loss</option>
        </select><br>
        
        <!--
        <p>Choose your workput preference</p>
         <input type="checkbox" id="core" name="core" value="core">
  <label for="core"> core</label><br>
  <input type="checkbox" id="cardio" name="cardio" value="cardio">
  <label for="cardio">cardio</label><br>
          <input type="checkbox" id="muscle strengthening" name="muscle strenghtening" value="muscle strenghtening">
  <label for="cardio">muscle strenghtening</label><br>
          <input type="checkbox" id="flexibility" name="flexibility" value="flexibility">
  <label for="flexibility">flexibility</label><br>
          <input type="checkbox" id="aerobics" name="aerobics" value="aerobics">
  <label for="aerobics">aerobics</label><br>
  <input type="checkbox" id="fat-loss" name="fat-loss" value="fat-loss">
  <label for="fat-loss">fat-loss</label><br><br>
        -->
  
  
  
         
  <input type="submit" name="submit">
</form>
        <div>
      <stle>
        </stle></div>
    </section><!-- 
    
    
    
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>