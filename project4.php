<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Discover the October Shopping App Design project by Alice Peng, featuring an innovative user experience and interface designed using Figma and tested with Maze. Explore the design process, from brainstorming to user testing.">
    <meta name="keywords" content="October Shopping App, App Design, UX Design, UI Design, Figma, Maze, Alice Peng, Portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link rel="icon" type="image/x-icon" href="/img/logo/icon.png">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Alice's Project | October Shopping App Design</title>
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
                    <h4 class='col-12 col-10-lg '>October shopping app design</h4> 
                    <div class='linkBtn col-12 col-2-lg'>
                        <a href="https://www.figma.com/proto/kekDaDo40WDLqUc19SJCMa/Alice_Guo_Figma?type=design&node-id=9-3971&t=pPfpMEEEntN3WXHW-1&scaling=scale-down&page-id=0%3A1&mode=design"><i class="fa-brands fa-figma"></i>View&nbsp;Model</a>
                    </div>

                </div>

                <p class="tool">Tool：Figma and Maze</p>
                <div class='projectIntro'>
                    <h6>Introduction:</h6>
                    <p>October is an original Accessories company, In this project  need to design App for they and create wireframe and interaction model using Figma and finally user testing using Maze. Modify the model based on the test results</p>
                    <h6>Brainstorm:</h6>
                    <p>October their main audience is 16-35 years old, I created a complete user personal, user scene, empathy map and journey map for their company, to understand their user's thoughts, actions, moods, and their opportunities, in addition to creating a flow chart.</p>
                    <h6>The Design Process: </h6>
                    <p>This time I used Figma from the first version of the wireframe.
                    I designed a total of 21 pages of wireframes including home page, product overview page, product categories, single page product page, shopping cart, checkout flow page, personal information page, and also created wish lists, coupons page, online customer service, browse history of orders, and other pages, which are based on the user's journey map and the use of the flowchart to add, implement the app functionality required by the user to provide a better user experience.
                    After that, I started searching and adding product images and content, aligning them with Grid features, changing my wireframes to high quality, adding interactive features to make all the buttons work, changing pages, adding animations, and etc.</p>
                    <h6>Testing and modification:<h6>
                    <p>For this project, I asked for a user test using "Maze", and I prepared 6 tasks which included, browsing products, finding online customer service, opening a wish list, deleting items from the shopping bag, completing the checkout process, viewing the order history and finally giving me feedback!</p>

                    <h6>Copyright:</h6>
                    <p>The images I used in this project came from Envato Elements.</p>
                </div>
            </div>
            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="500" height="1200" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FkekDaDo40WDLqUc19SJCMa%2FAlice_Guo_Figma%3Fnode-id%3D9-3971%26t%3DXnwc0PmhxtQV3N7m-1" allowfullscreen></iframe>
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
            <div class='projectImg'><img src='./img/project/project3.png' alt="Whac-A-Mole Website Game"></div>
            <div class='projectInfo'>
                <h4>Whac-A-Mole Website Game</h4>
                <a href='project3.php' class='viewBtn'> View Project</a>
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