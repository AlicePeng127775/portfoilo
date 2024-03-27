<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Alice's Project</title>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main>
    <div class='portfolioTitle'>
        <h5>My Portfolio</h5>
        <p>Explore my latest portfolio of web development projects<br>
         covering a wide range of areas from HTML , CSS, JavaScript,<br>
          Visual Studio Code, UI/UX animation to WordPress and React.</p>
    </div>
    <div class='allProject container'>
        <div class='project grid'>
            <div class='projectInfo col-12' data-aos="fade-up">
                <div class='grid'>
                    <h4 class='col-12 col-8-lg '>Little Fish Cares Animal Adoption Website</h4> 
                    <div class='linkBtn col-12 col-4-lg'>
                        <a><i class="fa-solid fa-link"></i>Lauch&nbsp;Site</a>
                        <a><i class="fa-brands fa-github"></i>View&nbsp;Code</a>
                    </div>

                </div>

                <p>Tool：HTML , CSS, JavaScript, Visual Studio Code,  Figma, illusttetor</p>
                <p class='projectIntro'>
                    Introduction：For the Little Fish Cares pet adoption organization project in Vancouver, 
                    I focused on creating a dynamic, professional webpage using HTML, CSS, and JavaScript,
                     along with various libraries and plugins. The development process involved integrating 
                     JavaScript to allow for easy updating of homepage banner images without altering code, 
                     choosing AOS.js for scroll animations due to its simplicity, and implementing Bootstrap 
                     for responsive slideshows, Fancybox for image zoom, Typed.js for engaging typewriter 
                     effects on headlines, and Leaflet.js for an interactive map to future-proof location 
                     additions. Challenges arose when JavaScript functions clashed due to being in the same file,
                      a problem solved with guidance from my tutor, highlighting the importance of organized 
                      script management.
                </p>
            </div>
            <div class='projectImg col-12'><img src='./img/project/project1.png' alt="little fish cares website"></div>

        </div>
        <h2 class='other'>Other Project</h2>
        <div class='ontherProject container grid' data-aos="fade-up">
           
        <div class='project col-12 col-4-lg'>
            <div class='projectImg'><img src='./img/project/project2.png'  alt="Lumina online shopping Website"></div>
            <div class='projectInfo'>
                <h4>Lumina online shopping Website</h4>
                <a href='project2.php' class='viewBtn'> View Project</a>
            </div>
        </div>

        <div class='project col-12 col-4-lg'>
            <div class='projectImg'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>
            <div class='projectInfo'>
                <h4>Whac-A-Mole Website Game</h4>
                <a href='project3.php' class='viewBtn'> View Project</a>
            </div>
        </div>

        <div class='project col-12 col-4-lg'>
            <div class='projectImg'><img src='./img/project/project4.png' alt="October shopping app design"></div>
            <div class='projectInfo'>
                <h4>October shopping app design</h4>
                <a href='project4.php' class='viewBtn'> View Project</a>
            </div>
        </div>
        </div>
    </div>
    <div class='contactIcon'>
                <div class='github'><a href='https://github.com/AlicePeng127775'><i class="fa-brands fa-github"></i></a></div>
                <div class='linkedin'><a href='www.linkedin.com/in/ziyuan-peng'><i class="fa-brands fa-linkedin-in"></i></a></div>
                <div class='email'><a href='mailto:yuan127775@gmail.com'><i class="fa-solid fa-envelope"></i></a></div>
    </div>
    <div class='content-wrap'></div>
    </main>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src='./js/app.js'></script>
</body>
</html>