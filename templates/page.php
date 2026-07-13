<?php
/**
 * Generic content page template — used by every simple page (About Us,
 * program pages, Get Involved, etc). Only renders the sections a given
 * page's content array actually defines.
 * @var array $page
 */
require __DIR__ . '/icons.php';
?>

<section class="page-hero">
  <div class="container">
    <p class="hero__eyebrow-row" aria-hidden="true"></p>
    <h1><?= e($page['heading']) ?></h1>
  </div>
</section>

<section>
  <div class="container">

    <?php if (!empty($page['intro']) || !empty($page['image'])): ?>
      <div class="split reveal" style="margin-bottom: var(--space-5)">
        <?php if (!empty($page['image'])): ?>
          <?php $isIconImage = str_contains($page['image'], '/icon-'); ?>
          <div class="split__media <?= $isIconImage ? 'split__media--icon' : '' ?>">
            <?php if ($isIconImage): ?>
              <div class="icon-plate"><img src="<?= e($page['image']) ?>" alt="" loading="lazy"></div>
            <?php else: ?>
              <img src="<?= e($page['image']) ?>" alt="" loading="lazy">
            <?php endif; ?>
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
      <?php $blockIcons = ['Mission' => 'target', 'Vision' => 'compass']; ?>
      <div class="mv-grid reveal" style="margin-bottom: var(--space-4)">
        <?php foreach ($page['blocks'] as $block): ?>
          <div class="mv-card">
            <div class="mv-icon"><?= icon($blockIcons[$block['heading']] ?? 'sparkle') ?></div>
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

    <?php if (!empty($page['founder_message'])): ?>
      <div class="founder-letter reveal">
        <h3><?= e($page['founder_message']['heading']) ?></h3>
        <?php foreach ($page['founder_message']['paragraphs'] as $paragraph): ?>
          <p><?= e($paragraph) ?></p>
        <?php endforeach; ?>
        <p class="founder-letter__signature"><?= e($page['founder_message']['signature']) ?></p>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['lists'])): ?>
      <div class="info-lists reveal" style="margin-bottom: var(--space-4)">
        <?php foreach ($page['lists'] as $list): ?>
          <div class="info-list">
            <h3><?= e($list['heading']) ?></h3>
            <ul>
              <?php foreach ($list['items'] as $item): ?>
                <li><?= e($item) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($page['cards'])): ?>
      <div class="card-grid <?= count($page['cards']) >= 3 ? 'cols-3' : '' ?> reveal" style="margin-top: var(--space-4)">
        <?php foreach ($page['cards'] as $i => $card): ?>
          <?php $tag = !empty($card['url']) ? 'a' : 'div'; ?>
          <<?= $tag ?> class="card <?= empty($card['icon']) ? 'numbered' : '' ?>" style="transition-delay: <?= ($i % 3) * 80 ?>ms" <?= !empty($card['url']) ? 'href="' . e($card['url']) . '"' : '' ?>>
            <?php if (!empty($card['icon'])): ?>
              <div class="icon"><img src="<?= e($card['icon']) ?>" alt="" loading="lazy" width="56" height="56"></div>
            <?php else: ?>
              <span class="card-index" aria-hidden="true"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <?php endif; ?>
            <h3><?= e($card['title']) ?></h3>
            <p><?= e($card['body']) ?></p>
            <?php if (!empty($card['url'])): ?><span class="card-link">Learn more <span class="arrow">&rarr;</span></span><?php endif; ?>
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
