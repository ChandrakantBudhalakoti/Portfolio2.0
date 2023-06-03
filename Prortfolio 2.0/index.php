<?php
// include './action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio 2.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- linking css file -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll">
        <div class="container">
            <a class="navbar-brand" href="#">Chandra Kant Budhalakoti</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://drive.google.com/file/d/1z9pdhlTYN9kJdJbtsr1mmlGAhMSgl7IF/view?usp=sharing"
                            target="_blank">Resume </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                </a>

            </div>
        </div>
    </nav>
    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                    <h2 class="hero_title">Hi, it's me Chandra Kant Budhalakoti AKA Chetan</h2>
                    <p class="hero_desc">Welcome to my profile!!! I'm Chetan.
                    <pre
                        id="decs"><b>I created this profile to connect with others who share similar interests and passions.</b></pre>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">About Me</h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="images/about.jpg" class="imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <p>Welcome to my profile! My name is Chandra Kant Budhalakoti AKA Chetan, and I'm 21 year old. I
                        created this profile to connect with others who share similar interests and passions.
                    </p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Name: Chandra Kant Budhalakoti</li>
                                <li>Age: 21</li>
                                <li>Occupation: Web Developer, Programmer</li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Email: chandrakantbudhalakoti189@gmail.com</li>
                                <li>Phone: +91 8954479618</li>
                                <li>Address: Kaladhungi Bandobasti, Nainital</li>

                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p>I believe that &quot;If you want something you've never had, you must be willing to do
                            somthing you've never done. &quot; In my free time, I enjoy music,walking and playing some
                            online game like BGMI.
                            <br>
                            I recently graduated with a degree in Bachelor of Arts. and I am currently studying Master
                            of Computer Application and am passionate about codding, Programming and Problem solving.
                            <br>
                            I'm excited to connect with new people and have meaningful conversations. Please feel free
                            to reach out to me or if you have any questions. Let's get to know each other!
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- skills section-->
    <section id="skills">
        <div class="container">
            <h1 class="text-center">Skills</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-clock fa-spin"></i>
                            <h4 class="card-title mt-3">Website Development</h4>
                            <p class="card-text mt-3">"As a web developer, I specialize in creating beautiful,
                                responsive websites that are both user-friendly and visually appealing. and I am
                                committed to staying up-to-date with the latest trends and best practices in web
                                development and am dedicated to providing my clients with the solutions they need to
                                succeed in the digital landscape."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-database'></i>
                            <h4 class="card-title mt-3">Database </h4>
                            <p class="card-text mt-3">"I have experience using MySQL, an open-source relational database
                                management system. With MySQL, I can create efficient databases for web applications and
                                optimize queries for better performance.Whether you need a new database or require
                                maintenance of an existing one, I can deliver reliable MySQL solutions for your web
                                development project."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='far servicesIcon fas fa-desktop'></i>
                            <h4 class="card-title mt-3">Operating System</h4>
                            <p class="card-text mt-3"> My experience includes proficiency with multiple OS platforms
                                such as Windows, macOS, and various Linux distributions. I have developed
                                troubleshooting skills across different operating systems to resolve technical issues
                                and ensure smooth system performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-code'></i>
                            <h4 class="card-title mt-3">Programming</h4>
                            <p class="card-text mt-3"> My experience includes proficiency in languages such as Java,
                                Python, C, and JavaScript. I have developed problem-solving skills using these languages
                                to design and implement software solutions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-sitemap'></i>
                            <h4 class="card-title mt-3">Data Structures And Algorithms</h4>
                            <p class="card-text mt-3">I have experience in implementing various data structures and
                                algorithms in C programming language. I have worked on several real-world projects where
                                I used data structures and algorithms to optimize code and improve performance. Overall,
                                my experience in data structures and algorithms has allowed me to become a better
                                programmer and problem solver.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="servicesIcon fab fa-microsoft"
                                style="padding-left: 180px; padding-right: 180px; font-size: 36px;"></i>
                            <h4 class="card-title mt-3">MS Office</h4>
                            <p class="card-text mt-3">I'm proficient in Microsoft Office (Word, Excel, PowerPoint,
                                Outlook) and have experience using them in various professional and academic settings. I
                                can create high-quality documents, presentations, and spreadsheets, and manage my email
                                efficiently.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project section-->
    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="text-center">Projects</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="images/Project1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Calculator</h4>
                            <p class="card-text">Discover the perfect fusion of HTML, CSS, and JavaScript in my
                                calculator project. With a sleek interface, this project showcases the seamless
                                collaboration of these languages. Simplify your calculations and experience the synergy
                                of HTML,CSS,and JavaScript with this calculator.</p>
                            <div class="text-center">
                                <a href="https://chandrakantbudhalakoti.github.io/calculator/" target="_blank"
                                    class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/Project2.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Portfolio</h4>
                            <p class="card-text">Unleash the power of HTML, CSS, and JavaScript with our impressive
                                portfolio project. Showcasing your skills and achievements in a visually stunning and
                                interactive format, this project takes your online presence to new heights. Stand out
                                from the crowd and captivate your audience with this dynamic combination of languages.
                            </p>
                            <div class="text-center">
                                <a href="https://chandrakantbudhalakoti.github.io/Personal-Portfolio/" target="_blank"
                                    class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/Project3.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Snake Game</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                            <div class="text-center">
                                <a href="https://chandrakantbudhalakoti.github.io/SnakeGame/" target="_blank"
                                    class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/Project4.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Simple Birthday Wish</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                            <div class="text-center">
                                <a href="https://chandrakantbudhalakoti.github.io/Simple-Birthday-Wish/" target="_blank"
                                    class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/Project5.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Milk Farm Calculator</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                            <div class="text-center">
                                <a href="https://chandrakantbudhalakoti.github.io/milkFarmCalculator/" target="_blank"
                                    class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/Project6.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Portfolio 2.0</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                            <div class="text-center">
                                <a href="https://chandrakantbudhalakoti.github.io/Portfolio2.0/" target="_blank"
                                    class="btn btn-success">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact Me</h1>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                        <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                                style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Kaladhungi,+Uttarakhand,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div><a class="embed-map-html" href="https://www.bootstrapskins.com/themes"
                            id="enable-map-data">premium bootstrap themes</a>
                        <style>
                            #embed-map-display img.text-marker {
                                max-width: none !important;
                                background: none !important;
                            }

                            img {
                                max-width: none
                            }
                        </style>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- form fields -->
                    <form action="action.php" method="POST">
                        <input name="name" type="text" class="form-control form-control-lg" placeholder="Name">
                        <input name="email" type="email" class="form-control mt-3" placeholder="Email">
                        <input name="subject" type="text" class="form-control mt-3" placeholder="Subject">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="projectDetails"
                                placeholder="Project Details"></textarea>
                        </div>
                    <button type="submit" name="submit" class="btn btn-success mt-3">Contact Me</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/chetan.budhalakoti.189" target="_blank"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/chetan_budhalakoti_" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/Chetan_189" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/chandra-kant-budhalakoti-bb7b4a20b" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://www.github.com/ChandrakantBudhalakoti" target="_blank"><i
                        class="fab fa-github"></i></a>
            </div>
        </div>
        <p id="copyright">
            &copy; <strong>Designed by Chetan. All rights reserved. </strong> <br>
        </p>
    </footer>

    <!-- load javascript after loading all html content -->
    <script src="script/script.js"></script>
</body>

</html>