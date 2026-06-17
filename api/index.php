<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Clear stale bootstrap cache before booting on Vercel
|--------------------------------------------------------------------------
|
| The bootstrap/cache/services.php and packages.php files may contain
| hardcoded paths from a developer's local machine. On Vercel's serverless
| Linux environment these paths don't exist, causing "Target class [view]
| does not exist". We delete and copy them to /tmp so Laravel regenerates
| them fresh in this environment.
|
*/
$cacheDir = __DIR__ . '/../bootstrap/cache';
$tmpCacheDir = '/tmp/laravel-cache';

if (!is_dir($tmpCacheDir)) {
    mkdir($tmpCacheDir, 0777, true);
}

// Delete stale cache files that contain hardcoded local paths
foreach (['services.php', 'packages.php', 'config.php', 'routes-v7.php'] as $cacheFile) {
    $src = $cacheDir . '/' . $cacheFile;
    if (file_exists($src)) {
        @unlink($src);
    }
}

$app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Pre-flight adjustments for Vercel
|--------------------------------------------------------------------------
|
| Vercel's serverless environment has a read-only filesystem except for /tmp.
| We need to ensure Laravel uses /tmp for compiled views and storage.
|
*/

$storagePath = '/tmp/storage';
$bootstrapCachePath = '/tmp/bootstrap/cache';

if (!is_dir($bootstrapCachePath)) {
    mkdir($bootstrapCachePath, 0777, true);
}

if (!is_dir($storagePath)) {
    mkdir($storagePath, 0777, true);
    mkdir($storagePath.'/framework/views', 0777, true);
    mkdir($storagePath.'/framework/cache', 0777, true);
    mkdir($storagePath.'/framework/sessions', 0777, true);
    mkdir($storagePath.'/logs', 0777, true);
}

$app->useStoragePath($storagePath);

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
