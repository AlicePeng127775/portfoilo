<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title> Welcome to Alice's Web</title>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main>
    <div>
        <h1>My Portfoilo</h1>
        <p>Explore my latest portfolio of web development projects covering a wide range of areas from HTML , CSS, JavaScript, Visual Studio Code, UI/UX animation to WordPress and React.</p>
    </div>
    <div class='allProject'>
        <div class='project'>
            <div class='projectImg'><img scr='' alt=""></div>
            <div class='projectInfo'>
                <h2>Little Fish Cares Animal Adoption Website</h2>
                <p>tool：HTML , CSS, JavaScript, Visual Studio Code,  Figma, illusttetor</p>
                <p>Introduction：little fish cares is a pet adoption organization in Vancouver. The purpose of this project is to demonstrate the use of HTML, CSS, JavaScript combined with other JavaScript libraries and JQ plugins to complete web pages.</p>
                <button class='viweBtn'> Viwe Project</button>
            </div>
        </div>

        <div class='project'>
            <div class='projectImg'><img scr='' alt=""></div>
            <div class='projectInfo'>
                <h2>Lumina online shopping Website</h2>
                <p>tool：HTML , CSS, JavaScript, Visual Studio Code , Figma</p>
                <p>Introduction：Aenean maximus sapien et libero laoreet, eu egestas metus ornare. Suspendisse quis tortor et tortor tincidunt elementum ut convallis purus. Maecenas ut eros in dui consectetur finibus. Mauris quam ante,</p>
                <button class='viweBtn'> Viwe Project</button>
            </div>
        </div>

        <div class='project'>
            <div class='projectImg'><img scr='' alt=""></div>
            <div class='projectInfo'>
                <h2>Whac-A-Mole Website Game</h2>
                <p>tool：HTML , CSS, JavaScript, Visual Studio Code , Illusttretor</p>
                <p>Introduction：Aenean maximus sapien et libero laoreet, eu egestas metus ornare. Suspendisse quis tortor et tortor tincidunt elementum ut convallis purus. Maecenas ut eros in dui consectetur finibus. Mauris quam ante,</p>
                <button class='viweBtn'> Viwe Project</button>
            </div>
        </div>

        <div class='project'>
            <div class='projectImg'><img scr='' alt=""></div>
            <div class='projectInfo'>
                <h2>October shopping app design</h2>
                <p>tool：Figma & Maze </p>
                <p>Introduction：Aenean maximus sapien et libero laoreet, eu egestas metus ornare. Suspendisse quis tortor et tortor tincidunt elementum ut convallis purus. Maecenas ut eros in dui consectetur finibus. Mauris quam ante,  </p>
                <button class='viweBtn'> Viwe Project</button>
            </div>
        </div>
    </div>

    </main>

    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
</body>
</html>