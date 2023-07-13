<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTO</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"> <span>Prajwal</span> R </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#service">service</a>
        <a href="#experience">experience</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span class="hi"> hi there... </span>
        <h3> i am <span> Prajwal </span> </h3>
        <p class="info"> i am a front-end developer </p>
        <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quidem excepturi natus iste ut. Alias, quod? Earum pariatur obcaecati dolorum! </p>
        <a href="#about" class="btn">about me</a>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> about <span> me </span> </h1>

<div class="row-1">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3> my name is Prajwal & i am a font-end developer </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi error molestias impedit officia! Exercitationem dignissimos esse eos quas nisi impedit delectus, voluptate ullam iste nostrum at. Dolor culpa eaque omnis.</p>
        <div class="box-container">
            <div class="box">
                <p> <span> age : </span> 19 </p>
                <p> <span> gender : </span> male </p>
                <p> <span> language : </span> Kannada, english </p>
                <p> <span> work : </span> front-end developer </p>
            </div>
            <div class="box">
                <p> <span> freelance : </span> available </p>
                <p> <span> phone : </span> +123-456-7890 </p>
                <p> <span> email : </span> Raghav@gmail.com </p>
                <p> <span> country : </span> india </p>
            </div>
        </div>
        <!-- <a href="#" class="btn">download CV</a> -->
        <button class="btn" id="GetFile">Download</button><style>
            .btn{
    display: inline-block;
    margin-top: 1rem;
    padding:.8rem 3rem;
    background:var(--main-color);
    color:#fff;
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background:#111;
    letter-spacing: .2rem;
}
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
        $('#GetFile').on('click', function () {
            $.ajax({
                url: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/172905/test.pdf',
                method: 'GET',
                xhrFields: {
                    responseType: 'blob'
                },
                success: function (data) {
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = 'myfile.pdf';
                    document.body.append(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                }
            });
        });
        </script>
        
        </script>
        <a href="#" class="btn">hire me</a>
    </div>

</div>

<h1 class="heading"> <span> my </span> skills </h1>

<div class="row-2">

    <div class="skills">
        <div class="progress">
            <h3> web design <span> 95% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> web development <span> 80% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> UI design <span> 75% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> seo marketing <span> 85% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
    </div>

    <div class="box-container">

        <div class="box">
            <h3> >> 2+ </h3>
            <p>years of experience</p>
        </div>
        <div class="box">
            <h3> >> 250+ </h3>
            <p>happy clients</p>
        </div>
        <div class="box">
            <h3> >> 150+ </h3>
            <p>projects completed</p>
        </div>
        <div class="box">
            <h3> >> 12+ </h3>
            <p>awards won</p>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">

<h1 class="heading"> <span> my </span> services </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-mobile"></i>
            <h3>responsive design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>seo marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-chart-line"></i>
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, facere?</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- experience section starts  -->

<section class="experience" id="experience">

    <h1 class="heading"> <span> my </span> experience </h1>

    <div class="box-container">

        <div class="box">
            <div class="content">
                <span> 2015 - 2016 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2016 - 2017 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2017 - 2018 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2018 - 2019 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2019 - 2020 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2020 - 2021 </span>
                <h3>front-end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vel quasi consectetur expedita ipsam similique maiores ipsa? Error, debitis ullam.</p>
            </div>
        </div>

    </div>

</section>

<!-- experience section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span> my </span> portfolio </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/img-1.jpg" alt="">
            <h3> project 01 </h3>
            <div class="icons">
                <a href="infotaking.php" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="portfolio-single.php" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-2.jpg" alt="">
            <h3> project 02 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="portfolio-single-2.php" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-3.jpg" alt="">
            <h3> project 03 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="blog-post.php" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-4.jpg" alt="">
            <h3> project 04 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="portfolio-2-col.php" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-5.jpg" alt="">
            <h3> project 05 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="blog-3-col.php" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/img-6.jpg" alt="">
            <h3> project 06 </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
                <a href="portfolio-2-col.php" class="fas fa-link"></a>
            </div>
        </div>

    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>my email</h3>
            <p>prkhyati.cs21@bmsce.ac.in</p>
            <p>prajwal.cs21@bmsce.ac.in</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>my number</h3>
            <p>9108835979</p>
            <p>7975858338</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>my address</h3>
            <p>ajis class, Basvangudi, bengaluru, india - 560004</p>
        </div>

    </div>

    <div class="row">

        <form action="">

            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">

            <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>

            <input type="submit" class="btn" value="send message">

        </form>

        <iframe class="map" src="https://maps.google.com/maps?q=bmscee&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>

    </div>


</section>

<!-- contact section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>
<!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    function sendEmail(){
                    Email.send({
                Host : "smtp.gmail.com",
                Username : "unknownhunter06@gmail.com",
                Password : "prasanna",
                To : 'prasanna.cs21@bmsce.ac.in',
                From : document.getElementById("email").value,
                Subject : "feedback form",
                Body : "query"
            }).then(
            message => alert(message)
            );
    }
        </script>  -->
</body>
</html>






<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bmscee&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps iframe code generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->