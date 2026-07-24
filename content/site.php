<?php
/**
 * Global, cross-page content: nav structure, brand strings, footer, contact
 * destination. Edit this file to change anything that appears on every page.
 * Per-page copy lives in content/pages/*.php.
 *
 * Content authority note: as of the client's "Talebert Child Care Uganda
 * organization profile" document, program messaging is deliberately
 * narrowed to two focus areas — Vulnerable Children and Street Children —
 * plus one future plan (an orphanage combined with a school). That
 * document is now the source of truth for mission/vision/values/founder
 * copy, superseding the original live-site scrape where they conflict
 * (e.g. the live site named the founder "Mrs. Talemwa Edith"; the profile
 * document names "Pastor Robert Talemwa").
 */

return [
    'org_name'   => 'Talebert Child Care Uganda',
    'wordmark'   => 'TALEBERT',
    'tagline'    => 'CHILD CARE UGANDA',
    'motto'      => 'Giving Every Child Hope, Love, and a Future.',
    'founder'    => 'Pastor Robert Talemwa',

    // Primary navigation, in on-site order. 'url' is the clean slug used
    // throughout the rebuild (sourced from the WP REST API, since the live
    // site itself only exposes ?page_id=NNNN links).
    'nav' => [
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'About Us', 'url' => '/about-us', 'children' => [
            ['label' => 'Our Story', 'url' => '/our-story'],
            ['label' => 'Mission and Vision', 'url' => '/mission-and-vision'],
            ['label' => 'Core Values', 'url' => '/core-values'],
            ['label' => 'Our Team', 'url' => '/our-team'],
        ]],
        ['label' => 'Programs', 'url' => '/programs', 'children' => [
            ['label' => 'Vulnerable Children', 'url' => '/vulnerable-children'],
            ['label' => 'Street Children', 'url' => '/street-children'],
            ['label' => 'Children with Special Needs', 'url' => '/children-with-special-needs'],
            ['label' => 'Future Plans', 'url' => '/future-plans'],
        ]],
        ['label' => 'Get Involved', 'url' => '/get-involved', 'children' => [
            ['label' => 'Donate', 'url' => '/donate'],
            ['label' => 'Volunteer', 'url' => '/volunteer'],
            ['label' => 'Partner With Us', 'url' => '/partner-with-us'],
        ]],
        ['label' => 'Blogs', 'url' => '/blogs', 'children' => [
            ['label' => 'News & Updates', 'url' => '/news-updates'],
            ['label' => 'Success Stories', 'url' => '/success-stories'],
        ]],
        ['label' => 'Contact Us', 'url' => '/contact-us'],
    ],

    // Header CTA button (live site: "DONATE NOW", href="#" — pointed at the
    // Donate page here since the original never linked anywhere).
    'header_cta' => ['label' => 'DONATE NOW', 'url' => '/donate'],

    // The live site's footer Facebook icon had no href at all. Real page
    // supplied by the client, 2026-07-24.
    'social' => [
        ['label' => 'Facebook', 'icon' => 'facebook', 'url' => 'https://www.facebook.com/share/1JBfrv861n/?mibextid=wwXIfr'],
    ],

    // Both the live site and the new profile document leave contact
    // details as placeholders ("Insert official email address", etc).
    // This is a placeholder — swap it for the real inbox before going
    // live, and see public/contact-handler.php for where SMTP config will
    // eventually go.
    'contact_email' => 'info@talebertchildcare.org',

    // Talebert operates under Heal Now Ministries International (HNMI) —
    // its mother organization. HNMI runs a wider range of ministries;
    // Talebert is HNMI's focus specifically on children. Per the client
    // (2026-07-24): all donations to Talebert are made to, and managed
    // by, HNMI directly — hence the external donate links below rather
    // than a Talebert-run payment flow.
    'mother_org' => [
        'name'       => 'Heal Now Ministries International',
        'short_name' => 'HNMI',
        'logo'       => '/assets/images/partner-hnmi.webp',
        'website'    => 'https://healnowministriesint.org',
        'donate_url' => 'https://healnowministriesint.org/donate/',
        'paypal_url' => 'https://www.paypal.com/donate/?hosted_button_id=WZXXEQM9MVSXS',
        'note'       => "Talebert Child Care Uganda operates under Heal Now Ministries International (HNMI), our mother organization. HNMI runs a wider range of ministries; Talebert is HNMI's focus on children specifically. All donations to Talebert are made to, and managed by, HNMI.",
    ],

    // The live site's shared footer widget (rendered on every page) also
    // repeats a version of this commitment line above a "Programs"
    // quick-link list.
    'footer' => [
        'commitment' => 'The safety and well-being of every child is the foundation of everything we do.',
        'copyright' => 'Copyright &copy; ' . date('Y') . ' Talebert Child Care Uganda',
        // The live site auto-generated Privacy Policy / Terms pages via a
        // plugin (wpautoterms) with boilerplate legal text. That text isn't
        // real Talebert copy, so it isn't recreated here — add real legal
        // pages before launch if you need them, then link them here.
        'legal' => [],
    ],
];
