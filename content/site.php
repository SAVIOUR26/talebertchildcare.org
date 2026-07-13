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

    // No working social links exist on the live site (the footer Facebook
    // icon has no href at all), and the profile document's contact section
    // is entirely placeholders ("Insert Facebook page", etc). Add real
    // links here once available — the footer template already knows how
    // to render this array.
    'social' => [
        // ['label' => 'Facebook', 'icon' => 'facebook', 'url' => 'https://facebook.com/...'],
    ],

    // Both the live site and the new profile document leave contact
    // details as placeholders ("Insert official email address", etc).
    // This is a placeholder — swap it for the real inbox before going
    // live, and see public/contact-handler.php for where SMTP config will
    // eventually go.
    'contact_email' => 'info@talebertchildcare.org',

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
