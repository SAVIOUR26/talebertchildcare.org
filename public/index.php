<?php
/**
 * Front controller. Every page request is resolved to a content array in
 * /content/pages/*.php, then rendered through header -> template -> footer.
 * See router.php for how requests reach this file, and CLAUDE.md for how
 * to add a new page.
 */

declare(strict_types=1);

$root = dirname(__DIR__);

require $root . '/templates/functions.php';

$site = require $root . '/content/site.php';

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$path = '/' . trim(rawurldecode($path), '/');
$slug = $path === '/' ? 'home' : trim($path, '/');

// Guard against path traversal / anything but a plain slug.
if (!preg_match('/^[a-z0-9-]+$/', $slug)) {
    $slug = '404';
}

$contentFile = $root . '/content/pages/' . $slug . '.php';
if (!is_file($contentFile)) {
    http_response_code(404);
    $contentFile = $root . '/content/pages/404.php';
}

$page = require $contentFile;
$currentPath = $path;

require $root . '/templates/header.php';
require $root . '/templates/' . $page['template'] . '.php';
require $root . '/templates/footer.php';
