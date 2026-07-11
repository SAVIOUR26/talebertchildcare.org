<?php
/**
 * Handles the Contact Us form (templates/contact.php). Uses plain PHP
 * mail() for now — swap in SMTP (e.g. PHPMailer) once those details are
 * available, see CLAUDE.md.
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$site = require $root . '/content/site.php';

function redirect_with_status(string $status): never
{
    header('Location: /contact-us?status=' . $status);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact-us');
    exit;
}

// Honeypot: bots fill every field, humans never see this one.
if (!empty($_POST['website'])) {
    redirect_with_status('sent'); // pretend success, drop silently
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$subject = trim((string) ($_POST['subject'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect_with_status('error');
}

$to = $site['contact_email'];
$mailSubject = 'Contact form: ' . mb_substr($subject, 0, 150);
$body = "New message from the Talebert Child Care Uganda contact form\n\n"
    . "Name: {$name}\n"
    . "Email: {$email}\n"
    . "Subject: {$subject}\n\n"
    . "Message:\n{$message}\n";

$headers = [
    'From: ' . $site['org_name'] . ' Website <no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'talebertchildcare.org') . '>',
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
];

$sent = @mail($to, $mailSubject, $body, implode("\r\n", $headers));

redirect_with_status($sent ? 'sent' : 'error');
