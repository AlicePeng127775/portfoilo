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
        <img src="" alt="">
    </div>

    <div>
        <button class='contactInfoBtn'> My contact information </button>
        <div class='contactInfo'>
            <p> <span><icon></icon></span> Phone : +1 (236)8650127 </p>
            <p> <span><icon></icon></span> Email : Yuan127775@gmail.com </p>
            <p> <span><icon></icon></span> Linkedin: <a>ZiYuan,Peng</a></p>
        </div>
        <button class='leaveMessageBtn'> Leave your message </button>
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
    
    </main>

    <!----------------- footer ------------------>
    <?php require_once("partials/footer.php") ?>
    <!------------------------------------------->
</body>
</html>