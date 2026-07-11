<?php
/**
 * Empty stub on the live site; the six program cards below are reused
 * verbatim from the homepage. Only four programs have their own page on
 * the live nav (Education Support, Young Mothers Training, Health Care &
 * Advocacy, Future Plans) — Community Development and Talent & Skills
 * Development are homepage-only cards with no destination page, so they
 * render without a link here rather than pointing at an invented URL.
 */

return [
    'slug'        => 'programs',
    'title'       => 'Programs – TALEBERT',
    'description' => 'Educational support, young mothers empowerment, healthcare and advocacy, community development, talent and skills development, and our future school project.',
    'template'    => 'page',
    'heading'     => 'Programs',
    'cards' => [
        ['title' => 'Educational Support', 'body' => 'We believe education is the cornerstone of opportunity. Our educational support program ensures that disadvantaged children can attend school and thrive academically.', 'icon' => '/assets/images/icon-education.webp', 'url' => '/education-support'],
        ['title' => 'Young Mothers Empowerment', 'body' => 'This program focuses on empowering young mothers with the skills and resources to support their families and become financially independent.', 'icon' => '/assets/images/icon-young-mothers.webp', 'url' => '/young-mothers-training'],
        ['title' => 'Healthcare & Advocacy', 'body' => 'We work to improve health outcomes for children, young mothers, and the broader community while advocating for their rights.', 'icon' => '/assets/images/icon-healthcare.webp', 'url' => '/health-care-advocacy'],
        ['title' => 'Community Development Initiatives', 'body' => 'Our work extends beyond individuals to uplift entire communities by fostering sustainable development.', 'icon' => '/assets/images/icon-community.webp', 'url' => null],
        ['title' => 'Talent and Skills Development', 'body' => 'We recognize the importance of nurturing talents and skills as pathways to self-discovery and sustainable livelihoods.', 'icon' => '/assets/images/icon-talent-skills.webp', 'url' => null],
        ['title' => 'Future Plans: Talebert School Project', 'body' => 'Our dream is to establish a school that will provide quality education and a nurturing environment for all children under our care.', 'icon' => '/assets/images/icon-future-plans.webp', 'url' => '/future-plans'],
    ],
];
