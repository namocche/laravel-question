<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Middleware\FirstMiddleware;


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post'])->middleware(FirstMiddleware::class);

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
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return 'test';
// });

// Route::get('/{text?}', function ($text = "なも") {
//     return $text . "が表示されます";
// });