<?php

// 1. Force absolute on-screen raw error rendering
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Setup writeable paths inside Vercel's volatile allocation area
$storagePath = '/tmp/storage';
$cachePath = '/tmp/storage/bootstrap/cache';

$paths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/logs',
    $cachePath
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// Set runtime environment parameters
$_ENV['APP_STORAGE'] = $storagePath;
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['LOG_CHANNEL'] = 'stderr'; // Force logging to standard error output stream instead of a file!

// 3. Include Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 4. Boot App and Overwrite core operational pathing bindings
$app = require __DIR__ . '/../bootstrap/app.php';

// Force Laravel to look for configuration/service compilation inside /tmp
$app->useStoragePath($storagePath);
$app->bootstrapWith([
    \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
    \Illuminate\Foundation\Bootstrap\LoadConfiguration::class,
    \Illuminate\Foundation\Bootstrap\HandleExceptions::class,
    \Illuminate\Foundation\Bootstrap\RegisterProviders::class,
    \Illuminate\Foundation\Bootstrap\BootProviders::class,
]);

// Remap cache paths specifically to prevent the bootstrap error
$app->bind('path.bootstrap', function () use ($cachePath) {
    return dirname($cachePath);
});

// Force View Locations
$app->afterResolving('view', function ($view) {
    $view->addLocation(realpath(__DIR__ . '/../resources/views'));
});

// 5. Run Kernel safely with raw try-catch wrapper
try {
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    $response->send();
    $kernel->terminate($request, $response);
} catch (\Throwable $e) {
    echo '<h1>Captured Boot Error:</h1>';
    echo '<p><b>Message:</b> ' . $e->getMessage() . '</p>';
    echo '<p><b>File:</b> ' . $e->getFile() . ' on line ' . $e->getLine() . '</p>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
