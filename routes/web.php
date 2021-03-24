<?php

use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;


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
    return view('home');
});

Route::post('/save_value',[CreateController::class, 'save' ]);

route::get('/',[DisplayController::class, 'display']);

route::get('delete/{id}', [DeleteController::class, 'delete']);

route::get('update/{id}',[UpdateController::class,'update_form']);

route::post('/save_updated_value',[UpdateController::class, 'update_value']);

