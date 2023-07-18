<?php
include_once '../BackEnd/connect.php';
session_start();
?>

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
    <link rel="stylesheet" href="../CSS/index_style.css">

</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
            <a href="" onclick="logout_handle()">Logout</a>
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
            <a href="#aboutme" class="btn">about me</a>
        </div>

        <div class="image">
            <img src="../images/home-img.png" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="aboutme">

        <h1 class="heading"> about <span> me </span> </h1>

        <div class="row-1">

            <div class="image">
                <img src="../images/about-img.jpg" alt="">
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
                <style>
                    .btn {
                        display: inline-block;
                        margin-top: 1rem;
                        padding: .8rem 3rem;
                        background: var(--main-color);
                        color: #fff;
                        cursor: pointer;
                        font-size: 1.7rem;
                    }

                    .btn:hover {
                        background: #111;
                        letter-spacing: .2rem;
                    }
                </style>

                <a href="#contact" class="btn">hire me</a>
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
                <img src="../images/img-1.jpg" alt="">
                <h3> project 01 </h3>
                <div class="icons">
                    <a href="../Template1/template1.php" class="fas fa-link"></a>
                </div>
            </div>

            <div class="box">
                <img src="../images/img-2.jpg" alt="">
                <h3> project 02 </h3>
                <div class="icons">
                    <a href="../Template2/template2.php" class="fas fa-link"></a>
                </div>
            </div>

            <div class="box">
                <img src="../images/img-3.jpg" alt="">
                <h3> project 03 </h3>
                <div class="icons">
                    <a href="../Template3/template3.php" class="fas fa-link"></a>
                </div>
            </div>

            <div class="box">
                <img src="../images/img-4.jpg" alt="">
                <h3> project 04 </h3>
                <div class="icons">
                    <a href="../Template4/template4.php" class="fas fa-link"></a>
                </div>
            </div>

            <div class="box">
                <img src="../images/img-5.jpg" alt="">
                <h3> project 05 </h3>
                <div class="icons">
                    <a href="../Template5/template5.php" class="fas fa-link"></a>
                </div>
            </div>

            <div class="box">
                <img src="../images/img-6.jpg" alt="">
                <h3> project 06 </h3>
                <div class="icons">
                    <a href="../Template6/template6.php" class="fas fa-link"></a>
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
                <p>Basvangudi, bengaluru, india - 560004</p>
            </div>

        </div>

        <div class="row">

            <form id="imageForm" action="submit.php" method="post" enctype="multipart/form-data">
                <select name="template" id="template-select" class="box" required>
                    <option value="">Select a template</option>
                    <option value="template1">Template 1</option>
                    <option value="template2">Template 2</option>
                    <option value="template3">Template 3</option>
                    <option value="template4">Template 4</option>
                    <option value="template5">Template 5</option>
                    <option value="template6">Template 6</option>
                </select>
                <input id="name" type="text" name="name" placeholder="name" class="box" required>
                <textarea id="about" name="about" placeholder="about" class="box" required></textarea>
                <div class="box">
                    <label for="image-input">Upload Your Image (JPG) </label>
                    <input id="image-input" type="file" name="image" accept=".jpg" required>
                </div>
                <button type="button" class="btn" id="submit_request" onclick="submitForm(event)">Submit</button>
            </form>

            <iframe class="map" src="https://maps.google.com/maps?q=bmscee&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>

        </div>


    </section>

    <!-- contact section ends -->

    <script>
        submitForm = (event) => {
            let template = document.getElementById('template-select').value;
            if (template === '') {
                alert('Please select a template');
                return;
            }

            let name = document.getElementById('name').value;
            let about = document.getElementById('about').value;
            let imageInput = document.getElementById('image-input');

            // Check if a file is selected
            if (imageInput.files.length === 0) {
                alert('Please select an image');
                return;
            }

            // Read the selected image as base64
            let reader = new FileReader();
            reader.onload = function(event) {
                let imageBase64 = event.target.result;

                // Prepare the data to be sent via AJAX
                let formData = new FormData();
                formData.append('template', template);
                formData.append('name', name);
                formData.append('about', about);
                formData.append('imageBase64', imageBase64);

                // Create an XMLHttpRequest to send the data
                let xhr = new XMLHttpRequest();
                xhr.open('POST', '../BackEnd/feedback_backend.php', true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            document.getElementById('name').value = '';
                            document.getElementById('about').value = '';
                            document.getElementById('template-select').selectedIndex = 0;
                            imageInput.value = '';
                            window.location.href = "loadAnim.php";
                        } 
                        else {
                            alert('Request Failed')
                        }
                    }
                };
                xhr.send(formData);
            };

            // Read the selected image as Data URL
            reader.readAsDataURL(imageInput.files[0]);
        };

        logout_handle = () => {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "../BackEnd/backend_signout.php");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    window.location.href = "login.php";
                }
            };
            xhr.send();
        }
    </script>
</body>

</html>