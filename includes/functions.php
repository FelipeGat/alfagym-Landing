<?php
/**
 * AlfaGym Landing - Helper Functions
 */

/**
 * Load configuration.
 */
function config(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/../config/app.php';
    }
    return $config;
}

/**
 * Get a config value by dot-notation key.
 */
function cfg(string $key, $default = null)
{
    $config = config();
    $keys   = explode('.', $key);
    $value  = $config;

    foreach ($keys as $k) {
        if (!isset($value[$k])) {
            return $default;
        }
        $value = $value[$k];
    }

    return $value;
}

/**
 * Return the asset URL path.
 */
function asset(string $path): string
{
    return cfg('assets_path') . '/' . ltrim($path, '/');
}

/**
 * Return a page URL.
 */
function url(string $path = ''): string
{
    $base = cfg('url');
    if ($path === '') {
        return $base ?: '/';
    }
    return $base . '/' . ltrim($path, '/');
}

/**
 * Escape HTML output.
 */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Get the current page slug from the URI.
 */
function current_page(): string
{
    $uri  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($uri, '/');

    return $path === '' ? 'landing' : $path;
}

/**
 * Check if current page matches.
 */
function is_page(string $page): bool
{
    return current_page() === $page;
}

/**
 * Include a view partial.
 */
function partial(string $name, array $data = []): void
{
    extract($data);
    require __DIR__ . '/../includes/' . $name . '.php';
}

/**
 * Include a page view.
 */
function view(string $name, array $data = []): void
{
    extract($data);
    require __DIR__ . '/../pages/' . $name . '.php';
}
