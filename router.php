<?php
// router.php : Emulador de enrutamiento local para WebJetrix (replica vercel.json)
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// 1. Servir archivos estáticos directamente (imágenes, CSS, JS, video, etc.)
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// 2. Mapeo de rutas amigables a la carpeta api/
$rutas = [
    '/'          => '/api/index.php',
    '/index'     => '/api/index.php',
    '/blog'      => '/api/blog.php',
    '/contacto'  => '/api/contacto.php',
    '/planes'    => '/api/planes.php',
    '/proyectos' => '/api/proyectos.php',
    '/servicios' => '/api/servicios.php',
    '/sobre-mi'  => '/api/sobre-mi.php',
    '/nosotros'  => '/api/sobre-mi.php',
    '/rates'     => '/api/rates.php',
];

if (isset($rutas[$uri])) {
    require __DIR__ . $rutas[$uri];
    exit;
}

// 3. Rutas con parámetros
if ($uri === '/privacidad') {
    $_GET['page'] = 'privacidad';
    require __DIR__ . '/api/legal.php';
    exit;
}

if ($uri === '/terminos') {
    $_GET['page'] = 'terminos';
    require __DIR__ . '/api/legal.php';
    exit;
}

// 4. Fallback general a index.php
require __DIR__ . '/api/index.php';
