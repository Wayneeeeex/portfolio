<?php

// 1. Setup writeable paths inside Vercel's volatile allocation
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

// 2. Set environment parameters
$_ENV['APP_STORAGE'] = $storagePath;
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['LOG_CHANNEL'] = 'stderr';

// 3. Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 4. Boot App and Overwrite core operational pathing
$app = require __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath($storagePath);
$app->bootstrapWith([
    \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
    \Illuminate\Foundation\Bootstrap\LoadConfiguration::class,
    \Illuminate\Foundation\Bootstrap\HandleExceptions::class,
    \Illuminate\Foundation\Bootstrap\RegisterProviders::class,
    \Illuminate\Foundation\Bootstrap\BootProviders::class,
]);

$app->bind('path.bootstrap', function () use ($cachePath) {
    return dirname($cachePath);
});

$app->afterResolving('view', function ($view) {
    $view->addLocation(realpath(__DIR__ . '/../resources/views'));
});

// 5. Run Kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);
