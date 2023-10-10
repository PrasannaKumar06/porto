<?php
include_once '../BackEnd/connect.php';
session_start();
$email = $_SESSION['email'];
$template = $_SESSION['$template'];
$name='';
$about='';
$image='';

if ($template == "template2") {
    $select_query = "SELECT * FROM user_requests WHERE email = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result_query = mysqli_stmt_get_result($stmt);
} else {
    $templateValue = "default2"; 
    $select_query = "SELECT * FROM user_requests WHERE template = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $templateValue);
    mysqli_stmt_execute($stmt);

    $result_query = mysqli_stmt_get_result($stmt);
}

while ($row = mysqli_fetch_assoc($result_query)) {
    $name = $row['name'];
    $about = $row['about'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio Template</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
  <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
  <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <?php echo $name?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <section id="home" class="intro-section">
    <div class="container">
      <div class="row align-items-center text-white">
        <!-- START THE CONTENT FOR THE INTRO  -->
        <div class="col-md-6 intros text-start">
          <h1 class="display-2">
            <span class="display-2--intro">Hey!, I'm <?php echo $name?></span><br>
            <span class="display-2--description lh-base">
            <?php echo $about?>
            </span>
          </h1>
        </div>
        <!-- START THE CONTENT FOR THE VIDEO -->
        <div class="col-md-6 intros text-end">
          <div class="video-box">
            <img src="images/arts/intro-section-illustration.png" alt="video illutration" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <section id="campanies" class="campanies">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold lead mb-3">Trusted by companies like</h4>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <!-- START THE CAMPANIES CONTENT  -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-1.png" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-2.png" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-3.png" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-4.png" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-5.png" alt="Campany 5 logo" title="Campany 5 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-6.png" alt="Campany 6 logo" title="Campany 6 Logo" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES  
///////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="services" class="services">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold">Our Services</h1>
        <div class="heading-line mb-1"></div>
      </div>
      <!-- START THE DESCRIPTION CONTENT  -->
      <div class="row pt-2 pb-2 mt-0 mb-3">
        <div class="col-md-6 border-right">
          <div class="bg-white p-3">
            <h2 class="fw-bold text-capitalize text-center">
              Our Services Range From Initial Design To Deployment Anywhere Anytime
            </h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-white p-4 text-start">
            <p class="fw-light">
              Lorem ipsum dolor sit amet consectetur architecto magni,
              dicta maxime laborum temporibus dolorem esse doloremque illo quas nisi enim molestias.
              Tempore ducimus molestiae in dolore enim.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- START THE CONTENT FOR THE SERVICES  -->
    <div class="container">
      <!-- START THE MARKETING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-paper-plane"></div>
            <h3 class="display-3--title mt-1">Marketing</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
              doloremque autem quibusdam blanditiis harum alias hic accusantium
              maxime atque ratione magni repellat?
            </p>
            <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/services/service-1.png" alt="marketing illustration" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- START THE WEB DEVELOPMENT CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="images/services/service-2.png" alt="web development illustration" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-code"></div>
            <h3 class="display-3--title mt-1">web development</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
              doloremque autem quibusdam blanditiis harum alias hic accusantium
              maxime atque ratione magni repellat?
            </p>
            <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
      <!-- START THE CLOUD HOSTING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-cloud-upload-alt"></div>
            <h3 class="display-3--title mt-1">cloud hosting</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
              doloremque autem quibusdam blanditiis harum alias hic accusantium
              maxime atque ratione magni repellat?
            </p>
            <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/services/service-3.png" alt="cloud hosting illustration" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="testimonials" class="testimonials">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <div class="container">
      <div class="row text-center text-white">
        <h1 class="display-3 fw-bold">Testimonials</h1>
        <hr style="width: 100px; height: 3px; " class="mx-auto">
        <p class="lead pt-1">what our clients are saying</p>
      </div>

      <!-- START THE CAROUSEL CONTENT  -->
      <div class="row align-items-center">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- CAROUSEL ITEM 1 -->
            <div class="carousel-item active">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                  <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-1.jpg" alt="client-1 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Patrick Muriungi</h3>
                <p class="fw-light">CEO & founder</p>
              </div>
            </div>
            <!-- CAROUSEL ITEM 2 -->
            <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                  <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-2.jpg" alt="client-2 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Joy Marete</h3>
                <p class="fw-light">Finance Manager</p>
              </div>
            </div>
            <!-- CAROUSEL ITEM 3 -->
            <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                  <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-3.jpg" alt="client-3 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>ClaireBelle Zawadi</h3>
                <p class="fw-light">Global brand manager</p>
              </div>
            </div>
            <!-- CAROUSEL ITEM 4 -->
            <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                  <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-4.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Uhuru Kenyatta</h3>
                <p class="fw-light">C.E.O & Founder</p>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            </button>
            <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            </button>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 7 - THE PORTFOLIO  
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center mt-5">
        <h1 class="display-3 fw-bold text-capitalize">Latest work</h1>
        <div class="heading-line"></div>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint porro temporibus distinctio.
        </p>
      </div>
      <!-- FILTER BUTTONS  -->
      <div class="row mt-5 mb-4 g-3 text-center">
        <div class="col-md-12">
          <button class="btn btn-outline-primary" type="button">All</button>
          <button class="btn btn-outline-primary" type="button">websites</button>
          <button class="btn btn-outline-primary" type="button">design</button>
          <button class="btn btn-outline-primary" type="button">mockup</button>
        </div>
      </div>

      <!-- START THE PORTFOLIO ITEMS  -->
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-1.jpg" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 1</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-2.jpg" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 2</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-3.jpg" alt="portfolio 3 image" title="portfolio 3 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 3</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-4.jpg" alt="portfolio 4 image" title="portfolio 4 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 4</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-5.jpg" alt="portfolio 5 image" title="portfolio 5 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 5</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-6.jpg" alt="portfolio 6 image" title="portfolio 6 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 6</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-7.jpg" alt="portfolio 7 image" title="portfolio 7 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 7</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-8.jpg" alt="portfolio 8 image" title="portfolio 8 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 8</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-9.jpg" alt="portfolio 9 image" title="portfolio 9 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 9</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER  
///////////////////////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer">

    <!-- START THE SOCIAL MEDIA CONTENT  -->
    <div class="footer-sm" style="background-color: #212121;">
      <div class="container">
        <div class="row py-4 text-center text-white">
          <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
            CONNECT WITH US ON SOCIAL MEDIA
          </div>
          <div class="col-lg-7 col-md-6">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>


    <!-- START THE COPYRIGHT INFO  -->
    <div class="footer-bottom pt-5 pb-5">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col-12">
            <div class="footer-bottom__copyright">
              &COPY; Copyright 2021 <a href="#">Company</a> | Created by <a href="http://codewithpatrick.com" target="_blank"><?php echo $name?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- BACK TO TOP BUTTON  -->
  <a href="#" class="shadow btn-primary rounded-circle back-to-top">
    <i class="fas fa-chevron-up"></i>
  </a>




  <script src="assets/vendors/js/glightbox.min.js"></script>

  <script type="text/javascript">
    const lightbox = GLightbox({
      'touchNavigation': true,
      'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoPlayVideos': 'true',
    });
  </script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script>
    const navbarLinks = document.querySelectorAll('.navbar-nav a');

    navbarLinks.forEach(link => {
      link.addEventListener('click', (event) => {
        event.preventDefault();

        const targetSectionID = link.getAttribute('href');

        const targetSection = document.querySelector(targetSectionID);

        const targetOffset = targetSection.getBoundingClientRect().top;

        window.scrollBy({
          top: targetOffset,
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>

</html>