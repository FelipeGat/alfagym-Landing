<?php
/**
 * AlfaGym Landing - Front Controller
 *
 * Routes:
 *   /           → Landing page (public)
 *   /login      → Login page
 *   /register   → Register page
 *   /dashboard  → Dashboard demo
 */

// Serve static files directly when using PHP built-in server
if (php_sapi_name() === 'cli-server') {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = __DIR__ . $uri;
    if ($uri !== '/' && is_file($file)) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $mimeTypes = [
            'css'  => 'text/css',
            'js'   => 'application/javascript',
            'png'  => 'image/png',
            'jpg'  => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif'  => 'image/gif',
            'svg'  => 'image/svg+xml',
            'ico'  => 'image/x-icon',
            'woff' => 'font/woff',
            'woff2'=> 'font/woff2',
        ];
        if (isset($mimeTypes[$ext])) {
            header('Content-Type: ' . $mimeTypes[$ext]);
        }
        readfile($file);
        return true;
    }
}

require_once __DIR__ . '/includes/functions.php';

$page = current_page();

$routes = [
    'landing'   => 'landing',
    'login'     => 'login',
    'register'  => 'register',
    'dashboard' => 'dashboard',
];

if (!isset($routes[$page])) {
    http_response_code(404);
    $page = 'landing';
}

$pageView = $routes[$page];

// Pages that use the public layout (header + footer)
$publicPages = ['landing', 'login', 'register'];

if (in_array($pageView, $publicPages)) {
    partial('header', ['pageView' => $pageView]);
    view($pageView);
    partial('footer');
} else {
    // Dashboard has its own layout
    view($pageView);
}
