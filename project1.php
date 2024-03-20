<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Welcome to Alice's Web</title>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main>
    <div class='portfoiloTitle'>
        <h5>My Portfoilo</h5>
        <p>Explore my latest portfolio of web development projects<br>
         covering a wide range of areas from HTML , CSS, JavaScript,<br>
          Visual Studio Code, UI/UX animation to WordPress and React.</p>
    </div>
    <div class='allProject container'>
        <div class='project grid'>
            <div class='projectInfo col-12'>
                <div class='grid'>
                    <h4 class='col-8'>Little Fish Cares Animal Adoption Website</h4> 
                    <a class='col-2'><i class="fa-solid fa-link"></i>Lauch Site</a>
                    <a class='col-2'><i class="fa-brands fa-github"></i> View Code</a>
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

        <div class='project grid'>
            <div class='projectImg col-12 col-4-sm'><img src='./img/project/project2.png'  alt="Lumina online shopping Website"></div>
            <div class='projectInfo col-12'>
                <h4>Lumina online shopping Website</h4>
                <a href='project2.php' class='viweBtn'> Viwe Project</a>
            </div>
        </div>

        <div class='project grid'>
            <div class='projectImg col-12 col-4-sm'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>
            <div class='projectInfo col-12'>
                <h4>Whac-A-Mole Website Game</h4>
                <a href='project3.php' class='viweBtn'> Viwe Project</a>
            </div>
        </div>

        <div class='project grid'>
            <div class='projectImg col-12 col-4-sm '><img src='./img/project/project4.png' alt="October shopping app design"></div>
            <div class='projectInfo col-12-sm col-6-lg'>
                <h4>October shopping app design</h4>
                <a href='project4.php' class='viweBtn'> Viwe Project</a>
            </div>
        </div>
    </div>
    <div class='content-wrap'></div>
    </main>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src='js/app.js/'></script>
</body>
</html>