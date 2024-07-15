<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});

// routes/web.php

Route::get('/products', 'ProductController@index'); // Display all products
Route::get('/products/{id}/edit', 'ProductController@edit'); // Edit product form
Route::put('/products/{id}', 'ProductController@update'); // Update product

Route::get('/products', 'UserProductsController@index')->name('products');
Route::get('/products', 'UserProductsController@index')->name('products');
