<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true)); // Menyiapkan kebutuhan awal Laravel.

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php'; // Memuat library/package yang dibutuhkan Laravel.

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php'; //Menyiapkan aplikasi Laravel.

$app->handleRequest(Request::capture()); // Menerima request dari pengguna dan meminta Laravel untuk memprosesnya.
