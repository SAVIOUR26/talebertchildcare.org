<?php
/**
 * Small inline stroke-icon set, decorative only (no invented content) —
 * used to give the stats / mission-vision / get-involved sections visual
 * rhythm without relying on the mismatched-style raster icons extracted
 * from the live site. All use currentColor so they inherit brand color
 * from their container.
 */

function icon(string $name): string
{
    $icons = [
        'book' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5.5C4 4.67 4.67 4 5.5 4H12v16H5.5A1.5 1.5 0 0 1 4 18.5v-13Z"/><path d="M20 5.5c0-.83-.67-1.5-1.5-1.5H12v16h6.5a1.5 1.5 0 0 0 1.5-1.5v-13Z"/></svg>',
        'heart-hands' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-6.5-4.35-9-8.5C1.2 8.4 3 5 6.3 5c1.8 0 3 1 3.7 2 0 0 .7 1 2 1s2-1 2-1c.7-1 1.9-2 3.7-2 3.3 0 5.1 3.4 3.3 6.5-2.5 4.15-9 8.5-9 8.5Z"/></svg>',
        'pulse' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12h-4l-2.5 6L10 3l-2.5 9H3"/></svg>',
        'compass' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M15 9l-2 5.5L8 16l2-5.5Z"/></svg>',
        'target' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>',
        'users' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.2"/><path d="M2.5 20c.6-3.6 3.2-5.6 6.5-5.6s5.9 2 6.5 5.6"/><circle cx="17.5" cy="9" r="2.5"/><path d="M15.8 14.6c2.4.2 4.3 1.9 4.7 4.4"/></svg>',
        'sparkle' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v4M12 17v4M3 12h4M17 12h4M6 6l2.5 2.5M15.5 15.5 18 18M18 6l-2.5 2.5M8.5 15.5 6 18"/></svg>',
        'gift' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8.5" width="18" height="4" rx="0.6"/><path d="M5 12.5h14V20a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.5Z"/><path d="M12 8.5V21M12 8.5C10.5 5 6 5 6 7.5S9 9.5 12 8.5ZM12 8.5C13.5 5 18 5 18 7.5S15 9.5 12 8.5Z"/></svg>',
        'hand-heart' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 13.5h4l3.2 1.2h5.1a1.4 1.4 0 0 1 0 2.8H9"/><path d="M2 13.5v6.2h3.4v-6.2"/><path d="M9 14.7l6-1.6c1-.27 2 .1 2 1.2 0 .5-.3.9-.8 1.1L10 18.2"/><path d="M14.5 6.8c-1.6-1.1-3.7.2-3.7 2 0 1.9 2.3 3.3 3.7 4.4 1.4-1.1 3.7-2.5 3.7-4.4 0-1.8-2.1-3.1-3.7-2Z"/></svg>',
        'handshake' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9.5h4l3-2 3 1.6"/><path d="M22 9.5h-4l-2.6-1.7"/><path d="M6 9.5v4.3l4 3 1.6-1"/><path d="M18 9.5v4.3l-4 3-1.4-.9-2.6-1.9 3-2.4-3.4-2"/></svg>',
    ];

    return $icons[$name] ?? '';
}
