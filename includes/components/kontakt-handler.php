<?php
/**
 * Kontakt-Handler – von Form Specialist Agent generiert.
 * Verarbeitet POST vom Kontakt-Formular, sendet E-Mail, redirected.
 */
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit; }

// CSRF
if (!isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf'] ?? '')) {
    http_response_code(403); exit('Ungueltige Anfrage');
}

// Honeypot
if (!empty($_POST['website_url'])) { header('Location: kontakt.php?success=1'); exit; }

// Zeitstempel
if (time() - (int)($_POST['form_time'] ?? 0) < 3) { exit; }

$name    = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

$errors = [];
if (strlen($name) < 2) $errors[] = 'Name fehlt';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email ungueltig';
if (strlen($message) < 10) $errors[] = 'Nachricht zu kurz';

if (!empty($errors)) {
    header('Location: kontakt.php?error=' . urlencode(implode(', ', $errors)));
    exit;
}

$to      = 'info@example.com';
$subject = 'Neue Anfrage von ' . $name;
$body    = "Name: $name
Email: $email
Telefon: $phone

Nachricht:
$message";
$headers = "From: noreply@demo.foerdelab.de
Reply-To: $email";

@mail($to, $subject, $body, $headers);

header('Location: kontakt.php?success=1');
exit;