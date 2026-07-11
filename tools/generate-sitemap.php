<?php
/**
 * Regenerates /sitemap.xml from every file in /content/pages/ (except
 * 404.php). Run after adding or removing a page:
 *   php tools/generate-sitemap.php
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$baseUrl = 'https://talebertchildcare.org';

$files = glob($root . '/content/pages/*.php');
sort($files);

$urls = [];
foreach ($files as $file) {
    $slug = basename($file, '.php');
    if ($slug === '404') {
        continue;
    }
    $path = $slug === 'home' ? '/' : '/' . $slug;
    $urls[] = [
        'loc'        => $baseUrl . $path,
        'priority'   => $slug === 'home' ? '1.0' : '0.7',
    ];
}

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
foreach ($urls as $url) {
    $entry = $xml->addChild('url');
    $entry->addChild('loc', htmlspecialchars($url['loc']));
    $entry->addChild('priority', $url['priority']);
}

$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save($root . '/sitemap.xml');

echo 'Wrote ' . count($urls) . " URLs to sitemap.xml\n";
