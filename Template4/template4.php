<?php
include_once '../BackEnd/connect.php';
session_start();
$email = $_SESSION['email'];
$template = $_SESSION['$template'];
$name='';
$about='';
$image='';

if ($template == "template4") {
    $select_query = "SELECT * FROM user_requests WHERE email = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result_query = mysqli_stmt_get_result($stmt);
} else {
    $templateValue = "default4"; 
    $select_query = "SELECT * FROM user_requests WHERE template = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $templateValue);
    mysqli_stmt_execute($stmt);

    $result_query = mysqli_stmt_get_result($stmt);
}

while ($row = mysqli_fetch_assoc($result_query)) {
    $name = $row['name'];
    $about = $row['about'];
    $image = $row['image'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5BB8W2X');</script>
  <!-- End Google Tag Manager -->
  <link rel="icon" type="image/png" href="/favicon.png"/>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169007209-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-169007209-3');
  </script>



  <!-- =======================================================
  * Template Name: Personal - v2.1.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BB8W2X"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">

    <div class="container">

      <h1><?php echo $name?></h1>
      <h2 style="color:#fff">I'm <span class="typing" style="color:#12D640"></span></h2>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header"> <span>Home</span></a></li>
          <li><a href="#about"><span>About</span></a></li>
          <li><a href="#portfolio"> <span>Projects</span></a></li>
          <li><a href="#skills"> <span>Skills</span></a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <!-- <img src="assets/img/profile.jpeg"> -->
          <img src="data:image/png;base64,<?php echo base64_encode($image); ?>">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p><?php echo $about?></p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Email : </strong><?php echo $_SESSION['email']?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-global-line" style="color: #ffbb2c;"></i>
            <h3>Software Development</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #5578ff;"></i>
            <h3>Machine Learning</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-camera-3-line" style="color: #e80368;"></i>
            <h3>Computer Vision</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-english-input" style="color: #1c7d32;"></i>
            <h3>Natural Language Processing</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-code-s-slash-fill" style="color: #28a745;"></i>
            <h3>Software Engineering</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #f1081f;"></i>
            <h3>Visualization</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
            <h3>Algorithms</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-image-line" style="color: #ffc107;"></i>
            <h3>Image Processing</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->
  </section><!-- End About Section -->

  <!-- Start Project Section -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Projects</h2>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Web-App</li>
            <li data-filter=".filter-project">Project</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Twitter Analysis</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/twitteranalysis.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/twitteranalysis.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Image recognition as Service</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/iras.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/iras.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Music Streaming Website</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/musicplayer.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/musicplayer.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>Movie Recommender</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/recommender.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              
              <div class="portfolio-links">
                <a href="projects/recommender.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-project">
          <!-- <br> -->
          <center><h4>Resume Section Classifier</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/resume.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Resume Section Classifier</h4>
              <div class="portfolio-links">
                <a href="projects/resume.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-project">
          <center><h4>Video Description Generator</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/vdg.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="projects/vdg.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <center><h4>ML-DL Web-App</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/ml.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="projects/ml.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

        

        <div class="col-lg-4 col-md-6 portfolio-item filter-project">
          <!-- <br> -->
          <center><h4>Image Generator</h4></center>
          <div class="portfolio-wrap">
            <img src="assets/img/project/gan.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="projects/gan.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Project Details"><i class="bx bx-info-circle"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- End Project Section -->



  <!-- Start Skills Section -->

  <section id="skills" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Skills</h2>
      </div>
      <div class="row">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="fade-up" data-aos-delay="100" style="background:#fff">
            <h4 style="text-align:left;color:#09203a">Languages and Databases</h4>
                <p style="text-align:left;">
                  <img src="https://www.vectorlogo.zone/logos/python/python-horizontal.svg" alt="vectorlogo.zone" height="50" width="150">
                  <img src="https://www.vectorlogo.zone/logos/java/java-horizontal.svg" alt="vectorlogo.zone" height="50" width="120">
                  <img src="https://www.vectorlogo.zone/logos/w3_html5/w3_html5-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="upload.wikimedia.org" height="60" width="90">
                  <img src="https://www.vectorlogo.zone/logos/mysql/mysql-horizontal.svg" alt="vectorlogo.zone" height="70" width="130">
                  <img src="https://www.vectorlogo.zone/logos/postgresql/postgresql-horizontal.svg" alt="vectorlogo.zone" height="50" width="190">

                </p>
            </div>
            <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="lefade-up" data-aos-delay="100" style="background:#fff">
              <h4 style="text-align:left;color:#09203a">Frameworks</h4>
                <p style="text-align:left;">
                  <img src="https://www.vectorlogo.zone/logos/pocoo_flask/pocoo_flask-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/djangoproject/djangoproject-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/nodejs/nodejs-horizontal.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/getbootstrap/getbootstrap-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/tensorflow/tensorflow-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/pytorch/pytorch-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/opencv/opencv-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Scikit_learn_logo_small.svg" alt="upload.wikimedia.org" width="90" height="70">
              </p>
          </div>
          <div class="col-md-12 mt-4 mt-md-0 icon-box" data-aos="lefade-up" data-aos-delay="100" style="background:#fff">
              <h4 style="text-align:left;color:#09203a">Tools</h4>
                <p style="text-align:left;">
                  <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/amazon_aws/amazon_aws-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/google_cloud/google_cloud-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/heroku/heroku-ar21.svg" alt="vectorlogo.zone">
                  <img src="https://www.vectorlogo.zone/logos/jupyter/jupyter-ar21.svg" alt="vectorlogo.zone">
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Skills Section -->

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script type="text/javascript">
    var typed = new Typed('.typing',{
      strings: ["Coder", "Developer", "AI Enthusiast"],
      loop: true,
      typeSpeed: 65,
      backSpeed: 65
    });
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
