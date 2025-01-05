<?php
$to = "jouw_email@voorbeeld.com"; // Vervang dit door je eigen e-mailadres
$subject = "Test e-mail";
$message = "Dit is een test e-mail om te controleren of de server e-mails kan verzenden.";
$headers = "From: webmaster@example.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Test e-mail succesvol verzonden!";
} else {
    echo "Test e-mail niet verzonden.";
}
?>
