<?php
/**
 * Source: "Talebert Child Care Uganda organization profile.docx",
 * section "ABOUT TALEBERT CHILD CARE UGANDA" ("Who We Are"). This
 * supersedes the live-site scrape per the client's updated direction —
 * see content/site.php header note. Mother-organization paragraph and
 * registration certificate added per client direction, 2026-07-24.
 */

return [
    'slug'        => 'about-us',
    'title'       => 'About Us – TALEBERT',
    'description' => 'Talebert Child Care Uganda is a nonprofit, child-centered organization dedicated to improving the lives of orphaned, abandoned, vulnerable, and street-connected children across Uganda.',
    'template'    => 'page',
    'heading'     => 'About Us',
    'intro' => [
        'Talebert Child Care Uganda is a nonprofit, child-centered organization dedicated to improving the lives of orphaned, abandoned, vulnerable, and street-connected children across Uganda.',
        'We believe that every child is created with dignity and deserves to grow up in a safe, loving, and nurturing environment where they can receive protection, education, healthcare, emotional support, and opportunities to achieve their full potential.',
        'Our work focuses on rescuing and supporting children who are at risk due to poverty, neglect, abuse, homelessness, family breakdown, or other difficult circumstances. Through compassionate care and long-term support, we seek to restore hope and help every child build a brighter future.',
        'We work closely with families, local communities, churches, schools, government agencies, and development partners to create lasting solutions that protect children and strengthen families.',
        'At Talebert Child Care Uganda, we believe that investing in children today is investing in a stronger, healthier, and more compassionate Uganda tomorrow.',
        "Talebert Child Care Uganda operates under Heal Now Ministries International (HNMI), our mother organization. HNMI runs a wider range of ministries; Talebert is HNMI's focus on children specifically.",
    ],
    'image' => '/assets/images/photo-community-1.webp',
    'cards' => [
        ['title' => 'Our Story', 'body' => 'How Talebert began.', 'url' => '/our-story'],
        ['title' => 'Mission and Vision', 'body' => 'What drives our work.', 'url' => '/mission-and-vision'],
        ['title' => 'Core Values', 'body' => 'The principles we hold to.', 'url' => '/core-values'],
        ['title' => 'Our Team', 'body' => 'The people behind Talebert.', 'url' => '/our-team'],
    ],
    'certificate' => [
        'heading' => 'Registered & Recognized',
        'body'    => 'Talebert Child Care Uganda is duly registered as a Community Based Organisation with Wakiso District Local Government, Directorate of Community Based Services (Reg. No. WCBO/18/340).',
        'image'   => '/assets/images/certificate-of-registration.webp',
        'caption' => 'Certificate of Registration — Wakiso District Local Government, issued 2 October 2024',
    ],
];
