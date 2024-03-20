<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://kit.fontawesome.com/92a4d8c871.js" crossorigin="anonymous"></script>
    <title> Welcome to Alice's Web</title>
</head>
<body>
    <!----------------- header ------------------>
    <?php require_once("partials/header.php") ?>
    <!------------------------------------------->
    <main class='contactContainer'>
        <div class='container grid contactAll'>
        <div class='cartoon col-12 col-6-md'>
                <img src="./img/photo/Alice01.png" alt="cartoon Alice">  
            </div>

            <div class='contact  col-12 col-6-md'>
                <button class='contactInfoBtn'> My contact information <i class="fa-solid fa-caret-down fa-caret-down1"></i></button>
                <div class='contactInfo'>
                    <p><span><i class="fa-solid fa-phone"></i></span> Phone : +1 (236)8650127</p>
                    <p><span><i class="fa-solid fa-envelope"></i></span> Email : Yuan127775@gmail.com </p>
                    <p><span><i class="fa-brands fa-linkedin"></i></span> Linkedin: <a> ZiYuan,Peng</a></p>
                </div>
                <button class='leaveMessageBtn'> Leave your message <i class="fa-solid fa-caret-down fa-caret-down2"></i></button>
                <div class='leaveMessage'>
                    <form action="" class="messageFrom">
                        <h2 class="title">I will contact you within 24 hours</h2>
                        <p>all fields are required</p>
                            
                        <div class="messageInputContainer">
                            <input type="text" class="messageInput" placeholder="a">
                            <label for="" class="messageLabel">Your Name</label>
                        </div>
                            
                        <div class="messageInputContainer">
                            <input type="text" class="messageInput" placeholder="a">
                            <label for="" class="messageLabel">E-mail</label>
                        </div>
                            
                        <div class="messageInputContainer">
                            <input type="text" class="messageInput" placeholder="a">
                            <label for="" class="messageLabel">Phone</label>
                        </div>
            
                        <div class="messageInputContainer message">
                            <input type="text" class="messageInput messagetext" placeholder="a">
                            <label for="" class="messageLabel">Message</label>
                        </div>
                            
                        <input type="submit" class="submitBtn" value=" Give it to me :> ">
                    </form>
                </div> 
        </div>
        </div>
   
    </main>
         
    <div class='content-wrap'></div>
    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
    <script src='js/app.js/'></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Initial display settings
    const contactInfo = document.querySelector('.contactInfo');
    const leaveMessage = document.querySelector('.leaveMessage');
    const contactArrow = document.querySelector('.fa-caret-down1');
    const leaveMessageArrow = document.querySelector('.fa-caret-down2');

    // Initially, you might want to hide both sections or show one of them
    contactInfo.style.display = 'block'; // Hide contact info by default
    leaveMessage.style.display = 'none'; // Hide leave message by default

    const contactBtn = document.querySelector('.contactInfoBtn');
    const leaveMessageBtn = document.querySelector('.leaveMessageBtn');

    function toggleDisplay(element) {
        element.style.display = (element.style.display === 'block') ? 'none' : 'block';

    }

    function showInfo() {
        toggleDisplay(contactInfo); // Toggle the contact info
        leaveMessage.style.display = 'none'; // Ensure leaveMessage is hidden
        contactBtn.style.background = '#FAACAC';
        leaveMessageBtn.style.background = '#FAACAC88';
       // Adjusting arrows
        contactArrow.classList.toggle('up');
      
    }

    function showForm() {
        toggleDisplay(leaveMessage); // Toggle the leave message form
        contactInfo.style.display = 'none';
        contactBtn.style.background = '#FAACAC88'; // Ensure contactInfo is hidden
        leaveMessageBtn.style.background = '#FAACAC';

        // Adjusting arrows
        leaveMessageArrow.classList.toggle('up');
        
    }

    contactBtn.addEventListener('click', showInfo);
    leaveMessageBtn.addEventListener('click', showForm);
});
</script>

</body>
</html>