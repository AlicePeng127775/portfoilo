<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <title>About Alice</title>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main>
    <div class='aboutMe container grid'>
        <div class="photo col-12 col-12-sm col-6-lg ">
            <img src='./img/photo/Alice03.png' alt='alice photo'>
        </div>

        <div class="info col-12 col-12-sm col-6-lg">
            <h2>About Me</h2>
            <p data-aos="fade-left">
                Welcome to my site, a journey of creativity and technology. I'm a professional front-end developer and UI/UX designer. I'm dedicated to creating and delivering intuitive, engaging user experiences.<br><br>

                I have solid UI design skills and can make complex information simple and understandable through visual elements, making it an enjoyable experience for users to use a product. I'm also a front-end developer with experience in a variety of front-end technologies. I am able to translate design concepts into interactive products that provide a smooth user experience when browsing and operating.<br><br>

                I am passionate about innovation and challenges, and I am always looking for the ultimate technology to deliver a better project!
            </p>

            <div class='contactIcon' data-aos="fade-left">
                <div class='github'><a href='https://github.com/AlicePeng127775'><i class="fa-brands fa-github"></i></a></div>
                <div class='linkedin'><a href='www.linkedin.com/in/ziyuan-peng'><i class="fa-brands fa-linkedin-in"></i></a></div>
                <div class='email'><a href='mailto:yuan127775@gmail.com'><i class="fa-solid fa-envelope"></i></a></div>
            </div>
        </div>
    </div>
        
    <div class='skill container grid'>
        <h2 class='col-12'>My Skill</h2>

        <div class='col-12' data-aos="fade-up">
            <div class='fade skill-all'>
                <div class=' grid'>
                    <?php 
                        $codingskill = array('HTML', 'CSS', 'Java Script','PHP','SCSS','MySQL','Node.js','Wordpress');

                        foreach($codingskill as $value){
                            echo "<div class='skillCard col-6 col-3-lg'>
                            <div class='iconC'>
                            <img src='./img/skill/coding/$value.png' alt='$value logo'>
                            </div>
                            <p>$value</p>
                            </div>";
                        }
                    ?>
                </div>
            </div>
            

            <div class='fade skill-all'>
                <div class='grid'>
                    <?php 
                            $designskill = array('Photoshop', 'Illustrator', 'InDesign','Dimension','Premiere','After Effects','Audition','Figma');

                            foreach($designskill as $value){
                                echo "<div class='skillCard col-6 col-3-lg'>
                                <div class='iconC'>
                                <img src='./img/skill/design/$value.png' alt='$value logo'>
                                </div>
                                <p>$value</p>
                                </div>";
                            }
                    ?>
                </div>
            </div>
        </div>

                    <!-- Back and forward buttons -->
					<a class="Back" onclick="plusSlides(-1)">&#10094;</a>
					<a class="forward" onclick="plusSlides(1)">&#10095;</a>
				
					<br>
					
					<!-- The circles/dots -->
					<!-- <div style="text-align:center">
					<span class="dots" onclick="currentSlide(1)"></span>
					<span class="dots" onclick="currentSlide(2)"></span>
					<span class="dots" onclick="currentSlide(3)"></span>
					</div>  -->
    </div>
    </main>
    <!-- <div class='content-wrap'></div> -->
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src='./js/app.js'></script>
    
    <script>    
        //===========================//
        //  Home page - slideShow    //
        //===========================//

        var slidePosition = 1;
        slideShow(slidePosition);
        var slideInterval = setInterval(function() { plusSlides(1); }, 8000); // Change slides every 8 seconds


        // forward/Back controls
        function plusSlides(n) {
        slideShow(slidePosition += n);
        resetSlideInterval();
        }

        //  images controls
        function currentSlide(n) {
        slideShow(slidePosition = n);
        resetSlideInterval();
        }

        function slideShow(n) {
        var i;
        var slides = document.querySelectorAll(".skill-all");
        // var dots = document.querySelectorAll(".dots");
        if (n > slides.length) {slidePosition = 1}
        if (n < 1) {slidePosition = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        // for (i = 0; i < dots.length; i++) {
        //     dots[i].className = dots[i].className.replace(" enable", "");
        // }
        slides[slidePosition-1].style.display = "block";
        // dots[slidePosition-1].className += " enable";
        } 

        function resetSlideInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(function() { plusSlides(1); }, 8000); // Reset the timer
        }
    </script>
</body>
</html>