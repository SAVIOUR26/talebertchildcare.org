<?php
/**
 * Homepage. This is the only page on the live site that carried real,
 * unique copy (everything else was an empty WordPress stub — see
 * BRAND.md). Text below is reproduced verbatim from the live site.
 */

return [
    'slug'        => 'home',
    'title'       => 'TALEBERT – Child Care Uganda',
    'description' => "Talebert Child Care Uganda is a community-based organization dedicated to uplifting the lives of disadvantaged children, young mothers, and vulnerable communities in Uganda since 2007.",
    'template'    => 'home',

    'hero' => [
        'eyebrow'  => 'TALEBERT',
        'tagline'  => 'CHILD CARE UGANDA',
        'headline' => "Empowering Lives, Building Futures: Supporting Uganda's Disadvantaged Children and Mothers",
        'cta'      => ['label' => 'DONATE NOW', 'url' => '/donate'],
    ],

    'about' => [
        'heading' => 'About US',
        'paragraphs' => [
            'Talebert Child Care Uganda is a community-based organization dedicated to uplifting the lives of disadvantaged children, young mothers, and vulnerable communities in Uganda. Since our establishment in 2007 by <strong>Mrs. Talemwa Edith</strong>, we have been a beacon of hope, providing educational support, advocacy, vocational training, and healthcare access to those in need. Our vision is to nurture empowered, self-reliant individuals who can transform their communities.',
            "Through our work, we aim to break the cycle of poverty by ensuring every child receives an education, every mother feels supported, and every voice is heard. Together, we're creating a brighter future for generations to come",
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
            ['value' => 500, 'suffix' => '+', 'label' => 'Children supported with scholastic materials and school fees'],
            ['value' => 150, 'suffix' => '+', 'label' => 'Young mothers trained in vocational skills.'],
            ['value' => 20,  'suffix' => '+', 'label' => 'Communities impacted through education, healthcare, and advocacy.'],
            ['value' => 100, 'suffix' => '%', 'label' => 'Commitment to building a sustainable future, including our dream of constructing a school for all our beneficiaries.'],
        ],
    ],

    'programs' => [
        'eyebrow' => 'PROGRAMS',
        'items' => [
            [
                'title' => 'Educational Support',
                'body'  => 'We believe education is the cornerstone of opportunity. Our educational support program ensures that disadvantaged children can attend school and thrive academically.',
                'icon'  => '/assets/images/icon-education.webp',
                'url'   => '/education-support',
            ],
            [
                'title' => 'Young Mothers Empowerment',
                'body'  => 'This program focuses on empowering young mothers with the skills and resources to support their families and become financially independent.',
                'icon'  => '/assets/images/icon-young-mothers.webp',
                'url'   => '/young-mothers-training',
            ],
            [
                'title' => 'Healthcare & Advocacy',
                'body'  => 'We work to improve health outcomes for children, young mothers, and the broader community while advocating for their rights.',
                'icon'  => '/assets/images/icon-healthcare.webp',
                'url'   => '/health-care-advocacy',
            ],
            [
                'title' => 'Community Development Initiatives',
                'body'  => 'Our work extends beyond individuals to uplift entire communities by fostering sustainable development.',
                'icon'  => '/assets/images/icon-community.webp',
                'url'   => null,
            ],
            [
                'title' => 'Talent and Skills Development',
                'body'  => 'We recognize the importance of nurturing talents and skills as pathways to self-discovery and sustainable livelihoods.',
                'icon'  => '/assets/images/icon-talent-skills.webp',
                'url'   => null,
            ],
            [
                'title' => 'Future Plans: Talebert School Project',
                'body'  => 'Our dream is to establish a school that will provide quality education and a nurturing environment for all children under our care.',
                'icon'  => '/assets/images/icon-future-plans.webp',
                'url'   => '/future-plans',
            ],
        ],
    ],

    'mission_vision' => [
        'mission' => [
            'heading' => 'Mission',
            'body'    => 'To empower disadvantaged children, young mothers, and vulnerable communities in Uganda by providing education, vocational training, advocacy, and holistic support. We are committed to breaking the cycle of poverty, fostering self-reliance, and creating a brighter future for generations to come.',
        ],
        'vision' => [
            'heading' => 'Vision',
            'body'    => 'A Uganda where every child has access to quality education, every mother is empowered to provide for her family, and communities thrive with dignity, opportunity, and hope.',
        ],
    ],

    'commitment' => [
        'heading' => 'We commit to empowering disadvantaged children, young mothers',
        'body'    => 'At Talebert Child Care Uganda, we are unwavering in our dedication to transforming lives. We commit to empowering disadvantaged children, young mothers, and vulnerable communities by providing education, skills, and resources necessary to break the cycle of poverty. With integrity, compassion, and collaboration, we strive to create a brighter and sustainable future for all those we serve.',
        'cta'     => ['label' => 'MORE . . .', 'url' => '/mission-and-vision'],
    ],

    'get_involved' => [
        'intro' => 'You can help make a difference! Here is how:',
        'items' => [
            ['title' => 'Donate', 'body' => 'Your financial support can provide education, materials, and hope to a child in need.', 'url' => '/donate'],
            ['title' => 'Volunteer', 'body' => 'Share your time and skills to inspire change in our programs.', 'url' => '/volunteer'],
            ['title' => 'Partner', 'body' => 'Collaborate with us as an individual, business, or organization to extend our reach and impact.', 'url' => '/partner-with-us'],
        ],
        'closing' => 'Take the first step to support our mission today! Together, we can transform lives and create lasting change.',
        'cta'     => ['label' => 'Proceed and Support', 'url' => '/get-involved'],
    ],

    'partners' => [
        'heading' => 'OUR PARTNERS',
        // Only one genuine partner logo was found on the live site (HNMI).
        // A "Powered By Thirdsan Enterprises" logo also appeared here, but
        // that's the previous site builder's self-promotion, not a program
        // partner — see BRAND.md note 6.
        'items' => [
            ['name' => 'HNMI Jesus Cares', 'logo' => '/assets/images/partner-hnmi.webp'],
        ],
    ],
];
