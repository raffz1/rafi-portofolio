<?php
// Tampilkan error jika ada issue saat debug
ini_set('display_errors', 0);
error_reporting(E_ALL);

$rootPath = dirname(__DIR__);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

// 1. Root route -> index.php utama
if (empty($uri)) {
    require $rootPath . '/index.php';
    exit;
}

// 2. Jika akses file php langsung (contoh: projects.php)
$targetFile = $rootPath . '/' . $uri;
if (is_file($targetFile) && pathinfo($targetFile, PATHINFO_EXTENSION) === 'php') {
    require $targetFile;
    exit;
}

// 3. Jika akses tanpa ekstensi .php (contoh: /projects -> projects.php)
if (is_file($targetFile . '.php')) {
    require $targetFile . '.php';
    exit;
}

// 4. Jika halaman tidak ditemukan
http_response_code(404);
echo "404 - Page Not Found";