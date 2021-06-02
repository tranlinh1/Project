<?php

use Illuminate\Support\Facades\Route;
// customer
use App\Http\Controllers\Top;
use App\Http\Controllers\Shop;
// admin
use App\Http\Controllers\admin\TopAdmin;


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


Route::get('/', [Top::class, 'index']);
Route::get('shop', [Shop::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/', [TopAdmin::class, 'index']);
    Route::get('login', [TopAdmin::class, 'login']);
});