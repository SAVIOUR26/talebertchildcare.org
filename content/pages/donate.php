<?php
/**
 * Empty stub on the live site; intro line reused verbatim from the
 * homepage's "Get Involved" list. No payment processor was actually wired
 * up on the live site (the PayPal image in the footer was decorative and
 * unlinked) — this page says so honestly instead of pretending donations
 * are being processed.
 */

return [
    'slug'        => 'donate',
    'title'       => 'Donate – TALEBERT',
    'description' => 'Your financial support can provide education, materials, and hope to a child in need.',
    'template'    => 'page',
    'heading'     => 'Donate',
    'intro' => [
        'Your financial support can provide education, materials, and hope to a child in need.',
    ],
    'coming_soon' => true,
    'coming_soon_note' => "Online donations aren't connected yet. To give today, please get in touch and we'll arrange it directly.",
    'coming_soon_link' => ['label' => 'Contact Us', 'url' => '/contact-us'],
];
