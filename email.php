<!DOCTYPE html>

<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="styles.css" rel="stylesheet">
        <title>Jake Dvorak's GIS Portfolio</title>
    </head>
    <body>
        <div class="hero-image">
          <div class="hero-text">
            <img class="avatar" src="jake.png" alt="Avatar">
            <h1>Jake Dvorak</h1>
            <p>B.A. Geography</p>
            <a class="btn btn-outline-light mr-4 ml-4" href="home.html" role="button">Home</a></button>
            <a class="btn btn-outline-light mr-4 ml-4" href="gisportfolio.html" role="button">GIS Portfolio</a></button>
            <a class="btn btn-outline-light mr-4 ml-4" href="contact.html" role="button">Contact</a></button>
            <!--Create a github host site-->
          </div>
        </div>
<?php
if($_POST["message"]) {
    $recipient="dvorj80@gmail.com";
    $subject="Subject";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent. I will be in touch soon.</p>";
}
?>
        <form method="post" action="contact.php">
            <label>Name:</label>
            <input name="sender">
    
            <label>Email address:</label>
            <input name="senderEmail">
    
            <label>Message:</label>
            <textarea rows="5" cols="20" name="message"></textarea>
    
            <input type="submit" name="submit">
        </form>

        <div class="footer">
            <img class="img1" src="newpaltzlogo.jpg" alt="The State University of New York at New Paltz is Jake's alma mater." title="State University of New York at New Paltz">
            <img class="img2" src="HUNTER-LOGO.jpg" alt="Jake is currently enrolled at Hunter College." title="Hunter College">
        </div>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>