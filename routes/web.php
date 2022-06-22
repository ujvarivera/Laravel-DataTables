<?php

use App\Http\Controllers\ProductsApiController;
use App\Http\Controllers\UserController;
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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/products', [ProductsApiController::class, 'index'])->name('products.index');

Route::get('/{menu}', function($menu) {
    if (in_array($menu, config('menu')['menus'])) {
        return view('menu_demo', ['menu' => $menu]);
    }
    else {
        //abort(404);
        return redirect('/dashboard');
    }
});


