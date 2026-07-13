<?php
/**
 * Source: organization profile document, "PART 18 – PARTNERSHIP
 * OPPORTUNITIES". No payment processor is actually wired up (the live
 * site's PayPal image was decorative and unlinked) — this page says so
 * honestly instead of pretending donations are being processed.
 */

return [
    'slug'        => 'donate',
    'title'       => 'Donate – TALEBERT',
    'description' => 'Sponsor a child, support education programs, fund healthcare and nutrition, or donate food, clothing, and medical supplies.',
    'template'    => 'page',
    'heading'     => 'Donate',
    'intro' => [
        'You can partner with us by sponsoring a child, supporting education programs, funding healthcare and nutrition, or donating food, clothing, and medical supplies.',
    ],
    'coming_soon' => true,
    'coming_soon_note' => "Online donations aren't connected yet. To give today, please get in touch and we'll arrange it directly.",
    'coming_soon_link' => ['label' => 'Contact Us', 'url' => '/contact-us'],
];
