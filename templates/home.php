<?php
/** @var array $page content/pages/home.php */
require __DIR__ . '/icons.php';

// The live site's headline is one sentence split by a colon into a lead
// clause and a supporting clause. Presenting them as two typographic
// tiers (instead of one uniform wall of bold text) — the words are still
// 100% verbatim, only how they're broken across lines changes.
$headline = $page['hero']['headline'];
$headlineParts = explode(':', $headline, 2);
$headlineLead = trim($headlineParts[0]) . (count($headlineParts) > 1 ? ':' : '');
$headlineSub = count($headlineParts) > 1 ? trim($headlineParts[1]) : '';
?>

<section class="hero">
  <div class="hero__media">
    <img src="/assets/images/photo-community-1.webp" alt="" loading="eager" fetchpriority="high">
  </div>
  <div class="container hero__inner">
    <p class="hero__eyebrow-row">
      <span class="hero__eyebrow"><?= e($page['hero']['eyebrow']) ?></span>
    </p>
    <p class="hero__tagline"><?= e($page['hero']['tagline']) ?></p>
    <h1>
      <span class="hero__headline-lead"><?= e($headlineLead) ?></span>
      <?php if ($headlineSub): ?><span class="hero__headline-sub"><?= e($headlineSub) ?></span><?php endif; ?>
    </h1>
    <div class="hero__actions">
      <a class="btn btn-primary" href="<?= e($page['hero']['cta']['url']) ?>"><?= e($page['hero']['cta']['label']) ?></a>
      <a class="btn btn-outline" href="/about-us">Learn More</a>
    </div>
  </div>
  <div class="hero__scroll-cue" aria-hidden="true"><span>Scroll</span><span class="stem"></span></div>
  <div class="section-divider" aria-hidden="true">
    <svg viewBox="0 0 1440 90" preserveAspectRatio="none"><path d="M0,32 C280,90 480,0 760,28 C1040,56 1200,10 1440,40 L1440,90 L0,90 Z" fill="var(--color-white)"/></svg>
  </div>
</section>

<section>
  <div class="container split reveal">
    <div class="split__media">
      <div class="split__media-grid">
        <img src="<?= e($page['about']['images'][0]) ?>" alt="Community members and children supported by Talebert Child Care Uganda" loading="lazy" width="720" height="1080">
        <img src="<?= e($page['about']['images'][1]) ?>" alt="A child supported by Talebert Child Care Uganda" loading="lazy" width="720" height="960">
      </div>
    </div>
    <div>
      <p class="eyebrow"><?= e($page['about']['heading']) ?></p>
      <?php foreach ($page['about']['paragraphs'] as $paragraph): ?>
        <p><?= $paragraph ?></p>
      <?php endforeach; ?>
      <a class="btn btn-secondary" style="margin-top:1rem" href="<?= e($page['about']['cta']['url']) ?>"><?= e($page['about']['cta']['label']) ?></a>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container">
    <div class="section-heading reveal">
      <p class="eyebrow"><?= e($page['stats']['heading']) ?></p>
      <h2><?= e($page['stats']['subheading']) ?></h2>
    </div>
    <div class="stats-grid">
      <?php $statIcons = ['book', 'heart-hands', 'users', 'sparkle']; ?>
      <?php foreach ($page['stats']['items'] as $i => $stat): ?>
        <div class="stat-card reveal" style="transition-delay: <?= $i * 80 ?>ms">
          <div class="stat-icon"><?= icon($statIcons[$i] ?? 'sparkle') ?></div>
          <div class="stat-number" data-count-to="<?= (int) $stat['value'] ?>" data-suffix="<?= e($stat['suffix']) ?>">0<?= e($stat['suffix']) ?></div>
          <p><?= e($stat['label']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-heading reveal">
      <p class="eyebrow"><?= e($page['programs']['eyebrow']) ?></p>
    </div>
    <div class="card-grid cols-3">
      <?php foreach ($page['programs']['items'] as $i => $program): ?>
        <?php $tag = $program['url'] ? 'a' : 'div'; ?>
        <<?= $tag ?> class="card reveal" style="transition-delay: <?= ($i % 3) * 80 ?>ms" <?= $program['url'] ? 'href="' . e($program['url']) . '"' : '' ?>>
          <div class="icon"><img src="<?= e($program['icon']) ?>" alt="" loading="lazy" width="56" height="56"></div>
          <h3><?= e($program['title']) ?></h3>
          <p><?= e($program['body']) ?></p>
          <?php if ($program['url']): ?><span class="card-link">Learn more <span class="arrow">&rarr;</span></span><?php endif; ?>
        </<?= $tag ?>>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="mission-vision">
  <div class="container">
    <div class="mv-grid reveal">
      <div class="mv-card">
        <div class="mv-icon"><?= icon('target') ?></div>
        <h3><?= e($page['mission_vision']['mission']['heading']) ?></h3>
        <p><?= e($page['mission_vision']['mission']['body']) ?></p>
      </div>
      <div class="mv-card">
        <div class="mv-icon"><?= icon('compass') ?></div>
        <h3><?= e($page['mission_vision']['vision']['heading']) ?></h3>
        <p><?= e($page['mission_vision']['vision']['body']) ?></p>
      </div>
    </div>

    <div class="commitment reveal" style="margin-top: var(--space-4)">
      <h2><?= e($page['commitment']['heading']) ?></h2>
      <p><?= e($page['commitment']['body']) ?></p>
      <a class="btn btn-primary" href="<?= e($page['commitment']['cta']['url']) ?>"><?= e($page['commitment']['cta']['label']) ?></a>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-heading reveal">
      <h2>Get Involved</h2>
      <p><?= e($page['get_involved']['intro']) ?></p>
    </div>
    <div class="card-grid cols-3">
      <?php foreach ($page['get_involved']['items'] as $i => $item): ?>
        <a class="card numbered reveal" style="transition-delay: <?= $i * 80 ?>ms" href="<?= e($item['url']) ?>">
          <span class="card-index" aria-hidden="true"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
          <h3><?= e($item['title']) ?></h3>
          <p><?= e($item['body']) ?></p>
          <span class="card-link">Learn more <span class="arrow">&rarr;</span></span>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="get-involved-closing reveal">
      <p><?= e($page['get_involved']['closing']) ?></p>
      <a class="btn btn-primary" href="<?= e($page['get_involved']['cta']['url']) ?>"><?= e($page['get_involved']['cta']['label']) ?></a>
    </div>
  </div>
</section>

<?php if (!empty($page['partners']['items'])): ?>
<section class="partners">
  <div class="container">
    <div class="section-heading reveal">
      <p class="eyebrow"><?= e($page['partners']['heading']) ?></p>
    </div>
    <div class="partners-center reveal">
      <?php foreach ($page['partners']['items'] as $partner): ?>
        <div class="partner-spotlight">
          <img src="<?= e($partner['logo']) ?>" alt="<?= e($partner['name']) ?>" loading="lazy">
          <span class="label"><small>In Partnership With</small><strong><?= e($partner['name']) ?></strong></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
