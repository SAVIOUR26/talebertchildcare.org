<?php
/**
 * Programs hub. Per the client's direction, messaging is narrowed to
 * three focus areas (Vulnerable Children, Street Children, Children with
 * Special Needs) plus one future plan (an orphanage combined with a
 * school) — see content/site.php. Source: organization profile document,
 * Part 5 ("The Need"); Children with Special Needs added 2026-07-24,
 * not in the source document (see that page's own content file).
 */

return [
    'slug'        => 'programs',
    'title'       => 'Programs – TALEBERT',
    'description' => 'Talebert Child Care Uganda focuses on vulnerable children, street children, and children with special needs — with a future plan to build a permanent orphanage and school.',
    'template'    => 'page',
    'heading'     => 'Programs',
    'intro' => [
        'Talebert Child Care Uganda exists to respond to the challenges facing Uganda\'s most at-risk children with practical care, education, protection, family support, and opportunities that restore dignity and hope.',
    ],
    'cards' => [
        ['title' => 'Vulnerable Children', 'body' => 'Practical care, protection, education, and family support for children at risk due to poverty, neglect, abuse, or family breakdown.', 'icon' => '/assets/images/icon-community.webp', 'url' => '/vulnerable-children'],
        ['title' => 'Street Children', 'body' => 'Rescue, rehabilitation, and reintegration for children living on the streets — restoring dignity and a new chapter of life.', 'icon' => '/assets/images/icon-healthcare.webp', 'url' => '/street-children'],
        ['title' => 'Children with Special Needs', 'body' => 'The same love, protection, dignity, and opportunity to thrive as every other child in our care.', 'icon' => '/assets/images/icon-young-mothers.webp', 'url' => '/children-with-special-needs'],
        ['title' => 'Future Plans: Orphanage & School', 'body' => 'Our five-year goal is a safe, well-equipped children\'s care centre — an orphanage together with a school.', 'icon' => '/assets/images/icon-future-plans.webp', 'url' => '/future-plans'],
    ],
];
