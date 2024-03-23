<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <!-- aos Animate On Scroll Library -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Jquery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<!-- Typer js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.css" />
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <title> Welcome to Alice's Web</title>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main class='container'>
        <div class='homeIntro'>
            <div class='planet'>
                    <div class='cube1'><img src='./img/planet/_cube.png'></div>
                    <div class='mars'><img src='./img/planet/_mars.png'></div>
                    <div class='earth'><img src='./img/planet/_earth.png'></div>
                    <div class='stellite'><img src='./img/planet/_satellite.png'></div>
                    <div class='cube2'><img src='./img/planet/_cube.png'></div>
            </div>
            <div class='bg'>
                    <div class='cubeBg1'><img src='./img/planet/_cube.png'></div>
                    <div class='cubeBg2'><img src='./img/planet/_cube.png'></div>
                    <div class='cubeBg3'><img src='./img/planet/_cube.png'></div>
                    <div class='cubeBg4'><img src='./img/planet/_cube.png'></div>
                    <div class='cubeBg5'><img src='./img/planet/_cube.png'></div>
                    <div class='cubeBg6'><img src='./img/planet/_cube.png'></div>
                </div>

        
            <div class='intro'> 
                <h2>
                    <span class='echo'>echo</span> Hello ! <br> I'm <span class='alice' id='element'></span><br>
                    FRONT - END DEVELOPER <br>
                    and DESINGER <br>
                </h2>

                <h6>Nice to meet you here 👋 </h6>

                <a href="about.php">Start exploring my site</a>
            </div>
        </div>
    </main>
    <div class='content-wrap'></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    
    <script src='./js/app.js/'></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12/lib/typed.min.js"></script> -->
    <script>
        const typed = new Typed('#element', {
                    strings: ['Aliccccce :>', 'Zi Yuan Peng :)','<span class="chinese">彭 子 鳶</span> :D'],
                    typeSpeed: 200,
                    loop: true, 
                    showCursor: true,
                    cursorChar: '|',
                });
    </script>

</body>
</html>