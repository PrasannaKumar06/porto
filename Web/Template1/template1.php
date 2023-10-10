<?php
include_once '../BackEnd/connect.php';
session_start();
$email = $_SESSION['email'];
$template = $_SESSION['$template'];
$name='';
$about='';
$image='';

if ($template == "template1") {
    $select_query = "SELECT * FROM user_requests WHERE email = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result_query = mysqli_stmt_get_result($stmt);
} else {
    $templateValue = "default1"; 
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

    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Portfolio Template</title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo"><?php echo $name ?></a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color"><?php echo $name ?></span><br> Web Designer</h1>
            </div>
            <div class="home__social">
                <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-behance'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="home__img">
            <img src="data:image/png;base64,<?php echo base64_encode($image); ?>" class="home__blob-img">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="data:image/png;base64,<?php echo base64_encode($image); ?>">
                </div>

                <div>
                    <h2 class="about__subtitle">I'am <?php echo $name ?></h2>
                    <p class="about__text"><?php echo $about ?></p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">

                        </div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>
                        <div class="skills__bar skills__ux">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="assets/img/work3.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
                <a href="" class="work__img">
                    <img src="assets/img/work1.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="assets/img/work2.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="assets/img/work3.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="assets/img/work4.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="assets/img/work5.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="assets/img/work6.jpg" alt="">
                </a>
            </div>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title"><?php echo $name ?></p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
        <p class="footer__copy">&#169; <?php echo $name ?>. All rigths reserved</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>