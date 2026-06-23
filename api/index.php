<?php

// 1. Force absolute on-screen raw error rendering
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Set absolute serverless storage paths
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['APP_DEBUG'] = 'true'; // Force Laravel debug mode on

$paths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/bootstrap/cache'
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// 3. Include Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 4. Boot App
$app = require __DIR__ . '/../bootstrap/app.php';

// 5. Force View Locations
$app->afterResolving('view', function ($view) {
    $view->addLocation(realpath(__DIR__ . '/../resources/views'));
});

$app->bind('view.compiled', function () {
    return '/tmp/storage/framework/views';
});

// 6. Run Kernel safely with raw try-catch wrapper
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
