<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
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
                <a href='project1.php'class='viweBtn'> Viwe Project</a>
            </div>
        </div>

        <div class='project grid' data-aos="fade-left">
            <div class='projectImg col-12 col-6-lg'><img src='./img/project/project2.png'  alt="Lumina online shopping Website"></div>
            <div class='projectInfo col-12 col-6-lg'>
                <h4>Lumina online shopping Website</h4>
                <p>Tool：HTML , CSS, JavaScript, Visual Studio Code , Figma</p>
                <p>Introduction：Aenean maximus sapien et libero laoreet, eu egestas metus ornare. Suspendisse quis tortor et tortor tincidunt elementum ut convallis purus. Maecenas ut eros in dui consectetur finibus. Mauris quam ante,</p>
                <a href='project2.php' class='viweBtn'> Viwe Project</a>
            </div>
        </div>

        <div class='project grid' data-aos="fade-right">
            <div class='projectImg col-12 col-6-lg'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>
            <div class='projectInfo col-12 col-6-lg'>
                <h4>Whac-A-Mole Website Game</h4>
                <p>Tool：HTML , CSS, JavaScript, Visual Studio Code , Illusttretor</p>
                <p>Introduction：Aenean maximus sapien et libero laoreet, eu egestas metus ornare. Suspendisse quis tortor et tortor tincidunt elementum ut convallis purus. Maecenas ut eros in dui consectetur finibus. Mauris quam ante,</p>
                <a href='project3.php' class='viweBtn'> Viwe Project</a>
            </div>
        </div>

        <div class='project grid' data-aos="fade-left">
            <div class='projectImg col-12 col-6-lg'><img src='./img/project/project4.png' alt="October shopping app design"></div>
            <div class='projectInfo col-12 col-6-lg'>
                <h4>October shopping app design</h4>
                <p>Tool：Figma & Maze </p>
                <p>Introduction：Aenean maximus sapien et libero laoreet, eu egestas metus ornare. Suspendisse quis tortor et tortor tincidunt elementum ut convallis purus. Maecenas ut eros in dui consectetur finibus. Mauris quam ante,  </p>
                <a href='project4.php' class='viweBtn'> Viwe Project</a>
            </div>
        </div>
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