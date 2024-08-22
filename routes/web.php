<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExportController;

Route::get('/', [PageController::class, 'index']);

Route::get('case/view/{uniqueURL}', [PageController::class, 'viewCase']);

Route::get('login', function () {
    return view('pages.login', [
        'title' => 'Login'
    ]);
})->name('login')->middleware('guest');

Route::get('/{page}', [PageController::class, 'page']);
Route::get('services/{page}', [PageController::class, 'services']);

Route::prefix('services')->group(function () {
    Route::prefix('mass-tort')->group(function () {
        Route::get('{page}', [PageController::class, 'massTort']);
    });
});

Route::prefix('func')->group(function () {
    Route::prefix('auth')->controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::get('logout', 'logout');
    });

    Route::prefix('contact')->controller(ContactController::class)->group(function () {
        Route::post('submit', 'add');
    });

    Route::prefix('case')->controller(CasesController::class)->group(function () {
        Route::post('add', 'add');
    });

    Route::prefix('certificate')->controller(CertificateController::class)->group(function () {
        Route::post('claim', 'claim');
        Route::post('/update-status/{status}', 'updateStatus');
    });

    Route::prefix('export')->controller(ExportController::class)->group(function () {
        Route::get('cases', 'cases');
    });
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::controller(AdminDashboardController::class)->prefix('admin')->group(function () {
        Route::get('{page}', 'pages');
    });
});
