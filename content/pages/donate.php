<?php
/**
 * Donations to Talebert are made to, and managed by, its mother
 * organization, Heal Now Ministries International (HNMI) — per client
 * direction, 2026-07-24. Links go to HNMI's own donate page and PayPal
 * button rather than a Talebert-run payment flow.
 */

return [
    'slug'        => 'donate',
    'title'       => 'Donate – TALEBERT',
    'description' => 'Sponsor a child, support education programs, fund healthcare and nutrition, or donate food, clothing, and medical supplies. Donations are made to and managed by our mother organization, Heal Now Ministries International (HNMI).',
    'template'    => 'page',
    'heading'     => 'Donate',
    'intro' => [
        'You can partner with us by sponsoring a child, supporting education programs, funding healthcare and nutrition, or donating food, clothing, and medical supplies.',
    ],
    'donate_links' => [
        'note' => "Talebert Child Care Uganda operates under Heal Now Ministries International (HNMI), our mother organization. All donations to Talebert are made to, and managed by, HNMI directly — use either option below to give.",
        'items' => [
            ['label' => 'Donate via HNMI Website', 'url' => 'https://healnowministriesint.org/donate/'],
            ['label' => 'Donate via PayPal', 'url' => 'https://www.paypal.com/donate/?hosted_button_id=WZXXEQM9MVSXS'],
        ],
    ],
];
