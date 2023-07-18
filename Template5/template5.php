<?php
include_once '../BackEnd/connect.php';
session_start();
$email = $_SESSION['email'];
$template = $_SESSION['$template'];
$name='';
$about='';
$image='';

if ($template == "template5") {
    $select_query = "SELECT * FROM user_requests WHERE email = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result_query = mysqli_stmt_get_result($stmt);
} else {
    $templateValue = "default5"; 
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="./packages/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="./packages/css/styles.css">

        <title>Portfolio Template</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo"><?php echo $name?></a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i>Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i>Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i>Portfolio                                
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i>Contact                               
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
                <div class="nav__btns">
                    <!-- Theme change button -->

                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">

                        <div class="home__img">
                        <img src="data:image/png;base64,<?php echo base64_encode($image); ?>" class="home__blob-img">
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Hi, I'am <?php echo $name?></h1>
                            <p><?php echo $about?></p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>

                <div class="skills__container container grid">

                    <div>
                        <!--==================== SKILLS 3 ====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                               <i class="uil uil-brackets-curly skills__icon"></i>
                               <div>
                                   <h1 class="skills__title">Web Developer</h1>
                                   <span class="skills__subtitle">More than 3 years</span>
                               </div>

                               <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div>
                                </div>
                               <div class="skills__data">
                                   <div class="skills__titles">
                                       <h3 class="skills__name">CSS</h3>
                                       <span class="skills__number">80%</span>
                                   </div>
                                   <div class="skills__bar">
                                       <span class="skills__percentage skills__css"></span>
                                   </div>
                               </div>
                               <div class="skills__data">
                                   <div class="skills__titles">
                                       <h3 class="skills__name">JavaScript</h3>
                                       <span class="skills__number">60%</span>
                                   </div>
                                   <div class="skills__bar">
                                       <span class="skills__percentage skills__js"></span>
                                   </div>
                               </div>
                               <div class="skills__data">
                                   <div class="skills__titles">
                                       <h3 class="skills__name">WordPress</h3>
                                       <span class="skills__number">70%</span>
                                   </div>
                                   <div class="skills__bar">
                                       <span class="skills__percentage skills__wordpress"></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
</section>
        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">

            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent works</span>

            <div class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
        <!--==================== PORTFOLIO 1 ====================-->
        
            <div class="portfolio__content grid swiper-slide">
                <img src="./packages/images/portfolio1.jpg" alt="" class="portfolio__img">

                <div class="portfolio_">
                    <h3 class="portfolio__title">Modern Dashboard</h3>
                    <p class="portfolio__description">Data analitical dashboard adaptable to all devices, 
                        with ui components and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Demo
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>

            <!--==================== PORTFOLIO 2 ====================-->
        
            <div class="portfolio__content grid swiper-slide">
                <img src="./packages/images/portfolio3.PNG" alt="" class="portfolio__img">

                <div class="portfolio_">
                    <h3 class="portfolio__title">E-Commerce website</h3>
                    <p class="portfolio__description">Above Amazon clone is adaptable to all devices, with 
                        ui components and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Demo
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>

            <!--==================== PORTFOLIO 3 ====================-->
        
            <div class="portfolio__content grid swiper-slide">
                <img src="./packages/images/portfolio2.png" alt="" class="portfolio__img">

                <div class="portfolio_">
                    <h3 class="portfolio__title">Brand Design</h3>
                    <p class="portfolio__description">Tesla Clone is adaptable to all devices, with 
                        ui components and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Demo
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            </div>
                </div>

            <!-- add arrows-->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>

            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            
        
        </div>

        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section">

            <h2 class="section__title">Testimonials</h2>
            <span class="section__subtitle">My client saying</span>

            <div class="testimonial__container container swiper-container">
                <div class="swiper-wrapper">
                <!--==================== TESTIMONIAL 1 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="./packages/images/arun.PNG" alt="" class="testimonial__img">
                                
                                <div>
                                    <h3 class="testimonial__name">Arun Prashanth</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">I get a good impression, I carry out my project with all the 
                            possible quality and attention and support 24 hours a day.
                        </p>
                    </div>
                    <!--==================== TESTIMONIAL 2 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="./packages/images/yuga.PNG" alt="" class="testimonial__img">
                                
                                <div>
                                    <h3 class="testimonial__name">Yugadarshan</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">I get a good impression, I carry out my project with all the 
                            possible quality and attention and support 24 hours a day.
                        </p>
                    </div>
                    <!--==================== TESTIMONIAL 3 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="./packages/images/shenan.PNG" alt="" class="testimonial__img">
                                
                                <div>
                                    <h3 class="testimonial__name">Shenan Sachinthan</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">I get a good impression, I carry out my project with all the 
                            possible quality and attention and support 24 hours a day.</p>
                    </div>      
                </div>

                <!--Add pagination-->
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
            </div>
            </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">

        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title"><?php echo $name?></h1>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a class="footer__social">
                        <i class="uil uil-facebook"></i>
                    </a>
                    <a class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; <?php echo $name?>. All rights reserved.</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
    

    <!--==================== SWIPER JS ====================-->
    <script src="./packages/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="./packages/js/main.js"></script>
</body>

</html>