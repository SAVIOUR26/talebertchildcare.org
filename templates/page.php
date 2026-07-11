<?php
/**
 * Generic content page template — used by every simple page (About Us,
 * program pages, Get Involved, etc). Only renders the sections a given
 * page's content array actually defines.
 * @var array $page
 */
?>

<section class="page-hero">
  <div class="container">
    <h1><?= e($page['heading']) ?></h1>
  </div>
</section>

<section>
  <div class="container">

    <?php if (!empty($page['intro']) || !empty($page['image'])): ?>
      <div class="split reveal" style="margin-bottom: var(--space-5)">
        <?php if (!empty($page['image'])): ?>
          <div class="split__media">
            <img src="<?= e($page['image']) ?>" alt="" loading="lazy">
          </div>
        <?php endif; ?>
        <div>
          <?php foreach ($page['intro'] ?? [] as $paragraph): ?>
            <p><?= $paragraph ?></p>
          <?php endforeach; ?>
          <?php if (!empty($page['cta'])): ?>
            <a class="btn btn-primary" style="margin-top:1rem" href="<?= e($page['cta']['url']) ?>"><?= e($page['cta']['label']) ?></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['blocks'])): ?>
      <div class="mv-grid reveal" style="margin-bottom: var(--space-4)">
        <?php foreach ($page['blocks'] as $block): ?>
          <div class="mv-card">
            <h3><?= e($block['heading']) ?></h3>
            <p><?= e($block['body']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['commitment'])): ?>
      <div class="commitment reveal">
        <p><?= e($page['commitment']) ?></p>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['cards'])): ?>
      <div class="card-grid <?= count($page['cards']) >= 3 ? 'cols-3' : '' ?> reveal" style="margin-top: var(--space-4)">
        <?php foreach ($page['cards'] as $i => $card): ?>
          <?php $tag = !empty($card['url']) ? 'a' : 'div'; ?>
          <<?= $tag ?> class="card" style="transition-delay: <?= ($i % 3) * 80 ?>ms" <?= !empty($card['url']) ? 'href="' . e($card['url']) . '"' : '' ?>>
            <?php if (!empty($card['icon'])): ?><div class="icon"><img src="<?= e($card['icon']) ?>" alt="" loading="lazy" width="56" height="56"></div><?php endif; ?>
            <h3><?= e($card['title']) ?></h3>
            <p><?= e($card['body']) ?></p>
            <?php if (!empty($card['url'])): ?><span class="card-link">Learn more &rarr;</span><?php endif; ?>
          </<?= $tag ?>>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['closing'])): ?>
      <div class="get-involved-closing reveal">
        <p><?= e($page['closing']) ?></p>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['coming_soon'])): ?>
      <div class="coming-soon reveal">
        <p><?= e($page['coming_soon_note'] ?? 'Content coming soon.') ?></p>
        <?php if (!empty($page['coming_soon_link'])): ?>
          <a class="btn btn-secondary" style="margin-top:1rem" href="<?= e($page['coming_soon_link']['url']) ?>"><?= e($page['coming_soon_link']['label']) ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>
</section>
