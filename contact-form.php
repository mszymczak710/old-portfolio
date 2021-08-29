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