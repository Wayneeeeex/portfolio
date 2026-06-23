<?php

require __DIR__ . '/../vendor/autoload.php';

// Prepare Storage for Serverless
$storage = '/tmp/storage';
foreach (['framework/views', 'framework/cache/data', 'framework/sessions', 'logs', 'bootstrap/cache'] as $dir) {
    if (!is_dir("$storage/$dir")) mkdir("$storage/$dir", 0755, true);
}

$_ENV['APP_STORAGE'] = $storage;
$_ENV['VIEW_COMPILED_PATH'] = "$storage/framework/views";

$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath($storage);

// Process the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle($request = Illuminate\Http\Request::capture());

// If the content is empty, trigger an explicit debug dump to identify the blockage
if (empty($response->getContent())) {
    echo "<h1>LARAVEL BOOTED BUT RETURNED EMPTY CONTENT</h1>";
    echo "<p>Check your routes/web.php. Ensure your route returns a View or a Response object.</p>";
    exit;
}

$response->send();
$kernel->terminate($request, $response);