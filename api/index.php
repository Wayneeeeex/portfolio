<?php
// Force error reporting and debug mode on for Vercel troubleshooting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_ENV['APP_DEBUG'] = 'true';
$_ENV['LOG_CHANNEL'] = 'stderr';

require __DIR__ . '/../public/index.php';
