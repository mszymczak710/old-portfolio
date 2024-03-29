<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="generator" content="Visual Studio Code">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="description" content="Homepage (Curriculum Vitae)">
	<meta name="author" content="Mateusz Szymczak">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Mateusz Szymczak - website WWW</title>
	<link rel="shortcut icon" href="css/photos/desktop-icon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/scripts.js"></script>
    <script type="text/javascript" src="javascript/contact-form_eng.js"></script>
</head>
<body>
	<header class="header">
		<h1 class="header__title"> Mateusz Mariusz Szymczak - website </h1>
	</header>

		<nav class="menu">
			<button class="menu__btn">&#x2630 Menu</button>
			<ul class="menu__list" id="js_menu">
				<li class="menu__item"><a title="About Me" class="menu__link" href="about_me.html">About Me</a></li>
				<li class="menu__item"><a title="Education" class="menu__link" href="education.html">Education</a></li>
				<li class="menu__item"><a title="Skills" class="menu__link" href="skills.html">Skills</a></li>
				<li class="menu__item"><a title="Interests" class="menu__link" href="interests.html">Interests</a></li>
				<li class="menu__item"><a title="Portfolio" class="menu__link" href="portfolio_eng.html">Portfolio</a></li>
				<li class="menu__item"><a title="Contact" class="menu__link menu__link--active" href="contact.html">Contact</a></li>
				<li class="menu__item"><a title="Polska Wersja" class="menu__link" href="index.html">Polska Wersja <img src="css/photos/flags/flag_of_poland.png" class="flags" alt="Flaga Polski"></a></li>
			</ul>
		</nav>

        <section class="section">
            <article class="article">
                <h2 class="article__title">Contact:</h2>
                    <p>If you are interested in working with me, please send me an email at <a href="mailto:mszymczak710@o2.pl">mszymczak710@o2.pl</a> or use the contact form.</p>
              </article>

            <form class="contact-form" action="eng_mail.php" method="POST" onsubmit = "return validate();">

                <p class="contact-form__title">Contact form</p>

				<div id="error_message"></div>

                <div class="contact-form__fullname">
                    <input type="text" placeholder="Name*" id="name">
                    <input type="text" placeholder="Surname*" id="surname">
                </div>

                <div class="contact-form__field">
                    <input type="text" placeholder="E-mail adress*" id="email">
                </div>

                <div class="contact-form__field">
                    <input type="text" placeholder="Phone number*" id="phone">
                </div>

                <div class="contact-form__field">
                    <input type="text" placeholder="Subject*" id="subject">
                </div>

                <div class="contact-form__field">
                    <textarea rows="10" placeholder="Enter your message here..." id="message"></textarea>
                </div>

                <div class="contact-form__btn">
                    <button type="submit" name="submit">Send message</button>
                </div>
            </form>
        </section>

    <footer class="footer">
			Last updated: <span id="last_updated"></span><br>
			This page was created by <b>Mateusz Mariusz Szymczak</b>.<br>
			&copy All rights reserved.
	</footer>

	<div class="host">
		Powered by hosting: <a title="Hosted on free web hosting netlify.com. Create your own website for FREE!" target="_blank" href="https://netlify.com" target="_blank" href="https://netlify.com"> <img class="host__img" alt="Logo Hosta" src="css/photos/netlify_logo.png"> </a>
	</div>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "mszymczak710@o2.pl";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$surname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: kontakt.html?mailsend");
}
?>
