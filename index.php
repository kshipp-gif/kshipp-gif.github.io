<?php

$message_sent = false;
if( isset($_POST['mail']) && $_POST['mail'] != '' ) {
    if( filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ) {
        
        // submit form
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $subject = $_POST['subject'];
        $txt = $_POST['message'];

        $mailTo = "karsonshipp@protonmail.com";
        $body = "";

        $body .= "From: ".$name."\r\n";
        $body .= "Email: ".$mailFrom."\r\n";
        $body .= "Message: ".$txt."\r\n";

        mail($to,$subject,$body);

        $message_sent = true;
    }
}

?><!DOCTYPE html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Karson Shipp Portfolio</title>
</head>
<body>
    <!-- START NAV -->
    <nav id="navbar">
        <a class="nav-link" href="#welcome-section">about</a>
        <a class="nav-link" href="#projects-section">work</a>
        <a class="nav-link" href="#contact-section">contact</a>
    </nav>
    <!-- END NAV -->
    <main id="main">
        <!-- START WELCOME SECTION -->
        <section id="welcome-section">
            <h1>i'm karson shipp</h1>
            <p>i'm a fourth-year computer science student</p>
        </section>
        <!-- END WELCOME SECTION -->
        <!-- START PROJECTS SECTION -->
        <section id="projects-section">
            <h2>projects title here</h2>
            <a id="profile-link" href="https://github.com/kshipp-gif">my github</a>
        </section>
        <!-- END PROJECTS SECTION -->
        <!--START CONTACT SECTION -->
        <section id="contact-section">
            <h2>find me here</h2>
            <div id="logos">
                <a href="#" class="fa fa-github"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
            <p>or send me an email</p>
            <div id="email-div">
                <form class="contact-form" action="index.php" method="post">
                    <label for="name">name</label>;
                    <input type="text" name="name" required placeholder="Enter your full name">
                    <label for="mail">your e-mail address</label>
                    <input type="email" name="mail" required placeholder="Enter your email address">
                    <label for="subject">subject</label>
                    <input type="text" name="subject" required placeholder="Subject">
                    <textarea name="message" required placeholder="Type your message here..."></textarea>
                    <button type="submit" name="submit">Send message</button>
                </form>
            </div>
        </section>
        <!-- END CONTACT SECTION -->
    </main>
</body>