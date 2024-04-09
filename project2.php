<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Discover the Lumina Online Shopping Website project by Alice Peng, showcasing a responsive and user-friendly e-commerce site designed with HTML, CSS, SCSS, JavaScript, and Figma.">
    <meta name="keywords" content="Alice Peng, Lumina Shopping Website, Web Development, E-commerce Design, HTML, CSS, SCSS, JavaScript, Figma, Portfolio">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Alice's Project | Lumina Online Shopping Website</title>
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
                    <h4 class='col-12 col-8-lg '>Lumina online shopping Website</h4> 
                    <div class='linkBtn col-12 col-4-lg'>
                        <a><i class="fa-solid fa-link"></i>Lauch&nbsp;Site</a>
                        <a><i class="fa-brands fa-github"></i>View&nbsp;Code</a>
                    </div>

                </div>

                <p class="tool">Tool：HTML , CSS, SCSS, JavaScript, Visual Studio Code, Figma</p>
                <div class='projectIntro'>
                    <h6>Introduction：</h6>
                    <p>lumina is a candle shop located in Vancouver, this project requires our team to design and develop their online shopping website, the entire webpage was designed using Figma to design the wireframes and developed in HTML, CSS, JavaScirt, </p>

                    <h6>Brainstorming and Design:</h6>
                    <p>In this project, our team used agile methodology, at the beginning of the project Sprint 1 phase, our team built the basic framework and functionality of the website for lumina using user stories, our web designer designed the initial version of the wireframes for the website, and after continuous meetings and discussions and changes to make the website more aesthetically pleasing, we finally collaborated on the finalization of the The wireframes were finalized in collaboration with our web designer.</p>
                    <h6>Development and Testing:</h6>
                    <p>After completing the website wireframe, I began developing the website. Meanwhile the content creators were working on the content, so in sprint 2 I had to make the basic framework of HTML and CSS first, and then follow the progress of the content creators to update the web content and add functionality in sprints 3, 4, and 5. In the process, our product owner was constantly testing and giving feedback, and I would make adjustments before the next regular meeting.</p>
                    <h6>Copyright:</h6>
                    <p>The images we used in this project came from adobe stock and the text content came from our content creators.</p>
                </div>
            </div>
            <div class='projectImg col-12'><img src='./img/project/project2.png' alt="Lumina online shopping Website"></div>

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