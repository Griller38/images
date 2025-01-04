<?php

$to = "plusone356@gmail.com";
$subject = "Test email";
$message = "Dit is een test om te zien of mail() werkt.";
$headers = "From: test@voorbeeld.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail verzonden!";
} else {
    echo "Mail verzenden mislukt.";
}
?>
