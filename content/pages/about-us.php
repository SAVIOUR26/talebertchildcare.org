<?php
/**
 * The live "About Us" page (?page_id=1461) is an empty WordPress stub —
 * no unique body content exists for it anywhere on the live site (verified
 * via the WP REST API). The paragraphs below are the same About section
 * copy that appears on the homepage, reused verbatim rather than inventing
 * new text. See BRAND.md, finding 1-2.
 */

return [
    'slug'        => 'about-us',
    'title'       => 'About Us – TALEBERT',
    'description' => 'Talebert Child Care Uganda is a community-based organization dedicated to uplifting the lives of disadvantaged children, young mothers, and vulnerable communities in Uganda.',
    'template'    => 'page',
    'heading'     => 'About Us',
    'intro' => [
        'Talebert Child Care Uganda is a community-based organization dedicated to uplifting the lives of disadvantaged children, young mothers, and vulnerable communities in Uganda. Since our establishment in 2007 by <strong>Mrs. Talemwa Edith</strong>, we have been a beacon of hope, providing educational support, advocacy, vocational training, and healthcare access to those in need. Our vision is to nurture empowered, self-reliant individuals who can transform their communities.',
        "Through our work, we aim to break the cycle of poverty by ensuring every child receives an education, every mother feels supported, and every voice is heard. Together, we're creating a brighter future for generations to come.",
    ],
    'image' => '/assets/images/photo-community-1.webp',
    'cards' => [
        ['title' => 'Our Story', 'body' => 'How Talebert began.', 'url' => '/our-story'],
        ['title' => 'Mission and Vision', 'body' => 'What drives our work.', 'url' => '/mission-and-vision'],
        ['title' => 'Core Values', 'body' => 'The principles we hold to.', 'url' => '/core-values'],
        ['title' => 'Our Team', 'body' => 'The people behind Talebert.', 'url' => '/our-team'],
    ],
];
