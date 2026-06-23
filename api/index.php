<?php

// Enable error tracing
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Re-route core operational caches to Vercel's temporary directory
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

$required_paths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/bootstrap/cache'
];

foreach ($required_paths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// Bind Vercel execution environment 
require __DIR__ . '/../public/index.php';
