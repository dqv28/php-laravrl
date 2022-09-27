<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostController::class, 'index']);
// Route::get('products', [
//     ProductsController::class,
//     'index'
// ])->name('products');
//how to validate "id only integer"
// Route::get('products/{productName}/{id}', [
//     ProductsController::class,
//     'detail'
// ])->where([
//     'productName' => '[a-zA-Z0-9]+',
//     'id' => '[0-9]+'
// ]);
//What about string pattern
//[a-zA-Z]+

// Route::get('products/{productName}', [
//     ProductsController::class,
//     'detail'
// ]);

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

// Route::get('/', function () {
//     return view('home'); //Response view
//     // return env('MY_NAME');
// });

// Route::get('/user', function () {
//     return "This is user page"; //Response string
// });

// Route::get('/foods', function () {
//     return ['sushi', 'sashimi', 'tofu']; //Response an array
// });

// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'Vuong',
//         'age' => 18,
//     ]);
// });

// //Redirect
// Route::get('/something', function () {
//     return redirect('/');
// });
