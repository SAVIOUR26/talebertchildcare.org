<?php
/** @var array $page content/pages/contact-us.php */
require __DIR__ . '/icons.php';

$status = $_GET['status'] ?? null;
?>

<section class="page-hero">
  <div class="container">
    <p class="hero__eyebrow-row" aria-hidden="true"></p>
    <h1><?= e($page['heading']) ?></h1>
    <?php foreach ($page['intro'] as $paragraph): ?>
      <p><?= e($paragraph) ?></p>
    <?php endforeach; ?>
  </div>
</section>

<section>
  <div class="container">
    <div class="contact-layout reveal">
      <div class="form-note">
        <?php if ($status === 'sent'): ?>
          <div class="alert alert-success">Thanks for reaching out — we'll get back to you soon.</div>
        <?php elseif ($status === 'error'): ?>
          <div class="alert alert-error">Something went wrong sending your message. Please try again, or email us directly.</div>
        <?php endif; ?>

        <form action="/contact-handler.php" method="post" novalidate>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required></textarea>
          </div>
          <!-- Honeypot field: real users never fill this in -->
          <div style="position:absolute; left:-9999px;" aria-hidden="true">
            <label for="website">Website</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>

      <div class="form-note">
        <div class="icon-badge"><?= icon('handshake') ?></div>
        <p>Prefer email? Reach us directly at
          <a href="mailto:<?= e($site['contact_email']) ?>"><?= e($site['contact_email']) ?></a>.
        </p>
        <p style="color: var(--color-text-muted); font-size: 0.9rem;">
          The live site never published a phone number or address, so none is shown here — update
          <code>content/site.php</code> once you have one to share.
        </p>
      </div>
    </div>
  </div>
</section>
