<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ProductController;
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
});

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware('auth')->group(function (){
    Route::post('/admin/main', [mainController::class, 'index'])->name('admin');//name :tên router
    Route::prefix('admin')->group(function (){
        Route::get('/', [MainController::class, 'index']);
        Route::get('/main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function ()
        {
            Route::get('add', [MenuController::class, 'create'])->name('admin/menus/add');
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index'])->name('admin/menus/list');
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy'])->name('admin/menus/destroy');
        });

        #Menu
        Route::prefix('products')->group(function ()
        {
            Route::get('add', [ProductController::class, 'create'])->name('admin/products/add');
            Route::post('add', [ProductController::class, 'store']);
            Route::get('/', [ProductController::class, 'index'])->name('admin/products');
            Route::get('list', [ProductController::class, 'index'])->name('admin/products/list');
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy'])->name('admin/products/destroy');
        });

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);
    });


});

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('danh-muc/{id}-{slug}.html', [\App\Http\Controllers\MenuController::class, 'index']);
