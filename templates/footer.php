<?php
/**
 * @var array $site content/site.php
 */
?>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="/assets/images/logo.webp" alt="<?= e($site['org_name']) ?>" width="40" height="40">
        <p><?= e($site['footer']['commitment']) ?></p>
      </div>

      <div>
        <h4>Programs</h4>
        <ul>
          <?php foreach ($site['nav'] as $item): ?>
            <?php if ($item['label'] === 'Programs'): ?>
              <?php foreach ($item['children'] as $child): ?>
                <li><a href="<?= e($child['url']) ?>"><?= e($child['label']) ?></a></li>
              <?php endforeach; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>

      <div>
        <h4>Get Involved</h4>
        <ul>
          <?php foreach ($site['nav'] as $item): ?>
            <?php if ($item['label'] === 'Get Involved'): ?>
              <?php foreach ($item['children'] as $child): ?>
                <li><a href="<?= e($child['url']) ?>"><?= e($child['label']) ?></a></li>
              <?php endforeach; ?>
            <?php endif; ?>
          <?php endforeach; ?>
          <li><a href="/contact-us">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span><?= $site['footer']['copyright'] ?></span>
      <?php if (!empty($site['social'])): ?>
        <span>
          <?php foreach ($site['social'] as $link): ?>
            <a href="<?= e($link['url']) ?>"><?= e($link['label']) ?></a>
          <?php endforeach; ?>
        </span>
      <?php endif; ?>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
