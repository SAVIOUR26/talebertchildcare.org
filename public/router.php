<?php
/**
 * Router for PHP's built-in dev server:
 *   php -S localhost:8000 -t public public/router.php
 *
 * Also doubles as the production front controller when every request is
 * rewritten here (see public/.htaccess). It serves static files that live
 * outside the docroot — /assets/*, /sitemap.xml, /robots.txt — directly
 * from the repo root (a sibling of /public/), lets the built-in server
 * serve any other real file inside /public as-is, and otherwise hands off
 * to index.php for page routing.
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$uri = rawurldecode($uri);

$staticFile = $root . $uri;
if ($uri !== '/' && is_file($staticFile) && !str_starts_with(realpath($staticFile), realpath($root . '/public'))) {
    $mimeTypes = [
        'webp' => 'image/webp', 'png' => 'image/png', 'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg', 'svg' => 'image/svg+xml', 'css' => 'text/css',
        'js' => 'application/javascript', 'ico' => 'image/x-icon',
        'xml' => 'application/xml', 'txt' => 'text/plain',
    ];
    $ext = strtolower(pathinfo($staticFile, PATHINFO_EXTENSION));
    header('Content-Type: ' . ($mimeTypes[$ext] ?? 'application/octet-stream'));
    if (in_array($ext, ['webp', 'png', 'jpg', 'jpeg', 'svg', 'ico'], true)) {
        header('Cache-Control: public, max-age=31536000, immutable');
    }
    readfile($staticFile);
    return true;
}

if (PHP_SAPI === 'cli-server') {
    $publicFile = __DIR__ . $uri;
    if ($uri !== '/' && is_file($publicFile)) {
        return false; // let the built-in server serve real files in /public as-is
    }
}

require __DIR__ . '/index.php';
