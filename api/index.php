<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . '/..' . $uri;

// 1. Jika request ke root (/), jalankan index.php utama
if ($uri === '/' || $uri === '') {
    require __DIR__ . '/../index.php';
    exit;
}

// 2. Jika request file statis (gambar, css, js, svg favicon), biarkan web server membacanya
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// 3. Jika request file php langsung (misal: /projects.php atau /contact.php)
if (file_exists($file) && substr($file, -4) === '.php') {
    require $file;
    exit;
}

// 4. Jika request tanpa ekstensi .php (misal: /projects), arahkan ke filenya
if (file_exists($file . '.php')) {
    require $file . '.php';
    exit;
}

// Fallback jika tidak ditemukan
http_response_code(404);
echo "404 Not Found";