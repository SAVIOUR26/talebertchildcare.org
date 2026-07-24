<?php
/**
 * Homepage. Content is sourced from the client's "Talebert Child Care
 * Uganda organization profile" document, which supersedes the original
 * live-site scrape per the client's updated direction: program messaging
 * is narrowed to two focus areas (Vulnerable Children, Street Children)
 * plus one future plan (an orphanage combined with a school) — see
 * content/site.php header note and BRAND.md.
 */

return [
    'slug'        => 'home',
    'title'       => 'TALEBERT – Child Care Uganda',
    'description' => 'Talebert Child Care Uganda is a nonprofit, child-centered organization dedicated to improving the lives of orphaned, abandoned, vulnerable, and street-connected children across Uganda.',
    'template'    => 'home',

    'hero' => [
        'eyebrow'     => 'TALEBERT',
        'tagline'     => 'CHILD CARE UGANDA',
        'headline'    => 'Giving Every Child Hope, Love, and a Future.',
        'subheadline' => 'Talebert Child Care Uganda is a nonprofit, child-centered organization dedicated to improving the lives of orphaned, abandoned, vulnerable, and street-connected children across Uganda.',
        'cta'         => ['label' => 'DONATE NOW', 'url' => '/donate'],
    ],

    'about' => [
        'heading' => 'Who We Are',
        'paragraphs' => [
            'Talebert Child Care Uganda is a nonprofit, child-centered organization dedicated to improving the lives of orphaned, abandoned, vulnerable, and street-connected children across Uganda.',
            'We believe that every child is created with dignity and deserves to grow up in a safe, loving, and nurturing environment where they can receive protection, education, healthcare, emotional support, and opportunities to achieve their full potential.',
        ],
        'cta' => ['label' => 'More...', 'url' => '/about-us'],
        'images' => [
            '/assets/images/photo-community-1.webp',
            '/assets/images/photo-community-2.webp',
        ],
    ],

    'stats' => [
        'heading'    => 'Our Impact in Numbers',
        'subheading' => "What We've Achieved Together",
        'items' => [
            ['value' => 500, 'suffix' => '+', 'label' => 'Children supported with scholastic materials and school fees', 'short_label' => 'Children Supported'],
            ['value' => 20,  'suffix' => '+', 'label' => 'Communities impacted through education, healthcare, and advocacy.', 'short_label' => 'Communities Reached'],
            ['value' => 100, 'suffix' => '%', 'label' => 'Commitment to building a sustainable future, including our dream of constructing a school for all our beneficiaries.', 'short_label' => 'Committed to Every Child'],
        ],
    ],

    'programs' => [
        'eyebrow' => 'PROGRAMS',
        'items' => [
            [
                'title' => 'Vulnerable Children',
                'body'  => 'Practical care, protection, education, and family support for children at risk due to poverty, neglect, abuse, or family breakdown.',
                'icon'  => '/assets/images/icon-community.webp',
                'url'   => '/vulnerable-children',
            ],
            [
                'title' => 'Street Children',
                'body'  => 'Rescue, rehabilitation, and reintegration for children living on the streets — restoring dignity and a new chapter of life.',
                'icon'  => '/assets/images/icon-healthcare.webp',
                'url'   => '/street-children',
            ],
            [
                'title' => 'Children with Special Needs',
                'body'  => 'The same love, protection, dignity, and opportunity to thrive as every other child in our care.',
                'icon'  => '/assets/images/icon-young-mothers.webp',
                'url'   => '/children-with-special-needs',
            ],
            [
                'title' => 'Future Plans: Orphanage & School',
                'body'  => 'Our five-year goal is a safe, well-equipped children\'s care centre — an orphanage together with a school.',
                'icon'  => '/assets/images/icon-future-plans.webp',
                'url'   => '/future-plans',
            ],
        ],
    ],

    'mission_vision' => [
        'mission' => [
            'heading' => 'Mission',
            'body'    => 'To rescue, protect, nurture, educate, and empower orphaned, vulnerable, and street-connected children through quality care, family strengthening, education support, healthcare, life skills, and community partnerships that enable every child to live with dignity, hope, and opportunity.',
        ],
        'vision' => [
            'heading' => 'Vision',
            'body'    => 'To see every orphaned, vulnerable, and street-connected child in Uganda grow up in a safe, loving, and supportive environment where they are protected, educated, healthy, and empowered to become responsible and productive members of society.',
        ],
    ],

    'commitment' => [
        'heading' => 'Our Commitment',
        'body'    => "The safety and well-being of every child is the foundation of everything we do. We promote safe caregiving practices, respect children's rights, encourage accountability, and work closely with families, local authorities, and community leaders to ensure every child receives the protection they deserve. Every volunteer, caregiver, and staff member is expected to uphold the highest standards of child safeguarding and to act in the best interests of every child at all times.",
        'cta'     => ['label' => 'MORE . . .', 'url' => '/vulnerable-children'],
    ],

    'get_involved' => [
        'intro' => 'The needs of vulnerable children are too great for one organization to meet alone. We invite compassionate individuals and organizations to join us in giving children a brighter future.',
        'items' => [
            ['title' => 'Donate', 'body' => 'Sponsor a child, fund healthcare and nutrition, or donate food, clothing, and medical supplies.', 'url' => '/donate'],
            ['title' => 'Volunteer', 'body' => 'Volunteer your professional skills, or help provide vocational training opportunities.', 'url' => '/volunteer'],
            ['title' => 'Partner', 'body' => 'Partner with us as a church, business, or charitable organization, or support construction of children\'s facilities.', 'url' => '/partner-with-us'],
        ],
        'closing' => 'Every contribution, whether large or small, helps provide protection, education, healthcare, nourishment, and hope to children who need it most. Your partnership is an investment in lives that can influence families, communities, and future generations.',
        'cta'     => ['label' => 'Proceed and Support', 'url' => '/get-involved'],
    ],

    // HNMI was originally scraped off the live site as a generic "partner"
    // logo (see BRAND.md note 6). Per client direction (2026-07-24), the
    // real relationship is that HNMI is Talebert's mother organization —
    // reframed accordingly rather than left as a peer "partner" credit.
    'mother_org_spotlight' => [
        'heading' => 'OUR MOTHER ORGANIZATION',
        'label'   => 'Operating Under',
    ],
];
