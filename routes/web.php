<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidateAdminUser;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FlightsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\StoreController;


/** Store Pages  */
Route::get('/{url_key?}', [StoreController::class, 'index'])->name('home');
Route::get('/vuelos/{product_url?}', [StoreController::class, 'product'])->name('products');


Route::get('/quienes-somos', function () {
    return view('store.pages.about');
})->name('about');


Route::prefix('admin')->group(function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        ValidateAdminUser::class
    ])->group(function () {
        /*** DASHBOARD */
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        /** Users */

        Route::prefix('usuarios')->group(function () {
            Route::get('/', [UserController::class, 'show'])->name('users');
            Route::get('/registrar', [UserController::class, 'register'])->name('user.register');
            Route::post('/save', [UserController::class, 'save'])->name('user.create');
            Route::get('/{user}', [UserController::class, 'edit'])->name('user.edit');
            Route::get('/update/{user}', [UserController::class, 'update'])->name('user.update');
        });

        //overwrites default jetstream path
        Route::get('/mi-perfil', [UserProfileController::class, 'show'])->name('profile.show');
        /** Products */
        Route::prefix('vuelos')->group(function () {
            Route::name('flights.')->group(function () {
                Route::get('/', [FlightsController::class, 'show'])->name('index');
                Route::get('/registrar', [FlightsController::class, 'register'])->name('register');
                Route::post('/save', [FlightsController::class, 'save'])->name('create');
                Route::get('/edit/{flight}', [FlightsController::class, 'edit'])->name('edit');
                Route::post('/update/{flight}', [FlightsController::class, 'update'])->name('update');
                Route::post('/update-photos/{flight}', [FlightsController::class, 'updatePhotos'])->name('update-photos');
            });
        });



        /** Products */
        Route::prefix('categorias')->group(function () {
            Route::name('categories.')->group(function () {
                Route::get('/', [CategoryController::class, 'show'])->name('index');
            });
        });
    });
});


Auth::routes();
