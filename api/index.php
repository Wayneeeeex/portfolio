<?php

// Force error reporting on for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Tell Laravel to use Vercel's writable storage space
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// Ensure the temporary directory structures exist before Laravel runs
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0755, true);
}
if (!is_dir('/tmp/storage/framework/sessions')) {
    mkdir('/tmp/storage/framework/sessions', 0755, true);
}

require __DIR__ . '/../public/index.php';
