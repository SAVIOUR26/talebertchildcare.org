<?php
/** Small helpers shared by every template. */

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

function is_active_url(string $url, string $currentPath): bool
{
    if ($url === '/') {
        return $currentPath === '/';
    }
    return $currentPath === $url || str_starts_with($currentPath, $url . '/');
}
