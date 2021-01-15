<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddDataController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('admin');
})->name('admin');

Route::get(
    '/datainfo/all/{id}',
    [AddDataController::class,'showOneMasterie']
)->name('datainfo-id');

Route::get(
    '/datainfo/all/{id}/update',
    [AddDataController::class,'updateMasterie']
)->name('datainfo-update');

Route::post(
    '/datainfo/all/{id}/update',
    [AddDataController::class,'updateMasterieSubmit']
)->name('datainfo-update-submit');

Route::get(
    '/datainfo/all/{id}/delete',
    [AddDataController::class,'deleteMasterie']
)->name('datainfo-delete');


Route::get('/datainfo/all', [AddDataController::class,'allData'])->name('datainfo');

//Route::get('/admin', function () {
//    return view('admin');
//});

Route::get('/add', function () {
    return view('add');
})->name('add');

//Route::post('/add/submit', function () {
//    dd(Request::all());
//})->name('add-form');

Route::post('/add/submit', [AddDataController::class,'submit'])->name('add-form');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
