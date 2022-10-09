<?php

use App\Http\Controllers\Test\TestComponentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


if (env('APP_ENV') == 'local') {
    Route::middleware(['auth'])->prefix('test-component')->name('test-component.')->namespace('App\Http\Controllers\Test')->group(function () {
        Route::get('input', [TestComponentController::class, 'input'])->name('input');
        Route::get('button', [TestComponentController::class, 'button'])->name('button');
        Route::get('table', [TestComponentController::class, 'table'])->name('table');
        Route::get('modal', [TestComponentController::class, 'modal'])->name('modal');
        Route::get('card', [TestComponentController::class, 'card'])->name('card');
        Route::get('breadcumb', [TestComponentController::class, 'breadcumb'])->name('breadcumb');
        Route::get('test-toast', [TestComponentController::class, 'test_toast'])->name('test-toast');
        Route::get('test-validate', [TestComponentController::class, 'test_validate'])->name('test-validate');
    });
}
