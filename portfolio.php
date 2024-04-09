<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Alice Peng's Portfolio showcases a wide range of web development projects, including UI/UX design, WordPress, and React development. Explore innovative designs and solutions.">
    <meta name="keywords" content="Alice Peng, Portfolio, Web Development, UI/UX Design, WordPress, React, HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Alice's Portfolio</title>
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
        <div class='project grid' data-aos="fade-right">
            <div class='projectImg col-12 col-6-lg'><img src='./img/project/project1.png' alt="little fish cares website"></div>
            <div class='projectInfo col-12  col-6-lg'>
                <h4>Little Fish Cares Animal Adoption Website</h4>
                <p>Tool：HTML , CSS, JavaScript, Visual Studio Code,  Figma, illusttetor</p>
                <p>Introduction：little fish cares is a pet adoption organization in Vancouver. The purpose of this project is to demonstrate the use of HTML, CSS, JavaScript combined with other JavaScript libraries and JQ plugins to complete web pages.</p>
                <a href='project1.php'class='viewBtn1'> View Project</a>
            </div>
        </div>

        <div class='project grid' data-aos="fade-left">
            <div class='projectImg col-12 col-6-lg'><img src='./img/project/project2.png'  alt="Lumina online shopping Website"></div>
            <div class='projectInfo col-12 col-6-lg'>
                <h4>Lumina online shopping Website</h4>
                <p>Tool：HTML , CSS, JavaScript, Visual Studio Code , Figma</p>
                <p>Introduction：lumina is a candle shop located in Vancouver, this project requires our team to design and develop their online shopping website, the entire webpage was designed using Figma to design the wireframes and developed in HTML, CSS, JavaScirt, </p>
                <a href='project2.php' class='viewBtn1'> View Project</a>
            </div>
        </div>

        <div class='project grid' data-aos="fade-right">
            <div class='projectImg col-12 col-6-lg'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>
            <div class='projectInfo col-12 col-6-lg'>
                <h4>Whac-A-Mole Website Game</h4>
                <p>Tool：HTML , CSS, JavaScript, Visual Studio Code , Illusttretor</p>
                <p>Introduction：This is a small web game, the player mainly uses the mouse to control the hammer, to knock the mouse to get points, cute graphics with background music and percussion sound effects to make the game more interesting!</p>
                <a href='project3.php' class='viewBtn1'> View Project</a>
            </div>
        </div>

        <div class='project grid' data-aos="fade-left">
            <div class='projectImg col-12 col-6-lg'><img src='./img/project/project4.png' alt="October shopping app design"></div>
            <div class='projectInfo col-12 col-6-lg'>
                <h4>October shopping app design</h4>
                <p>Tool：Figma & Maze </p>
                <p>Introduction： October is an original Accessories company, In this project I need to design App for they and create wireframe and interaction model using Figma and finally user testing using Maze. Modify the model based on the test results,  </p>
                <a href='project4.php' class='viewBtn1'> View Project</a>
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
    <script src='js/app.js'></script>
</body>
</html>