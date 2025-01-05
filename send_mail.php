<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Debug: Bekijk ontvangen data
    error_log(print_r($_POST, true)); // Wordt gelogd in je serverlog, meestal `error.log`

    // Haal gegevens op uit het formulier
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $adres = $_POST['adres'] ?? '';
    $zipcode = $_POST['zipcode'] ?? '';
    $place = $_POST['place'] ?? '';
    $model = isset($_POST['model']) ? 'Barbecue' : '';
    $model2 = isset($_POST['model2']) ? 'Kachel' : '';
    $opmerking = $_POST['opmerking'] ?? '';

    // Controleer of alle vereiste velden zijn ingevuld
    if (empty($fullname) || empty($email) || empty($adres) || empty($zipcode)) {
        echo "Vul alle verplichte velden in.";
        exit;
    }

    // Stel een e-mail samen
    $to = 'jouw_email@voorbeeld.com'; // Vervang dit door je eigen e-mailadres
    $subject = 'Nieuwe Bestelling';
    $message = "Naam: $fullname\nEmail: $email\nTelefoon: $phone\nAdres: $adres\nPostcode: $zipcode\nWoonplaats: $place\nModel: $model $model2\nOpmerking: $opmerking";
    $headers = "From: $email";

    // Probeer de e-mail te verzenden
    if (mail($to, $subject, $message, $headers)) {
        echo "Bedankt, $fullname! Je bestelling is succesvol verzonden.";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van de e-mail.";
    }
} else {
    echo "Ongeldig verzoek.";
}
?>
