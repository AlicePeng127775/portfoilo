<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Explore Alice Peng's portfolio featuring web development projects including the Little Fish Cares Animal Adoption Website. Discover innovative solutions in HTML, CSS, JavaScript, UI/UX design, and more.">
    <meta name="keywords" content="Alice Peng, Web Development, UI/UX Design, HTML, CSS, JavaScript, Visual Studio Code, WordPress, React, Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="icon" type="image/x-icon" href="/img/logo/icon.png">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Alice's Project | Little Fish Cares</title>
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
                        <a href="https://littlefishcares.alicccccc.com/"><i class="fa-solid fa-link"></i>Lauch&nbsp;Site</a>
                        <a href="https://github.com/AlicePeng127775/littlefishcares"><i class="fa-brands fa-github"></i>View&nbsp;Code</a>
                    </div>

                </div>

                <p  class="tool">Tool：HTML , CSS, JavaScript, Visual Studio Code,  Figma, illusttetor</p>
                <div class='projectIntro'>
                    <h6>Introduction：</h6>

                    <p>little fish cares is a pet adoption organization in Vancouver. The purpose of this project is to demonstrate the use of HTML, CSS, JavaScript combined with other JavaScript libraries and JQ plugins to complete web pages.</p>

                    <h6>Development:</h6>
                    <p>In the programming, I will be taught in the classroom used to switch images JavaScript integration into my home page banner images so that they can be constantly replaced, and in the future the image needs to be replaced in fact do not need to change the HTML and CSS and JS parts, just need to re-upload the image can be.I was also learning and experimenting with different JavaScript libraries, and eventually I chose AOS .js for my webpage scrolling animation because I only needed to have something to display when scrolling to the content Compared to ScrollMagic, it's much more suitable for a normal website. I also used Bootstrap for the slideshow part of the website, which saves me the time of making a responsive website. I also used Fancybox to show the zoom function, and Typed.js to make the typewriter function for the headline, which makes my homepage more playful and cute. Finally, I used Leaflet.js to create a map, so that even if little fish cares to add a new location in the future, it can be marked on the map, which is very flexible and convenient.</p>

                    <h6>Copyright:</h6>
                    <p>The images I used in this project are from adobe stock, the textual content part of the Little Fish Care story is from Chinese folk tales, and all others are originals.</p>
                </div>
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
                <div class='linkedin'><a href='https://www.linkedin.com/in/ziyuan-peng/'><i class="fa-brands fa-linkedin-in"></i></a></div>
                <div class='email'><a href='mailto:yuan127775@gmail.com'><i class="fa-solid fa-envelope"></i></a></div>
    </div>
    
    </main>
    <div class='content-wrap'></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src='./js/app.js'></script>
</body>
</html>