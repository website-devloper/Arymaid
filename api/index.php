<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

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
