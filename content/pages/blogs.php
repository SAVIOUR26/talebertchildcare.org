<?php
/**
 * Empty stub on the live site. The only WP post on the live install is the
 * default "Hello world!" placeholder — not real Talebert content — so it
 * is not reproduced here.
 */

return [
    'slug'        => 'blogs',
    'title'       => 'Blogs – TALEBERT',
    'description' => 'News, updates, and success stories from Talebert Child Care Uganda.',
    'template'    => 'page',
    'heading'     => 'Blogs',
    'cards' => [
        ['title' => 'News & Updates', 'body' => 'The latest from Talebert Child Care Uganda.', 'url' => '/news-updates'],
        ['title' => 'Success Stories', 'body' => 'Lives changed through our programs.', 'url' => '/success-stories'],
    ],
];
