<?php

use App\Http\Controllers\TaskController;
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
Route::get('index', [TaskController::class,'select'] );
Route::get('/add', [TaskController::class,'Add'] );
Route::post('/addTask', [TaskController::class,'AddTask'] );
Route::get('/delete/{id}', [TaskController::class,'deleteTask'] );
Route::get('/updatetask/{id}', [TaskController::class,'updatetask'] );
Route::post('/actionupdate/{id}', [TaskController::class,'actionupdate'] );
Route::get('/filtrer', [TaskController::class,'filtrer'] );