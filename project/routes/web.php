<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\StudentsController;


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

Route::get('/', [NewsController::class,'index']);

//Single get varialbe
Route::get('/news/{category?}', [NewsController::class,'news']);

//Multiple get variables
Route::get('/do/{var1}/{var2}', [NewsController::class,'do']);

//Single controller - named route
Route::get('/hello', HelloController::class)->name('hello')->middleware('cookie_exists');

Route::get('/students/index', [StudentsController::class, 'index']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::get('/students/{student}', [StudentsController::class, 'show']);
Route::post('/students/store', [StudentsController::class, 'store']);