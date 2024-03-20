
<header class='header'>
       <div class='logo'><a href="home.php"> <img src="./img/logo/logo.png" alt="logo"></a></div>

        <div>
            <nav class="navigation">
			
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="portfoilo.php">PORTFOILO</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
			
			</nav>

            <div class="mobile-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
			
        </div>

        <script>
        
            const menuButton = document.querySelector('.mobile-menu');
            const nav = document.querySelector('.navigation');

            menuButton.addEventListener('click', function() {
            nav.classList.toggle('showMenu');
            menuButton.classList.toggle('active');
            });

        </script>

</header>
