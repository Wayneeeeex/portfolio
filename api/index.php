<?php

// 1. Force error visibility
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Set absolute serverless paths
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

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

// 3. Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 4. Clean Boot
$app = require __DIR__ . '/../bootstrap/app.php';

// 5. Hot-fix: Explicitly register View factory paths for serverless isolation
$app->singleton('view', function ($app) {
    $factory = new \Illuminate\View\Factory(
        $app['view.engine.resolver'],
        $app['view.finder'],
        $app['events']
    );
    $factory->setContainer($app);
    $factory->share('app', $app);
    return $factory;
});

// 6. Handle Request Lifecycle
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);
