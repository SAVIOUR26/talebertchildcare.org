<?php
/**
 * @var array $site        content/site.php
 * @var array $page        current page's content/pages/*.php
 * @var string $currentPath current request path, e.g. "/about-us"
 */
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($page['title']) ?></title>
<meta name="description" content="<?= e($page['description']) ?>">
<link rel="canonical" href="<?= e($currentPath === '/' ? '/' : $currentPath) ?>">

<link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32.png">
<link rel="icon" type="image/png" sizes="192x192" href="/assets/icons/icon-192.png">
<link rel="apple-touch-icon" href="/assets/icons/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/style.css?v=<?= (int) @filemtime($root . '/assets/css/style.css') ?>">

<meta property="og:title" content="<?= e($page['title']) ?>">
<meta property="og:description" content="<?= e($page['description']) ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="/assets/images/logo-badge.webp">
</head>
<body>
<a href="#main" class="visually-hidden">Skip to content</a>

<header class="site-header">
  <div class="container site-header__inner">
    <a href="/" class="brand">
      <img src="/assets/images/logo-badge.webp" alt="<?= e($site['org_name']) ?>" width="64" height="64">
    </a>

    <nav class="main-nav" id="main-nav">
      <ul class="nav-list">
        <?php foreach ($site['nav'] as $item): ?>
          <?php $hasChildren = !empty($item['children']); ?>
          <li class="<?= $hasChildren ? 'has-children' : '' ?> <?= is_active_url($item['url'], $currentPath) ? 'is-active' : '' ?>">
            <a href="<?= e($item['url']) ?>">
              <?= e($item['label']) ?>
              <?php if ($hasChildren): ?><span class="chevron" aria-hidden="true"></span><?php endif; ?>
            </a>
            <?php if ($hasChildren): ?>
              <ul class="submenu">
                <?php foreach ($item['children'] as $child): ?>
                  <li><a href="<?= e($child['url']) ?>"><?= e($child['label']) ?></a></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
      <a class="btn btn-primary header-cta mobile" href="<?= e($site['header_cta']['url']) ?>"><?= e($site['header_cta']['label']) ?></a>
    </nav>

    <a class="btn btn-primary header-cta desktop" href="<?= e($site['header_cta']['url']) ?>"><?= e($site['header_cta']['label']) ?></a>

    <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-nav"><span></span></button>
  </div>
</header>

<main id="main">
