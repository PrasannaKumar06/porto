<?php
include_once '../BackEnd/connect.php';
session_start();
$email = $_SESSION['email'];
$template = $_SESSION['$template'];
$name='';
$about='';
$image='';

if ($template == "template6") {
    $select_query = "SELECT * FROM user_requests WHERE email = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result_query = mysqli_stmt_get_result($stmt);
} else {
    $templateValue = "default6"; 
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="I'm Mrinmoy,and this is my personal portfolio website..">
    <meta name="keywords" content="Mrinmoy, Mrinmoy Deka, mrinmoy ">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Portfolio Template</title>

    <!--==================== Favicon ====================-->
    <link rel="shortcut icon" href="/assets/img/favicon_edited.png" type="image/png">

    <!--==================== Animate on scroll CDN ====================-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo"><?php echo $name?></a>

            <div data-aos="fade-in" class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__items">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>

                    <li class="nav_items">
                        <a href="#skills" class="nav__link ">
                            <i class="uil uil-file nav__icon"></i> Skills
                        </a>
                    </li>

                    <li class="nav__items">
                        <a href="#services" class="nav__link ">
                            <i class="uil uil-briefcase-alt nav__icon"></i> Services
                        </a>
                    </li>

                    <li class="nav__items">
                        <a href="#portfolio" class="nav__link ">
                            <i class="uil uil-scenery nav__icon"></i> Portfolio
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!--Theme Change button-->
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
            <div data-aos="fade-left" class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a class="home__social-icon">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        <a class="home__social-icon">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                    </div>

                    <div data-aos="fade-right" class="home__img">
                    <img src="data:image/png;base64,<?php echo base64_encode($image); ?>" class="home__blob-img">
                    </div>

                    <div class="home__data">
                        <h1 class="home_title">Hi!<span class="wave">👋</span>, I'm <?php echo $name?></h1>
                        <h3 class="home__subtitle">
                            and I'm <span class="auto-input"></span>
                        </h3>
                        <p class="home__description">
                            <?php echo $about?>
                        </p>
                    </div>
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name"> Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div data-aos="fade-up" class="skills__container container grid">
                <div>
                    <!--==================== SKILL 1 ====================-->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Developer</h1>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"><img src="assets/img/html.png" class="skills__logo"
                                            width="25px" alt=""> HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"><img src="assets/img/css.png" class="skills__logo"
                                            width="20px" alt=""> CSS</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"><img src="assets/img/javascript.png" class="skills__logo"
                                            width="20px" alt=""> JavaScript</h3>

                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"><img src="assets/img/react.png" class="skills__logo"
                                            width="20px" alt=""> React</h3>
                                    <span class="skills__number">40%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__react"></span>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What I offer</span>

            <div data-aos="fade-right" class="services__container container grid">
                <!--==================== SERVICES 1 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Ui/Ux <br> Designer</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Ui/Ux <br> Designer</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develop the user interface.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I create ux element interactions.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--==================== SERVICES 2 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">Frontend <br> Developer</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Frontend <br> Developer</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develop the user interface.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I create ux element interactions.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--==================== SERVICES 3 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-pen services__icon"></i>
                        <h3 class="services__title">Branding <br> Designer</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Branding <br> Designer</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develop the user interface.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I create ux element interactions.</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent work</span>

            <div data-aos="fade-right" class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Modern Website</h3>
                            <p class="portfolio__description">Website adaptable to all devices, with ui components and
                                animated interactions.</p>
                            <a href="#" class="button button--flex button--small portfolio_-button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 2 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio2.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Brand Design</h3>
                            <p class="portfolio__description">Website adaptable to all devices, with ui components and
                                animated interactions.</p>
                            <a href="#" class="button button--flex button--small portfolio_-button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 3 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio3.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Online Store</h3>
                            <p class="portfolio__description">Website adaptable to all devices, with ui components and
                                animated interactions.</p>
                            <a href="#" class="button button--flex button--small portfolio_-button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title"><?php echo $name?></h1>
                    <span class="footer__subtitle">Frontend Developer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a class="footer__social">
                        <i class="uil uil-instagram"></i></a>
                    </a>

                    <a class="footer__social">
                        <i class="uil uil-github-alt"></i></a>
                    </a>

                    <a class="footer__social">
                        <i class="uil uil-twitter-alt"></i></a>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&copy; 2023 <?php echo $name?> | All Rights Reserved</p>
        </div>
    </footer>


    <!--==================== SCROLL TOP ====================-->
    <div><a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a></div>

    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>

    <!--=================== Animated text ===============-->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: [
                "a Web Developer",
                "an OS developer",
                "a student",
                "an UI Designer",
            ],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });
    </script>

    <!--=================== Animate scroll js ===============-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 2000
        });
    </script>

</body>

</html>