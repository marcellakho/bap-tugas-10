<?php

use App\Http\Controllers\mahasiswaController;
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

Route::controller(mahasiswaController ::class)->group(function () {
Route::get('/mahasiswa/{id}', 'show');
Route::post('/mahasiswa', 'store');
Route::get('/mahasiswa', 'create');
Route::delete('/mahasiswa/{id}', 'destroy');
Route::get('/mahasiswa/{id}', 'edit');
Route::put('/mahasiswa/{id}', 'update');
Route::get('/mahasiswa', 'index');
Route::get('/profile', 'profile');

});
