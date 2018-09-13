<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('admin')->group(function () {
    Route::resource ('category', 'CategoryController', [
        'except' => 'show'
    ]);
});

//Le groupe  servira plus tard quand à ajouter d’autres routes
Route::middleware('auth')->group(function () {
    Route::resource('image', 'ImageController', [
        'only' => ['create', 'store', 'destroy']
    ]);
});

//affichage par catégorie
Route::name('category')->get('category/{slug}', 'ImageController@category');

Route::get('/install', function(){
    Artisan::call('migrate:fresh',[
        '--seed' => true,
        '--force' => true,
    ]);
    echo 'ok';
});