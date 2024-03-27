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
                    <h4 class='col-12 col-8-lg '>Whac-A-Mole Website Game</h4> 
                    <div class='linkBtn col-12 col-4-lg'>
                        <a><i class="fa-solid fa-link"></i>Play&nbsp;Game</a>
                        <a><i class="fa-brands fa-github"></i>View&nbsp;Code</a>
                    </div>

                </div>

                <p>Tool：HTML , CSS, JavaScript, Visual Studio Code , Illusttretor</p>
                <div class='projectIntro'>
                <h6>Introduction：</h6>
                <p>This is a small web game, the player mainly uses the mouse to control the hammer, to knock the mouse to get points, cute graphics with background music and percussion sound effects to make the game more interesting!</p>
                <h6>The first version:<h6>
                <p>Brainstorm and Search:</p>
                <p>Since we need to use the getBoundingClientRect() method to create web pages with images that follow the cursor, I wanted to make a whac-a-mole game. Since I was not familiar with this method, I started to look for related introductions and tutorials on the internet.
                At the same time, I was also looking for suitable pictures. I also made reference to the current gopher games on the internet, and formulated the basic rules and functions. But because the focus is on the use of getBoundingClientRect() method, so the rules only set the time for 30 seconds, hit the mouse can be added points, and in the final pop-up window to tell you the total score.</p>
                <p>Development and testing process:</p>
                <p>I’ve designed the web page layout for the Whack-A-Mole game. I use some oval images to represent the hole for mouse image to go up and down. I use the hammer images to replace the normal cursor during the game. During development I used the getBoundingClientRect() method to get the hammer to hit the mouse and add points,</P>

                <h6>Second version:</h6>
                <p>Re-brainstormed and re-designed:</p>
                <p>I added refresh page, and pause, etc. to the first version.
                I also re-searched for suitable images and icons, since I couldn't find suitable hammers, the original hammer image was too low pixel, so I used an illustrator to draw my own vector image and used it in the game.
                In addition, I found background music, and hit sound effects to increase the game play experience.
                After that, I use a background-image to make the web page look more interesting.</p>
                <p>Development and testing process:</p>
                <p>First, I added two new buttons on the top left corner which is refresh and pause button. I added the pauseGame() and refreshGame() function to make the button can pause and refresh the game. But unfortunately, the hammer cannot interact with these two buttons in the first few tests. After that, I found that the problem is in the JavaScript part, and I’ve fixed the error of refreshGame() and pauseGame() function by modified the JavaScript code. Next, I change the images and icons for mouse and hammer to improve the visual presentation quality of the game. I also added a few audios effect which is hit sound when the hammer hit mouse and background-music to increase the game play experience of user. In addition, I use a background-image to make the web page look more interesting. Lastly, I added some CSS code for the start button, to make it can ease-in when the web page was launched and disappear after user click the start button to improve the visual presentation quality.</p>
                <h6>Copyright:</h6>
                    <p>The images, icon and muisc I used in this project came from Envato Elements.</p>
                </div>
            </div>
            <div class='projectImg col-12'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>

        </div>
        <h2 class='other'>Other Project</h2>
        <div class='ontherProject container grid' data-aos="fade-up">
           
        <div class='project col-12 col-4-lg'>
            <div class='projectImg'><img src='./img/project/project1.png'  alt="Little Fish Cares Animal Adoption Website"></div>
            <div class='projectInfo'>
                <h4>Little Fish Cares Animal Adoption Website</h4>
                <a href='project1.php' class='viewBtn'> View Project</a>
            </div>
        </div>

        <div class='project col-12 col-4-lg'>
            <div class='projectImg'><img src='./img/project/project2.png' alt="Lumina online shopping Website"></div>
            <div class='projectInfo'>
                <h4>Lumina online shopping Website</h4>
                <a href='project2.php' class='viewBtn'> View Project</a>
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