<!DOCTYPE html>
<html lang="pl">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="generator" content="Visual Studio Code">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="description" content="Strona domowa (życiorys zawodowy)">
	<meta name="author" content="Mateusz Szymczak">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Mateusz Szymczak - strona WWW</title>
	<link rel="shortcut icon" href="css/photos/desktop-icon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/scripts.js"></script>
	<script type="text/javascript" src="javascript/contact-form.js"></script>
</head>
<body>
	<header class="header">
		<h1 class="header__title"> Mateusz Mariusz Szymczak - strona internetowa </h1>
	</header>

		<nav class="menu">
			<button class="menu__btn">&#x2630 Menu</button>
			<ul class="menu__list" id="js_menu">
				<li class="menu__item"><a title="O mnie" class="menu__link" href="index.html">O mnie</a></li>
				<li class="menu__item"><a title="Wykształcenie" class="menu__link" href="wyksztalcenie.html">Wykształcenie</a></li>
				<li class="menu__item"><a title="Umiejętności" class="menu__link" href="umiejetnosci.html">Umiejętności</a></li>
				<li class="menu__item"><a title="Zainteresowania" class="menu__link" href="zainteresowania.html">Zainteresowania</a></li>
				<li class="menu__item"><a title="Portfolio" class="menu__link" href="portfolio.html">Portfolio</a></li>
				<li class="menu__item"><a title="Kontakt" class="menu__link menu__link--active" href="kontakt.html">Kontakt</a></li>
				<li class="menu__item"><a title="English Version" class="menu__link" href="about_me.html">English Version <img src="css/photos/flags/flag_of_uk.png" class="flags" alt="Flaga Wielkiej Brytanii"></a></li>
			</ul>
		</nav>


	<section class="section">
		<article class="article">
			<h2 class="article__title">Kontakt:</h2>
                <p>Jeśli jesteś zainteresowany współpracą ze mną, napisz do mnie na adres: <a href="mailto:mszymczak710@o2.pl">mszymczak710@o2.pl</a> lub skorzystaj z formularza kontaktowego.</p>
		</article>

		<form class="contact-form" action="pl_mail.php" method="POST" onsubmit = "return validate();">

			<p class="contact-form__title">Formularz kontaktowy</p>

			<div id="error_message"></div>

			<div class="contact-form__fullname">
				<input type="text" placeholder="Imię*" id="name">
				<input type="text" placeholder="Nazwisko*" id="surname">
			</div>

			<div class="contact-form__field">
				<input type="text" placeholder="Adres e-mail*" id="email">
			</div>

			<div class="contact-form__field">
				<input type="text" placeholder="Telefon*" id="phone">
			</div>

			<div class="contact-form__field">
				<input type="text" placeholder="Temat*" id="subject">
			</div>

			<div class="contact-form__field">
				<textarea rows="10" placeholder="Wpisz tutaj swoją wiadomość..." id="message"></textarea>
			</div>

			<div class="contact-form__btn">
				<button type="submit" name="submit">Wyślij wiadomość</button>
			</div>
		</form>
	</section>

	<footer class="footer">
			Ostatnia aktualizacja: <span id="last_updated"></span><br>
			Stronę wykonał <b>Mateusz Mariusz Szymczak</b>.<br>
			&copy Wszelkie prawa zastrzeżone.
	</footer>

	<div class="host">
		Obsługiwane przez: <a title="Darmowy hosting stron www: netlify.com. Stwórz swoją stronę internetową za darmo!" target="_blank" href="https://netlify.com"> <img class="host__img" alt="Logo Hosta" src="css/photos/netlify_logo.png"> </a>
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
    $headers = "Od: ".$mailFrom;
    $txt = "Otrzymałeś wiadomość od ".$name.".\n\n".$surname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: kontakt.html?mailsend");
}
?>
